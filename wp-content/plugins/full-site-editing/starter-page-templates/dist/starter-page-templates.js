!function(){"use strict";var e={357:function(e,t,n){function r(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}n.d(t,{Z:function(){return r}})},507:function(e,t,n){function r(e){if(Array.isArray(e))return e}n.d(t,{Z:function(){return r}})},989:function(e,t,n){function r(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}n.d(t,{Z:function(){return r}})},659:function(e,t,n){function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}n.d(t,{Z:function(){return r}})},730:function(e,t,n){function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function o(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),e}n.d(t,{Z:function(){return o}})},54:function(e,t,n){n.d(t,{Z:function(){return o}});var r=n(237);function o(e,t){var n;if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(n=(0,r.Z)(e))||t&&e&&"number"==typeof e.length){n&&(e=n);var o=0,a=function(){};return{s:a,n:function(){return o>=e.length?{done:!0}:{done:!1,value:e[o++]}},e:function(e){throw e},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,c=!0,u=!1;return{s:function(){n=e[Symbol.iterator]()},n:function(){var e=n.next();return c=e.done,e},e:function(e){u=!0,i=e},f:function(){try{c||null==n.return||n.return()}finally{if(u)throw i}}}}},49:function(e,t,n){n.d(t,{Z:function(){return i}});var r=n(630),o=n(733),a=n(591);function i(e){var t=(0,o.Z)();return function(){var n,o=(0,r.Z)(e);if(t){var i=(0,r.Z)(this).constructor;n=Reflect.construct(o,arguments,i)}else n=o.apply(this,arguments);return(0,a.Z)(this,n)}}},119:function(e,t,n){function r(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}n.d(t,{Z:function(){return r}})},560:function(e,t,n){function r(){return(r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e}).apply(this,arguments)}n.d(t,{Z:function(){return r}})},630:function(e,t,n){function r(e){return(r=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}n.d(t,{Z:function(){return r}})},663:function(e,t,n){n.d(t,{Z:function(){return o}});var r=n(938);function o(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&(0,r.Z)(e,t)}},733:function(e,t,n){function r(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}n.d(t,{Z:function(){return r}})},483:function(e,t,n){function r(e,t){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e)){var n=[],_n=!0,r=!1,o=void 0;try{for(var a,i=e[Symbol.iterator]();!(_n=(a=i.next()).done)&&(n.push(a.value),!t||n.length!==t);_n=!0);}catch(c){r=!0,o=c}finally{try{_n||null==i.return||i.return()}finally{if(r)throw o}}return n}}n.d(t,{Z:function(){return r}})},7:function(e,t,n){function r(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}n.d(t,{Z:function(){return r}})},394:function(e,t,n){n.d(t,{Z:function(){return a}});var r=n(119);function o(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function a(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach((function(t){(0,r.Z)(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}},530:function(e,t,n){n.d(t,{Z:function(){return o}});var r=n(283);function o(e,t){if(null==e)return{};var n,o,a=(0,r.Z)(e,t);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(e);for(o=0;o<i.length;o++)n=i[o],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(a[n]=e[n])}return a}},283:function(e,t,n){function r(e,t){if(null==e)return{};var n,r,o={},a=Object.keys(e);for(r=0;r<a.length;r++)n=a[r],t.indexOf(n)>=0||(o[n]=e[n]);return o}n.d(t,{Z:function(){return r}})},591:function(e,t,n){n.d(t,{Z:function(){return a}});var r=n(929),o=n(989);function a(e,t){return!t||"object"!==(0,r.Z)(t)&&"function"!=typeof t?(0,o.Z)(e):t}},938:function(e,t,n){function r(e,t){return(r=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}n.d(t,{Z:function(){return r}})},258:function(e,t,n){n.d(t,{Z:function(){return c}});var r=n(507),o=n(483),a=n(237),i=n(7);function c(e,t){return(0,r.Z)(e)||(0,o.Z)(e,t)||(0,a.Z)(e,t)||(0,i.Z)()}},929:function(e,t,n){function r(e){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}n.d(t,{Z:function(){return r}})},237:function(e,t,n){n.d(t,{Z:function(){return o}});var r=n(357);function o(e,t){if(e){if("string"==typeof e)return(0,r.Z)(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?(0,r.Z)(e,t):void 0}}},580:function(){},28:function(e,t,n){n.d(t,{P:function(){return p}});var r=n(560),o=n(394),a=n(27),i=(n(742),n(707)),c=n(799),u=n(18),l="isInsertingPagePattern",s="automattic/full-site-editing/inserting-pattern";function p(e){var t=(0,i.useDispatch)("automattic/starter-page-layouts").setOpenState,n=(0,i.useDispatch)("core/block-editor").replaceInnerBlocks,p=(0,i.useDispatch)("core/editor").editPost,f=(0,i.useDispatch)("core/edit-post").toggleFeature,d=(0,i.useDispatch)("core/nux").disableTips,m=(0,i.useSelect)((function(e){return{isOpen:(0,e("automattic/starter-page-layouts").isOpen)(),isWelcomeGuideActive:e("core/edit-post").isFeatureActive("welcomeGuide"),areTipsEnabled:!!e("core/nux")&&e("core/nux").areTipsEnabled()}})),g=(0,i.useSelect)((function(e){return{getMeta:function(){return e("core/editor").getEditedPostAttribute("meta")},postContentBlock:e("core/editor").getBlocks().find((function(e){return"a8c/post-content"===e.name}))}})),v=g.getMeta,y=g.postContentBlock,b=(0,a.useCallback)((function(e){var t=v();p({meta:(0,o.Z)((0,o.Z)({},t),{},{_starter_page_template:e})})}),[p,v]),h=(0,a.useCallback)((function(e,t){(0,c.addFilter)(l,s,(function(){return!0})),e&&p({title:e}),n(y?y.clientId:"",t,!1),(0,c.removeFilter)(l,s)}),[p,y,n]),_=m.isWelcomeGuideActive,w=m.areTipsEnabled,Z=(0,a.useCallback)((function(){_?f("welcomeGuide"):w&&d()}),[w,d,_,f]);return(0,a.createElement)(u.Z,(0,r.Z)({},m,{setOpenState:t,savePatternChoice:b,insertPattern:h,hideWelcomeGuide:Z},e))}},168:function(e,t,n){var r=n(530),o=n(707);(0,o.registerStore)("automattic/starter-page-layouts",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"CLOSED",t=arguments.length>1?arguments[1]:void 0,n=t.type,o=(0,r.Z)(t,["type"]);return"SET_IS_OPEN"===n?o.openState:e},actions:{setOpenState:function(e){return{type:"SET_IS_OPEN",openState:e||"CLOSED"}}},selectors:{isOpen:function(e){return"CLOSED"!==e}}})},18:function(e,t,n){var r=n(258),o=n(54),a=n(659),i=n(730),c=n(989),u=n(663),l=n(49),s=n(119),p=n(27),f=n(804),d=n(163),m=n(997),g=n(314),v=n(417),y=n(958),b=n(884),h=n(656),_=n(480),w=n(531),Z=n(988),__=d.__,O=function(e){(0,u.Z)(n,e);var t=(0,l.Z)(n);function n(e){var r;return(0,a.Z)(this,n),r=t.call(this,e),(0,s.Z)((0,c.Z)(r),"getBlocksByPatternSlugs",(0,f.memoize)((function(e){var t=e.reduce((function(e,t){var n=t.name,o=t.html;return e[n]=o?(0,g.parse)((0,h.Z)(o,r.props.siteInformation)):[],e}),{});return r.filterPatternsWithMissingBlocks(t)}))),(0,s.Z)((0,c.Z)(r),"getBlocksForSelection",(function(e){var t=r.getBlocksByPatternSlug(e);return(0,_.Z)(t,(function(e){return"core/button"===e.name&&void 0!==e.attributes.url&&(e.attributes.url="#"),e}))})),(0,s.Z)((0,c.Z)(r),"setPattern",(function(e){if((0,b.E2)(e),r.props.savePatternChoice(e),"blank"===e)return r.props.insertPattern("",[]),void r.props.setOpenState(!1);var t=r.props.patterns.find((function(t){return t.name===e})),n=((null==t?void 0:t.categories)||{}).hasOwnProperty("home"),o=r.getBlocksForSelection(e),a=n?null:(null==t?void 0:t.title)||"";o&&o.length?(r.props.insertPattern(a,o),r.props.setOpenState(!1)):r.props.setOpenState(!1)})),(0,s.Z)((0,c.Z)(r),"handleCategorySelection",(function(e){r.setState({selectedCategory:e})})),(0,s.Z)((0,c.Z)(r),"closeModal",(function(){(0,b.GI)(),r.props.setOpenState(!1)})),(0,s.Z)((0,c.Z)(r),"getPatternGroups",(function(){if(!r.props.patterns.length)return null;var e,t={},n=(0,o.Z)(r.props.patterns);try{for(n.s();!(e=n.n()).done;){var a=e.value;for(var i in a.categories)i in t||(t[i]=a.categories[i])}}catch(c){n.e(c)}finally{n.f()}return(0,Z.x)(["featured","about","blog","home","gallery","services","contact"],t)})),(0,s.Z)((0,c.Z)(r),"getPatternsForGroup",(function(e){if(!r.props.patterns.length)return null;if("blank"===e)return[{name:"blank",title:"Blank",html:"",ID:null}];var t,n=[],a=(0,o.Z)(r.props.patterns);try{for(a.s();!(t=a.n()).done;){var i=t.value;for(var c in i.categories)c===e&&n.push(i)}}catch(u){a.e(u)}finally{a.f()}return n})),(0,s.Z)((0,c.Z)(r),"getPatternCategories",(function(){var e=r.getPatternGroups();if(!e)return null;var t=[];for(var n in e)t.push({slug:n,name:e[n].title});return t})),(0,s.Z)((0,c.Z)(r),"renderPatternGroup",(function(){var e,t,n=r.state.selectedCategory;if(!n)return null;var o=r.getPatternsForGroup(n);if(null==o||!o.length)return null;var a=null===(e=r.getPatternGroups())||void 0===e||null===(t=e[n])||void 0===t?void 0:t.title;return r.renderPatternsList(o,a)})),(0,s.Z)((0,c.Z)(r),"renderPatternsList",(function(e,t){if(!e.length)return null;var n,o=r.getBlocksByPatternSlugs(r.props.patterns),a=Object.keys(o),i=(n=a,e.filter((function(e){return n.includes(e.name)})));return i.length?(0,p.createElement)(y.Z,{label:__("Layout","full-site-editing"),legendLabel:t,patterns:i,onPatternSelect:r.setPattern,theme:r.props.theme,locale:r.props.locale,siteInformation:r.props.siteInformation}):null})),r.state={selectedCategory:r.getDefaultSelectedCategory()},r}return(0,i.Z)(n,[{key:"filterPatternsWithMissingBlocks",value:function(e){return Object.entries(e).reduce((function(e,t){var n=(0,r.Z)(t,2),o=n[0],a=n[1];return(0,w.Z)(a)&&a.length||(e[o]=a),e}),{})}},{key:"componentDidMount",value:function(){this.props.isOpen&&this.trackCurrentView()}},{key:"componentDidUpdate",value:function(e){!e.isOpen&&this.props.isOpen&&this.trackCurrentView(),(this.props.isWelcomeGuideActive||this.props.areTipsEnabled)&&this.props.hideWelcomeGuide()}},{key:"trackCurrentView",value:function(){(0,b.Fk)("add-page")}},{key:"getDefaultSelectedCategory",value:function(){var e=this.getPatternCategories();return null!=e&&e.length?e[0].slug:null}},{key:"getBlocksByPatternSlug",value:function(e){var t,n;return null!==(t=null===(n=this.getBlocksByPatternSlugs(this.props.patterns))||void 0===n?void 0:n[e])&&void 0!==t?t:[]}},{key:"render",value:function(){var e,t,n=this,r=this.state.selectedCategory,o=this.props,a=o.isOpen,i=o.instanceId;return a?(0,p.createElement)(m.Modal,{title:"",className:"page-pattern-modal",onRequestClose:this.closeModal,aria:{labelledby:"page-pattern-modal__heading-".concat(i),describedby:"page-pattern-modal__description-".concat(i)}},(0,p.createElement)("div",{className:"page-pattern-modal__inner"},(0,p.createElement)("div",{className:"page-pattern-modal__sidebar"},(0,p.createElement)("h1",{id:"page-pattern-modal__heading-".concat(i),className:"page-pattern-modal__heading"},__("Add a page","full-site-editing")),(0,p.createElement)("p",{id:"page-pattern-modal__description-".concat(i),className:"page-pattern-modal__description"},__("Pick a pre-defined layout or start with a blank page.","full-site-editing")),(0,p.createElement)("div",{className:"page-pattern-modal__button-container"},(0,p.createElement)(m.Button,{isSecondary:!0,onClick:function(){return n.setPattern("blank")},className:"page-pattern-modal__blank-button"},__("Blank page","full-site-editing")),(0,p.createElement)("select",{className:"page-pattern-modal__mobile-category-dropdown",value:null!=r?r:void 0,onChange:function(e){return n.handleCategorySelection(e.currentTarget.value)}},null===(e=this.getPatternCategories())||void 0===e?void 0:e.map((function(e){var t=e.slug,n=e.name;return(0,p.createElement)("option",{key:t,value:t},n)})))),(0,p.createElement)(m.VisuallyHidden,{as:"h2",id:"page-pattern-modal__list-heading-".concat(i)},__("Page categories","full-site-editing")),(0,p.createElement)(m.NavigableMenu,{className:"page-pattern-modal__category-list",orientation:"vertical","aria-labelledby":"page-pattern-modal__list-heading-".concat(i),onNavigate:function(e,t){var r;return n.handleCategorySelection(null!==(r=t.dataset.slug)&&void 0!==r?r:null)}},null===(t=this.getPatternCategories())||void 0===t?void 0:t.map((function(e){var t=e.slug,o=e.name;return(0,p.createElement)(m.MenuItem,{key:t,isTertiary:!0,"aria-selected":t===r,"data-slug":t,onClick:function(){return n.handleCategorySelection(t)},className:"page-pattern-modal__category-button",tabIndex:t===r?void 0:-1},(0,p.createElement)("span",{className:"page-pattern-modal__category-item-selection-wrapper"},o))})))),(0,p.createElement)("div",{className:"page-pattern-modal__pattern-list-container"},this.renderPatternGroup()))):null}}]),n}(p.Component);t.Z=(0,v.withInstanceId)(O)},958:function(e,t,n){var r=n(27),o=n(997),a=n(695),i=n(656),c=n(417),u=function(){};t.Z=(0,r.memo)((0,c.withInstanceId)((function(e){var t=e.instanceId,n=e.label,c=e.legendLabel,l=e.patterns,s=void 0===l?[]:l,p=e.theme,f=void 0===p?"maywood":p,d=e.locale,m=void 0===d?"en":d,g=e.onPatternSelect,v=void 0===g?u:g,y=e.siteInformation,b=void 0===y?{}:y;return Array.isArray(s)&&s.length?(0,r.createElement)(o.BaseControl,{id:"pattern-selector-control__".concat(t),label:n,className:"pattern-selector-control"},(0,r.createElement)("ul",{className:"pattern-selector-control__options","data-testid":"pattern-selector-control-options","aria-label":c},s.map((function(e){var t=e.ID,n=e.name,o=e.title,u=e.description;return(0,r.createElement)("li",{key:"".concat(t,"-").concat(n,"-").concat(c)},(0,r.createElement)(a.Z,{value:n,title:(0,i.Z)(o,b),description:u,onSelect:v,patternPostID:t,theme:f,locale:m}))})))):null})))},695:function(e,t,n){var r=n(27);t.Z=function(e){var t=e.value,n=e.onSelect,o=e.title,a=e.description,i=e.theme,c=e.locale,u=e.patternPostID;if(null==o||null==t)return null;var l="".concat("https://public-api.wordpress.com/rest/v1/template/demo/").concat(encodeURIComponent(i),"/").concat(encodeURIComponent("dotcompatterns.wordpress.com"),"/?post_id=").concat(encodeURIComponent(null!=u?u:""),"&language=").concat(encodeURIComponent(c)),s="https://s0.wordpress.com/mshots/v1/"+encodeURIComponent(l)+"?vpw=1024&vph=1024&w=660&h=430",p=(0,r.createElement)("img",{className:"pattern-selector-item__media",src:s,alt:o,onLoad:function(e){var t=e.currentTarget;-1===t.src.indexOf("reload=1")&&setTimeout((function(){t.src=t.src+"&reload=1"}),1e4)}});return(0,r.createElement)("button",{type:"button",className:"pattern-selector-item__label",value:t,onClick:function(){return n(t)}},(0,r.createElement)("span",{className:"pattern-selector-item__preview-wrap"},p),a)}},531:function(e,t){t.Z=function e(t){return!!t.find((function(t){return"core/missing"===t.name||!(!t.innerBlocks||!t.innerBlocks.length)&&e(t.innerBlocks)}))}},988:function(e,t,n){function r(e,t){var n=Object.keys(t),r=e.filter((function(e){return n.includes(e)})),o=n.filter((function(t){return!e.includes(t)}));return r.concat(o.sort()).reduce((function(e,n){return e[n]=t[n],e}),{})}n.d(t,{x:function(){return r}})},480:function(e,t,n){var r=n(314);t.Z=function e(t,n){return t.map((function(t){return(t=n((0,r.cloneBlock)(t))).innerBlocks&&t.innerBlocks.length&&(t.innerBlocks=e(t.innerBlocks,n)),t}))}},656:function(e,t,n){var r=n(163),_x=r._x,o={Address:_x("123 Main St","default address","full-site-editing"),Phone:_x("555-555-5555","default phone number","full-site-editing"),CompanyName:_x("Your Company Name","default company name","full-site-editing"),Vertical:_x("Business","default vertical name","full-site-editing")},a={CompanyName:"title",Address:"address",Phone:"phone",Vertical:"vertical"};function i(e,t){return e in t}t.Z=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return e?e.replace(/{{(\w+)}}/g,(function(e,n){var r=i(n,o)?o[n]:"",c=i(n,a)?a[n]:"";return t[c]||r||n})):""}},884:function(e,t,n){n.d(t,{Z:function(){return o},Fk:function(){return a},GI:function(){return i},E2:function(){return c}}),window._tkq=window._tkq||[];var r=null,o=function(e){r=e,window._tkq.push(["identifyUser",e.userid,e.username])},a=function(e){r&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_view",{blog_id:r.blogid,source:e}])},i=function(){r&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_dismiss",{blog_id:r.blogid}])},c=function(e){r&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_template_selected",{blog_id:r.blogid,pattern:e}])}},804:function(e){e.exports=window.lodash},314:function(e){e.exports=window.wp.blocks},997:function(e){e.exports=window.wp.components},417:function(e){e.exports=window.wp.compose},707:function(e){e.exports=window.wp.data},27:function(e){e.exports=window.wp.element},799:function(e){e.exports=window.wp.hooks},163:function(e){e.exports=window.wp.i18n},742:function(e){e.exports=window.wp.nux},200:function(e){e.exports=window.wp.plugins}},t={};function n(r){var o=t[r];if(void 0!==o)return o.exports;var a=t[r]={exports:{}};return e[r](a,a.exports,n),a.exports}n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,{a:t}),t},n.d=function(e,t){for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})};var r={};!function(){n.r(r);var e,t=n(27),o=n(200),a=n(707),i=n(884),c=n(28),u=(n(168),n(580),null!==(e=window.starterPageTemplatesConfig)&&void 0!==e?e:{}),l=u.templates,s=void 0===l?[]:l,p=u.tracksUserData,f=u.screenAction,d=u.theme,m=u.locale;p&&(0,i.Z)(p),"add"===f&&(0,a.dispatch)("automattic/starter-page-layouts").setOpenState("OPEN_FROM_ADD_PAGE"),(0,o.registerPlugin)("page-patterns",{render:function(){return(0,t.createElement)(c.P,{patterns:s,theme:d,locale:m})},icon:void 0})}(),window.EditingToolkit=r}();