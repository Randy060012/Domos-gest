<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/ubold/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2026 13:07:59 GMT -->

<head>
    <meta charset="utf-8">
    <title>Dashboard | ORION - Insure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="UBold is a modern, responsive admin dashboard available on ThemeForest. Ideal for building CRM, CMS, project management tools, and custom web applications with a clean UI, flexible layouts, and rich features.">
    <meta name="keywords"
        content="UBold, admin dashboard, ThemeForest, Bootstrap 5 admin, responsive admin, CRM dashboard, CMS admin, web app UI, admin theme, premium admin template">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ URL::asset('admin/assets/js/config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ URL::asset('admin/assets/css/vendors.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css -->
    <link href="{{ URL::asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        @include('admin.layouts.sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('admin.layouts.header')
        <!-- Topbar End -->



        <!-- ============================================================== -->
        <!-- Start Main Content -->
        <!-- ============================================================== -->

        <div class="content-page">

            @yield('contenu')
            <!-- container -->

            <!-- Footer Start -->
            @include('admin.layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End of Main Content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end overflow-hidden" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex justify-content-between text-bg-primary gap-2 p-3"
            style="background-image: url(assets/images/user-bg-pattern.png);">
            <div>
                <h5 class="mb-1 fw-bold text-white text-uppercase">Admin Customizer</h5>
                <p class="text-white text-opacity-75 fst-italic fw-medium mb-0">Easily configure layout, styles, and
                    preferences for your admin interface.</p>
            </div>

            <div class="flex-grow-0">
                <button type="button"
                    class="d-block btn btn-sm bg-white bg-opacity-25 text-white rounded-circle btn-icon"
                    data-bs-dismiss="offcanvas"><i class="ti ti-x fs-lg"></i></button>
            </div>
        </div>

        <div class="offcanvas-body p-0 h-100" data-simplebar>
            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fw-bold">Select Theme</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-default"
                                value="default">
                            <label class="form-check-label p-0 w-100" for="demo-skin-default">
                                <img src="assets/images/layouts/themes/theme-default.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Default</h5>
                    </div>

                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-material"
                                value="material">
                            <label class="form-check-label p-0 w-100" for="demo-skin-material">
                                <img src="assets/images/layouts/themes/theme-material.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Material</h5>
                    </div>

                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-modern"
                                value="modern">
                            <label class="form-check-label p-0 w-100" for="demo-skin-modern">
                                <img src="assets/images/layouts/themes/theme-modern.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Modern</h5>
                    </div>

                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-saas"
                                value="saas">
                            <label class="form-check-label p-0 w-100" for="demo-skin-saas">
                                <img src="assets/images/layouts/themes/theme-saas.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">SaaS</h5>
                    </div>

                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-flat"
                                value="flat">
                            <label class="form-check-label p-0 w-100" for="demo-skin-flat">
                                <img src="assets/images/layouts/themes/theme-flat.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Flat</h5>
                    </div>

                    <div class="col-6">
                        <div class="form-check card-radio shadow">
                            <input class="form-check-input" type="radio" name="data-skin" id="demo-skin-minimal"
                                value="minimal">
                            <label class="form-check-label p-0 w-100" for="demo-skin-minimal">
                                <img src="assets/images/layouts/themes/theme-minimal.png" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Minimal</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fw-bold">Color Scheme</h5>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                id="layout-color-light" value="light">
                            <label class="form-check-label p-0 w-100" for="layout-color-light">
                                <img src="assets/images/layouts/light.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                id="layout-color-dark" value="dark">
                            <label class="form-check-label p-0 w-100" for="layout-color-dark">
                                <img src="assets/images/layouts/dark.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Dark</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                id="layout-color-system" value="system">
                            <label class="form-check-label p-0 w-100" for="layout-color-system">
                                <img src="assets/images/layouts/system.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">System</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fw-bold">Topbar Color</h5>

                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 w-100" for="topbar-color-light">
                                <img src="assets/images/layouts/topbar-light.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="text-center text-muted mt-2 mb-0">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-dark" value="dark">
                            <label class="form-check-label p-0 w-100" for="topbar-color-dark">
                                <img src="assets/images/layouts/topbar-dark.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-gray" value="gray">
                            <label class="form-check-label p-0 w-100" for="topbar-color-gray">
                                <img src="assets/images/layouts/topbar-gray.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-gradient" value="gradient">
                            <label class="form-check-label p-0 w-100" for="topbar-color-gradient">
                                <img src="assets/images/layouts/topbar-gradient.svg" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fw-bold">Sidenav Color</h5>

                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-light" value="light">
                            <label class="form-check-label p-0 w-100" for="sidenav-color-light">
                                <img src="assets/images/layouts/light.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-dark" value="dark">
                            <label class="form-check-label p-0 w-100" for="sidenav-color-dark">
                                <img src="assets/images/layouts/side-dark.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Dark</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-gray" value="gray">
                            <label class="form-check-label p-0 w-100" for="sidenav-color-gray">
                                <img src="assets/images/layouts/side-gray.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gray</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-gradient" value="gradient">
                            <label class="form-check-label p-0 w-100" for="sidenav-color-gradient">
                                <img src="assets/images/layouts/side-gradient.svg" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Gradient</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-image" value="image">
                            <label class="form-check-label p-0 w-100" for="sidenav-color-image">
                                <img src="assets/images/layouts/side-image.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="fs-sm text-center text-muted mt-2 mb-0">Image</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fw-bold">Sidebar Size</h5>

                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-default" value="default">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-default">
                                <img src="assets/images/layouts/light.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 text-center text-muted mt-2">Default</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-compact" value="compact">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-compact">
                                <img src="assets/images/layouts/sidebar-compact.svg" alt="layout-img"
                                    class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 text-center text-muted mt-2">Compact</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small" value="condensed">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-small">
                                <img src="assets/images/layouts/sidebar-sm.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 text-center text-muted mt-2">Condensed</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small-hover" value="on-hover">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-small-hover">
                                <img src="assets/images/layouts/sidebar-sm.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 text-center text-muted mt-2">On Hover</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small-hover-active" value="on-hover-active">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-small-hover-active">
                                <img src="assets/images/layouts/light.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 fs-base text-center text-muted mt-2">On Hover - Show</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-offcanvas" value="offcanvas">
                            <label class="form-check-label p-0 w-100" for="sidenav-size-offcanvas">
                                <img src="assets/images/layouts/sidebar-full.svg" alt="layout-img" class="img-fluid">
                            </label>
                        </div>
                        <h5 class="mb-0 text-center text-muted mt-2">Offcanvas</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0">Layout Position</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-warning w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-warning w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><label class="fw-bold m-0" for="sidebaruser-check">Sidebar User Info</label>
                    </h5>

                    <div class="form-check form-switch fs-lg">
                        <input type="checkbox" class="form-check-input" name="sidebar-user" id="sidebaruser-check">
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light fw-semibold py-2 w-100"
                        id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="#!" target="_blank" class="btn btn-danger bg-gradient py-2 fw-semibold w-100">Buy
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ URL::asset('admin/assets/js/vendors.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('admin/assets/js/app.js') }}"></script>

    <!-- E Charts js -->
    <script src="{{ URL::asset('admin/assets/plugins/chartjs/chart.umd.js') }}"></script>

    <!-- Custom table -->
    <script src="{{ URL::asset('admin/assets/js/pages/custom-table.js') }}"></script>

    <!-- Dashboard Page js -->
    <script src="{{ URL::asset('admin/assets/js/pages/dashboard.js') }}"></script>

</body>


<!-- Mirrored from coderthemes.com/ubold/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jan 2026 13:08:01 GMT -->

</html>
