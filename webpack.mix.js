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


mix.js('resources/js/app.js', "js/app.js")
    .sass('resources/sass/app.scss', 'css/app.css')
    .version()
    .options({ processCssUrls: false });

mix.js('resources/js/admin/admin.js', "js/admin.js")
    .sass('resources/sass/admin/admin.scss', "css/admin.css")
    .version()
    .options({ processCssUrls: false });

mix.js('resources/js/unigen.js', "js/unigen.js")
    .version()
    .options({ processCssUrls: false });
