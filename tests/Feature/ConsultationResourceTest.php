<?php

namespace Tests\Feature;

use App\Enums\ConsultationStatus;
use App\Filament\Resources\Consultations\Pages\EditConsultation;
use App\Models\User;
use Database\Factories\ConsultationFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ConsultationResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create([
            'email' => 'admin@southendtech.co.ke',
        ]));
    }

    public function test_consultation_index_page_lists_consultations(): void
    {
        $consultation = ConsultationFactory::new()->create();

        $this->get('/admin/consultations')
            ->assertOk()
            ->assertSee($consultation->reference)
            ->assertSee($consultation->name);
    }

    public function test_consultation_view_page_displays_record(): void
    {
        $consultation = ConsultationFactory::new()->create();

        $this->get("/admin/consultations/{$consultation->id}")
            ->assertOk()
            ->assertSee($consultation->name)
            ->assertSee($consultation->reference);
    }

    public function test_consultation_create_page_renders_form(): void
    {
        $this->get('/admin/consultations/create')
            ->assertOk();
    }

    public function test_consultation_edit_page_renders_form(): void
    {
        $consultation = ConsultationFactory::new()->create();

        $this->get("/admin/consultations/{$consultation->id}/edit")
            ->assertOk();
    }

    public function test_admin_can_update_consultation_status(): void
    {
        $consultation = ConsultationFactory::new()->create();

        Livewire::test(EditConsultation::class, ['record' => $consultation->getKey()])
            ->fillForm([
                'status' => 'confirmed',
            ])
            ->call('save')
            ->assertHasNoFormErrors();

        $this->assertSame(
            ConsultationStatus::Confirmed,
            $consultation->refresh()->status,
        );
    }
}
