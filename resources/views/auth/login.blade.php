@extends('layouts.app')

@section('login')

    <div class="login-content">
        <div class="splash-container">
            <div class="card ">
                <div class="card-header text-center">
                    <h2>Вход</h2>
                    <span class="splash-description">Пожалуйста, введите ваши данные для входа.</span>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Email" autocomplete="off" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password" autocomplete="current-password">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="custom-control-label">Запомнить меня</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
                    </form>
                </div>
                <div class="card-footer bg-white p-0  ">
                    <div class="card-footer-item card-footer-item-bordered" style="width: 100%;">
                        <a href="{{ route('password.request') }}" class="footer-link" >Забыли пароль?</a>
                    </div>
                </div>
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
