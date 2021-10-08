const mix = require('laravel-mix');
const path=require('path')
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


 mix.webpackConfig({
    resolve: {
        alias: {
             'jquery': path.join(__dirname, 'public/js/jquery-3.6.0.min.js')
        }
    }
});
mix.styles([
    'public/css/*.css'
], 'public/css/all.css');

mix.js('public/js/*.js', 'public/js/all.js');
