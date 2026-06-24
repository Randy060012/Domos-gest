@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">


        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Profile</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>

                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>

                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <article class="card overflow-hidden mb-0">
                    <div class="position-relative card-side-img overflow-hidden"
                        style="min-height: 300px; background-image: url(assets/images/profile-bg.jpg);">
                        <div
                            class="p-4 card-img-overlay rounded-start-0 auth-overlay d-flex align-items-center flex-column justify-content-center">
                            <h3 class="text-white mb-1 fst-italic">"Crafting innovation through clean design"</h3>
                            <p class="text-white mb-4">– MyStatus</p>
                        </div>
                    </div>
                </article>
            </div> <!-- end col-->
        </div> <!-- end row-->

        <div class="px-3 mt-n4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card card-top-sticky">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3 position-relative">
                                    <img src="assets/images/users/user-3.jpg" alt="avatar" class="rounded-circle"
                                        width="72" height="72">
                                </div>
                                <div>
                                    <h5 class="mb-0 d-flex align-items-center">
                                        <a href="#!" class="link-reset">Geneva Lee</a>
                                        <img src="assets/images/flags/us.svg" alt="US" class="ms-2 rounded-circle"
                                            height="16">
                                    </h5>
                                    <p class="text-muted mb-2">Senior Developer</p>
                                    <span class="badge text-bg-light badge-label">Team Lead</span>
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-icon btn-ghost-light text-muted"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical fs-xl"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                            <li><a class="dropdown-item text-danger" href="#">Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-briefcase fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">UI/UX Designer & Full-Stack Developer</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-school fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Studied at <span class="text-dark fw-semibold">Stanford
                                            University</span>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-map-pin fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Lives in <span class="text-dark fw-semibold">San Francisco,
                                            CA</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-users fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Followed by <span class="text-dark fw-semibold">25.3k
                                            People</span></p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-mail fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Email <a href="mailto:hello@example.com"
                                            class="text-primary fw-semibold">hello@example.com</a>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-link fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Website <a href="https://www.example.dev/"
                                            class="text-primary fw-semibold">www.example.dev</a>
                                    </p>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <div
                                        class="avatar-sm text-bg-light bg-opacity-75 d-flex align-items-center justify-content-center rounded-circle">
                                        <i class="ti ti-world fs-xl"></i>
                                    </div>
                                    <p class="mb-0 fs-sm">Languages <span class="text-dark fw-semibold">English, Hindi,
                                            Japanese</span>
                                    </p>
                                </div>

                            </div> <!---->

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->

                </div> <!-- end col-->

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header card-tabs d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h4 class="card-title">My Account</h4>
                            </div>
                            <ul class="nav nav-tabs card-header-tabs nav-bordered">
                                <li class="nav-item">
                                    <a href="#about-me" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                        <i class="ti ti-home d-md-none d-block"></i>
                                        <span class="d-none d-md-block fw-bold">Taux par produit</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#timeline" data-bs-toggle="tab" aria-expanded="false"
                                        class="nav-link ">
                                        <i class="ti ti-user-circle d-md-none d-block"></i>
                                        <span class="d-none d-md-block fw-bold">Historique</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                        <i class="ti ti-settings d-md-none d-block"></i>
                                        <span class="d-none d-md-block fw-bold">Profil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="about-me">


                                    <h4 class="card-title my-3 text-uppercase fs-sm"><i class="ti ti-checklist"></i>
                                        Taux par produit:</h4>

                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                                            <thead class="bg-light bg-opacity-25 thead-sm">
                                                <tr class="text-uppercase fs-xxs">
                                                    <th data-table-sort="task">Produit</th>
                                                    <th data-table-sort>Taux</th>
                                                    <th data-table-sort="name">Taux taxe</th>
                                                    <th data-table-sort>Operation</th>
                                                    <th style="width: 30px;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h5 class="fs-sm my-1"><a href="#" class="text-body">Blazor
                                                                Admin Theme – Final QA</a></h5>
                                                    </td>
                                                    <td>10%</td>
                                                    <td>5%</td>

                                                    <td><a href="#" class="text-muted fs-xxl"><i
                                                                class="ti ti-pencil"></i></a></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- end About Me data-->

                                <div class="tab-pane " id="timeline">
                                    <h4 class="card-title my-3 text-uppercase fs-sm"><i class="ti ti-checklist"></i>
                                        Historique de paiement:</h4>

                                    <div class="table-responsive">
                                        <table
                                            class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                                            <thead class="bg-light bg-opacity-25 thead-sm">
                                                <tr class="text-uppercase fs-xxs">
                                                    <th data-table-sort="task">Date</th>
                                                    <th data-table-sort>Montant</th>

                                                    <th data-table-sort>Statut</th>
                                                    <th data-table-sort>Moyen de retrait</th>
                                                    <th data-table-sort>Operation</th>
                                                    <th style="width: 30px;"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jul 20, 2025</td>
                                                    <td>20 000 XOF</td>
                                                    <td><span class="badge badge-soft-warning">Echoué</span></td>

                                                    <td>FLOOZ</td>
                                                    <td><a href="#" class="text-muted fs-xxl"><i
                                                                class="ti ti-pencil"></i></a></td>
                                                </tr>


                                                    <tr>
                                                    <td>Jul 20, 2025</td>
                                                    <td>45 000 XOF</td>
                                                    <td><span class="badge badge-soft-success">Reussi</span></td>

                                                    <td>VISA</td>
                                                    <td><a href="#" class="text-muted fs-xxl"><i
                                                                class="ti ti-pencil"></i></a></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- end timeline tabs data-->

                                <div class="tab-pane" id="settings">
                                    <form>
                                        <!-- Personal Info -->
                                        <h5
                                            class="mb-3 text-uppercase bg-light-subtle p-1 border-dashed border rounded border-light text-center">
                                            <i class="ti ti-user-circle me-1"></i> Personal Info
                                        </h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="firstname" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="firstname"
                                                        placeholder="Enter first name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="lastname" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="lastname"
                                                        placeholder="Enter last name">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="jobtitle" class="form-label">Job Title</label>
                                                    <input type="text" class="form-control" id="jobtitle"
                                                        placeholder="e.g. UI Developer, Designer">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        placeholder="+1 234 567 8901">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="useremail" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="useremail"
                                                        placeholder="Enter email">
                                                    <span class="form-text fs-xs fst-italic text-muted"><a href="#"
                                                            class="link-reset">Click here to change your email</a></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="userpassword" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="userpassword"
                                                        placeholder="Enter new password">
                                                    <span class="form-text fs-xs fst-italic text-muted"><a href="#"
                                                            class="link-reset">Click here to change your
                                                            password</a></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label for="profilephoto" class="form-label">Profile Photo</label>
                                            <input class="form-control" type="file" id="profilephoto">
                                        </div>

                                        <!-- Submit -->
                                        <div class="text-end mt-4">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="ti ti-device-floppy me-1"></i> Save Changes</button>
                                        </div>
                                    </form>

                                </div>
                                <!-- end settings Data-->
                            </div> <!-- end tab content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row-->
        </div>

    </div>
@endsection
