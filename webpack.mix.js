const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/messenger.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js')
    .js('resources/js/admin.js','public/js')
    .postCss('resources/css/app.css', 'public/css', [])
    .postCss('resources/css/auth.css', 'public/css', [])
    .postCss('resources/css/reg.css', 'public/css', [])
    .postCss('resources/css/messenger.css', 'public/css', [])
    .postCss('resources/css/reset.css', 'public/css', [])
    .postCss('resources/css/authentication.css', 'public/css', [])
    .postCss('resources/css/forgot-password.css', 'public/css', [])
    .postCss('resources/css/admin.css', 'public/css', [])
    .postCss('resources/css/welcome.css', 'public/css', []);
