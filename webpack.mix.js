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
   .js( 'resources/js/test.js', 'public/js' )
   .js( 'resources/js/Register.js', 'public/js' )
   .js('resources/js/test2.js', 'public/js')
   .js('resources/js/testQuizCommon', 'public/js')
   .js('resources/js/gazouSetting', 'public/js')
.autoload( {
    "jquery": [ '$', 'window.jQuery' ],
} )
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/test2.scss', 'public/css')
    .vue()
    .sourceMaps();
