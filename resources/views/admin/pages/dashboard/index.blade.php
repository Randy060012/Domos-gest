@extends('admin.layouts.master')

@section('contenu')
    <div class="container-fluid">


        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="fs-xl fw-bold m-0">Dashboard</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>

                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>


        <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1">
            <!-- Total Sales Widget -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                    <i class="ti ti-credit-card"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal">$<span data-target="124.7">0</span>K</h3>
                                <p class="mb-0 text-muted"><span>Total Sales</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <!-- Orders Placed Widget -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-24">
                                    <i class="ti ti-shopping-cart"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal"><span data-target="2358">0</span></h3>
                                <p class="mb-0 text-muted"><span>Orders Placed</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <!-- Active Customers Widget -->
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
                                <h3 class="mb-2 fw-normal"><span data-target="839">0</span></h3>
                                <p class="mb-0 text-muted"><span>Active Customers</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <!-- Refund Requests Widget -->
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="avatar fs-60 avatar-img-size flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded-circle fs-24">
                                    <i class="ti ti-rotate-clockwise-2"></i>
                                </span>
                            </div>
                            <div class="text-end">
                                <h3 class="mb-2 fw-normal"><span data-target="41">0</span></h3>
                                <p class="mb-0 text-muted"><span>Refund Requests</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-0">
                                <div class="p-3 border-end border-dashed">
                                    <h4 class="card-title mb-0">Total Sales</h4>
                                    <p class="text-muted fs-xs">
                                        You have 21 pending orders awaiting fulfillment.
                                    </p>

                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div style="height: 300px;">
                                                <canvas id="multi-pie-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end .p-4-->
                                <hr class="d-xxl-none border-light m-0">
                            </div> <!-- end col-->
                            <div class="col-xxl-9 order-xl-3 order-xxl-1">
                                <div class="px-4 py-3">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h4 class="card-title">Sales Analytics</h4>
                                        <a href="#!"
                                            class="link-reset text-decoration-underline fw-semibold link-offset-3">View
                                            Reports <i class="ti ti-arrow-right"></i></a>
                                    </div>

                                    <div dir="ltr">
                                        <div class="mt-3" style="height: 330px;">
                                            <canvas id="sales-analytics-chart"></canvas>
                                        </div>
                                    </div>
                                </div> <!-- end .px-4-->
                            </div> <!-- end col-->

                        </div> <!-- end row-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div> <!-- end row-->

        <div class="row">
            <div class="col-xxl-12">
                <div data-table data-table-rows-per-page="7" class="card">
                    <div class="card-header justify-content-between align-items-center border-dashed">
                        <h4 class="card-title mb-0">Demande de devis</h4>
                        <div class="d-flex gap-2">
                            <a href="ecommerce-add-product.html" class="btn btn-sm btn-soft-secondary">
                                <i class="ti ti-plus me-1"></i> Add Product
                            </a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                <i class="ti ti-file-export me-1"></i> Export CSV
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-centered table-custom table-sm table-nowrap table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/6.png" alt=""
                                                    class="avatar-sm rounded-circle me-2">
                                                <div>
                                                    <span class="text-muted fs-xs">Audio</span>
                                                    <h5 class="fs-base mb-0"><a href="ecommerce-product-details.html"
                                                            class="text-body">Noise Cancelling Headphones</a></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Stock</span>
                                            <h5 class="fs-base fw-normal mb-0">25 units</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Price</span>
                                            <h5 class="fs-base fw-normal mb-0">$129.99</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Ratings</span>
                                            <h5 class="fs-base fw-normal mb-0">
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-half-filled"></span>
                                                </span>
                                                <span class="ms-1"><a href="ecommerce-reviews.html"
                                                        class="link-reset fw-semibold">(78)</a></span>
                                            </h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Status</span>
                                            <h5 class="fs-base fw-normal mb-0"><i
                                                    class="ti ti-circle-filled fs-xs text-warning"></i> Low Stock</h5>
                                        </td>
                                        <td style="width: 30px;">
                                            <div class="dropdown">
                                                <a href="#"
                                                    class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical fs-lg"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Edit Product</a>
                                                    <a href="#" class="dropdown-item">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/products/7.png" alt=""
                                                    class="avatar-sm rounded-circle me-2">
                                                <div>
                                                    <span class="text-muted fs-xs">Home Tech</span>
                                                    <h5 class="fs-base mb-0"><a href="ecommerce-product-details.html"
                                                            class="text-body">Mini Air Purifier</a></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Stock</span>
                                            <h5 class="fs-base fw-normal mb-0">0 units</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Price</span>
                                            <h5 class="fs-base fw-normal mb-0">$49.99</h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Ratings</span>
                                            <h5 class="fs-base fw-normal mb-0">
                                                <span class="text-warning">
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-filled"></span>
                                                    <span class="ti ti-star-half-filled"></span>
                                                    <span class="ti ti-star"></span>
                                                </span>
                                                <span class="ms-1"><a href="ecommerce-reviews.html"
                                                        class="link-reset fw-semibold">(34)</a></span>
                                            </h5>
                                        </td>
                                        <td>
                                            <span class="text-muted fs-xs">Status</span>
                                            <h5 class="fs-base fw-normal mb-0"><i
                                                    class="ti ti-circle-filled fs-xs text-danger"></i> Out of Stock</h5>
                                        </td>
                                        <td style="width: 30px;">
                                            <div class="dropdown">
                                                <a href="#"
                                                    class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical fs-lg"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">Edit Product</a>
                                                    <a href="#" class="dropdown-item">Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div> <!-- end table-responsive-->
                    </div> <!-- end card-body-->

                    <div class="card-footer border-0">
                        <div class="align-items-center justify-content-between row text-center text-sm-start">
                            <div class="col-sm">
                                <div data-table-pagination-info="products"></div>
                            </div>
                            <div class="col-sm-auto mt-3 mt-sm-0">
                                <div data-table-pagination></div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div> <!-- end card-footer-->
                </div> <!-- end card-->
            </div> <!-- end col-->


        </div> <!-- end row-->

    </div>
@endsection
