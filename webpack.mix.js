const mix = require('laravel-mix');
/*
|--------------------------------------------------------------------------
| Смешанное управление активами
|--------------------------------------------------------------------------
|
| Mix предоставляет чистый, плавный API для определения некоторых шагов сборки Webpack
| для ваших приложений Laravel. По умолчанию мы компилируем CSS
| файл для приложения, а также объединение всех файлов JS.
|
*/
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/messenger.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/auth.css', 'public/css', [])
    .postCss('resources/css/reg.css', 'public/css', [])
    .postCss('resources/css/messenger.css', 'public/css', [])
    .postCss('resources/css/reset.css', 'public/css', []);
