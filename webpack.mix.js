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

/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/

mix.setPublicPath('public/');
mix.setResourceRoot('../');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.version();

mix.copy('resources/tinymce', 'public/tinymce');
mix.copy('resources/css/datatables.min.css', 'public/css/datatables.min.css');
mix.copy('resources/fonts', 'public/fonts');
mix.copy('resources/images', 'public/images');
mix.copy('resources/js/mousewheel.js', 'public/js');
mix.copy('resources/js/mCustomScrollbar.js', 'public/js');
mix.copy('resources/js/custom.js', 'public/js');
mix.copyDirectory('resources/admin_assets', 'public/admin_assets');
