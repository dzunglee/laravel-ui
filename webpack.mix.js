const mix = require('laravel-mix');

const publicPath = path.resolve(__dirname + '/public/');
const assetPath = path.resolve(__dirname + '/resources');
const LiveReloadPlugin = require('webpack-livereload-plugin');
mix.webpackConfig({
    plugins: [
        new LiveReloadPlugin()
    ]
});


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
   .sass('resources/sass/app.sass', 'public/css');
mix.styles([
    assetPath + '/css/font-awesome.min.css',
    assetPath + '/css/bootstrap.min.css',
    assetPath + '/css/reset.css',
    assetPath + '/css/style.css',
    assetPath + '/css/menu-style.css',
    assetPath + '/css/custom.css',
    assetPath + '/css/custom_responsive.css',
    assetPath + '/css/custom_hai.css',
    assetPath + '/css/custom_hai.css',
    assetPath + '/css/custom_hai.css',
    assetPath + '/css/slider.css',
    assetPath + '/css/app.css',
    publicPath + '/css/app.css',
], publicPath + '/css/my-css.css');


mix.scripts([
    assetPath + '/js/jquery.min.js',
    assetPath + '/js/bootstrap.min.js',
    assetPath + '/js/wow.js',
    assetPath + '/js/script.js',
    assetPath + '/js/imagesloaded.pkgd.min.js',
    assetPath + '/js/isotope.pkgd.js',
    assetPath + '/js/slider.js',
    assetPath + '/js/particles.js',
    publicPath + '/js/app.js',
], publicPath + '/js/my-js.js');


mix.copyDirectory(assetPath + '/fonts', publicPath + '/fonts');

if (mix.inProduction()) {
    mix.version();
}