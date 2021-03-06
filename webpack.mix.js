const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

// const assetsPath = 'assets';
// const distPath   = './dist';
// const publicPath = '/app/themes/_skz';
//
// mix.setPublicPath(distPath);
// mix.setResourceRoot('/');

mix.autoload({
  $: "jquery",
  jQuery: "jquery"
})

mix
   .js(`assets/scripts/app.js`, `./dist/scripts`)
   .copyDirectory(`assets/images`, `./dist/images`)
   .copyDirectory(`assets/fonts`, `./dist/fonts`)
   .fastSass(`assets/styles/app.sass`, `./dist/styles`)
   .fastSass(`assets/styles/admin.scss`, `./dist/styles`)
   .browserSync({
       proxy: 'skeptic.dev'
      //  files: [
      //   `${publicPath}/**/*.php`,
      //   `assets/**/*.js`,
      //   `assets/**/*.css`
      // ]
    })
  //  .version([
  //    './dist/scripts/app.js',
  //    './dist/styles/app.css'
  //  ]);


// mix.options({
//  postCss: [
//    require('lost')(),
//    require('rucksack-css')()
//  ]
// });

// // Hash and version files in production.
// if (process.env.NODE_ENV.trim() === 'production') {
//   mix.version([
//     `dist/scripts/app.js`,
//     `dist/styles/app.css`,
//   ])
// }

// // Source maps when not in production.
// if (!process.env.NODE_ENV === 'production') {
//  mix.sourceMaps();
// }

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
