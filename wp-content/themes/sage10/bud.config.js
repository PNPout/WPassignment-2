/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
const {purgecss} = require('@roots/bud-purgecss')

const fs = require('fs');
const path = require('path');

const styleFiles = fs.readdirSync(path.resolve(__dirname, 'resources', 'styles', 'styles'), 'utf-8');
const scriptFiles = fs.readdirSync(path.resolve(__dirname, 'resources', 'scripts', 'modules'), 'utf-8');
var styleArray = {};
var scriptArray = {};
styleFiles.forEach(style => {
  styleArray[`styles/${path.parse(style).name}`] = path.resolve(__dirname, 'resources/styles', 'styles', style)
});

scriptFiles.forEach(script => {
  scriptArray[`scripts/${path.parse(script).name}`] = path.resolve(__dirname, 'resources/scripts', 'modules', script)
});
console.log(styleArray);
console.log(scriptArray);
// const StylelintPlugin = require('stylelint-webpack-plugin');


module.exports = async (app) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    // .entry({
    //   // app: ['@scripts/app', '@styles/app'],
    //   leadspace: '/var/html/Local/outside1/app/public/wp-content/themes/sage10/resources/scripts/modules/leadspace.js',
    //   leadspace: '/var/html/Local/outside1/app/public/wp-content/themes/sage10/resources/styles/styles/leadspace.scss',
    // })

    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })

    .entry(styleArray)
    .entry(scriptArray)
    .purgecss({
      safelist: [
        'aayus',
        'body',
      ],
    })
    // .purgecss({
    //   content: [app.path('resources/views/**')],
    //   safelist: [...require('purgecss-with-wordpress').safelist],
    // })
    .template()
    .minimize()
    .hash(false)
    // .entryPoints()
    .runtime()
    .splitChunks()
    

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets('images')

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    // .watch([
    //   'tailwind.config.js',
    //   'resources/views/**/*.blade.php',
    //   'app/View/**/*.php',
    // ])
    .watch(
      'resources/styles/**/*',
      'resources/scripts/**/*',
      'resources/views/**/*',
      'app/**/*'
    )

    /**
     * Target URL to be proxied by the dev server.
     *
     * This is your local dev server.
     */
    .proxy('http://outside1.pv')

    /**
     * Development URL
     */
    .serve('http://outside1.pv:3000');
};
