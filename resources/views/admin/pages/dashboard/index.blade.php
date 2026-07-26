@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">

        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Dashboard</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>

        <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                    <i class="ti ti-building"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">{{ $totalBiens }}</h3>
                                <p class="mb-0 text-muted">Biens immobiliers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-24">
                                    <i class="ti ti-star"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">{{ $biensVedette }}</h3>
                                <p class="mb-0 text-muted">En vedette</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-24">
                                    <i class="ti ti-users"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">{{ $totalDemandes + $totalSurMesure }}</h3>
                                <p class="mb-0 text-muted">Total demandes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-24">
                                    <i class="ti ti-calendar"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">{{ $demandesMois + $surMesureMois }}</h3>
                                <p class="mb-0 text-muted">Demandes ce mois</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-start border-info border-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-24">
                                    <i class="ti ti-mail"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">
                                    {{ $totalNewsletter }}
                                    @if($newsletterMois > 0)
                                        <span class="badge bg-info fs-xxs align-top ms-1">+{{ $newsletterMois }} ce mois</span>
                                    @endif
                                </h3>
                                <p class="mb-0 text-muted">Inscrits newsletter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-8">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-xxl-4 col-xl-5">
                                <div class="p-3 border-end border-dashed h-100">
                                    <h4 class="card-title mb-0">Répartition par type</h4>
                                    <p class="text-muted fs-xs mb-0">{{ array_sum($repartitionTypes) }} biens</p>
                                    <div class="mt-4">
                                        @foreach ($repartitionTypes as $type => $count)
                                            @php
                                                $pct = array_sum($repartitionTypes) > 0
                                                    ? round($count / array_sum($repartitionTypes) * 100)
                                                    : 0;
                                                $labels = [
                                                    'appartement' => 'Appartement',
                                                    'maison' => 'Maison',
                                                    'terrain' => 'Terrain',
                                                    'local' => 'Local commercial',
                                                    'immeuble' => 'Immeuble',
                                                ];
                                                $colors = ['primary', 'success', 'info', 'warning', 'danger'];
                                                $color = $colors[$loop->index % count($colors)];
                                            @endphp
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0" style="width: 130px;">
                                                    <span class="text-muted fs-xs fw-semibold">{{ $labels[$type] ?? ucfirst($type) }}</span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar bg-{{ $color }}" role="progressbar"
                                                            style="width: {{ $pct }}%"></div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2" style="width: 40px; text-align: right;">
                                                    <span class="fw-semibold fs-xs">{{ $count }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if (empty($repartitionTypes))
                                            <p class="text-muted text-center py-4 mb-0">Aucun bien pour le moment</p>
                                        @endif
                                    </div>

                                    <hr>
                                    <h4 class="card-title mb-2">Prix</h4>
                                    @if ($prixStats->moyenne)
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted fs-xs">Moyen</span>
                                            <span class="fw-semibold">{{ number_format($prixStats->moyenne, 0, ',', ' ') }} F CFA</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-1">
                                            <span class="text-muted fs-xs">Min</span>
                                            <span class="fw-semibold">{{ number_format($prixStats->minimum, 0, ',', ' ') }} F CFA</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-muted fs-xs">Max</span>
                                            <span class="fw-semibold">{{ number_format($prixStats->maximum, 0, ',', ' ') }} F CFA</span>
                                        </div>
                                    @else
                                        <p class="text-muted mb-0">—</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-7">
                                <div class="px-4 py-3">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h4 class="card-title">Biens récents</h4>
                                        <a href="{{ route('admin.produits.index') }}"
                                            class="link-reset text-decoration-underline fw-semibold link-offset-3">
                                            Voir tout <i class="ti ti-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Type</th>
                                                    <th>Prix</th>
                                                    <th>Statut</th>
                                                    <th>Vedette</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($biensRecents as $bien)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('admin.produits.show', $bien) }}" class="text-body fw-semibold">
                                                                {{ Str::limit($bien->titre, 30) }}
                                                            </a>
                                                        </td>
                                                        <td>{{ ucfirst($bien->type) }}</td>
                                                        <td>{{ number_format($bien->prix, 0, ',', ' ') }} F</td>
                                                        <td>
                                                            @if ($bien->est_actif)
                                                                <span class="badge bg-success-subtle text-success">Actif</span>
                                                            @else
                                                                <span class="badge bg-secondary-subtle text-secondary">Inactif</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($bien->en_vedette)
                                                                <i class="ti ti-star-filled text-warning"></i>
                                                            @else
                                                                <i class="ti ti-star text-muted"></i>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center text-muted py-3">Aucun bien</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header justify-content-between align-items-center border-dashed">
                        <h4 class="card-title mb-0">Demandes récentes (intéressés)</h4>
                        <a href="{{ route('admin.demandes.index') }}" class="link-reset text-decoration-underline fw-semibold link-offset-3 fs-xs">
                            Voir tout <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @forelse ($demandesRecentes as $demande)
                                <li class="list-group-item px-3 py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="{{ route('admin.demandes.show', $demande) }}" class="text-body fw-semibold text-truncate d-block" style="max-width: 200px;">
                                                {{ $demande->name }}
                                            </a>
                                            <small class="text-muted">{{ $demande->email }}</small>
                                        </div>
                                        <small class="text-muted text-nowrap">{{ $demande->created_at->format('d/m/Y') }}</small>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-3">Aucune demande</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header justify-content-between align-items-center border-dashed">
                        <h4 class="card-title mb-0">Demandes sur mesure</h4>
                        <a href="{{ route('admin.demandes-sur-mesure.index') }}" class="link-reset text-decoration-underline fw-semibold link-offset-3 fs-xs">
                            Voir tout <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @forelse ($surMesureRecentes as $demande)
                                <li class="list-group-item px-3 py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="{{ route('admin.demandes-sur-mesure.show', $demande) }}" class="text-body fw-semibold text-truncate d-block" style="max-width: 200px;">
                                                {{ $demande->name }}
                                            </a>
                                            <small class="text-muted">{{ $demande->nature_projet }}</small>
                                        </div>
                                        <small class="text-muted text-nowrap">{{ $demande->created_at->format('d/m/Y') }}</small>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-3">Aucune demande</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="card border-info border-opacity-25">
                    <div class="card-header justify-content-between align-items-center border-dashed">
                        <h4 class="card-title mb-0">
                            <i class="ti ti-mail text-info me-1"></i>
                            Nouveaux inscrits newsletter
                        </h4>
                        <a href="{{ route('admin.newsletter.index') }}" class="link-reset text-decoration-underline fw-semibold link-offset-3 fs-xs">
                            Voir tout <i class="ti ti-arrow-right"></i>
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @forelse ($newsletterRecentes as $subscriber)
                                <li class="list-group-item px-3 py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="avatar-xs bg-info-subtle text-info rounded-circle d-flex align-items-center justify-content-center fw-semibold fs-xxs">
                                                {{ strtoupper(substr($subscriber->email, 0, 1)) }}
                                            </span>
                                            <a href="mailto:{{ $subscriber->email }}" class="text-body fw-semibold text-truncate d-block" style="max-width: 200px;">
                                                {{ $subscriber->email }}
                                            </a>
                                        </div>
                                        <small class="text-muted text-nowrap">{{ $subscriber->created_at->format('d/m/Y') }}</small>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center text-muted py-3">Aucun inscrit pour le moment</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
