<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/reg.css') }}" rel="stylesheet" type="text/css">
    <title>Document</title>
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
            <h1>🍺Регистрация🍺</h1>
        </div>
        <form method="post" action="{{ route('register') }}" autocomplete="off" class="register-form">
            @csrf
            @error('email')
            <div class="error-text">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label>
                <input name="email"
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
            @error('name')
            <div class="error-text">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label>
                <input name="name"
                       type="text"
                       placeholder="name"
                       value="{{old('name')}}"/>
                @error('name')
                <div class="login-form-error">
                    <i data-feather="alert-circle" class="alert"></i>
                </div>
                @enderror
            </label>
            @error('username')
            <div class="error-text">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label>
                <input name="username"
                       type="text"
                       placeholder="username"
                       value="{{old('username')}}" />
                @error('username')
                <div class="login-form-error">
                    <i data-feather="alert-circle" class="alert"></i>
                </div>
                @enderror
            </label>
            @error('password')
            @if ($message !== "The password confirmation does not match.")
                <div class="error-text">
                    <span>{{ $message }}</span>
                </div>
            @endif
            @enderror
            <label>
                <input name="password"
                       required type="password"
                       placeholder="password"
                       minlength="8"
                       value="{{old('password')}}">
            </label>
            @error('password')
            @if ($message === "The password confirmation does not match.")
                <div class="error-text">
                    <span>{{ $message }}</span>
                </div>
            @endif
            @enderror
            <label>
                <input
                    name="password_confirmation"
                    required type="password"
                    placeholder="confirm password"
                    minlength="8">
            </label>

            <button type="submit">create</button>
            <p class="message">Already registered? <a href="{{ route('login') }}">Sign In</a></p>
        </form>
    </div>
</div>
</body>
</html>
