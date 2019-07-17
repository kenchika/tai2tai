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
//////import scss from node modules
sass('resources/sass/app.scss', 'public/css', {
includePaths: [path.resolve(__dirname, 'node_modules')]
})
const path = require('path');
*/


const path = require('path');

mix.sass('resources/sass/app.scss', 'public/css', {
includePaths: [path.resolve(__dirname, 'node_modules')]
})

;
