<?php

namespace Tests\Feature;

use App\Filament\Resources\CaseStudies\Pages\CreateCaseStudy;
use App\Models\CaseStudy;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CaseStudyResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'email' => 'admin@southendtech.co.ke',
        ]));
    }

    public function test_case_study_can_be_created_with_html_rich_fields(): void
    {
        Livewire::test(CreateCaseStudy::class)
            ->fillForm([
                'slug' => 'test-case-study',
                'title' => 'Test Case Study',
                'client_name' => 'Test Client',
                'short_description' => 'Short description',
                'description' => '<p>Full description</p>',
                'challenge' => '<p>The challenge</p>',
                'approach' => '<p>The approach</p>',
                'solution' => '<p>The solution</p>',
                'implementation' => '<p>The implementation</p>',
                'outcome' => '<p>The outcome</p>',
                'is_published' => true,
                'is_featured' => false,
                'sort_order' => 1,
            ])
            ->call('create')
            ->assertHasNoFormErrors();

        $caseStudy = CaseStudy::query()
            ->where('slug', 'test-case-study')
            ->firstOrFail();

        $this->assertSame('<p>Full description</p>', $caseStudy->description);
        $this->assertSame('<p>The challenge</p>', $caseStudy->challenge);
        $this->assertSame('<p>The approach</p>', $caseStudy->approach);
        $this->assertSame('<p>The solution</p>', $caseStudy->solution);
        $this->assertSame('<p>The implementation</p>', $caseStudy->implementation);
        $this->assertSame('<p>The outcome</p>', $caseStudy->outcome);
    }
}
