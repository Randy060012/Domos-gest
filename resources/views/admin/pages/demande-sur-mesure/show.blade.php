@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Demande de {{ $demandeSurMesure->name }}</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.demandes-sur-mesure.index') }}">Demandes</a></li>
                    <li class="breadcrumb-item active">{{ $demandeSurMesure->name }}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Informations du contact</h5></div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless mb-0">
                            <tr>
                                <td class="text-muted w-25">Nom</td>
                                <td class="fw-medium">{{ $demandeSurMesure->name }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Email</td>
                                <td class="fw-medium"><a href="mailto:{{ $demandeSurMesure->email }}">{{ $demandeSurMesure->email }}</a></td>
                            </tr>
                            <tr>
                                <td class="text-muted">Téléphone</td>
                                <td class="fw-medium">{{ $demandeSurMesure->phone }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Date</td>
                                <td class="fw-medium">{{ $demandeSurMesure->created_at->format('d/m/Y à H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="mailto:{{ $demandeSurMesure->email }}" class="btn btn-primary">
                        <i class="ti ti-mail me-1"></i> Répondre par email
                    </a>
                    <a href="{{ route('admin.demandes-sur-mesure.index') }}" class="btn btn-light">
                        <i class="ti ti-arrow-left me-1"></i> Retour
                    </a>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Projet sur mesure</h5></div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless mb-0">
                            <tr>
                                <td class="text-muted w-35">Nature du projet</td>
                                <td class="fw-medium">{{ $demandeSurMesure->nature_projet ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Type de propriété</td>
                                <td class="fw-medium">{{ $demandeSurMesure->type_propriete ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Localisation</td>
                                <td class="fw-medium">{{ $demandeSurMesure->localisation ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Budget max</td>
                                <td class="fw-medium">{{ $demandeSurMesure->budget_max ? number_format($demandeSurMesure->budget_max, 0, ',', ' ') . ' F CFA' : 'Non précisé' }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted">Chambres min</td>
                                <td class="fw-medium">{{ $demandeSurMesure->chambres_min ?? 'Non précisé' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Description du besoin</h5></div>
                    <div class="card-body">
                        <p class="text-muted mb-0">{{ $demandeSurMesure->description ?? 'Aucune description.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
