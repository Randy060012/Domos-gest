@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">


        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Produits</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Produits</li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div data-table data-table-rows-per-page="8" class="card">
                    <div class="card-header border-light justify-content-between">

                        <div class="d-flex gap-2">
                            <div class="app-search">
                                <input data-table-search type="search" class="form-control"
                                    placeholder="Search category...">
                                <i data-lucide="search" class="app-search-icon text-muted"></i>
                            </div>

                        </div>

                        <div class="d-flex align-items-center gap-1">
                            <!-- Records Per Page -->
                            <div>
                                <select data-table-set-rows-per-page class="form-select form-control my-1 my-md-0">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>

                            <!-- Status Filter -->
                            <div class="app-search">
                                <select data-table-filter="status" class="form-select form-control my-1 my-md-0">
                                    <option value="">All</option>
                                    <option value="Vente">Vente</option>
                                    <option value="Location">Location</option>
                                    <option value="Exclusivité">Exclusivité</option>
                                </select>
                                <i data-lucide="circle" class="app-search-icon text-muted"></i>
                            </div>

                            <a href="{{ route('admin.produits.create') }}" class="btn btn-primary ms-1">
                                <i data-lucide="plus" class="fs-sm me-2"></i> Enregistrer un bien
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                            <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                                <tr class="text-uppercase fs-xxs">
                                    <th class="ps-3" style="width: 1%;">
                                        <input data-table-select-all
                                            class="form-check-input form-check-input-light fs-14 mt-0" type="checkbox"
                                            value="option">
                                    </th>
                                    <th data-table-sort="ref">Réf.</th>
                                    <th data-table-sort="titre">Titre</th>
                                    <th data-table-sort="localisation">Localisation</th>
                                    <th data-table-sort="prix">Prix</th>
                                    <th data-table-sort="images">Images</th>
                                    <th>Visible</th>
                                    <th data-table-sort="vedette">Vedette</th>
                                    <th data-table-sort data-column="status">Statut</th>
                                    <th class="text-center" style="width: 1%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($biens as $bien)
                                <tr>
                                    <td class="ps-3">
                                        <input class="form-check-input form-check-input-light fs-14 product-item-check mt-0"
                                            type="checkbox" value="option">
                                    </td>
                                    <td><span class="badge bg-secondary fs-xxs">{{ $bien->ref }}</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md me-3">
                                                @if($img = $bien->imagePrincipale())
                                                <img src="{{ Storage::url($img->image_path) }}" alt=""
                                                    class="img-fluid rounded" style="object-fit:cover;height:40px;width:40px;">
                                                @else
                                                <div class="img-fluid rounded bg-light d-flex align-items-center justify-content-center" style="height:40px;width:40px;">
                                                    <i class="ti ti-home fs-lg text-muted"></i>
                                                </div>
                                                @endif
                                            </div>
                                            <div>
                                                <h5 class="mb-0">
                                                    <a data-sort="titre" href="{{ route('admin.produits.edit', $bien) }}"
                                                        class="link-reset">{{ Str::limit($bien->titre, 30) }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $bien->localisation }}</td>
                                    <td>{{ number_format($bien->prix, 0, ',', ' ') }} F CFA</td>
                                    <td>{{ $bien->images_count }} img</td>
                                    <td>
                                        <div class="form-check form-switch mb-0 d-inline-block">
                                            <input type="checkbox" class="form-check-input toggle-visibilite"
                                                data-id="{{ $bien->id }}"
                                                {{ $bien->est_actif ? 'checked' : '' }}
                                                role="switch">
                                        </div>
                                    </td>
                                    <td>
                                        @if($bien->en_vedette)
                                        <i class="ti ti-star-filled text-warning fs-lg"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @switch($bien->statut)
                                        @case('VENTE') <span class="badge badge-soft-success fs-xxs">Vente</span> @break
                                        @case('LOCATION') <span class="badge badge-soft-info fs-xxs">Location</span> @break
                                        @default <span class="badge badge-soft-warning fs-xxs">{{ $bien->statut }}</span>
                                        @endswitch
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="{{ route('admin.produits.show', $bien) }}"
                                                class="btn btn-default btn-icon btn-sm rounded-circle"
                                                title="Détails"><i class="ti ti-eye fs-lg"></i></a>
                                            <a href="{{ route('admin.produits.edit', $bien) }}"
                                                class="btn btn-default btn-icon btn-sm rounded-circle"><i
                                                    class="ti ti-edit fs-lg"></i></a>
                                            <a href="#" data-table-delete-row
                                                class="btn btn-default btn-icon btn-sm rounded-circle"><i
                                                    class="ti ti-trash fs-lg"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center py-5 text-muted">Aucun bien pour le moment.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div data-table-pagination-info="categories"></div>
                            <div data-table-pagination></div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->
        </div><!-- end row -->


    </div>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.toggle-visibilite').forEach(btn => {
    btn.addEventListener('change', function() {
        const id = this.dataset.id;
        const csrf = document.querySelector('meta[name="csrf-token"]')?.content;
        fetch('{{ url("admin/produits") }}/' + id + '/toggle-visibilite', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrf,
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
        })
        .then(r => r.json())
        .then(data => {
            this.checked = data.est_actif;
        })
        .catch(() => {
            this.checked = !this.checked;
        });
    });
});
</script>
@endpush
