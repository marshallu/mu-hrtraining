const mix = require('laravel-mix');

mix.setPublicPath('./');

mix.postCss('./source/css/mu-hrtraining.css', 'css/mu-hrtraining.css', [
    require('postcss-import'),
    require('postcss-nesting'),
    require('tailwindcss'),
		require('autoprefixer')
  ]
);

if (mix.inProduction()) {
    mix.version();
}
