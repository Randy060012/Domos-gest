<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DemandeSurMesure;
use Illuminate\View\View;

class DemandeSurMesureController extends Controller
{
    public function index(): View
    {
        $demandes = DemandeSurMesure::latest()->get();
        return view('admin.pages.demande-sur-mesure.index', compact('demandes'));
    }

    public function show(DemandeSurMesure $demandeSurMesure): View
    {
        return view('admin.pages.demande-sur-mesure.show', compact('demandeSurMesure'));
    }
}
