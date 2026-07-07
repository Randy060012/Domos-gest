<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Biens;
use App\Models\BiensImages;
use App\Models\BiensPrestations;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BiensController extends Controller
{
    public function index(): View
    {
        $biens = Biens::withCount('images', 'prestations')->latest()->get();
        return view('admin.pages.produits.index', compact('biens'));
    }

    public function show(Biens $bien): View
    {
        $bien->load('images', 'prestations');
        return view('admin.pages.produits.show', compact('bien'));
    }

    public function create(): View
    {
        $last = Biens::where('ref', 'like', 'DOM-%')->orderBy('ref', 'desc')->first();
        $nextRef = $last ? 'DOM-' . str_pad((int)substr($last->ref, 4) + 1, 3, '0', STR_PAD_LEFT) : 'DOM-001';
        return view('admin.pages.produits.form', ['bien' => null, 'nextRef' => $nextRef]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'ref'                => 'nullable|string|max:50|unique:biens,ref',
            'titre'              => 'required|string|max:255',
            'prix'               => 'required|numeric|min:0',
            'honoraires'         => 'nullable|string|max:255',
            'localisation'       => 'required|string|max:255',
            'statut'             => 'required|string|max:50',
            'description'        => 'nullable|string',
            'type'               => 'nullable|string|max:255',
            'surface_habitable'  => 'nullable|integer|min:0',
            'surface_terrain'    => 'nullable|integer|min:0',
            'pieces'             => 'nullable|integer|min:0',
            'chambres'           => 'nullable|integer|min:0',
            'salles_bain'        => 'nullable|integer|min:0',
            'annee_construction' => 'nullable|integer|min:1800|max:2100',
            'chauffage'          => 'nullable|string|max:255',
            'etat'               => 'nullable|string|max:255',
            'exposition'         => 'nullable|string|max:255',
            'dpe_classe'         => 'nullable|string|max:1',
            'dpe_valeur'         => 'nullable|integer|min:0',
            'ges_classe'         => 'nullable|string|max:1',
            'ges_valeur'         => 'nullable|integer|min:0',
            'taxe_fonciere'      => 'nullable|string|max:255',
            'charges_copropriete' => 'nullable|string|max:255',
            'nombre_lots'        => 'nullable|string|max:255',
            'procedure_en_cours' => 'nullable|string|max:255',
            'en_vedette'         => 'nullable|boolean',
            'image_principale'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
            'gallery'            => 'nullable|array|max:6',
            'gallery.*'          => 'image|mimes:jpeg,png,jpg,webp|max:10240',
            'prestations'        => 'nullable|array',
            'prestations.*'      => 'nullable|string|max:255',
            'fiche_technique'    => 'nullable|file|mimes:pdf|max:20480',
        ]);

        $validated['est_actif'] = true;
        $validated['en_vedette'] = $request->boolean('en_vedette');

        if (empty($validated['ref'])) {
            $last = Biens::where('ref', 'like', 'DOM-%')->orderBy('ref', 'desc')->first();
            $validated['ref'] = $last ? 'DOM-' . str_pad((int)substr($last->ref, 4) + 1, 3, '0', STR_PAD_LEFT) : 'DOM-001';
        }

        if ($request->hasFile('fiche_technique')) {
            $validated['fiche_technique'] = $request->file('fiche_technique')->store('biens/fiches', 'public');
        } else {
            unset($validated['fiche_technique']);
        }

        unset($validated['image_principale'], $validated['gallery']);

        $bien = Biens::create($validated);

        if ($request->hasFile('image_principale')) {
            $path = $request->file('image_principale')->store('biens/' . $bien->id, 'public');
            BiensImages::create([
                'bien_id'    => $bien->id,
                'image_path' => $path,
                'ordre'      => 0,
            ]);
        }

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $i => $file) {
                $path = $file->store('biens/' . $bien->id, 'public');
                BiensImages::create([
                    'bien_id'    => $bien->id,
                    'image_path' => $path,
                    'ordre'      => $i + 1,
                ]);
            }
        }

        if (!empty($validated['prestations'])) {
            foreach ($validated['prestations'] as $ordre => $prestation) {
                if (trim($prestation)) {
                    BiensPrestations::create([
                        'bien_id'    => $bien->id,
                        'prestation' => trim($prestation),
                        'ordre'      => $ordre,
                    ]);
                }
            }
        }

        return redirect()->route('admin.produits.index')
            ->with('success', 'Bien créé avec succès.');
    }

    public function edit(Biens $bien): View
    {
        $bien->load('images', 'prestations');
        return view('admin.pages.produits.form', ['bien' => $bien, 'nextRef' => null]);
    }

    public function update(Request $request, Biens $bien): RedirectResponse
    {
        $validated = $request->validate([
            'ref'                => 'nullable|string|max:50|unique:biens,ref,' . $bien->id,
            'titre'              => 'required|string|max:255',
            'prix'               => 'required|numeric|min:0',
            'honoraires'         => 'nullable|string|max:255',
            'localisation'       => 'required|string|max:255',
            'statut'             => 'required|string|max:50',
            'description'        => 'nullable|string',
            'type'               => 'nullable|string|max:255',
            'surface_habitable'  => 'nullable|integer|min:0',
            'surface_terrain'    => 'nullable|integer|min:0',
            'pieces'             => 'nullable|integer|min:0',
            'chambres'           => 'nullable|integer|min:0',
            'salles_bain'        => 'nullable|integer|min:0',
            'annee_construction' => 'nullable|integer|min:1800|max:2100',
            'chauffage'          => 'nullable|string|max:255',
            'etat'               => 'nullable|string|max:255',
            'exposition'         => 'nullable|string|max:255',
            'dpe_classe'         => 'nullable|string|max:1',
            'dpe_valeur'         => 'nullable|integer|min:0',
            'ges_classe'         => 'nullable|string|max:1',
            'ges_valeur'         => 'nullable|integer|min:0',
            'taxe_fonciere'      => 'nullable|string|max:255',
            'charges_copropriete' => 'nullable|string|max:255',
            'nombre_lots'        => 'nullable|string|max:255',
            'procedure_en_cours' => 'nullable|string|max:255',
            'en_vedette'         => 'nullable|boolean',
            'image_principale'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
            'gallery'            => 'nullable|array|max:6',
            'gallery.*'          => 'image|mimes:jpeg,png,jpg,webp|max:10240',
            'prestations'        => 'nullable|array',
            'prestations.*'      => 'nullable|string|max:255',
            'images_supprimees'  => 'nullable|array',
            'images_supprimees.*' => 'integer|exists:biens_images,id',
            'fiche_technique'    => 'nullable|file|mimes:pdf|max:20480',
            'supprimer_fiche'    => 'nullable|boolean',
        ]);

        $validated['en_vedette'] = $request->boolean('en_vedette');
        unset($validated['supprimer_fiche']);

        if ($request->hasFile('fiche_technique')) {
            if ($bien->fiche_technique) {
                Storage::disk('public')->delete($bien->fiche_technique);
            }
            $validated['fiche_technique'] = $request->file('fiche_technique')->store('biens/fiches', 'public');
        } else {
            unset($validated['fiche_technique']);
        }

        if ($request->boolean('supprimer_fiche') && $bien->fiche_technique) {
            Storage::disk('public')->delete($bien->fiche_technique);
            $validated['fiche_technique'] = null;
        }

        unset($validated['image_principale'], $validated['gallery']);

        $bien->update($validated);

        if (!empty($validated['images_supprimees'])) {
            $imagesToDelete = BiensImages::whereIn('id', $validated['images_supprimees'])->get();
            foreach ($imagesToDelete as $img) {
                Storage::disk('public')->delete($img->image_path);
                $img->delete();
            }
        }

        if ($request->hasFile('image_principale')) {
            $currentMain = $bien->images()->where('ordre', 0)->first();
            if ($currentMain) {
                Storage::disk('public')->delete($currentMain->image_path);
                $currentMain->delete();
            }
            $path = $request->file('image_principale')->store('biens/' . $bien->id, 'public');
            $bien->images()->create(['image_path' => $path, 'ordre' => 0]);
        }

        if ($request->hasFile('gallery')) {
            $lastOrdre = $bien->images()->where('ordre', '>', 0)->max('ordre') ?? 0;
            foreach ($request->file('gallery') as $file) {
                $lastOrdre++;
                $path = $file->store('biens/' . $bien->id, 'public');
                $bien->images()->create(['image_path' => $path, 'ordre' => $lastOrdre]);
            }
        }

        $bien->prestations()->delete();
        if (!empty($validated['prestations'])) {
            foreach ($validated['prestations'] as $ordre => $prestation) {
                if (trim($prestation)) {
                    BiensPrestations::create([
                        'bien_id'    => $bien->id,
                        'prestation' => trim($prestation),
                        'ordre'      => $ordre,
                    ]);
                }
            }
        }

        return redirect()->route('admin.produits.index')
            ->with('success', 'Bien mis à jour avec succès.');
    }

    public function toggleActif(Biens $bien): \Illuminate\Http\JsonResponse
    {
        $bien->update(['est_actif' => !$bien->est_actif]);

        return response()->json([
            'success' => true,
            'est_actif' => $bien->est_actif,
            'message' => $bien->est_actif
                ? 'Bien visible sur le site client.'
                : 'Bien masqué sur le site client.',
        ]);
    }

    public function destroy(Biens $bien): RedirectResponse
    {
        foreach ($bien->images as $img) {
            Storage::disk('public')->delete($img->image_path);
        }
        if ($bien->fiche_technique) {
            Storage::disk('public')->delete($bien->fiche_technique);
        }
        $bien->delete();

        return redirect()->route('admin.produits.index')
            ->with('success', 'Bien supprimé avec succès.');
    }

    public function uploadImage(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
        ]);

        $path = $request->file('file')->store('biens/temp', 'public');

        return response()->json([
            'path' => $path,
            'url'  => Storage::disk('public')->url($path),
        ]);
    }

    public function revertImage(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate(['filepond' => 'required|string']);
        Storage::disk('public')->delete($request->filepond);
        return response()->json(['success' => true]);
    }
}
