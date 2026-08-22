<?php

namespace Tests\Feature;

use Livewire\Livewire;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
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
            ->set('message', 'I need help with ODPC registration.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('sent', true);
    }

    public function test_booking_form_validates_and_books(): void
    {
        Livewire::test('pages::book')
            ->set('service', '')
            ->set('date', now()->subDay()->toDateString())
            ->call('book')
            ->assertHasErrors(['name', 'email', 'phone', 'service', 'date', 'slot'])
            ->set('name', 'Jane Wanjiku')
            ->set('email', 'jane@example.co.ke')
            ->set('phone', '+254728223333')
            ->set('service', 'Cybersecurity — Security Assessment')
            ->set('date', now()->addWeek()->toDateString())
            ->set('slot', 'Morning (9:00am – 12:00pm)')
            ->call('book')
            ->assertHasNoErrors()
            ->assertSet('booked', true);
    }

    public function test_careers_filter_narrows_job_listings(): void
    {
        $component = Livewire::test('pages::careers');

        $component->assertSee('Cybersecurity Analyst')
            ->set('filter', 'Engineering')
            ->assertSee('Software Engineer — SETLAB')
            ->assertDontSee('Cybersecurity Analyst');
    }
}
