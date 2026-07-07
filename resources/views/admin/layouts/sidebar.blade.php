        <div class="sidenav-menu">

            <!-- Brand Logo -->
            @php
                $logoLight = App\Models\Setting::get('logo_light', 'admin/assets/images/logo.png');
                $logoDark  = App\Models\Setting::get('logo_dark', 'admin/assets/images/logo-black.png');
                $logoSmall = App\Models\Setting::get('logo_small', 'admin/assets/images/logo-sm.png');
            @endphp
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <span class="logo logo-light">
                    <span class="logo-lg"><img src="{{ asset($logoLight) }}" alt="logo"></span>
                    <span class="logo-sm"><img src="{{ asset($logoSmall) }}" alt="small logo"></span>
                </span>

                <span class="logo logo-dark">
                    <span class="logo-lg"><img src="{{ asset($logoDark) }}" alt="dark logo"></span>
                    <span class="logo-sm"><img src="{{ asset($logoSmall) }}" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-on-hover">
                <i class="ti ti-menu-4 fs-22 align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-offcanvas">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div class="scrollbar" data-simplebar>

                <!-- User -->
                <div class="sidenav-user">

                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a href="#" class="link-reset">
                                <img src="{{ asset('admin/assets/images/users/user-3.jpg') }}" alt="user-image"
                                    class="rounded-circle mb-2 avatar-md">
                                <span class="sidenav-user-name fw-bold">{{ Auth::user()->name }}</span>
                                <span class="fs-12 fw-semibold" data-lang="user-role">Administrateur</span>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon"
                                data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                            </a>

                            <div class="dropdown-menu">
                                <!-- Header -->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ Auth::user()->name }}</h6>
                                </div>

                                <!-- Logout -->
                                <a href="javascript:void(0);" class="dropdown-item fw-semibold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Déconnexion</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title mt-2" data-lang="menu-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="circle-gauge"></i></span>
                            <span class="menu-text" data-lang="dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('admin.demandes.index') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="inbox"></i></span>
                            <span class="menu-text">Intéressés</span>
                            <span class="badge text-bg-success">{{ App\Models\Demande::count() }}</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('admin.demandes-sur-mesure.index') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="file-text"></i></span>
                            <span class="menu-text">Demandes</span>
                            <span class="badge text-bg-warning">{{ App\Models\DemandeSurMesure::count() }}</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('admin.produits.index') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="sparkles"></i></span>
                            <span class="menu-text">Produits</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('admin.settings.index') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="settings"></i></span>
                            <span class="menu-text">Paramètres</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
