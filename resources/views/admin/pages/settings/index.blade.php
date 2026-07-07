@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Paramètres</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Paramètres</li>
                </ol>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <ul class="nav nav-tabs mb-4" id="settingsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ request('tab') !== 'logo' ? 'active' : '' }}" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">
                    <i class="ti ti-user me-1"></i> Profil
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ request('tab') === 'logo' ? 'active' : '' }}" id="logo-tab" data-bs-toggle="tab" data-bs-target="#logo" type="button" role="tab">
                    <i class="ti ti-photo me-1"></i> Logo & Site
                </button>
            </li>
        </ul>

        <div class="tab-content" id="settingsTabContent">
            {{-- TAB PROFIL --}}
            <div class="tab-pane fade {{ request('tab') !== 'logo' ? 'show active' : '' }}" id="profile" role="tabpanel">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Informations personnelles</h5></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.settings.update') }}">
                            @csrf
                            <input type="hidden" name="_tab" value="profile">

                            <div class="mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <hr>
                            <h6 class="mb-3">Changer le mot de passe (laisser vide pour conserver)</h6>

                            <div class="mb-3">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirmer le mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- TAB LOGO & SITE --}}
            <div class="tab-pane fade {{ request('tab') === 'logo' ? 'show active' : '' }}" id="logo" role="tabpanel">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Identité visuelle</h5></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_tab" value="logo">

                            <div class="mb-3">
                                <label class="form-label">Nom du site</label>
                                <input type="text" name="site_name" class="form-control @error('site_name') is-invalid @enderror" value="{{ old('site_name', $settings['site_name']) }}" required>
                                @error('site_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Logo (clair)</label>
                                    <div class="mb-2">
                                        <img src="{{ asset($settings['logo_light']) }}" alt="Logo clair" class="img-fluid rounded border p-2" style="max-height: 60px; background: #1a1a2e;">
                                    </div>
                                    <input type="file" name="logo_light" class="form-control" accept="image/png,image/webp,image/svg+xml">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Logo (sombre)</label>
                                    <div class="mb-2">
                                        <img src="{{ asset($settings['logo_dark']) }}" alt="Logo sombre" class="img-fluid rounded border p-2" style="max-height: 60px;">
                                    </div>
                                    <input type="file" name="logo_dark" class="form-control" accept="image/png,image/webp,image/svg+xml">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Logo (petit)</label>
                                    <div class="mb-2">
                                        <img src="{{ asset($settings['logo_small']) }}" alt="Logo petit" class="img-fluid rounded border p-2" style="max-height: 40px;">
                                    </div>
                                    <input type="file" name="logo_small" class="form-control" accept="image/png,image/webp,image/svg+xml">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary"><i class="ti ti-device-floppy me-1"></i> Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
