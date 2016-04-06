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
    mix.sass('app.scss');

     // comprime todos los archivos listados en uno solo
    // el segundo argumento representa el nombre del archivo, si es null se guardará como all
    // el tercer argumento es el directorio donde se guardará el archivo generado
    mix.styles([
        'app.css',
        'prueba.css',
    ], null, 'public/css');

    mix.version('public/css/all.css');
});
