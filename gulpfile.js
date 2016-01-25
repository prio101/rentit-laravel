var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    /*Mixing the sass file*/
    mix.sass('app.scss');

    /*
    *  Mixing the javascript files
    *  And returning the compressed file into
    *  public folder
    * */
    mix.scripts([
        'angular/app.js' ,
        'angular/controllers/carsController.js' ,
        'angular/controllers/extraController.js' ,
        'angular/controllers/priceController.js'
        ] , 'public/assets/js/');

});
