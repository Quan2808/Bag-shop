<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/924836a647.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#Bar"
                    aria-controls="Bar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="Bar">
                    <!-- Navbar brand -->
                    {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/logo/logo.png" height="50" alt="BAG Logo" loading="lazy" />
                </a> --}}
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/introduce') }}">Introduce</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Product
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/product') }} ">Product</a></li>
                                <li><a class="dropdown-item" href="{{ url('/laptop-bag') }} ">Laptop Bag</a></li>
                                <li><a class="dropdown-item" href="{{ url('/crossbody-bag') }} ">Crossbody bag</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/travel-bag') }} ">Travel bag</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Product on demand
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('/') }}">Custom made
                                        backpacks</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/') }}">Custom made bags</a></li>
                                <li><a class="dropdown-item" href="{{ url('/') }}">Custom made pairs</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/agent-system') }}">Agent system</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon -->
                    <a class="text-reset me-3" href="{{ url('/cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                    </a>

                    <!-- Notifications -->
                    <div class="dropdown">
                        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="Search"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-search"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Search">
                            <li class="p-3">
                                <form>
                                    <!-- Name input -->
                                    <div class="form-outline mb-2">
                                        <input type="text" id="form5Example1" class="form-control" />
                                        <label class="form-label" for="form5Example1">Search</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block"><i
                                            class="fas fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                        </ul>
                    </div>
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a class="text-reset dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                            id="User" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="User">
                            {{-- <li>
                            <a class="dropdown-item" href="#">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li> --}}
                            <li>
                                <a class="dropdown-item" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->


    </header>


    @yield('content')

    <footer class="text-center text-lg-start bg-light text-muted">
        <section class="container d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div>

                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i>
                </a>

                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i>
                </a>

                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i>
                </a>

                <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i>
                </a>
            </div>
        </section>
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h5 class="fw-bold mb-4">
                            Introduce
                        </h5>
                        <p>
                            Please cooperate with us, you will see your brand shine in the market, we are always
                            committed to quality, professionalism and dedicated service.
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h5 class="fw-bold mb-4">
                            Products
                        </h5>
                        <p>
                            <a href="{{ url('/laptop-bag') }} " class="text-decoration-none text-reset">Laptop
                                bag</a>
                        </p>
                        <p>
                            <a href="{{ url('/crossbody-bag') }} " class="text-decoration-none text-reset">Crossbody
                                bag</a>
                        </p>
                        <p>
                            <a href="{{ url('/travel-bag') }} " class="text-decoration-none text-reset">Travel
                                bag</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h5 class="fw-bold mb-4">
                            Legal & Questions
                        </h5>
                        <p>
                            <a class="text-decoration-none text-reset" href="{{ url('/return-policy') }}">Return
                                Policy</a>
                        </p>
                        <p>
                            <a class="text-decoration-none text-reset" href="{{ url('/privacy-policy') }}">Privacy
                                Policy</a>
                        </p>
                        <p>
                            <a class="text-decoration-none text-reset" href="{{ url('/term') }}">Terms of
                                Service</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h5 class="fw-bold mb-4">Contact</h5>
                        <p><i class="fas fa-home me-3"></i>Tan Kien, Binh Chanh, City. HCM</p>
                        <p><i class="fas fa-envelope me-3"></i>info@kingbag.vn</p>
                        <p><i class="fas fa-phone me-3"></i>(+84) 911 300 808</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            Copyright © 2023 - Group 3
        </div>
    </footer>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
