!function(e){var t={};function n(i){if(t[i])return t[i].exports;var o=t[i]={i:i,l:!1,exports:{}};return e[i].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(i,o,function(t){return e[t]}.bind(null,o));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t,n){n(1),e.exports=n(2)},function(e,t){console.log("init"),document.getElementById("navToggle").addEventListener("click",(function(){var e=document.getElementById("nav"),t=document.getElementById("navToggle");e.classList.toggle("__active"),t.classList.toggle("__active")})),$(document).ready((function(){screen.width<992||$(window).scroll((function(){$(window).scrollTop()>400?$(".header").addClass("__hide"):$(".header").removeClass("__hide")}))}))},function(e,t){!function(){"use strict";if("undefined"!=typeof window){var e=window.navigator.userAgent.match(/Edge\/(\d{2})\./),t=e?parseInt(e[1],10):null,n=!!t&&16<=t&&t<=18;if("objectFit"in document.documentElement.style==0||n){var i=function(e,t,n){var i,o,l,r,a;if((n=n.split(" ")).length<2&&(n[1]=n[0]),"x"===e)i=n[0],o=n[1],l="left",r="right",a=t.clientWidth;else{if("y"!==e)return;i=n[1],o=n[0],l="top",r="bottom",a=t.clientHeight}if(i!==l&&o!==l){if(i!==r&&o!==r)return"center"===i||"50%"===i?(t.style[l]="50%",void(t.style["margin-"+l]=a/-2+"px")):void(0<=i.indexOf("%")?(i=parseInt(i,10))<50?(t.style[l]=i+"%",t.style["margin-"+l]=a*(i/-100)+"px"):(i=100-i,t.style[r]=i+"%",t.style["margin-"+r]=a*(i/-100)+"px"):t.style[l]=i);t.style[r]="0"}else t.style[l]="0"},o=function(e){var t=e.dataset?e.dataset.objectFit:e.getAttribute("data-object-fit"),n=e.dataset?e.dataset.objectPosition:e.getAttribute("data-object-position");t=t||"cover",n=n||"50% 50%";var o=e.parentNode;return function(e){var t=window.getComputedStyle(e,null),n=t.getPropertyValue("position"),i=t.getPropertyValue("overflow"),o=t.getPropertyValue("display");n&&"static"!==n||(e.style.position="relative"),"hidden"!==i&&(e.style.overflow="hidden"),o&&"inline"!==o||(e.style.display="block"),0===e.clientHeight&&(e.style.height="100%"),-1===e.className.indexOf("object-fit-polyfill")&&(e.className=e.className+" object-fit-polyfill")}(o),function(e){var t=window.getComputedStyle(e,null),n={"max-width":"none","max-height":"none","min-width":"0px","min-height":"0px",top:"auto",right:"auto",bottom:"auto",left:"auto","margin-top":"0px","margin-right":"0px","margin-bottom":"0px","margin-left":"0px"};for(var i in n)t.getPropertyValue(i)!==n[i]&&(e.style[i]=n[i])}(e),e.style.position="absolute",e.style.width="auto",e.style.height="auto","scale-down"===t&&(t=e.clientWidth<o.clientWidth&&e.clientHeight<o.clientHeight?"none":"contain"),"none"===t?(i("x",e,n),void i("y",e,n)):"fill"===t?(e.style.width="100%",e.style.height="100%",i("x",e,n),void i("y",e,n)):(e.style.height="100%",void("cover"===t&&e.clientWidth>o.clientWidth||"contain"===t&&e.clientWidth<o.clientWidth?(e.style.top="0",e.style.marginTop="0",i("x",e,n)):(e.style.width="100%",e.style.height="auto",e.style.left="0",e.style.marginLeft="0",i("y",e,n))))},l=function(e){if(void 0===e||e instanceof Event)e=document.querySelectorAll("[data-object-fit]");else if(e&&e.nodeName)e=[e];else{if("object"!=typeof e||!e.length||!e[0].nodeName)return!1;e=e}for(var t=0;t<e.length;t++)if(e[t].nodeName){var i=e[t].nodeName.toLowerCase();if("img"===i){if(n)continue;e[t].complete?o(e[t]):e[t].addEventListener("load",(function(){o(this)}))}else"video"===i?0<e[t].readyState?o(e[t]):e[t].addEventListener("loadedmetadata",(function(){o(this)})):o(e[t])}return!0};"loading"===document.readyState?document.addEventListener("DOMContentLoaded",l):l(),window.addEventListener("resize",l),window.objectFitPolyfill=l}else window.objectFitPolyfill=function(){return!1}}}()}]);