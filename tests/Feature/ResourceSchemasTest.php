<?php

namespace Tests\Feature;

use App\Models\TeamMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class ResourceSchemasTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'email' => 'admin@southendtech.co.ke',
        ]));
    }

    #[DataProvider('createPageUrls')]
    public function test_create_page_renders(string $url): void
    {
        $this->get($url)
            ->assertOk();
    }

    public function test_team_member_list_page_renders(): void
    {
        $this->get('/admin/team-members')
            ->assertOk();
    }

    public function test_team_member_view_page_renders(): void
    {
        $member = TeamMember::factory()->create([
            'name' => 'Test Member',
            'photo' => 'team-members/test-member.png',
        ]);

        $this->get('/admin/team-members/'.$member->id)
            ->assertOk()
            ->assertSee('Test Member');
    }

    public static function createPageUrls(): array
    {
        return [
            'blogs' => ['/admin/blogs/create'],
            'case studies' => ['/admin/case-studies/create'],
            'consultations' => ['/admin/consultations/create'],
            'contacts' => ['/admin/contacts/create'],
            'industries' => ['/admin/industries/create'],
            'job openings' => ['/admin/job-openings/create'],
            'partners' => ['/admin/partners/create'],
            'services' => ['/admin/services/create'],
            'solutions' => ['/admin/solutions/create'],
            'team members' => ['/admin/team-members/create'],
            'testimonials' => ['/admin/testimonials/create'],
            'users' => ['/admin/users/create'],
            'webinar registrations' => ['/admin/webinar-registrations/create'],
            'webinars' => ['/admin/webinars/create'],
        ];
    }
}
