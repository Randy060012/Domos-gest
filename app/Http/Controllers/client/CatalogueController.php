<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Biens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biens = Biens::with('images')->where('est_actif', true)->latest()->get()->map(fn($b) => [
            'id'       => $b->id,
            'title'    => $b->titre,
            'price'    => (float) $b->prix,
            'location' => $b->localisation,
            'type'     => $b->type ?? '',
            'status'   => match ($b->statut) { 'VENTE' => 'Vente', 'LOCATION' => 'Location', default => $b->statut },
            'area'     => $b->surface_habitable ?? 0,
            'rooms'    => $b->pieces ?? 0,
            'image'    => ($img = $b->imagePrincipale()) ? Storage::url($img->image_path) : '',
            'desc'     => $b->description ?? '',
        ]);

        return view('client.pages.liste', compact('biens'));
    }

    public function details()
    {
        $bien = Biens::with('images', 'prestations')->findOrFail(request('id'));

        $data = [
            'ref'                 => $bien->ref,
            'titre'               => $bien->titre,
            'prix'                => (float) $bien->prix,
            'honoraires'          => $bien->honoraires ?? '',
            'localisation'        => $bien->localisation,
            'statut'              => $bien->statut,
            'galerie_images'      => $bien->images->map(fn($img) => Storage::url($img->image_path))->values()->toArray(),
            'description'         => $bien->description ?? '',
            'type'                => $bien->type ?? '',
            'surface_habitable'   => $bien->surface_habitable ?? 0,
            'surface_terrain'     => $bien->surface_terrain ?? 0,
            'pieces'              => $bien->pieces ?? 0,
            'chambres'            => $bien->chambres ?? 0,
            'salles_bain'         => $bien->salles_bain ?? 0,
            'annee_construction'  => $bien->annee_construction ?? '',
            'chauffage'           => $bien->chauffage ?? '',
            'etat'                => $bien->etat ?? '',
            'exposition'          => $bien->exposition ?? '',
            'dpe_classe'          => $bien->dpe_classe ?? 'N/A',
            'dpe_valeur'          => $bien->dpe_valeur ?? 0,
            'ges_classe'          => $bien->ges_classe ?? 'N/A',
            'ges_valeur'          => $bien->ges_valeur ?? 0,
            'taxe_fonciere'       => $bien->taxe_fonciere ?? '',
            'charges_copropriete' => $bien->charges_copropriete ?? '',
            'nombre_lots'         => $bien->nombre_lots ?? '',
            'procedure_en_cours'  => $bien->procedure_en_cours ?? '',
            'prestations'         => $bien->prestations->pluck('prestation')->toArray(),
            'fiche_technique'     => $bien->fiche_technique ? Storage::url($bien->fiche_technique) : null,
        ];

        return view('client.pages.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
