@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">{{ $bien->titre }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.produits.index') }}">Produits</a></li>
                    <li class="breadcrumb-item active">{{ $bien->ref }}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3">
                            @if($img = $bien->imagePrincipale())
                            <div class="col-12">
                                <img src="{{ Storage::url($img->image_path) }}" class="img-fluid rounded w-100" style="max-height:400px;object-fit:cover;">
                            </div>
                            @endif
                            @if($bien->images->count() > 1)
                            <div class="col-12">
                                <div class="d-flex gap-2 overflow-auto pb-2">
                                    @foreach($bien->images->where('ordre', '>', 0) as $img)
                                    <img src="{{ Storage::url($img->image_path) }}" class="rounded flex-shrink-0" style="width:100px;height:70px;object-fit:cover;">
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Description</h5></div>
                    <div class="card-body">
                        <p class="text-muted mb-0">{{ $bien->description ?? 'Aucune description.' }}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Caractéristiques techniques</h5></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless mb-0">
                                <tbody>
                                    <tr><td class="text-muted w-25">Type</td><td class="fw-medium">{{ $bien->type ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Surface habitable</td><td class="fw-medium">{{ $bien->surface_habitable ? $bien->surface_habitable . ' m²' : '-' }}</td></tr>
                                    <tr><td class="text-muted">Surface terrain</td><td class="fw-medium">{{ $bien->surface_terrain ? $bien->surface_terrain . ' m²' : '-' }}</td></tr>
                                    <tr><td class="text-muted">Pièces</td><td class="fw-medium">{{ $bien->pieces ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Chambres</td><td class="fw-medium">{{ $bien->chambres ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Salles de bain</td><td class="fw-medium">{{ $bien->salles_bain ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Année construction</td><td class="fw-medium">{{ $bien->annee_construction ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Chauffage</td><td class="fw-medium">{{ $bien->chauffage ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">État</td><td class="fw-medium">{{ $bien->etat ?? '-' }}</td></tr>
                                    <tr><td class="text-muted">Exposition</td><td class="fw-medium">{{ $bien->exposition ?? '-' }}</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @if($bien->prestations->count())
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Prestations</h5></div>
                    <div class="card-body">
                        <div class="row g-2">
                            @foreach($bien->prestations as $p)
                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2 p-2 border rounded">
                                    <i class="ti ti-check text-success"></i>
                                    <span class="fs-sm">{{ $p->prestation }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="badge bg-{{ $bien->statut === 'VENTE' ? 'success' : ($bien->statut === 'LOCATION' ? 'info' : 'warning') }} fs-xs mb-2">{{ $bien->statut }}</span>
                        <h3 class="fw-bold mb-0">{{ number_format($bien->prix, 0, ',', ' ') }} F CFA</h3>
                        @if($bien->honoraires)
                        <small class="text-muted">{{ $bien->honoraires }}</small>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Informations</h5></div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Référence</span>
                            <span class="fw-medium">{{ $bien->ref }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Localisation</span>
                            <span class="fw-medium">{{ $bien->localisation }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Vedette</span>
                            <span class="fw-medium">{!! $bien->en_vedette ? '<i class="ti ti-star-filled text-warning"></i> Oui' : 'Non' !!}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Actif</span>
                            <span class="fw-medium">{!! $bien->est_actif ? '<span class="text-success">Oui</span>' : '<span class="text-danger">Non</span>' !!}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Images</span>
                            <span class="fw-medium">{{ $bien->images->count() }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Fiche technique</span>
                            <span class="fw-medium">
                                @if($bien->fiche_technique)
                                <a href="{{ Storage::url($bien->fiche_technique) }}" target="_blank" class="btn btn-sm btn-soft-primary">
                                    <i class="ti ti-file-text"></i> PDF
                                </a>
                                @else
                                -
                                @endif
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Créé le</span>
                            <span class="fw-medium">{{ $bien->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                </div>

                @if($bien->dpe_classe || $bien->ges_classe)
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Diagnostics</h5></div>
                    <div class="card-body">
                        @if($bien->dpe_classe)
                        <div class="mb-3">
                            <label class="form-label fs-xs text-muted">DPE</label>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-dark fs-sm px-3 py-2">{{ $bien->dpe_classe }}</span>
                                <span>{{ $bien->dpe_valeur }} kWh/m²/an</span>
                            </div>
                        </div>
                        @endif
                        @if($bien->ges_classe)
                        <div>
                            <label class="form-label fs-xs text-muted">GES</label>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-dark fs-sm px-3 py-2">{{ $bien->ges_classe }}</span>
                                <span>{{ $bien->ges_valeur }} kg CO₂/m²/an</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Financier</h5></div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Taxe foncière</span>
                            <span class="fw-medium">{{ $bien->taxe_fonciere ?? '-' }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Charges</span>
                            <span class="fw-medium">{{ $bien->charges_copropriete ?? '-' }}</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Nombre de lots</span>
                            <span class="fw-medium">{{ $bien->nombre_lots ?? '-' }}</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Procédure</span>
                            <span class="fw-medium">{{ $bien->procedure_en_cours ?? '-' }}</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('admin.produits.edit', $bien) }}" class="btn btn-primary flex-fill">
                        <i class="ti ti-edit me-1"></i> Modifier
                    </a>
                    <a href="{{ route('admin.produits.index') }}" class="btn btn-light flex-fill">
                        <i class="ti ti-arrow-left me-1"></i> Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
