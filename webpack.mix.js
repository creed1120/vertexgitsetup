let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js')
   .postCss('src/css/app.css', 'css', [
      require('tailwindcss'),
      require('postcss-nested')
   ])
   .options({
      processCssUrls: false
   })
   .setPublicPath('dist');
   
mix.browserSync({
   proxy:'tailwindwpsite.test',
   files: [
      '**/*.css',
      '**/*.js',
		'**/*.php',
	],
});