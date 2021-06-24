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

mix
    .sass('resources/sass/manage.scss', 'public/css')
    .js('resources/js/manage.js', 'public/js')
    .copyDirectory('node_modules/tinymce/skins', 'public/js/skins')
    .copyDirectory('node_modules/tinymce/icons', 'public/js/icons')
    .copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')

    .sass('resources/sass/visible.scss', 'public/css')
    .js('resources/js/visible.js', 'public/js')
    .copyDirectory('resources/visible/img', 'public/img')

    .options({
        processCssUrls: false
    })
    .version()
    .disableNotifications();
