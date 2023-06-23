@extends('admin.auth.app')
@section('title', 'Register')
@section('content')
    <form action="{{ URL::to('/admin-dashboard') }}" method="post" class="bg-white rounded-5 shadow-5-strong p-5">
        {{ csrf_field() }}
        <div class="brand-logo text-center">
            <img src="{{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%" class="mb-4">
        </div>
        <h4 class="fw-bold" style="color: #92aad0;">Join us today!</h4>
        <p class="mb-4" style="color: #45526e;">Create an account by filling in your information below.</p>

        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>

        <div class="form-outline mb-4">
            <input type="text" id="email" name="email" class="form-control" required>
            <label class="form-label" for="email" style="margin-left: 0px;">Username</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 64.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control" required>
            <label class="form-label" for="password" style="margin-left: 0px;">Password</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 64.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>
        
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </div>
        <hr>
        <div class="text-center mt-4">
            Already have an account? <a href="{{asset('login')}}" class="text-primary">Log in</a>
        </div>
    </form>
@endsection
