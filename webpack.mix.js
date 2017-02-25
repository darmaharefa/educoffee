const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
	.sass('resources/assets/sass/frontend/home.scss', 'public/css')
	.sass('resources/assets/sass/frontend/login.scss', 'public/css')
	.sass('resources/assets/sass/frontend/register.scss', 'public/css')
	.sass('resources/assets/sass/frontend/komparasi.scss', 'public/css')
	.sass('resources/assets/sass/frontend/details-coffee.scss', 'public/css')
	.sass('resources/assets/sass/frontend/details-resep.scss', 'public/css')
	.sass('resources/assets/sass/frontend/list-coffee.scss', 'public/css')
	.sass('resources/assets/sass/frontend/list-mesin.scss', 'public/css')
	.sass('resources/assets/sass/frontend/list-resep.scss', 'public/css')
	.sass('resources/assets/sass/frontend/profil.scss', 'public/css')
	.sass('resources/assets/sass/frontend/details-mesin.scss', 'public/css');
