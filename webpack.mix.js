const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js/app.js')
//     .js('public/vendor/bootstrap/js/bootstrap.min.js', 'public/js/app.min.js')
//     .js('resources/js/plugins-scroll.js', 'public/js/app.js')
//     .js('resources/js/function.js', 'public/js/app.js')
//     .js('resources/js/wp-embed.min.js', 'public/js/app.min.js')
//     .postCss('public/vendor/bootstrap/css/bootstrap.min.css', 'public/js/app.min.css')
//     .postCss('resources/css/style.css', 'public/css/app.css')
//     .postCss('resources/css/style.min.css', 'public/css/app.min.css');

mix.postCss('public/vendor/bootstrap/css/bootstrap.min.css', 'public/css/app.min.css')
    .postCss('resources/css/style.css', 'public/css/app.css')
    .postCss('resources/css/style.min.css', 'public/css/app.min.css')
    .js('resources/js/app.js', 'public/js/app.js')
    .js('public/vendor/bootstrap/js/bootstrap.min.js', 'public/js/app.min.js')
    .js('resources/js/plugins-scroll.js', 'public/js/app.js')
    .js('resources/js/function.js', 'public/js/app.js')
    .js('resources/js/wp-embed.min.js', 'public/js/app.min.js');
