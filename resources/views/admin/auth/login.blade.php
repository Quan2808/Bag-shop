@extends('admin.auth.app')
@section('title', 'Log in')
@section('content')

    <form action="{{ route('postLogin') }}" method="post" class="bg-white rounded-5 shadow-5-strong p-5">

        @csrf

        <div class="brand-logo text-center">
            <img src="{{ asset('images/logo/logo.png') }}" alt="logo" style="width: 40%" class="mb-4">
        </div>
        <h4 class="fw-bold" style="color: #92aad0;">Welcome back</h4>
        <p class="mb-4" style="color: #45526e;">To log in, please fill in these text fiels with your
            e-mail address and password.</p>

        @if (session('error') || $errors->has('email') || $errors->has('password'))
            <div class="alert alert-danger text-center" role="alert">
                @if (session('error'))
                    {{ session('error') }}<br>
                @else
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}<br>
                    @endif

                    @if ($errors->has('password'))
                        {{ $errors->first('password') }}<br>
                    @endif
                @endif
            </div>
        @endif

        <div class="form-outline mb-4">

            <input type="text" id="email" name="email" class="form-control">
            <label class="form-label" for="email" style="margin-left: 0px;">Email</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 64.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>

        <div class="form-outline mb-4">
            <input type="password" id="password" name="password" class="form-control">
            <label class="form-label" for="password" style="margin-left: 0px;">Password</label>
            <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 64.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-4">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Keep me signed in
                    <i class="input-helper"></i></label>
            </div>
            <a href="">Forgot password?</a>
        </div>
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </div>
        <hr>
        <div class="text-center mt-4">
            Don't have an account? <a href="{{ asset('/register') }}" class="text-primary">Create</a>
        </div>
    </form>
@endsection
