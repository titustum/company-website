<?php

namespace Tests\Feature;

use App\Models\PageVisit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Mechanisms\HandleRequests\EndpointResolver;
use Tests\TestCase;

class PageVisitsTest extends TestCase
{
    use RefreshDatabase;

    public function test_page_request_is_recorded(): void
    {
        $this->get('/about')
            ->assertOk();

        $visit = PageVisit::query()->firstOrFail();

        $this->assertSame('about', $visit->path);
        $this->assertSame(now()->toDateString(), $visit->visited_at->toDateString());
        $this->assertNotEmpty($visit->visitor_id);
    }

    public function test_page_visit_records_referer_and_ip(): void
    {
        $this->withServerVariables(['REMOTE_ADDR' => '203.0.113.42'])
            ->withHeader('Referer', 'https://www.google.com/search?q=southendtech')
            ->get('/contact')
            ->assertOk();

        $visit = PageVisit::query()->firstOrFail();

        $this->assertSame('contact', $visit->path);
        $this->assertSame('203.0.113.42', $visit->ip_address);
        $this->assertSame('https://www.google.com/search?q=southendtech', $visit->referer);
    }

    public function test_health_and_livewire_paths_are_not_recorded(): void
    {
        $this->get('/up')->assertOk();
        $this->get('/livewire/preview-file/abc');

        $this->assertSame(0, PageVisit::query()->count());
    }

    public function test_each_visit_carries_a_visitor_identifier(): void
    {
        $this->get('/');
        $this->get('/about');

        $visits = PageVisit::query()->orderBy('id')->get();

        $this->assertCount(2, $visits);
        $this->assertNotEmpty($visits[0]->visitor_id);
        $this->assertNotEmpty($visits[1]->visitor_id);
        $this->assertNotSame($visits[0]->path, $visits[1]->path);
    }

    public function test_post_requests_are_not_recorded(): void
    {
        $this->post(EndpointResolver::updatePath(), ['components' => []])
            ->assertStatus(404);

        $this->assertSame(0, PageVisit::query()->count());
    }
}