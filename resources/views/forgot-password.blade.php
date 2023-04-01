<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("css/reset200802.css") }}">
    <link rel="stylesheet" href="{{ asset("css/forgot-password.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Forgot Password</title>

</head>
<header class="header">
    <div class="container-route">
        <a class="route" href="{{ route('login') }}" >Log in</a>
    </div>
    <div class="container-route">
        <a class="route" href="{{ route('register') }}">Register</a>
    </div>
</header>
<body>
<div class="login-page">
    <div class="form">
        <div>
            <h1>🍺 Забыл пароль 🍺</h1>
        </div>
        @if(session('status'))
            <div class="notification">
                <div class="notification-block" role="alert" id="success-alert">
                    <i data-feather="check-circle" class="icon"></i>
                    <p class="text">{{session('status')}}</p>
                    <i data-feather="x" class="icon close" id="close-alert"></i>
                </div>
            </div>
        @endif
        <form class="login-form"
              action="{{ route('password.email') }}"
              method="post"
              novalidate
              autocomplete="off"
              id="loginForm">
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
            <button class="btn-login">Send Reset Link</button>
            <p class="message"><a href="{{route('register')}}">Create an account</a></p>
            <p class="message"><a href="{{route('login')}}">Already have account</a></p>
        </form>
    </div>
</div>
</body>
</html>
