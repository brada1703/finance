const mix = require('laravel-mix');
require('mix-tailwindcss');
require('laravel-mix-purgecss')

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css', { implementation: require('node-sass') }).tailwind();
