@extends('layout')
@section('title', 'Product')

@section('content')
    <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner.png);
            }

            .bg-top {
                background-position: 50% -5px;
                background-size: cover;
                padding: 190px 0;
                padding: 100px 0;
            }

            .section-parallax {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                overflow: hidden;
            }

            h6 b {
                color: #ffc107
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Product</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Category
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Product
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/laptop-bag/KINGBAG READY/balo_laptop_kingbag_ready__1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Ready</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: Oxford + 210 Polyester
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 44 x 30 x 12 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Backpack for 14-inch laptops
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 5kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;938,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/laptop-bag/KINGBAG ZELOS/balo_laptop_kingbag_zelos__1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Zalos</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: Oxford + PU
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 47 x 33 x 17 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Backpack for 15.6 inch laptops
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 5kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;1,186,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/laptop-bag/KINGBAG HORIZON/1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Horizon</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: 1680 PU
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 48 x 30 x 17 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Backpack for 17 inch laptops
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 5kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;1,128,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/crossbody-bag/BAMBOO/1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Bamboo</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: 1680 Polyester
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 17 x 27 x 7 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Crossbody bag
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 1kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;580,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/crossbody-bag/TORINO/1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Torino</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: Oxford + 210 Polyester
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 12 x 26 x 7 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Crossbody bag
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 1kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;428,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/crossbody-bag/JULIUS-1/1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Julius</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: Polyester
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 32 x 22 x 9 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Crossbody bag
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 1kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;780,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                            data-mdb-ripple-color="light">
                                            <img src="images/products/travel-bag/1.png"
                                                style="border-top-left-radius: 15px; border-top-right-radius: 15px;"
                                                class="img-fluid" alt="Laptop" />
                                            <a href="#!">
                                                <div class="mask"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5 class="fw-bold">Sky</h5>
                                        <div class="mt-1 mb-0 text-muted small">
                                            Material: Polyester
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Size: 58 x 28 x 25 cm
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Style: Travel bag
                                        </div>
                                        <div class="mb-0 text-muted small">
                                            Maximum load: 8kg
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">

                                            <h6 class="mb-1 me-1  fw-bold">
                                                <span class=" text-danger">Selling price:</span>
                                                <span class=" text-success">&emsp;&emsp;780,000₫</span>
                                            </h6>
                                        </div>
                                        <div class="d-flex flex-column mt-1">
                                            <button class="btn btn-warning btn-sm" type="button">Details</button>
                                            <button class="btn btn-outline-warning btn-sm mt-2 text-dark" type="button">
                                                Add to wishlist
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
