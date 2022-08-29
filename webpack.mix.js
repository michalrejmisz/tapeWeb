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
    .js('resources/js/tilt.jquery.min.js', 'public/js/app.js')
    .js('resources/js/scrollfade.js', 'public/js')
    .css('resources/css/layout.css', 'public/css')
    .css('resources/css/dashboard.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();



mix.browserSync({
    proxy:'http://127.0.0.1:8000/',
    host: "192.168.43.162"
});
