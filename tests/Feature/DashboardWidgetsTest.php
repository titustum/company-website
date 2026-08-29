<?php

namespace Tests\Feature;

use App\Filament\Widgets\CompanyOverviewStatsWidget;
use App\Filament\Widgets\ConsultationsBookingPerCategoryBarChart;
use App\Filament\Widgets\LatestBookedConsultationsTable;
use App\Filament\Widgets\PageVisitTrendChart;
use App\Models\Consultation;
use App\Models\PageVisit;
use App\Models\Service;
use App\Models\Solution;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class DashboardWidgetsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'email' => 'admin@southendtech.co.ke',
        ]));
    }

    public function test_dashboard_page_renders_widgets(): void
    {
        $this->get('/admin')
            ->assertOk();
    }

    public function test_stats_widget_shows_total_counts(): void
    {
        Solution::factory()->count(2)->create();

        foreach (['Advisory Services', 'Managed Security'] as $index => $title) {
            Service::create([
                'slug' => 'service-'.$index,
                'title' => $title,
            ]);
        }

        Consultation::factory()->count(4)->create();

        Livewire::test(CompanyOverviewStatsWidget::class)
            ->assertSuccessful()
            ->assertSee('Total Consultations')
            ->assertSee('Total Solutions')
            ->assertSee('Total Services')
            ->assertSee('Total Industries');
    }

    public function test_consultations_per_category_chart_renders(): void
    {
        $solution = Solution::factory()->create(['title' => 'Cybersecurity Solutions']);
        Consultation::factory()->count(3)->create(['solution_id' => $solution->id]);

        Livewire::test(ConsultationsBookingPerCategoryBarChart::class)
            ->assertSuccessful();
    }

    public function test_page_visits_trend_chart_renders(): void
    {
        PageVisit::factory()->count(5)->create();

        Livewire::test(PageVisitTrendChart::class)
            ->assertSuccessful();
    }

    public function test_latest_bookings_table_lists_consultations(): void
    {
        $consultation = Consultation::factory()->create([
            'name' => 'Jane Doe',
            'status' => 'confirmed',
        ]);

        Livewire::test(LatestBookedConsultationsTable::class)
            ->assertSuccessful()
            ->assertSee('Latest Bookings')
            ->assertSee('Jane Doe')
            ->assertSee('confirmed')
            ->assertSee('/admin/consultations/'.$consultation->id);
    }
}
