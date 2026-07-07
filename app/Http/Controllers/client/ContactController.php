<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:50',
            'message'    => 'nullable|string',
            'bien_titre' => 'nullable|string|max:255',
        ]);

        Demande::create($validated);

        return response()->json(['success' => true]);
    }
}
