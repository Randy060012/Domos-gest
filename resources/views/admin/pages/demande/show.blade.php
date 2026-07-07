@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Demande de {{ $demande->name }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.demandes.index') }}">Demandes</a></li>
                    <li class="breadcrumb-item active">{{ $demande->name }}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Informations du contact</h5></div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless mb-0">
                            <tr>
                                <td class="text-muted w-25">Nom</td>
                                <td class="fw-medium">{{ $demande->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Email</td>
                                <td class="fw-medium"><a href="mailto:{{ $demande->email }}">{{ $demande->email }}</a></td>
                            </tr>
                            <tr>
                                <td class="text-muted">Téléphone</td>
                                <td class="fw-medium">{{ $demande->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Date</td>
                                <td class="fw-medium">{{ $demande->created_at->format('d/m/Y à H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Message</h5></div>
                    <div class="card-body">
                        <p class="text-muted mb-0">{{ $demande->message ?? 'Aucun message.' }}</p>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="mailto:{{ $demande->email }}" class="btn btn-primary">
                        <i class="ti ti-mail me-1"></i> Répondre par email
                    </a>
                    <a href="{{ route('admin.demandes.index') }}" class="btn btn-light">
                        <i class="ti ti-arrow-left me-1"></i> Retour
                    </a>
                </div>
            </div>

            <div class="col-xl-7">
                @if($bien)
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Bien concerné</h5></div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-5">
                                @if($img = $bien->imagePrincipale())
                                <img src="{{ Storage::url($img->image_path) }}" class="img-fluid rounded border" style="height:200px;width:100%;object-fit:cover;">
                                @else
                                <div class="bg-light rounded d-flex align-items-center justify-content-center border" style="height:200px;">
                                    <i class="ti ti-home fs-1 text-muted"></i>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-7">
                                <h5 class="fw-bold mb-1">
                                    <a href="{{ route('admin.produits.show', $bien) }}" class="link-reset">{{ $bien->titre }}</a>
                                </h5>
                                <span class="badge bg-secondary fs-xxs me-1">{{ $bien->ref }}</span>
                                @switch($bien->statut)
                                @case('VENTE') <span class="badge badge-soft-success fs-xxs">Vente</span> @break
                                @case('LOCATION') <span class="badge badge-soft-info fs-xxs">Location</span> @break
                                @default <span class="badge badge-soft-warning fs-xxs">{{ $bien->statut }}</span>
                                @endswitch

                                <table class="table table-sm table-borderless mt-3 mb-0">
                                    <tr>
                                        <td class="text-muted ps-0">Prix</td>
                                        <td class="fw-bold fs-lg">{{ number_format($bien->prix, 0, ',', ' ') }} F CFA</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted ps-0">Localisation</td>
                                        <td class="fw-medium">{{ $bien->localisation }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted ps-0">Type</td>
                                        <td class="fw-medium">{{ $bien->type ?? '-' }}</td>
                                    </tr>
                                    @if($bien->surface_habitable)
                                    <tr>
                                        <td class="text-muted ps-0">Surface habitable</td>
                                        <td class="fw-medium">{{ $bien->surface_habitable }} m²</td>
                                    </tr>
                                    @endif
                                    @if($bien->pieces)
                                    <tr>
                                        <td class="text-muted ps-0">Pièces</td>
                                        <td class="fw-medium">{{ $bien->pieces }} ({{ $bien->chambres ?? 0 }} ch.)</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <a href="{{ route('admin.produits.show', $bien) }}" class="btn btn-sm btn-soft-primary">
                                <i class="ti ti-eye me-1"></i> Voir le détail complet
                            </a>
                        </div>
                    </div>
                </div>
                @elseif($demande->bien_titre)
                <div class="card">
                    <div class="card-body text-center py-4">
                        <i class="ti ti-home-off fs-1 text-muted mb-2 d-block"></i>
                        <p class="text-muted mb-0">Bien "{{ $demande->bien_titre }}" introuvable (peut-être supprimé).</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
