@extends('layouts.app')

@section('login')
    <div class="login-content">
        <div class="splash-container">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Сброс пароля</h2>
                    <span class="splash-description">Пожалуйста, введите ваши данные.</span></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p>Не расстраивайтесь, мы отправим вам письмо с ссылкой на email.</p>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form-group pt-1">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Сбросить пароль</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <span>Вернуться на страницу <a href="{{route('login')}}" style="color: #ff407b;">входа</a></span>
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
