<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Biens;
use App\Models\Demande;
use Illuminate\View\View;

class DemandeController extends Controller
{
    public function index(): View
    {
        $demandes = Demande::latest()->get();
        return view('admin.pages.demande.index', compact('demandes'));
    }

    public function show(Demande $demande): View
    {
        $bien = $demande->bien_titre
            ? Biens::where('titre', $demande->bien_titre)->first()
            : null;

        return view('admin.pages.demande.show', compact('demande', 'bien'));
    }
}
