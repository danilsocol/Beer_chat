<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
    </head>
    <header class="header">
        <div class="container-route">
            <a class="route" href="{{ route('login') }}" >Log in</a>
        </div>
        <div class="container-route">
            <a class="route" href="{{ route('register') }}">Register</a>
        </div>
    </header>
    <body >
        <div class="container">
            <div class="title">
                <h1>🍺 Welcome to Beer-Chat 🍺</h1>
            </div>
            <div class="description">
                <div class="block-text">
                    <div class="container-text">
                        <h3>Если вы любите пиво 🍺</h3>
                        <h3>Если вы любите php 🍺</h3>
                        <h3>Если вы хотите чтобы ваш ФСБшник знал о вас всё 🍺</h3>
                        <h3>То представляю к вашему вниманию Beer-Chat 🍺</h3>
                    </div>
                </div>
                <div class="container-btn">
                    <a class="btn" href="{{ route('messenger') }}">Го за Пивом</a>
                </div>
                <div class="block-img">
                    <img class="img-pivo" src="https://posudaguide.ru/wp-content/uploads/2019/04/Pivnaya-kruzhka.jpg"/>
                </div>
            </div>

        </div>
    </body>
</html>
