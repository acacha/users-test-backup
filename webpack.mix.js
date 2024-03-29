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
   .js('resources/assets/js/app-landing.js', 'public/js/app-landing.js')
   .js('resources/assets/js/app-fullscreen.js', 'public/js/app-p-fullscreen.js')
  .sourceMaps()
  .webpackConfig({
    resolve: {
      modules: [
        path.resolve(__dirname, './users/resources/assets/js'),
        path.resolve(__dirname, './users-ebre-escool-migration/resources/assets/js'),
        path.resolve(__dirname, 'node_modules')
      ]
    }
  })
   .scripts([
    'resources/assets/js/modernizr.custom.js',
    'public/js/app-p-fullscreen.js'
    ], 'public/js/app-fullscreen.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .less('node_modules/bootstrap-less/bootstrap/bootstrap.less', 'public/css/bootstrap.css')
   .less('resources/assets/less/adminlte-app.less','public/css/adminlte-app.css')
   .less('node_modules/toastr/toastr.less','public/css/toastr.css')
   .combine([
       'public/css/app.css',
       'node_modules/admin-lte/dist/css/skins/_all-skins.css',
       'public/css/adminlte-app.css',
       'node_modules/icheck/skins/square/blue.css',
       'public/css/toastr.css',
   ], 'public/css/all.css')
   .combine([
       'public/css/bootstrap.css',
       'resources/assets/css/main.css'
   ], 'public/css/all-landing.css')
  .combine([
    'node_modules/normalize.css/normalize.css',
    'resources/assets/css/fullscreen.css'
    ], 'public/css/all-fullscreen.css')
   //APP RESOURCES
   .copy('resources/assets/img/*.*','public/img')
   //VENDOR RESOURCES
   .copy('node_modules/font-awesome/fonts/*.*','public/fonts/')
   .copy('node_modules/ionicons/dist/fonts/*.*','public/fonts/')
   .copy('node_modules/admin-lte/bootstrap/fonts/*.*','public/fonts/bootstrap')
   .copy('resources/assets/fonts/codropsicons','public/fonts/codropsicons')
   .copy('resources/assets/fonts/icomoon','public/fonts/icomoon')
   .copy('node_modules/admin-lte/dist/css/skins/*.*','public/css/skins')
   .copy('node_modules/admin-lte/dist/img','public/img')
   .copy('node_modules/admin-lte/plugins','public/plugins')
   .copy('node_modules/icheck/skins/square/blue.png','public/css')
   .copy('node_modules/icheck/skins/square/blue@2x.png','public/css');

if (mix.config.inProduction) {
  mix.version();
}