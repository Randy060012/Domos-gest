<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\DemandeSurMesure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function index()
    {
        return view('client.pages.ask');
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|max:50',
            'nature_projet' => 'nullable|string|max:255',
            'type_propriete' => 'nullable|string|max:255',
            'localisation'  => 'nullable|string|max:255',
            'budget_max'    => 'nullable|numeric|min:0',
            'chambres_min'  => 'nullable|integer|min:0',
            'description'   => 'nullable|string',
        ]);

        DemandeSurMesure::create($validated);

        return response()->json(['success' => true]);
    }
}
