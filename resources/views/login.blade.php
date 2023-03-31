<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="login-page">
    <div class="form">
        <div>
            <h1>🍺 Вход 🍺</h1>
        </div>
       {{-- @if(session('status'))
            <div class="notification">
                <div class="notification-block" role="alert" id="success-alert">
                    <i data-feather="check-circle" class="icon"></i>
                    <p class="text">{{session('status')}}</p>
                    <i data-feather="x" class="icon close" id="close-alert"></i>
                </div>
            </div>
        @endif--}}
        <form method="post" action="{{ route('login') }}" autocomplete="off" class="login-form">
            @csrf
            @error('email')
            <div class="error-text">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label>
                <input id="email"
                       name="email"
                       class="login-form-input"
                       type="email"
                       placeholder="Email"
                       required
                       value="{{old('email')}}"/>
                @error('email')
                <div class="login-form-error">
                    <i data-feather="alert-circle" class="alert"></i>
                </div>
                @enderror
            </label>
            @error('password')
            <div class="error-text">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label>
                <input  id="password"
                        name="password"
                        class="password"
                        required type="password"
                        placeholder="Password"
                        minlength="8"
                        value="{{old('password')}}">
                <div class="eye">
                    <i data-feather="eye" class="icon"></i>
                </div>
            </label>
            <button class="btn-login">login</button>
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>
</body>
</html>
