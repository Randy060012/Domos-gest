<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Biens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
            'desc'     => \Illuminate\Support\Str::limit($b->description ?? '', 120),
            'isRecent' => $b->created_at->diffInDays(now()) < 30,
        ]);

        return view('client.pages.home', compact('biens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
