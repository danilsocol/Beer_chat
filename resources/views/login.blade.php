<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
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
            <h1>🍺 Вход 🍺</h1>
        </div>
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
            </label>
            <button class="btn-login">login</button>
            <p class="message">Not registered? <a href="{{route('register')}}">Create an account</a></p>
            <p class="message"><a href="{{route('password.email')}}">Forgot password</a></p>
        </form>
    </div>
</div>
</body>
</html>
