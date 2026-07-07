@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Demandes</h4>
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
                <div data-table data-table-rows-per-page="8" class="card">
                    <div class="card-header border-light justify-content-between">
                        <div class="d-flex gap-2">
                            <div class="app-search">
                                <input data-table-search type="search" class="form-control" placeholder="Search...">
                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <div>
                                <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                            <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                <tr class="text-uppercase fs-xxs">
                                    <th class="ps-3" style="width: 1%;">
                                        <input data-table-select-all class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox">
                                    </th>
                                    <th data-table-sort="name">Nom</th>
                                    <th data-table-sort="email">Email</th>
                                    <th data-table-sort="phone">Téléphone</th>
                                    <th data-table-sort="bien">Bien</th>
                                    <th data-table-sort="date">Date</th>
                                    <th class="text-center" style="width: 1%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($demandes as $d)
                                <tr>
                                    <td class="ps-3">
                                        <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0" type="checkbox">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2 bg-soft-primary rounded-circle d-flex align-items-center justify-content-center">
                                                <span class="fw-semibold text-primary fs-xs">{{ strtoupper(substr($d->name, 0, 1)) }}</span>
                                            </div>
                                            <span class="fw-medium">{{ $d->name }}</span>
                                        </div>
                                    </td>
                                    <td><a href="mailto:{{ $d->email }}" class="link-reset">{{ $d->email }}</a></td>
                                    <td>{{ $d->phone ?? '-' }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($d->bien_titre, 30) ?? '-' }}</td>
                                    <td>{{ $d->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="{{ route('admin.demandes.show', $d) }}" class="btn btn-default btn-icon btn-sm rounded-circle">
                                                <i class="ti ti-eye fs-lg"></i>
                                            </a>
                                        </div>
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

                    <div class="card-footer border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div data-table-pagination-info="demandes"></div>
                            <div data-table-pagination></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
