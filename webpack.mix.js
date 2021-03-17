const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/previewPhoto.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .js('resources/js/dragNDrop.js', 'public/js')
    .js('resources/js/navBarBurguer.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .sourceMaps();
