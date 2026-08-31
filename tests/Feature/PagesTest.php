<?php

namespace Tests\Feature;

use App\Models\Consultation;
use App\Models\Contact;
use App\Models\Solution;
use App\Models\TeamMember;
use App\Notifications\ConsultationRequestReceived;
use App\Notifications\NewConsultationRequest;
use Database\Seeders\JobOpeningSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public static function pageProvider(): array
    {
        return [
            'home' => ['/'],
            'about' => ['/about'],
            'contact' => ['/contact'],
            'book' => ['/book'],
            'careers' => ['/careers'],
        ];
    }

    #[DataProvider('pageProvider')]
    public function test_pages_render_successfully(string $path): void
    {
        $this->get($path)->assertStatus(200);
    }

    public function test_contact_form_validates_and_submits(): void
    {
        Livewire::test('pages::contact')
            ->set('name', '')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'phone', 'message'])
            ->set('name', 'Jane Wanjiku')
            ->set('email', 'jane@example.co.ke')
            ->set('phone', '+254728223333')
            ->set('subject', 'Data Protection')
            ->set('message', 'I need help with ODPC registration.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('sent', true);

        $contact = Contact::query()->firstOrFail();

        $this->assertSame('Jane Wanjiku', $contact->name);
        $this->assertSame('jane@example.co.ke', $contact->email);
        $this->assertSame('+254728223333', $contact->phone);
        $this->assertSame('Data Protection', $contact->subject);
        $this->assertSame('I need help with ODPC registration.', $contact->message);
    }

    public function test_booking_form_validates_and_books(): void
    {
        Notification::fake();

        $solution = Solution::create([
            'title' => 'Cybersecurity Solutions',
            'slug' => 'cybersecurity-solutions',
            'is_published' => true,
            'sort_order' => 1,
        ]);

        Livewire::test('pages::book')
            ->set('solutionId', '')
            ->set('date', now()->toDateString())
            ->call('book')
            ->assertHasErrors(['name', 'email', 'phone', 'solutionId', 'date', 'slot'])
            ->set('name', 'Jane Wanjiku')
            ->set('email', 'jane@example.co.ke')
            ->set('phone', '+254 728 223 333')
            ->set('solutionId', (string) $solution->id)
            ->set('date', now()->addWeek()->toDateString())
            ->set('slot', 'Morning (9:00am – 12:00pm)')
            ->set('notes', 'Interested in a security assessment.')
            ->call('book')
            ->assertHasNoErrors()
            ->assertSet('lastConsultationName', 'Jane Wanjiku')
            ->assertSet('lastSolutionTitle', 'Cybersecurity Solutions');

        $consultation = Consultation::query()->firstOrFail();

        $this->assertSame($solution->id, $consultation->solution_id);
        $this->assertSame('pending', $consultation->status->value);
        $this->assertSame('+254728223333', $consultation->phone);
        $this->assertSame('CST-2026-0001', $consultation->reference);
        $this->assertSame('Morning (9:00am – 12:00pm)', $consultation->preferred_slot);

        Notification::assertSentTo($consultation, ConsultationRequestReceived::class);
        Notification::assertSentOnDemand(NewConsultationRequest::class);
    }

    public function test_booking_rejects_same_day_dates(): void
    {
        $solution = Solution::create([
            'title' => 'Data Protection & Privacy',
            'slug' => 'data-protection-privacy',
            'is_published' => true,
            'sort_order' => 1,
        ]);

        Livewire::test('pages::book')
            ->set('name', 'Jane Wanjiku')
            ->set('email', 'jane@example.co.ke')
            ->set('phone', '+254728223333')
            ->set('solutionId', (string) $solution->id)
            ->set('date', now()->toDateString())
            ->set('slot', 'Morning (9:00am – 12:00pm)')
            ->call('book')
            ->assertHasErrors(['date']);
    }

    public function test_book_page_lists_solutions_from_database(): void
    {
        Solution::create([
            'title' => 'Data Protection & Privacy',
            'slug' => 'data-protection-privacy',
            'is_published' => true,
            'sort_order' => 1,
        ]);

        Solution::create([
            'title' => 'Draft Solution',
            'slug' => 'draft-solution',
            'is_published' => false,
            'sort_order' => 2,
        ]);

        $this->get('/book')
            ->assertOk()
            ->assertSee('Data Protection & Privacy')
            ->assertDontSee('Draft Solution');
    }

    public function test_team_page_displays_published_member_photos(): void
    {
        $member = TeamMember::factory()->create([
            'name' => 'Grace Njeri',
            'photo' => 'team-members/grace-njeri.png',
            'is_published' => true,
        ]);

        TeamMember::factory()->create([
            'name' => 'Hidden Intern',
            'is_published' => false,
        ]);

        $this->get('/team')
            ->assertOk()
            ->assertSee('Grace Njeri')
            ->assertSee('storage/team-members/grace-njeri.png')
            ->assertDontSee('Hidden Intern');
    }

    public function test_team_page_handles_members_without_photos(): void
    {
        TeamMember::factory()->create([
            'name' => 'Jane Doe',
            'photo' => null,
            'is_published' => true,
        ]);

        $this->get('/team')
            ->assertOk()
            ->assertSee('Jane Doe');
    }

    public function test_careers_filter_narrows_job_listings(): void
    {
        $this->seed(JobOpeningSeeder::class);

        $component = Livewire::test('pages::careers');

        $component->assertSee('Cybersecurity Analyst')
            ->set('filter', 'Engineering')
            ->assertSee('Software Engineer — SETLAB')
            ->assertDontSee('Cybersecurity Analyst');
    }
}
