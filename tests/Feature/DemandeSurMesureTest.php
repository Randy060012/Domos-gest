<?php

namespace Tests\Feature;

use App\Models\DemandeSurMesure;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DemandeSurMesureTest extends TestCase
{
    use RefreshDatabase;

    public function test_client_can_submit_demande_sur_mesure(): void
    {
        $data = [
            'name'          => 'Jean Dupont',
            'email'         => 'jean@example.com',
            'phone'         => '+221 77 123 45 67',
            'nature_projet' => 'Acquisition (Achat)',
            'type_propriete' => 'Villa Contemporaine',
            'localisation'  => 'Dakar',
            'budget_max'    => '200000000',
            'chambres_min'  => '4',
            'description'   => 'Villa avec piscine et vue sur mer',
        ];

        $response = $this->postJson(route('ask.store'), $data);

        $response->assertOk();
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('demande_sur_mesures', [
            'name'  => 'Jean Dupont',
            'email' => 'jean@example.com',
            'budget_max' => 200000000,
        ]);
    }

    public function test_validates_required_fields(): void
    {
        $response = $this->postJson(route('ask.store'), []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email', 'phone']);
    }

    public function test_admin_can_list_demandes(): void
    {
        DemandeSurMesure::create([
            'name'  => 'Client Test',
            'email' => 'client@test.com',
            'phone' => '771234567',
        ]);

        $admin = User::factory()->create(['is_admin' => true]);

        $response = $this->actingAs($admin)->get(route('admin.demandes-sur-mesure.index'));
        $response->assertOk();
        $response->assertSee('Client Test');
    }

    public function test_admin_can_see_demande_detail(): void
    {
        $demande = DemandeSurMesure::create([
            'name'          => 'Détaillé',
            'email'         => 'detail@test.com',
            'phone'         => '771234567',
            'nature_projet' => 'Location',
            'description'   => 'Grande villa avec jardin',
        ]);

        $admin = User::factory()->create(['is_admin' => true]);

        $response = $this->actingAs($admin)->get(route('admin.demandes-sur-mesure.show', $demande));
        $response->assertOk();
        $response->assertSee('Détaillé');
        $response->assertSee('Grande villa avec jardin');
    }
}
