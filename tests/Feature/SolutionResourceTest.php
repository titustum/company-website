<?php

namespace Tests\Feature;

use App\Filament\Resources\Solutions\Pages\CreateSolution;
use App\Filament\Resources\Solutions\Pages\EditSolution;
use App\Filament\Resources\Solutions\Pages\ViewSolution;
use App\Models\Solution;
use App\Models\User;
use Database\Factories\SolutionFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class SolutionResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'email' => 'admin@southendtech.co.ke',
        ]));
    }

    public function test_solution_index_page_lists_solutions(): void
    {
        $solution = SolutionFactory::new()->create();

        $this->get('/admin/solutions')
            ->assertOk()
            ->assertSee($solution->title);
    }

    public function test_solution_create_page_renders_form(): void
    {
        $this->get('/admin/solutions/create')
            ->assertOk();
    }

    public function test_solution_can_be_created_with_repeater_json_fields(): void
    {
        Livewire::test(CreateSolution::class)
            ->fillForm([
                'title' => 'Test Solution',
                'slug' => 'test-solution',
                'short_description' => 'Short description',
                'description' => '<p>Long description</p>',
                'features' => [
                    [
                        'title' => 'Feature One',
                        'description' => 'Feature one description',
                        'icon' => 'shield-check-outline',
                    ],
                ],
                'benefits' => [
                    [
                        'title' => 'Benefit One',
                        'description' => 'Benefit one description',
                        'icon' => 'eye-outline',
                    ],
                ],
                'faqs' => [
                    [
                        'question' => 'First question?',
                        'answer' => 'First answer.',
                    ],
                ],
                'is_published' => true,
                'sort_order' => 1,
            ])
            ->call('create')
            ->assertHasNoFormErrors();

        $solution = Solution::query()
            ->where('slug', 'test-solution')
            ->firstOrFail();

        $this->assertSame('<p>Long description</p>', $solution->description);
        $this->assertSame([
            [
                'title' => 'Feature One',
                'description' => 'Feature one description',
                'icon' => 'shield-check-outline',
            ],
        ], $solution->features);
        $this->assertSame([
            [
                'title' => 'Benefit One',
                'description' => 'Benefit one description',
                'icon' => 'eye-outline',
            ],
        ], $solution->benefits);
        $this->assertSame([
            [
                'question' => 'First question?',
                'answer' => 'First answer.',
            ],
        ], $solution->faqs);
    }

    public function test_solution_repeater_json_fields_persist_on_edit(): void
    {
        $solution = SolutionFactory::new()->create();

        Livewire::test(EditSolution::class, ['record' => $solution->getRouteKey()])
            ->fillForm([
                'features' => [
                    [
                        'title' => 'Updated Feature',
                        'description' => 'Updated description',
                        'icon' => 'lock-closed-outline',
                    ],
                ],
                'faqs' => [
                    [
                        'question' => 'Updated question?',
                        'answer' => 'Updated answer.',
                    ],
                ],
            ])
            ->call('save')
            ->assertHasNoFormErrors();

        $solution->refresh();

        $this->assertSame('Updated Feature', $solution->features[0]['title']);
        $this->assertSame('lock-closed-outline', $solution->features[0]['icon']);
        $this->assertSame('Updated question?', $solution->faqs[0]['question']);
    }

    public function test_solution_view_page_renders_repeatable_json_fields(): void
    {
        $solution = SolutionFactory::new()->create([
            'features' => [
                [
                    'title' => 'Feature One',
                    'description' => 'Feature one description',
                    'icon' => 'shield-check-outline',
                ],
            ],
            'benefits' => [
                [
                    'title' => 'Benefit One',
                    'description' => 'Benefit one description',
                    'icon' => 'eye-outline',
                ],
            ],
            'faqs' => [
                [
                    'question' => 'First question?',
                    'answer' => 'First answer.',
                ],
            ],
        ]);

        Livewire::test(ViewSolution::class, ['record' => $solution->getRouteKey()])
            ->assertSuccessful()
            ->assertSee('Feature One')
            ->assertSee('First question?')
            ->assertSee('First answer.');
    }
}
