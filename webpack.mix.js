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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles([
        'resources/assets/front/vendor/bootstrap/css/bootstrap.min.css',
        'resources/assets/front/vendor/icofont/icofont.min.css',
        'resources/assets/front/vendor/boxicons/css/boxicons.min.css',
        'resources/assets/front/vendor/remixicon/remixicon.css',
        'resources/assets/front/vendor/venobox/venobox.css',
        'resources/assets/front/vendor/owl.carousel/assets/owl.carousel.min.css',
        'resources/assets/front/vendor/aos/aos.css',
        'resources/assets/front/css/style.css'
    ],
    'public/assets/front/css/front.css');

mix.copyDirectory('resources/assets/front/img','public/assets/front/img')

mix.scripts([
    'resources/assets/front/vendor/jquery/jquery.min.js',
    'resources/assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/front/vendor/jquery.easing/jquery.easing.min.js',
    'resources/assets/front/vendor/php-email-form/validate.js',
    'resources/assets/front/vendor/waypoints/jquery.waypoints.min.js',
    'resources/assets/front/vendor/counterup/counterup.min.js',
    'resources/assets/front/vendor/venobox/venobox.min.js',
    'resources/assets/front/vendor/owl.carousel/owl.carousel.min.js',
    'resources/assets/front/vendor/isotope-layout/isotope.pkgd.min.js',
    'resources/assets/front/vendor/aos/aos.js',
    'resources/assets/front/js/main.js',
],'public/assets/front/js/front.js')

mix.copyDirectory('resources/assets/front/vendor/boxicons/fonts','public/assets/front/fonts')

mix.copyDirectory('resources/assets/front/vendor/remixicon','public/assets/front/css/')

mix.styles([
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    'resources/assets/admin/plugins/jqvmap/jqvmap.min.css',
    'resources/assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    'resources/assets/admin/dist/css/adminlte.min.css',
    'resources/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
],'public/assets/admin/css/admin.css');

mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts','public/assets/admin/webfonts');

mix.scripts([
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    'resources/assets/admin/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/assets/admin/plugins/jqvmap/jquery.vmap.min.js',
    'resources/assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'resources/assets/admin/plugins/jquery-knob/jquery.knob.min.js',
    'resources/assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'resources/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'resources/assets/admin/dist/js/adminlte.js',
    'resources/assets/admin/dist/js/demo.js',
],'public/assets/admin/js/admin.js')

