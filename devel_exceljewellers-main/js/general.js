$(document).ready(function(){function e(){var e=$("nav").outerHeight(),t=$("footer").outerHeight();$("body").css({"padding-top":e,"padding-bottom":t})}$(".arrow-away").click(function(){$(".media-side-bar").toggleClass("media-slide"),$(this).toggleClass("arrow-trans"),$(this).children("svg").toggleClass("svg-arrow")}),e(),$(window).resize(function(){e()}),$(window).scroll(function(){e()}),$.ajax({url:"../shop-cart-num",headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")},method:"POST",success:function(e){$(".cart-text").empty().append(e)},error:function(e,t,n){}}),$(".footer-title").click(function(){$(this).next().toggle(),$(".footer-title").not($(this)).next().css({display:"none"}),e()})}),function(e){"use strict";function t(e){return new RegExp("(^|\\s+)"+e+"(\\s+|$)")}var n,o,r;function a(e,t){(n(e,t)?r:o)(e,t)}r="classList"in document.documentElement?(n=function(e,t){return e.classList.contains(t)},o=function(e,t){e.classList.add(t)},function(e,t){e.classList.remove(t)}):(n=function(e,n){return t(n).test(e.className)},o=function(e,t){n(e,t)||(e.className=e.className+" "+t)},function(e,n){e.className=e.className.replace(t(n)," ")}),e.classie={hasClass:n,addClass:o,removeClass:r,toggleClass:a,has:n,add:o,remove:r,toggle:a}}(window),window.Modernizr=function(e,t){function n(e,t){return typeof e===t}var o,r,a={},i=e.documentElement,c=e.createElement("modernizr"),s=c.style,l={},u=[],d=u.slice,f={}.hasOwnProperty;for(var p in r=n(f,"undefined")||n(f.call,"undefined")?function(e,t){return t in e&&n(e.constructor.prototype[t],"undefined")}:function(e,t){return f.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=d.call(arguments,1),o=function(){if(this instanceof o){function r(){}r.prototype=t.prototype;var a=new r,i=t.apply(a,n.concat(d.call(arguments)));return Object(i)===i?i:a}return t.apply(e,n.concat(d.call(arguments)))};return o}),l)r(l,p)&&(o=p.toLowerCase(),a[o]=l[p](),u.push((a[o]?"":"no-")+o));return a.addTest=function(e,t){if("object"==typeof e)for(var n in e)r(e,n)&&a.addTest(n,e[n]);else{if(e=e.toLowerCase(),void 0!==a[e])return a;t="function"==typeof t?t():t,i.className+=" "+(t?"":"no-")+e,a[e]=t}return a},s.cssText="",c=null,function(e,t){function n(){var e=h.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t=p[e[d]];return t||(t={},f++,e[d]=f,p[f]=t),t}function r(e,n,r){return n=n||t,c?n.createElement(e):(a=(r=r||o(n)).cache[e]?r.cache[e].cloneNode():u.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e)).canHaveChildren&&!l.test(e)?r.frag.appendChild(a):a;var a}function a(e){var a,s,l,u,d,f=o(e=e||t);return!h.shivCSS||i||f.hasCSS||(f.hasCSS=(u=(l=e).createElement("p"),d=l.getElementsByTagName("head")[0]||l.documentElement,u.innerHTML="x<style>article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}</style>",!!d.insertBefore(u.lastChild,d.firstChild))),c||(a=e,(s=f).cache||(s.cache={},s.createElem=a.createElement,s.createFrag=a.createDocumentFragment,s.frag=s.createFrag()),a.createElement=function(e){return h.shivMethods?r(e,a,s):s.createElem(e)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+n().join().replace(/\w+/g,function(e){return s.createElem(e),s.frag.createElement(e),'c("'+e+'")'})+");return n}")(h,s.frag)),e}var i,c,s=e.html5||{},l=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,u=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,d="_html5shiv",f=0,p={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",i="hidden"in e,c=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){c=i=!0}}();var h={elements:s.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==s.shivCSS,supportsUnknownElements:c,shivMethods:!1!==s.shivMethods,type:"default",shivDocument:a,createElement:r,createDocumentFragment:function(e,r){if(e=e||t,c)return e.createDocumentFragment();for(var a=(r=r||o(e)).frag.cloneNode(),i=0,s=n(),l=s.length;i<l;i++)a.createElement(s[i]);return a}};e.html5=h,a(t)}(this,e),a._version="2.6.2",i.className=i.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+" js "+u.join(" "),a}(this.document),function(e,t){function n(e){return"[object Function]"==h.call(e)}function o(e){return"string"==typeof e}function r(){}function a(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function i(){var e=m.shift();g=1,e?e.t?f(function(){("c"==e.t?u.injectCss:u.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),i()):g=0}function c(e,n,r,c,s){return g=0,n=n||"j",o(e)?function(e,n,o,r,c,s,l){function d(t){if(!v&&a(h.readyState)&&(E.r=v=1,g||i(),h.onload=h.onreadystatechange=null,t))for(var o in"img"!=e&&f(function(){w.removeChild(h)},50),S[n])S[n].hasOwnProperty(o)&&S[n][o].onload()}l=l||u.errorTimeout;var h=t.createElement(e),v=0,b=0,E={t:o,s:n,e:c,a:s,x:l};1===S[n]&&(b=1,S[n]=[]),"object"==e?h.data=n:(h.src=n,h.type=e),h.width=h.height="0",h.onerror=h.onload=h.onreadystatechange=function(){d.call(this,b)},m.splice(r,0,E),"img"!=e&&(b||2===S[n]?(w.insertBefore(h,y?null:p),f(d,l)):S[n].push(h))}("c"==n?E:b,e,n,this.i++,r,c,s):(m.splice(this.i++,0,e),1==m.length&&i()),this}function s(){var e=u;return e.loader={load:c,i:0},e}var l,u,d=t.documentElement,f=e.setTimeout,p=t.getElementsByTagName("script")[0],h={}.toString,m=[],g=0,v="MozAppearance"in d.style,y=v&&!!t.createRange().compareNode,w=y?d:p.parentNode,b=(d=e.opera&&"[object Opera]"==h.call(e.opera),d=!!t.attachEvent&&!d,v?"object":d?"script":"img"),E=d?"script":b,$=Array.isArray||function(e){return"[object Array]"==h.call(e)},C=[],S={},x={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}};(u=function(e){function t(e,t,o,r,a){var i=function(e){e=e.split("!");var t,n,o,r=C.length,a=e.pop(),i=e.length;for(a={url:a,origUrl:a,prefixes:e},n=0;n<i;n++)o=e[n].split("="),(t=x[o.shift()])&&(a=t(a,o));for(n=0;n<r;n++)a=C[n](a);return a}(e),c=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(t=t&&(n(t)?t:t[e]||t[r]||t[e.split("/").pop().split("?")[0]]),i.instead?i.instead(e,t,o,r,a):(S[i.url]?i.noexec=!0:S[i.url]=1,o.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":void 0,i.noexec,i.attrs,i.timeout),(n(t)||n(c))&&o.load(function(){s(),t&&t(i.origUrl,a,r),c&&c(i.origUrl,a,r),S[i.url]=2})))}function a(e,a){function i(e,r){if(e){if(o(e))r||(d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}),t(e,d,a,0,l);else if(Object(e)===e)for(s in c=function(){var t,n=0;for(t in e)e.hasOwnProperty(t)&&n++;return n}(),e)e.hasOwnProperty(s)&&(r||--c||(n(d)?d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}:d[s]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),p()}}(f[s])),t(e[s],d,a,s,l))}else r||p()}var c,s,l=!!e.test,u=e.load||e.both,d=e.callback||r,f=d,p=e.complete||r;i(l?e.yep:e.nope,!!u),u&&i(u)}var i,c,l=this.yepnope.loader;if(o(e))t(e,0,l,0);else if($(e))for(i=0;i<e.length;i++)o(c=e[i])?t(c,0,l,0):$(c)?u(c):Object(c)===c&&a(c,l);else Object(e)===e&&a(e,l)}).addPrefix=function(e,t){x[e]=t},u.addFilter=function(e){C.push(e)},u.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",l=function(){t.removeEventListener("DOMContentLoaded",l,0),t.readyState="complete"},0)),e.yepnope=s(),e.yepnope.executeStack=i,e.yepnope.injectJs=function(e,n,o,c,s,l){var d,h,m=t.createElement("script");for(h in c=c||u.errorTimeout,m.src=e,o)m.setAttribute(h,o[h]);n=l?i:n||r,m.onreadystatechange=m.onload=function(){!d&&a(m.readyState)&&(d=1,n(),m.onload=m.onreadystatechange=null)},f(function(){d||n(d=1)},c),s?m.onload():p.parentNode.insertBefore(m,p)},e.yepnope.injectCss=function(e,n,o,a,c,s){var l;for(l in n=s?i:n||r,(a=t.createElement("link")).href=e,a.rel="stylesheet",a.type="text/css",o)a.setAttribute(l,o[l]);c||(p.parentNode.insertBefore(a,p),f(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};var menuLeft=document.getElementById("cbp-spmenu-s1"),showLeft=document.getElementById("showLeft"),body=document.body;shadow=document.getElementsByClassName("shadow")[0],showLeft.onclick=function(){classie.toggle(this,"active"),classie.toggle(menuLeft,"cbp-spmenu-open"),classie.toggle(body,"hidden"),classie.toggle(shadow,"activate")},shadow.onclick=function(){classie.toggle(showLeft,"active"),classie.toggle(menuLeft,"cbp-spmenu-open"),classie.toggle(body,"hidden"),classie.toggle(this,"activate")},goback.onclick=function(){classie.toggle(showLeft,"active"),classie.toggle(menuLeft,"cbp-spmenu-open"),classie.toggle(body,"hidden"),classie.toggle(shadow,"activate")},$(".side-nav-h3").click(function(){$(this).next().slideToggle()}),$(".icon-search").click(function(){$(".search-container").toggleClass("searchshow")}),$(".search-exit").click(function(){$(".search-container").removeClass("searchshow")}),setTimeout(function(){let e=$(window).height(),t=$(window).width();document.querySelector("meta[name=viewport]").setAttribute("content","height="+e+"px, width="+t+"px, initial-scale=1.0")},300);