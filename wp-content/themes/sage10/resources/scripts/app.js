import domReady from '@roots/sage/client/dom-ready';
// import 'bootstrap/js/src/offcanvas.js';
import './../../node_modules/bootstrap/js/src/offcanvas.js';
import './../../node_modules/bootstrap/js/src/dropdown.js';
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
  console.log('here');
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
