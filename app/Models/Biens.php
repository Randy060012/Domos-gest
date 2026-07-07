<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Biens extends Model
{
    protected $fillable = [
        'ref', 'titre', 'prix', 'honoraires', 'localisation', 'statut',
        'description', 'fiche_technique', 'type', 'surface_habitable', 'surface_terrain',
        'pieces', 'chambres', 'salles_bain', 'annee_construction',
        'chauffage', 'etat', 'exposition', 'dpe_classe', 'dpe_valeur',
        'ges_classe', 'ges_valeur', 'taxe_fonciere', 'charges_copropriete',
        'nombre_lots', 'procedure_en_cours', 'est_actif', 'en_vedette',
    ];

    protected function casts(): array
    {
        return [
            'prix'             => 'decimal:2',
            'surface_habitable' => 'integer',
            'surface_terrain'  => 'integer',
            'pieces'           => 'integer',
            'chambres'         => 'integer',
            'salles_bain'      => 'integer',
            'annee_construction' => 'integer',
            'dpe_valeur'       => 'integer',
            'ges_valeur'       => 'integer',
            'est_actif'        => 'boolean',
            'en_vedette'       => 'boolean',
        ];
    }

    public function images(): HasMany
    {
        return $this->hasMany(BiensImages::class, 'bien_id')->orderBy('ordre');
    }

    public function prestations(): HasMany
    {
        return $this->hasMany(BiensPrestations::class, 'bien_id')->orderBy('ordre');
    }

    public function imagePrincipale(): ?BiensImages
    {
        return $this->images()->where('ordre', 0)->first();
    }
}
