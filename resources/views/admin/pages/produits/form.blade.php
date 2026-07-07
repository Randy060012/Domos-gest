@extends('admin.layouts.master')

@section('contenu')
<div class="container-fluid">
    <div class="page-title-head d-flex align-items-center">
        <div class="flex-grow-1">
            <h4 class="fs-xl fw-bold m-0">{{ $bien ? 'Modifier' : 'Nouveau' }} Bien</h4>
        </div>
        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.produits.index') }}">Produits</a></li>
                <li class="breadcrumb-item active">{{ $bien ? $bien->titre : 'Nouveau' }}</li>
            </ol>
        </div>
    </div>

    <form method="POST" action="{{ $bien ? route('admin.produits.update', $bien) : route('admin.produits.store') }}" class="mt-4" enctype="multipart/form-data">
        @csrf
        @if($bien) @method('PUT') @endif

        @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Des erreurs empêchent l'enregistrement :</strong>
            <ul class="mb-0 mt-1">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Informations générales</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Référence</label>
                                <input type="text" name="ref" class="form-control @error('ref') is-invalid @enderror"
                                    value="{{ old('ref', $bien->ref ?? $nextRef ?? '') }}" placeholder="Auto-généré si vide">
                                @error('ref')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Statut *</label>
                                <select name="statut" class="form-select @error('statut') is-invalid @enderror" required>
                                    <option value="VENTE" {{ old('statut', $bien->statut ?? '') == 'VENTE' ? 'selected' : '' }}>Vente</option>
                                    <option value="LOCATION" {{ old('statut', $bien->statut ?? '') == 'LOCATION' ? 'selected' : '' }}>Location</option>
                                    <option value="EXCLUSIVITÉ" {{ old('statut', $bien->statut ?? '') == 'EXCLUSIVITÉ' ? 'selected' : '' }}>Exclusivité</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Prix * (F CFA)</label>
                                <input type="number" step="0.01" name="prix" class="form-control @error('prix') is-invalid @enderror"
                                    value="{{ old('prix', $bien->prix ?? '') }}" required>
                                @error('prix')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Titre *</label>
                                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror"
                                    value="{{ old('titre', $bien->titre ?? '') }}" required>
                                @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Localisation *</label>
                                <input type="text" name="localisation" class="form-control @error('localisation') is-invalid @enderror"
                                    value="{{ old('localisation', $bien->localisation ?? '') }}" required>
                                @error('localisation')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Honoraires</label>
                                <input type="text" name="honoraires" class="form-control"
                                    value="{{ old('honoraires', $bien->honoraires ?? '') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('description', $bien->description ?? '') }}</textarea>
                                @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Caractéristiques techniques</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Type</label>
                                <input type="text" name="type" class="form-control" value="{{ old('type', $bien->type ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Surface habitable (m²)</label>
                                <input type="number" name="surface_habitable" class="form-control" value="{{ old('surface_habitable', $bien->surface_habitable ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Surface terrain (m²)</label>
                                <input type="number" name="surface_terrain" class="form-control" value="{{ old('surface_terrain', $bien->surface_terrain ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Pièces</label>
                                <input type="number" name="pieces" class="form-control" value="{{ old('pieces', $bien->pieces ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Chambres</label>
                                <input type="number" name="chambres" class="form-control" value="{{ old('chambres', $bien->chambres ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Salles de bain</label>
                                <input type="number" name="salles_bain" class="form-control" value="{{ old('salles_bain', $bien->salles_bain ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Année construction</label>
                                <input type="number" name="annee_construction" class="form-control" value="{{ old('annee_construction', $bien->annee_construction ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Chauffage</label>
                                <input type="text" name="chauffage" class="form-control" value="{{ old('chauffage', $bien->chauffage ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">État</label>
                                <input type="text" name="etat" class="form-control" value="{{ old('etat', $bien->etat ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Exposition</label>
                                <input type="text" name="exposition" class="form-control" value="{{ old('exposition', $bien->exposition ?? '') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Diagnostics énergétiques</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Classe DPE</label>
                                <select name="dpe_classe" class="form-select">
                                    <option value="">--</option>
                                    @foreach(['A','B','C','D','E','F','G'] as $c)
                                    <option value="{{ $c }}" {{ old('dpe_classe', $bien->dpe_classe ?? '') == $c ? 'selected' : '' }}>{{ $c }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Valeur DPE (kWh/m²/an)</label>
                                <input type="number" name="dpe_valeur" class="form-control" value="{{ old('dpe_valeur', $bien->dpe_valeur ?? '') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Classe GES</label>
                                <select name="ges_classe" class="form-select">
                                    <option value="">--</option>
                                    @foreach(['A','B','C','D','E','F','G'] as $c)
                                    <option value="{{ $c }}" {{ old('ges_classe', $bien->ges_classe ?? '') == $c ? 'selected' : '' }}>{{ $c }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Valeur GES (kg CO₂/m²/an)</label>
                                <input type="number" name="ges_valeur" class="form-control" value="{{ old('ges_valeur', $bien->ges_valeur ?? '') }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Données financières</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Taxe foncière</label>
                                <input type="text" name="taxe_fonciere" class="form-control" value="{{ old('taxe_fonciere', $bien->taxe_fonciere ?? '') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Charges copropriété</label>
                                <input type="text" name="charges_copropriete" class="form-control" value="{{ old('charges_copropriete', $bien->charges_copropriete ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Nombre de lots</label>
                                <input type="text" name="nombre_lots" class="form-control" value="{{ old('nombre_lots', $bien->nombre_lots ?? '') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Procédure en cours</label>
                                <input type="text" name="procedure_en_cours" class="form-control" value="{{ old('procedure_en_cours', $bien->procedure_en_cours ?? '') }}">
                            </div>
                            <div class="col-md-4 d-flex align-items-center pt-4">
                                <div class="form-check">
                                    <input type="checkbox" name="en_vedette" value="1" class="form-check-input" id="enVedette"
                                        {{ old('en_vedette', $bien->en_vedette ?? false) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="enVedette">Mettre en vedette</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image principale</h5>
                    </div>
                    <div class="card-body">
                        <div class="drop-zone border-2 border-dashed border-secondary rounded-3 p-4 text-center" id="drop-main" style="cursor:pointer;">
                            <i class="ti ti-photo-plus fs-2 text-muted mb-2 d-block"></i>
                            <span class="text-muted fs-xs">Cliquez ou déposez l'image principale ici</span>
                            <input type="file" name="image_principale" accept="image/jpeg,image/png,image/webp" class="d-none">
                        </div>
                        <div id="preview-main" class="mt-2 text-center @if(!$bien || !$bien->imagePrincipale()) d-none @endif">
                            <img src="{{ $bien && ($m = $bien->imagePrincipale()) ? Storage::url($m->image_path) : '' }}" class="img-fluid rounded border" style="max-height:200px;object-fit:contain;">
                            <button type="button" class="btn btn-sm btn-outline-danger mt-2" onclick="removeMainImage()"><i class="ti ti-trash me-1"></i>Supprimer</button>
                        </div>
                        <div class="text-muted fs-xs mt-2">Formats: JPEG, PNG, WebP — Max 10 Mo</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Images supplémentaires</h5>
                    </div>
                    <div class="card-body">
                        <div class="drop-zone border-2 border-dashed border-secondary rounded-3 p-4 text-center" id="drop-gallery" style="cursor:pointer;">
                            <i class="ti ti-photo-plus fs-2 text-muted mb-2 d-block"></i>
                            <span class="text-muted fs-xs">Cliquez ou déposez les images ici (max 6)</span>
                            <input type="file" name="gallery[]" multiple accept="image/jpeg,image/png,image/webp" class="d-none">
                        </div>
                        <div id="preview-gallery" class="row g-2 mt-2"></div>
                        @if($bien && $bien->images()->where('ordre', '>', 0)->count())
                        <div class="mt-3">
                            <label class="form-label">Images existantes</label>
                            <div class="row g-2" id="existing-images">
                                @foreach($bien->images()->where('ordre', '>', 0)->orderBy('ordre')->get() as $img)
                                <div class="col-6" data-img-id="{{ $img->id }}">
                                    <div class="position-relative border rounded overflow-hidden">
                                        <img src="{{ Storage::url($img->image_path) }}" class="w-100" style="height:100px;object-fit:cover;">
                                        <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1"
                                            onclick="removeExistingImage({{ $img->id }}, this)">
                                            <i class="ti ti-x"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="text-muted fs-xs mt-2">Formats: JPEG, PNG, WebP — Max 10 Mo par image — Max 6 fichiers</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Fiche technique PDF</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" name="fiche_technique" class="form-control @error('fiche_technique') is-invalid @enderror" accept="application/pdf">
                        @error('fiche_technique')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        @if($bien && $bien->fiche_technique)
                        <div class="mt-2 d-flex align-items-center gap-2">
                            <a href="{{ Storage::url($bien->fiche_technique) }}" target="_blank" class="btn btn-sm btn-soft-primary">
                                <i class="ti ti-file-text me-1"></i> Voir la fiche actuelle
                            </a>
                            <label class="form-check-label fs-xs text-muted">
                                <input type="checkbox" name="supprimer_fiche" value="1" class="form-check-input me-1"> Supprimer
                            </label>
                        </div>
                        @endif
                        <div class="text-muted fs-xs mt-2">Format: PDF — Max 20 Mo</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Prestations</h5>
                        <button type="button" class="btn btn-sm btn-soft-secondary" onclick="addPrestation()">
                            <i class="ti ti-plus"></i> Ajouter
                        </button>
                    </div>
                    <div class="card-body" id="prestations-container">
                        @php
                        $prestations = old('prestations', $bien ? $bien->prestations->pluck('prestation')->toArray() : ['']);
                        @endphp
                        @forelse($prestations as $prest)
                        <div class="input-group mb-2 prestation-row">
                            <input type="text" name="prestations[]" class="form-control" value="{{ $prest }}" placeholder="Ex: Piscine chauffée">
                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.prestation-row').remove()">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        @empty
                        <div class="input-group mb-2 prestation-row">
                            <input type="text" name="prestations[]" class="form-control" placeholder="Ex: Piscine chauffée">
                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.prestation-row').remove()">
                                <i class="ti ti-x"></i>
                            </button>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary fw-bold py-2 px-4">
                    {{ $bien ? 'Mettre à jour' : 'Créer le bien' }}
                </button>
                <a href="{{ route('admin.produits.index') }}" class="btn btn-light py-2 px-4">Annuler</a>
            </div>
        </div>
    </form>
</div>
@endsection

@push('styles')
<style>
    .drop-zone:hover,
    .drop-zone.dragover {
        border-color: #012C4E !important;
        background-color: #f0f4f8;
    }
    .preview-img {
        width: 100%;
        height: 100px;
        object-fit: cover;
        border-radius: 0.375rem;
    }
    .preview-item {
        position: relative;
    }
    .preview-item .btn-remove {
        position: absolute;
        top: 4px;
        right: 4px;
        width: 24px;
        height: 24px;
        padding: 0;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }
</style>
@endpush

@push('scripts')
<script>
    // --- Gallery : tableau persistant (source de vérité) ---
    const galleryInput = document.querySelector('#drop-gallery input[type=file]');
    let galleryFiles = Array.from(galleryInput.files);

    function syncGalleryInput() {
        const dt = new DataTransfer();
        for (const f of galleryFiles) dt.items.add(f);
        galleryInput.files = dt.files;
    }

    function addGalleryFiles(newFiles) {
        for (const f of newFiles) {
            if (galleryFiles.length >= 6) break;
            galleryFiles.push(f);
        }
        syncGalleryInput();
        renderGalleryPreviews();
    }

    function removeGalleryFile(index) {
        galleryFiles.splice(index, 1);
        syncGalleryInput();
        renderGalleryPreviews();
    }

    // --- Drop zones + file pickers ---
    document.querySelectorAll('.drop-zone').forEach(zone => {
        const input = zone.querySelector('input[type=file]');
        zone.addEventListener('click', () => input.click());
        zone.addEventListener('dragover', e => { e.preventDefault(); zone.classList.add('dragover'); });
        zone.addEventListener('dragleave', () => zone.classList.remove('dragover'));
        zone.addEventListener('drop', e => {
            e.preventDefault();
            zone.classList.remove('dragover');
            if (input.multiple) {
                addGalleryFiles(e.dataTransfer.files);
            } else {
                previewMainFile(e.dataTransfer.files[0]);
                input.files = e.dataTransfer.files;
            }
        });
        input.addEventListener('change', () => {
            if (input.multiple) {
                addGalleryFiles(input.files);
            } else {
                previewMainFile(input.files[0]);
            }
        });
    });

    // --- Main image preview ---
    function previewMainFile(file) {
        if (!file) return;
        const el = document.getElementById('preview-main');
        el.classList.remove('d-none');
        el.querySelector('img').src = URL.createObjectURL(file);
        mainImageDeleted = false;
    }

    function removeMainImage() {
        const el = document.getElementById('preview-main');
        el.classList.add('d-none');
        el.querySelector('img').src = '';
        document.querySelector('#drop-main input').value = '';
    }

    // --- Gallery preview ---
    function renderGalleryPreviews() {
        const container = document.getElementById('preview-gallery');
        container.innerHTML = '';
        galleryFiles.forEach((file, i) => {
            const col = document.createElement('div');
            col.className = 'col-4';
            col.innerHTML = `<div class="preview-item position-relative">
                <img src="${URL.createObjectURL(file)}" class="preview-img">
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-1" onclick="removeGalleryFile(${i})">
                    <i class="ti ti-x"></i>
                </button>
            </div>`;
            container.appendChild(col);
        });
    }

    // --- Existing image removal (edit mode) ---
    function removeExistingImage(id, btn) {
        if (!confirm('Supprimer cette image ?')) return;
        btn.closest('[data-img-id]').remove();
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'images_supprimees[]';
        input.value = id;
        document.querySelector('form').appendChild(input);
    }

    // --- Prestation ---
    function addPrestation() {
        const container = document.getElementById('prestations-container');
        const div = document.createElement('div');
        div.className = 'input-group mb-2 prestation-row';
        div.innerHTML = `
        <input type="text" name="prestations[]" class="form-control" placeholder="Ex: Piscine chauffée">
        <button type="button" class="btn btn-outline-danger" onclick="this.closest('.prestation-row').remove()">
            <i class="ti ti-x"></i>
        </button>`;
        container.appendChild(div);
        div.querySelector('input').focus();
    }
</script>
@endpush
