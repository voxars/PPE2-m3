/* $Id: mrbs-js-overrides.js 1047 2009-03-13 19:44:08Z cimorrison $  */

/* Creates a link to a JavaScript over-ride stylesheet */

var cssNode = document.createElement('link');
cssNode.setAttribute('rel', 'stylesheet');
cssNode.setAttribute('type', 'text/css');
cssNode.setAttribute('href', 'mrbs-js-overrides.css.php');
document.getElementsByTagName('head')[0].appendChild(cssNode);

