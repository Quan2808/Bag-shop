@extends('layout')
@section('title', 'Contact us')

@section('content')
   <main class="mt-5">
        <style>
            .section-parallax-breadcrumb {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/banners/Banner.png);
            }

            .stories {
                background-image: url(images/banners/About/backgroud.png);
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

            .form-control:focus {
                border-color: #ffc107;
                box-shadow: none;
            }
        </style>

        <section class="section-parallax section-parallax-breadcrumb bg-top">
            <div class="container">
                <h1 class="text-white">Contact us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-3">
                        <li class="breadcrumb-item">
                            <a class="text-white link-body-emphasis text-decoration-none" href=" {{ url('/') }}">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="content">
            <div class="container mt-5">
                <h1 class="title mb-5">
                    <b>Contact</b>
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush list-group-no-border">
                            <li class="list-group-item"><strong>Our address:</strong><br> Tan Kien, Binh Chanh, City. HCM.
                            </li>
                            <li class="list-group-item"><strong>Email us:</strong> <br>info@kingbag.vn</li>
                            <li class="list-group-item">
                                <strong>Phone: <br></strong> (028) 6682 39 39
                                <br>B2B Partner: 0911 30 08 08
                                <br>Agent Partner: 0914 72 64 48
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="fw-bold">Send us a question</h3>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Name" placeholder="Your name">
                            <label for="Name">Your name</label>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="Email"
                                        placeholder="name@example.com">
                                    <label for="Email">Your email </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Phone"
                                        placeholder="name@example.com">
                                    <label for="Phone">Your phone number</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Content" id="Content" style="height: 100px"></textarea>
                            <label for="Content">Content</label>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-outline-warning">Send us</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
