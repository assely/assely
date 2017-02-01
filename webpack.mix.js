const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Assely application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Tell Laravel Mix to use the `public` directory.
mix.setPublicPath('public');

mix // Let's mix our application assets.
	.sass('resources/assets/sass/app.scss', 'public/css')
	.js('resources/assets/js/app.js', 'public/js');