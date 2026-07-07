<?php

namespace Database\Seeders;

use App\Models\Biens;
use App\Models\BiensImages;
use App\Models\BiensPrestations;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BiensSeeder extends Seeder
{
    private array $biens = [
        [
            'ref' => 'DOM-001',
            'titre' => 'Villa contemporaine avec piscine',
            'prix' => 450000,
            'honoraires' => '5% TTC à charge acquéreur',
            'localisation' => 'Marseille 13008',
            'statut' => 'VENTE',
            'description' => 'Superbe villa contemporaine de 180 m² habitables offrant une vue panoramique sur la mer. Salon traversant avec baies vitrées, cuisine ouverte équipée, 4 chambres dont une suite parentale avec dressing et salle d\'eau. Terrasse de 60 m² avec piscine chauffée et jardin paysager. Garage double et parking visiteur.',
            'type' => 'Villa',
            'surface_habitable' => 180,
            'surface_terrain' => 800,
            'pieces' => 6,
            'chambres' => 4,
            'salles_bain' => 3,
            'annee_construction' => 2020,
            'chauffage' => 'Pompe à chaleur réversible',
            'etat' => 'Neuf',
            'exposition' => 'Sud-Ouest',
            'dpe_classe' => 'A',
            'dpe_valeur' => 45,
            'ges_classe' => 'A',
            'ges_valeur' => 4,
            'taxe_fonciere' => '2 400 F CFA',
            'charges_copropriete' => null,
            'nombre_lots' => null,
            'procedure_en_cours' => 'Non',
            'en_vedette' => true,
            'prestations' => ['Piscine chauffée', 'Climatisation réversible', 'Alarme', 'Portail électrique', 'Cuisine équipée'],
        ],
        [
            'ref' => 'DOM-002',
            'titre' => 'Appartement centre-ville rénové',
            'prix' => 195000,
            'honoraires' => '4% TTC',
            'localisation' => 'Lyon 69002',
            'statut' => 'VENTE',
            'description' => 'Bel appartement haussmannien entièrement rénové au cœur du 2e arrondissement. Proche métro, commerces et écoles. Parquet d\'origine, moulures, cheminée en marbre. Cuisine aménagée et équipée, salle de bain avec douche à l\'italienne. Cave et possibilité de parking en sous-sol.',
            'type' => 'Appartement',
            'surface_habitable' => 72,
            'surface_terrain' => null,
            'pieces' => 3,
            'chambres' => 2,
            'salles_bain' => 1,
            'annee_construction' => 1920,
            'chauffage' => 'Gaz individuel',
            'etat' => 'Rénové',
            'exposition' => 'Est-Ouest',
            'dpe_classe' => 'C',
            'dpe_valeur' => 120,
            'ges_classe' => 'B',
            'ges_valeur' => 15,
            'taxe_fonciere' => '980 F CFA',
            'charges_copropriete' => '120 F CFA/mois',
            'nombre_lots' => '12',
            'procedure_en_cours' => 'Non',
            'en_vedette' => false,
            'prestations' => ['Cave', 'Digicode', 'Interphone', 'Parquet'],
        ],
        [
            'ref' => 'DOM-003',
            'titre' => 'Maison de campagne avec terrain',
            'prix' => 1500,
            'honoraires' => null,
            'localisation' => 'Gordes 84220',
            'statut' => 'LOCATION',
            'description' => 'Charmante maison de campagne en pierre au cœur du Luberon. Rez-de-chaussée : séjour avec cheminée, cuisine indépendante, wc. Étage : 3 chambres, salle de bain. Terrain clos de 2000 m² avec oliviers et vue imprenable sur les montagnes. Idéal pour amoureux de la nature.',
            'type' => 'Maison',
            'surface_habitable' => 120,
            'surface_terrain' => 2000,
            'pieces' => 4,
            'chambres' => 3,
            'salles_bain' => 1,
            'annee_construction' => 1850,
            'chauffage' => 'Cheminée + Poêle à granulés',
            'etat' => 'Bon état',
            'exposition' => 'Sud',
            'dpe_classe' => 'D',
            'dpe_valeur' => 210,
            'ges_classe' => 'C',
            'ges_valeur' => 25,
            'taxe_fonciere' => null,
            'charges_copropriete' => null,
            'nombre_lots' => null,
            'procedure_en_cours' => 'Non',
            'en_vedette' => true,
            'prestations' => ['Cheminée', 'Terrain clos', 'Vue dégagée', 'Cave voûtée'],
        ],
        [
            'ref' => 'DOM-004',
            'titre' => 'Local commercial centre-ville',
            'prix' => 1200,
            'honoraires' => '1 mois HC',
            'localisation' => 'Nice 06000',
            'statut' => 'LOCATION',
            'description' => 'Local commercial de 85 m² en plein cœur de Nice, à 200 m de la Promenade des Anglais. Vitrine de 6 mètres de façade. Idéal pour commerce de détail, agence ou restaurant. Climatisation, double vitrage, accessible PMR. Loyer mensuel charges comprises.',
            'type' => 'Local commercial',
            'surface_habitable' => 85,
            'surface_terrain' => null,
            'pieces' => 2,
            'chambres' => 0,
            'salles_bain' => 1,
            'annee_construction' => 2005,
            'chauffage' => 'Climatisation réversible',
            'etat' => 'Bon état',
            'exposition' => 'Nord',
            'dpe_classe' => 'B',
            'dpe_valeur' => 80,
            'ges_classe' => 'B',
            'ges_valeur' => 12,
            'taxe_fonciere' => null,
            'charges_copropriete' => '200 F CFA/mois',
            'nombre_lots' => '8',
            'procedure_en_cours' => 'Non',
            'en_vedette' => false,
            'prestations' => ['Vitrine 6m', 'Climatisation', 'PMR', 'Double vitrage', 'Vidéosurveillance'],
        ],
        [
            'ref' => 'DOM-005',
            'titre' => 'Penthouse de standing avec terrasse',
            'prix' => 890000,
            'honoraires' => '5% TTC',
            'localisation' => 'Paris 75016',
            'statut' => 'VENTE',
            'description' => 'Exceptionnel penthouse de 150 m² avec terrasse panoramique de 80 m² offrant une vue à 360° sur Paris. Réception de 60 m², cuisine d\'architecte, 3 suites avec dressing et salle de bain privative. Domotique intégrée, prestations de très haut standing. Parking privatif 2 places.',
            'type' => 'Appartement',
            'surface_habitable' => 150,
            'surface_terrain' => null,
            'pieces' => 5,
            'chambres' => 3,
            'salles_bain' => 3,
            'annee_construction' => 2018,
            'chauffage' => 'Pompe à chaleur géothermique',
            'etat' => 'Neuf',
            'exposition' => 'Sud-Est',
            'dpe_classe' => 'A',
            'dpe_valeur' => 38,
            'ges_classe' => 'A',
            'ges_valeur' => 3,
            'taxe_fonciere' => '4 800 F CFA',
            'charges_copropriete' => '450 F CFA/mois',
            'nombre_lots' => '24',
            'procedure_en_cours' => 'Non',
            'en_vedette' => true,
            'prestations' => ['Terrasse 80m²', 'Domotique', 'Parking 2 places', 'Cave', 'Cuisine d\'architecte', 'Home cinéma'],
        ],
        [
            'ref' => 'DOM-006',
            'titre' => 'Terrain constructible viabilisé',
            'prix' => 145000,
            'honoraires' => '3% TTC',
            'localisation' => 'Aix-en-Provence 13100',
            'statut' => 'VENTE',
            'description' => 'Magnifique terrain constructible de 650 m² situé dans un quartier résidentiel calme d\'Aix-en-Provence. Viabilisé (eau, électricité, gaz, fibre). COS de 0.3 permettant une construction de 195 m² maximum. Idéal pour projet de maison individuelle. Proche écoles, commerces et transports.',
            'type' => 'Terrain',
            'surface_habitable' => null,
            'surface_terrain' => 650,
            'pieces' => null,
            'chambres' => null,
            'salles_bain' => null,
            'annee_construction' => null,
            'chauffage' => null,
            'etat' => null,
            'exposition' => 'Sud',
            'dpe_classe' => null,
            'dpe_valeur' => null,
            'ges_classe' => null,
            'ges_valeur' => null,
            'taxe_fonciere' => '350 F CFA',
            'charges_copropriete' => null,
            'nombre_lots' => null,
            'procedure_en_cours' => 'Non',
            'en_vedette' => false,
            'prestations' => ['Viabilisé', 'Fibre optique', 'Clôturé'],
        ],
    ];

    public function run(): void
    {
        Storage::disk('public')->makeDirectory('biens');

        $srcDir = public_path('admin/assets/images/products');
        $destDisk = Storage::disk('public');

        $imgIndex = 1;

        foreach ($this->biens as $data) {
            $prestations = $data['prestations'];
            unset($data['prestations']);

            $bien = Biens::firstOrCreate(['ref' => $data['ref']], $data);

            if ($bien->wasRecentlyCreated === false && $bien->images()->count() > 0) {
                continue;
            }

            $mainFile = sprintf('%02d', $imgIndex) . '.png';
            $srcMain = $srcDir . DIRECTORY_SEPARATOR . $mainFile;
            $destMain = 'biens/' . $mainFile;
            if (file_exists($srcMain) && !$destDisk->exists($destMain)) {
                $destDisk->put($destMain, file_get_contents($srcMain));
            }
            BiensImages::create([
                'bien_id' => $bien->id,
                'image_path' => $destMain,
                'ordre' => 0,
            ]);

            $extraCount = min(3, random_int(1, 4));
            for ($i = 1; $i <= $extraCount; $i++) {
                $imgIndex++;
                $file = sprintf('%02d', $imgIndex) . '.png';
                $src = $srcDir . DIRECTORY_SEPARATOR . $file;
                $dest = 'biens/' . $file;
                if (file_exists($src) && !$destDisk->exists($dest)) {
                    $destDisk->put($dest, file_get_contents($src));
                }
                BiensImages::create([
                    'bien_id' => $bien->id,
                    'image_path' => $dest,
                    'ordre' => $i,
                ]);
            }

            $imgIndex++;

            foreach ($prestations as $ordre => $prestation) {
                BiensPrestations::create([
                    'bien_id' => $bien->id,
                    'prestation' => $prestation,
                    'ordre' => $ordre,
                ]);
            }
        }
    }
}
