@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Demandes sur mesure</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Demandes</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-custom table-centered table-hover w-100 mb-0">
                                <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                    <tr class="text-uppercase fs-xxs">
                                        <th>Client</th>
                                        <th>Contact</th>
                                        <th>Projet</th>
                                        <th>Localisation</th>
                                        <th>Budget</th>
                                        <th>Date</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($demandes as $d)
                                    <tr>
                                        <td>
                                            <span class="fw-medium">{{ $d->name }}</span>
                                        </td>
                                        <td>
                                            <div class="fs-xs">
                                                <a href="mailto:{{ $d->email }}" class="d-block">{{ $d->email }}</a>
                                                <span class="text-muted">{{ $d->phone }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-soft-info fs-xxs">{{ $d->nature_projet ?? '-' }}</span>
                                            <div class="fs-xs text-muted mt-1">{{ $d->type_propriete ?? '' }}</div>
                                        </td>
                                        <td>{{ $d->localisation ?? '-' }}</td>
                                        <td>{{ $d->budget_max ? number_format($d->budget_max, 0, ',', ' ') . ' F CFA' : '-' }}</td>
                                        <td class="fs-xs text-muted">{{ $d->created_at->format('d/m/Y') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.demandes-sur-mesure.show', $d) }}" class="btn btn-default btn-icon btn-sm rounded-circle" title="Détails">
                                                <i class="ti ti-eye fs-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-5 text-muted">Aucune demande pour le moment.</td>
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
@endsection
