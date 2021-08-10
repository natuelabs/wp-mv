!function(){"use strict";var t={357:function(t,e,n){function r(t,e){(null==e||e>t.length)&&(e=t.length);for(var n=0,r=new Array(e);n<e;n++)r[n]=t[n];return r}n.d(e,{Z:function(){return r}})},507:function(t,e,n){function r(t){if(Array.isArray(t))return t}n.d(e,{Z:function(){return r}})},890:function(t,e,n){n.d(e,{Z:function(){return o}});var r=n(357);function o(t){if(Array.isArray(t))return(0,r.Z)(t)}},733:function(t,e,n){function r(t){if("undefined"!=typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)}n.d(e,{Z:function(){return r}})},483:function(t,e,n){function r(t,e){var n=t&&("undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"]);if(null!=n){var r,o,i=[],_n=!0,u=!1;try{for(n=n.call(t);!(_n=(r=n.next()).done)&&(i.push(r.value),!e||i.length!==e);_n=!0);}catch(c){u=!0,o=c}finally{try{_n||null==n.return||n.return()}finally{if(u)throw o}}return i}}n.d(e,{Z:function(){return r}})},7:function(t,e,n){function r(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}n.d(e,{Z:function(){return r}})},154:function(t,e,n){function r(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}n.d(e,{Z:function(){return r}})},258:function(t,e,n){n.d(e,{Z:function(){return c}});var r=n(507),o=n(483),i=n(237),u=n(7);function c(t,e){return(0,r.Z)(t)||(0,o.Z)(t,e)||(0,i.Z)(t,e)||(0,u.Z)()}},766:function(t,e,n){n.d(e,{Z:function(){return c}});var r=n(890),o=n(733),i=n(237),u=n(154);function c(t){return(0,r.Z)(t)||(0,o.Z)(t)||(0,i.Z)(t)||(0,u.Z)()}},237:function(t,e,n){n.d(e,{Z:function(){return o}});var r=n(357);function o(t,e){if(t){if("string"==typeof t)return(0,r.Z)(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?(0,r.Z)(t,e):void 0}}},601:function(){},298:function(t,e,n){var r=n(766),o=n(27),i=n(804),u=n(997),c=n(707),s=n(417),a=n(36);e.Z=(0,s.compose)((0,c.withSelect)((function(t){return{canUserCreate:function(e){return t("core").canUser("create",e)}}})))((function(t){var e=t.searchTerm,n=t.random,c=void 0!==n&&n,s=t.canUserCreate;if(!e)return null;if(!a.Z.length)return null;var l=(0,i.deburr)((0,i.lowerCase)(e)).replace(/^\//,""),d=(0,i.filter)(a.Z,(function(t){var e=t.keywords,n=t.permission;return s(n)&&(0,i.filter)((0,r.Z)(new Set(e)),(function(t){return(0,i.includes)(l,t)})).length}));if(!d.length)return null;var f=c?Math.floor(Math.random()*d.length):0;return(0,o.createElement)("div",{className:"contextual-tip"},(0,o.createElement)(u.Tip,null,(0,i.get)(d,[f,"description"])))}))},36:function(t,e,n){var r=n(27),o=n(163),i=n(334),__=o.__;function u(t,e,n){return void 0!==r.createInterpolateElement?(0,r.createInterpolateElement)(t,e):n}var c=[{context:"theme",keywords:["theme",__("theme","full-site-editing")],description:u(__("You can visit the <a>theme directory</a> to select a different design for your site.","full-site-editing"),{a:(0,r.createElement)(i.Z,{section:"themes"})},__("You can visit the theme directory to select a different design for your site.","full-site-editing")),permission:"settings"},{context:"css",keywords:["css",__("css","full-site-editing"),"style",__("style","full-site-editing")],description:u(__("You can visit the the <a>Customizer</a> to edit the CSS on your site.","full-site-editing"),{a:(0,r.createElement)(i.Z,{section:"customizer",subsection:"custom_css"})},__("You can visit the the Customizer to edit the CSS on your site.","full-site-editing")),permission:"settings"},{context:"plugin",keywords:["plugin",__("plugin","full-site-editing")],description:u(__("You can visit the <a>plugin directory</a> to get started with installing new plugins.","full-site-editing"),{a:(0,r.createElement)(i.Z,{section:"plugins"})},__("You can visit the plugin directory to get started with installing new plugins.","full-site-editing")),permission:"settings"},{context:"header",keywords:["header",__("header","full-site-editing")],description:u(__("You can visit the the <a>Customizer</a> to edit your logo and site title.","full-site-editing"),{a:(0,r.createElement)(i.Z,{section:"customizer",subsection:"title_tagline"})},__("You can visit the the Customizer to edit your logo and site title.","full-site-editing")),permission:"settings"},{context:"color",keywords:["color",__("color","full-site-editing")],description:u(__("You can visit the the <a>Customizer</a> to edit the colors on your site.","full-site-editing"),{a:(0,r.createElement)(i.Z,{section:"customizer",subsection:"colors"})},__("You can visit the the Customizer to edit the colors on your site.","full-site-editing")),permission:"settings"}];e.Z=c},334:function(t,e,n){n.d(e,{Z:function(){return c}});var r=n(27),o=n(707),i=n(365),u=(0,i.y)();function c(t){var e=t.section,n=t.children,c=t.subsection,s=window.location.hostname,a=(0,o.select)("core/editor"),l=a.getCurrentPostId(),d=a.getCurrentPostType(),f=u&&!i.W?"&"+encodeURIComponent("return=https://wordpress.com/".concat(d,"/").concat(s,"/").concat(l)):"",p="autofocus[section]=".concat(c),m="#";switch(e){case"themes":m=u?"https://wordpress.com/themes/".concat(s):"./themes.php";break;case"plugins":m=u||i.W?"https://wordpress.com/plugins/".concat(s):"./plugin-install.php";break;case"customizer":m=u&&i.W?"https://wordpress.com/customize/".concat(s,"?").concat(p):"./customize.php?".concat(p).concat(f)}return(0,r.createElement)("a",{href:m,target:"_blank",rel:"noreferrer noopener"},n)}},365:function(t,e,n){n.d(e,{y:function(){return r},W:function(){return o}});var r=function(){try{return window.self!==window.top}catch(t){return!0}},o=!(!window||!window._currentSiteType||"simple"!==window._currentSiteType)},804:function(t){t.exports=window.lodash},399:function(t){t.exports=window.wp.blockEditor},997:function(t){t.exports=window.wp.components},417:function(t){t.exports=window.wp.compose},707:function(t){t.exports=window.wp.data},27:function(t){t.exports=window.wp.element},163:function(t){t.exports=window.wp.i18n},200:function(t){t.exports=window.wp.plugins}},e={};function n(r){var o=e[r];if(void 0!==o)return o.exports;var i=e[r]={exports:{}};return t[r](i,i.exports,n),i.exports}n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,{a:e}),e},n.d=function(t,e){for(var r in e)n.o(e,r)&&!n.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var r={};!function(){n.r(r);var t=n(258),e=n(27),o=n(804),i=n(399),u=n(200),c=n(298),s=(n(601),void 0!==i.__unstableInserterMenuExtension?i.__unstableInserterMenuExtension:i.__experimentalInserterMenuExtension),a=function(){var n=(0,e.useState)(""),r=(0,t.Z)(n,2),i=r[0],u=r[1],a=(0,o.debounce)(u,400);return(0,e.createElement)(s,null,(function(t){var n=t.filterValue;return t.hasItems||!n?null:(i!==n&&a(n),(0,e.createElement)(c.Z,{searchTerm:n}))}))};void 0!==s&&(0,u.registerPlugin)("block-inserter-contextual-tips",{render:function(){return(0,e.createElement)(a,null)}})}(),window.EditingToolkit=r}();