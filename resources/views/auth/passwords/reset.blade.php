@extends('layouts.app')

@section('content')

    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="../assets/images/logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form>
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Reset Password</a></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="pages-sign-up.html">Sign Up123</a></span>
            </div>
        </div>
    </div>

    @push('styles-login')
        <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <link href="{{asset('/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/assets/libs/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    @endpush
    @push('scripts-login')
        <script src="{{asset('/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    @endpush
@endsection
