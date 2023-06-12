@extends('layout')
@section('title', 'Laptop bag')

@section('content')
    <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner_3.png);
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
                <h1 class="text-white">Laptop bag</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/product') }}">
                                Product
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Laptop bag
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="product">
            <div class="container mt-5">

                <div class="container">
                    <div class="row ">

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="images/products/laptop-bag/KINGBAG READY/balo_laptop_kingbag_ready__1.png" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">KINGBAG READY</h5>
                                    <p class="card-text fw-bold">
                                        Selling price: <span class="text-success">938,000 VND</span>
                                    </p>

                                    <div class="text-center">
                                        <div class="btn-group shadow-0" role="group">
                                            <button type="button" class="btn btn-warning" data-mdb-color="dark">
                                                <i class="fa fa-cart-shopping fa-lg"></i> Add to cart
                                            </button>
                                            <button type="button" class="btn btn-link" data-mdb-color="dark">
                                                <i class="fa fa-basket-shopping fa-lb"></i> Buy now
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="images/products/laptop-bag/KINGBAG ZELOS/balo_laptop_kingbag_zelos__1.png" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">KINGBAG ZELOS</h5>
                                    <p class="card-text fw-bold">
                                        Selling price: <span class="text-success">1,186,000 VND</span>
                                    </p>

                                    <div class="text-center">
                                        <div class="btn-group shadow-0" role="group">
                                            <button type="button" class="btn btn-warning" data-mdb-color="dark">
                                                <i class="fa fa-cart-shopping fa-lg"></i> Add to cart
                                            </button>
                                            <button type="button" class="btn btn-link" data-mdb-color="dark">
                                                <i class="fa fa-basket-shopping fa-lb"></i> Buy now
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="images/products/laptop-bag/KINGBAG HORIZON/1.png" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                    </a>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">KINGBAG HORIZON</h5>
                                    <p class="card-text fw-bold">
                                        Selling price: <span class="text-success">1,128,000 VND</span>
                                    </p>

                                    <div class="text-center">
                                        <div class="btn-group shadow-0" role="group">
                                            <button type="button" class="btn btn-warning" data-mdb-color="dark">
                                                <i class="fa fa-cart-shopping fa-lg"></i> Add to cart
                                            </button>
                                            <button type="button" class="btn btn-link" data-mdb-color="dark">
                                                <i class="fa fa-basket-shopping fa-lb"></i> Buy now
                                            </button>
                                        </div>
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
