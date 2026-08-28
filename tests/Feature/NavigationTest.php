<?php

namespace Tests\Feature;

use App\Models\Industry;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NavigationTest extends TestCase
{
    use RefreshDatabase;

    private array $service;

    private array $solution;

    private array $industry;

    protected function setUp(): void
    {
        parent::setUp();

        $this->service = Service::create([
            'title' => 'Published Service',
            'slug' => 'published-service',
            'is_published' => true,
            'sort_order' => 1,
        ])->toArray();

        Service::create([
            'title' => 'Draft Service',
            'slug' => 'draft-service',
            'is_published' => false,
            'sort_order' => 2,
        ]);

        $this->solution = Solution::create([
            'title' => 'Published Solution',
            'slug' => 'published-solution',
            'is_published' => true,
            'sort_order' => 1,
        ])->toArray();

        Solution::create([
            'title' => 'Draft Solution',
            'slug' => 'draft-solution',
            'is_published' => false,
            'sort_order' => 2,
        ]);

        $this->industry = Industry::create([
            'title' => 'Published Industry',
            'slug' => 'published-industry',
            'is_published' => true,
            'sort_order' => 1,
        ])->toArray();

        Industry::create([
            'title' => 'Draft Industry',
            'slug' => 'draft-industry',
            'is_published' => false,
            'sort_order' => 2,
        ]);
    }

    public function test_navigation_shows_published_services_solutions_and_industries(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Published Service')
            ->assertSee(route('service.show', $this->service['slug']))
            ->assertSee('Published Solution')
            ->assertSee(route('solution.show', $this->solution['slug']))
            ->assertSee('Published Industry')
            ->assertSee(route('industry.show', $this->industry['slug']))
            ->assertDontSee('Draft Service')
            ->assertDontSee('Draft Solution')
            ->assertDontSee('Draft Industry');
    }

    public function test_navigation_orders_items_by_sort_order(): void
    {
        Service::create([
            'title' => 'First Service',
            'slug' => 'first-service',
            'is_published' => true,
            'sort_order' => 0,
        ]);

        $response = $this->get('/')->assertOk();
        $html = $response->getContent();

        $this->assertLessThan(
            strpos($html, 'Published Service'),
            strpos($html, 'First Service')
        );
    }

    public function test_footer_lists_published_solution_links(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee(route('solution.show', $this->solution['slug']))
            ->assertSee('Published Solution')
            ->assertDontSee('Draft Solution');
    }

    public function test_signup_boxes_use_security_focused_copy(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Stay Ahead of Digital Threats')
            ->assertSee('Get Tech Insights')
            ->assertSee('Kenya Data Protection Act');

        $this->get('/blogs')
            ->assertOk()
            ->assertSee('Stay Ahead of Digital Threats')
            ->assertSee('Get Tech Insights')
            ->assertSee('Kenya Data Protection Act');

        $this->get('/webinars')
            ->assertOk()
            ->assertSee("Don't Miss Our Next Webinar", false)
            ->assertSee('Get Tech Insights')
            ->assertSee('Kenya Data Protection Act');
    }
}
