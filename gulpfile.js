var elixir = require('laravel-elixir');

var paths = {
  jquery: 'vendor/bower_components/jquery/dist/jquery.js',
  bootstrap: 'vendor/bower_components/bootstrap-sass/assets/'
};

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your WordPlate application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.publicPath = 'public/themes/default/dist';
elixir.config.css.sass.folder = 'styles';
elixir.config.css.outputFolder = 'css';
elixir.config.js.folder = 'scripts';
elixir.config.js.outputFolder = 'js';

elixir(function (mix) {
  mix.sass('app.scss');

  // Copy Bootstrap fonts
  mix.copy(paths.bootstrap + 'fonts', elixir.config.publicPath + '/fonts');

  mix.scripts([
    '../../../' + paths.jquery,
    '../../../' + paths.bootstrap + 'javascripts/bootstrap.js',
    'app.js'
  ]);

  mix.copy(elixir.config.assetsPath + '/images', elixir.config.publicPath + '/images');
});
