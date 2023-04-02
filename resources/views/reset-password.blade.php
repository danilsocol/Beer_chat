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
    <title>Reset Password</title>

</head>
<body>

<div class="login-page">
    <div class="form">
        <div>
            <h1>🍺 Восстановить пароль 🍺</h1>
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
              action="{{ route('password.update') }}"
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
                       value="{{old('email', $email)}}"/>
                @error('email')
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
            <button class="btn-login">Восстановить</button>
        </form>
        <p class="message"><a href="{{route('register')}}">Create an account</a></p>
        <p class="message"><a href="{{route('login')}}">Already have account</a></p>
    </div>
</div>
</body>
</html>
