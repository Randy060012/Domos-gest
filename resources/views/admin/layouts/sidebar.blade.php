        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo logo-light">
                    <span class="logo-lg"><img src="assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
                </span>

                <span class="logo logo-dark">
                    <span class="logo-lg"><img src="assets/images/logo-black.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo"></span>
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
                            <a href="users-profile.html" class="link-reset">
                                <img src="assets/images/users/user-3.jpg" alt="user-image"
                                    class="rounded-circle mb-2 avatar-md">
                                <span class="sidenav-user-name fw-bold">Geneva K.</span>
                                <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
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
                                    <h6 class="text-overflow m-0">Welcome back!</h6>
                                </div>

                                <!-- My Profile -->
                                <a href="profile.html" class="dropdown-item">
                                    <i class="ti ti-user-circle me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Profile</span>
                                </a>

                                <!-- Notifications -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-bell-ringing me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Notifications</span>
                                </a>

                                <!-- Settings -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-settings-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Account Settings</span>
                                </a>

                                <!-- Support -->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="ti ti-headset me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Support Center</span>
                                </a>

                                <!-- Divider -->
                                <div class="dropdown-divider"></div>

                                <!-- Lock -->
                                <a href="auth-lock-screen.html" class="dropdown-item">
                                    <i class="ti ti-lock me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Lock Screen</span>
                                </a>

                                <!-- Logout -->
                                <a href="javascript:void(0);" class="dropdown-item fw-semibold">
                                    <i class="ti ti-logout-2 me-2 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title mt-2" data-lang="menu-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ URL::to('/') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="circle-gauge"></i></span>
                            <span class="menu-text" data-lang="dashboards">Dashboard</span>
                        </a>

                    </li>



                    <li class="side-nav-title" data-lang="apps-title">Apps</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                            aria-controls="sidebarEcommerce" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="shopping-bag"></i></span>
                            <span class="menu-text" data-lang="ecommerce">Contrats</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="sub-menu">


                                <li class="side-nav-item">
                                    <a href="ecommerce-categories.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="eco-categories">Nouveau</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ecommerce-categories.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="eco-categories">Demande devis</span>
                                        <span class="badge text-bg-success">45</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="ecommerce-categories.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="eco-categories">Archivé</span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a href="ecommerce-categories.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="eco-categories">Historique</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>



                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarInvoice" aria-expanded="false"
                            aria-controls="sidebarInvoice" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="receipt-text"></i></span>
                            <span class="menu-text" data-lang="invoice"> Facture</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarInvoice">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="invoices.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="invoices">Invoices</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="invoice-details.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="invoice-details">Single Invoice</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="invoice-create.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="invoice-create">New Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTopbars" aria-expanded="false"
                            aria-controls="sidebarTopbars" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="panel-top"></i></span>
                            <span class="menu-text" data-lang="topbar"> Caisse </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTopbars">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="topbar-light.html" target="_blank" class="side-nav-link">
                                        <span class="menu-text" data-lang="topbar-light">Depot contrat</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="topbar-gray.html" target="_blank" class="side-nav-link">
                                        <span class="menu-text" data-lang="topbar-gray">Retrait Apporteur</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="topbar-gradient.html" target="_blank" class="side-nav-link">
                                        <span class="menu-text" data-lang="topbar-gradient">Historique</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ URL::to('/') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="sparkles"></i></span>
                            <span class="menu-text" data-lang="prod">Produits</span>
                        </a>

                    </li>

                    <li class="side-nav-item">
                        <a href="{{ URL::to('/apporteurs') }}" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="handshake"></i></span>
                            <span class="menu-text" data-lang="crm"> Apporteurs </span>
                        </a>
                    </li>



                    <li class="side-nav-item">
                        <a href="chat.html" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="message-square-dot"></i></span>
                            <span class="menu-text" data-lang="chat"> sms </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="calendar.html" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="calendar"></i></span>
                            <span class="menu-text" data-lang="calendar"> Calendrier </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="file-manager.html" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="folder-open-dot"></i></span>
                            <span class="menu-text" data-lang="file-manager"> File Manager </span>
                        </a>
                    </li>



                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
                            aria-controls="sidebarEmail" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="inbox"></i></span>
                            <span class="menu-text" data-lang="email">Rapport</span>
                            <span class="menu-arrow"></span>
                            {{-- <span class="badge text-bg-danger">New</span> --}}
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="email.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="email-inbox">Inbox</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="email-details.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="email-details">Details</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="email-compose.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="email-compose">Compose</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="email-templates.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="email-templates">Email Templates</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTickets" aria-expanded="false"
                            aria-controls="sidebarTickets" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="life-buoy"></i></span>
                            <span class="menu-text" data-lang="support"> Support </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTickets">
                            <ul class="sub-menu">

                                <li class="side-nav-item">
                                    <a href="ticket-create.html" class="side-nav-link">
                                        <span class="menu-text" data-lang="ticket-create">Nouveau Ticket</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="side-nav-title mt-2" data-lang="pages-title">Custom Pages</li>


                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="chart-no-axes-combined"></i></span>
                            <span class="menu-text" data-lang="charts"> Statistique </span>
                        </a>

                    </li>



                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false"
                            aria-controls="sidebarUsers" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="users"></i></span>
                            <span class="menu-text" data-lang="users"> Utilisateurs </span>
                        </a>
                       
                    </li>


                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <span class="menu-icon"><i data-lucide="settings"></i></span>
                            <span class="menu-text" data-lang="pages"> Parametre </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
