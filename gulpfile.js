var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('my.scss');

    mix.scripts([
        'vendor/bower_components/jquery/dist/jquery.js',
        'vendor/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
        'vendor/bower_components/bootstrap-material-design/dist/js/ripples.js',
        'vendor/bower_components/bootstrap-material-design/dist/js/material.js',
        'resources/assets/js/app.js'
    ], 'public/js/app.js', './');
});
