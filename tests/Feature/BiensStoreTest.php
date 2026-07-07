<?php

namespace Tests\Feature;

use App\Models\Biens;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BiensStoreTest extends TestCase
{
    use RefreshDatabase;

    protected User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->admin = User::factory()->create(['is_admin' => true]);
    }

    public function test_store_creates_bien_with_all_fields(): void
    {
        Storage::fake('public');

        $data = [
            'ref'         => 'DOM-TEST-001',
            'titre'       => 'Test Villa',
            'prix'        => '150000000',
            'localisation' => 'Dakar',
            'statut'      => 'VENTE',
            'description' => 'Belle villa spacieuse',
            'type'        => 'Villa',
            'surface_habitable' => '250',
            'surface_terrain'   => '500',
            'pieces'      => '8',
            'chambres'    => '5',
            'salles_bain' => '3',
            'annee_construction' => '2020',
            'chauffage'   => 'Climatisation',
            'etat'        => 'Neuf',
            'exposition'  => 'Sud',
            'dpe_classe'  => 'A',
            'dpe_valeur'  => '50',
            'ges_classe'  => 'A',
            'ges_valeur'  => '5',
            'taxe_fonciere' => '500 000 F CFA',
            'charges_copropriete' => '50 000 F CFA/mois',
            'nombre_lots' => '10',
            'procedure_en_cours' => 'Non',
            'en_vedette'  => '1',
            'prestations' => ['Piscine', 'Garage', 'Jardin'],
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertRedirect(route('admin.produits.index'));
        $response->assertSessionHas('success');

        $bien = Biens::where('ref', 'DOM-TEST-001')->first();
        $this->assertNotNull($bien);
        $this->assertEquals('Test Villa', $bien->titre);
        $this->assertEquals(150000000, $bien->prix);
        $this->assertEquals('Dakar', $bien->localisation);
        $this->assertEquals('VENTE', $bien->statut);
        $this->assertEquals(5, $bien->chambres);
        $this->assertTrue($bien->en_vedette);
        $this->assertCount(3, $bien->prestations);
    }

    public function test_store_auto_generates_ref_when_empty(): void
    {
        Storage::fake('public');

        $data = [
            'titre'       => 'Sans Réf',
            'prix'        => '50000000',
            'localisation' => 'Thiès',
            'statut'      => 'LOCATION',
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertRedirect(route('admin.produits.index'));

        $bien = Biens::where('titre', 'Sans Réf')->first();
        $this->assertNotNull($bien);
        $this->assertNotNull($bien->ref);
        $this->assertStringStartsWith('DOM-', $bien->ref);
    }

    public function test_store_validates_required_fields(): void
    {
        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), []);

        $response->assertSessionHasErrors(['titre', 'prix', 'localisation', 'statut']);
    }

    public function test_store_accepts_image_and_gallery(): void
    {
        Storage::fake('public');

        $mainImage = UploadedFile::fake()->image('principale.jpg', 800, 600);
        $galleryImages = [
            UploadedFile::fake()->image('gal1.jpg', 400, 300),
            UploadedFile::fake()->image('gal2.jpg', 400, 300),
        ];

        $data = [
            'titre'           => 'Avec Images',
            'prix'            => '100000000',
            'localisation'    => 'Dakar',
            'statut'          => 'VENTE',
            'image_principale' => $mainImage,
            'gallery'         => $galleryImages,
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertRedirect(route('admin.produits.index'));

        $bien = Biens::where('titre', 'Avec Images')->first();
        $this->assertNotNull($bien);
        $this->assertCount(3, $bien->images); // 1 main + 2 gallery
    }

    public function test_store_accepts_pdf_fiche_technique(): void
    {
        Storage::fake('public');

        $pdf = UploadedFile::fake()->create('fiche.pdf', 1024, 'application/pdf');

        $data = [
            'titre'          => 'Avec Fiche PDF',
            'prix'           => '100000000',
            'localisation'   => 'Dakar',
            'statut'         => 'VENTE',
            'fiche_technique' => $pdf,
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertRedirect(route('admin.produits.index'));

        $bien = Biens::where('titre', 'Avec Fiche PDF')->first();
        $this->assertNotNull($bien);
        $this->assertNotNull($bien->fiche_technique);
        Storage::disk('public')->assertExists($bien->fiche_technique);
    }

    public function test_store_rejects_non_image_file(): void
    {
        $badFile = UploadedFile::fake()->create('document.txt', 100, 'text/plain');

        $data = [
            'titre'           => 'Mauvais fichier',
            'prix'            => '100000000',
            'localisation'    => 'Dakar',
            'statut'          => 'VENTE',
            'image_principale' => $badFile,
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertSessionHasErrors('image_principale');
    }

    public function test_store_rejects_empty_prestations(): void
    {
        Storage::fake('public');

        $data = [
            'titre'       => 'Prestations vides',
            'prix'        => '100000000',
            'localisation' => 'Dakar',
            'statut'      => 'VENTE',
            'prestations' => ['', '  ', null],
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertRedirect(route('admin.produits.index'));

        $bien = Biens::where('titre', 'Prestations vides')->first();
        $this->assertNotNull($bien);
        $this->assertCount(0, $bien->prestations);
    }

    public function test_store_rejects_oversized_file(): void
    {
        $bigFile = UploadedFile::fake()->create('large.jpg', 12000, 'image/jpeg');

        $data = [
            'titre'           => 'Fichier trop grand',
            'prix'            => '100000000',
            'localisation'    => 'Dakar',
            'statut'          => 'VENTE',
            'image_principale' => $bigFile,
        ];

        $response = $this->actingAs($this->admin)->post(route('admin.produits.store'), $data);

        $response->assertSessionHasErrors('image_principale');
    }
}
