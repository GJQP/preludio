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
   .scripts(['public/js/main.js',
            //'public/js/jquery-2.1.4.min.js',
            //'public/js/circle-progress.min.js',
            //'public/js/isotope.pkgd.min.js',
            //'public/js/jquery.owl-filter.js',
            //'public/js/magnific-popup.min.js',
            //'public/js/map.js',
            //'public/js/owl.carousel.min.js'
      ],'public/js/all.js')

   .styles([//'public/css/animate.css',
            'public/css/bootstrap.min.css',
            'public/css/font-awesome.min.css',
            //'public/css/magnific-popup.css',
            //'public/css/owl.carousel.css',
            'public/css/style.css'],'public/css/all.css')
   .sass('resources/sass/app.scss', 'public/css');
