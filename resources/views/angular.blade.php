<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AngularBestBoilerplate</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <style type="text/css">@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSkZQ.woff) format('woff');}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKof4MQ.woff) format('woff');}@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSUbOvIWzgPDEtj.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSUZevIWzgPDEtj.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSUbuvIWzgPDEtj.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSUb-vIWzgPDEtj.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Nunito';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXW3I6Li01BKofAnsSUYevIWzgPDA.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Nunito';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/nunito/v16/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
  <style type="text/css">@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/materialicons/v83/flUhRq6tzZclQEJ-Vdg-IuiaDsNa.woff) format('woff');}.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;font-feature-settings:'liga';}@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/materialicons/v83/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');}.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased;}</style>
  <style type="text/css">
    body {
      overflow: hidden;
      height: 100%;
      width: 100%;
    }
    .welcome-logo {
      width: 100%;
      height: 100%;
    }

    .app-loading {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      animation: fadeIn ease 2s forwards; /* Fades logo in */
    }
    app-root {
      opacity: 0;
    }
    .scrollable {
      overflow-y: auto;
    }
    /* Fades logo out once drawed & displayed & angular app did load (ie: has .loaded class) */
    body.animation-finished.loaded .app-loading {
      animation: fadeOut ease 0.2s forwards;
    }
    body.animation-finished.loaded app-root {
      animation: fadeIn ease 0.2s forwards; /* Fades application in */
    }

    @keyframes fadeIn {
      0% {opacity:0;}
      100% {opacity:1;}
    }
    @keyframes fadeOut {
      0% {opacity:1;}
      100% {opacity:0;}
    }
  </style>
<link rel="stylesheet" href="/assets/angular/styles.247de381a49d53b1b413.css"></head>
<!-- Main logo show & fade at startup-->
<body class="scrollable mat-typography">

  <script type="text/javascript">
    !function(){"use strict";function r(t){if(void 0===t)throw new Error('Pathformer [constructor]: "element" parameter is required');if(t.constructor===String&&!(t=document.getElementById(t)))throw new Error('Pathformer [constructor]: "element" parameter is not related to an existing ID');if(!(t instanceof window.SVGElement||t instanceof window.SVGGElement||/^svg$/i.test(t.nodeName)))throw new Error('Pathformer [constructor]: "element" parameter must be a string or a SVGelement');this.el=t,this.scan(t)}var n,e,t,h;function i(t,e,r){n(),this.isReady=!1,this.setElement(t,e),this.setOptions(e),this.setCallback(r),this.isReady&&this.init()}r.prototype.TYPES=["line","ellipse","circle","polygon","polyline","rect"],r.prototype.ATTR_WATCH=["cx","cy","points","r","rx","ry","x","x1","x2","y","y1","y2"],r.prototype.scan=function(t){for(var e,r,n,i=t.querySelectorAll(this.TYPES.join(",")),a=0;a<i.length;a++)r=(0,this[(e=i[a]).tagName.toLowerCase()+"ToPath"])(this.parseAttr(e.attributes)),n=this.pathMaker(e,r),e.parentNode.replaceChild(n,e)},r.prototype.lineToPath=function(t){var e={},r=t.x1||0,n=t.y1||0,i=t.x2||0,a=t.y2||0;return e.d="M"+r+","+n+"L"+i+","+a,e},r.prototype.rectToPath=function(t){var e={},r=parseFloat(t.x)||0,n=parseFloat(t.y)||0,i=parseFloat(t.width)||0,a=parseFloat(t.height)||0;if(t.rx||t.ry){var o=parseInt(t.rx,10)||-1,s=parseInt(t.ry,10)||-1;o=Math.min(Math.max(o<0?s:o,0),i/2),s=Math.min(Math.max(s<0?o:s,0),a/2),e.d="M "+(r+o)+","+n+" L "+(r+i-o)+","+n+" A "+o+","+s+",0,0,1,"+(r+i)+","+(n+s)+" L "+(r+i)+","+(n+a-s)+" A "+o+","+s+",0,0,1,"+(r+i-o)+","+(n+a)+" L "+(r+o)+","+(n+a)+" A "+o+","+s+",0,0,1,"+r+","+(n+a-s)+" L "+r+","+(n+s)+" A "+o+","+s+",0,0,1,"+(r+o)+","+n}else e.d="M"+r+" "+n+" L"+(r+i)+" "+n+" L"+(r+i)+" "+(n+a)+" L"+r+" "+(n+a)+" Z";return e},r.prototype.polylineToPath=function(t){var e,r,n={},i=t.points.trim().split(" ");if(-1===t.points.indexOf(",")){var a=[];for(e=0;e<i.length;e+=2)a.push(i[e]+","+i[e+1]);i=a}for(r="M"+i[0],e=1;e<i.length;e++)-1!==i[e].indexOf(",")&&(r+="L"+i[e]);return n.d=r,n},r.prototype.polygonToPath=function(t){var e=r.prototype.polylineToPath(t);return e.d+="Z",e},r.prototype.ellipseToPath=function(t){var e={},r=parseFloat(t.rx)||0,n=parseFloat(t.ry)||0,i=parseFloat(t.cx)||0,a=parseFloat(t.cy)||0,o=i-r,s=a,h=parseFloat(i)+parseFloat(r),l=a;return e.d="M"+o+","+s+"A"+r+","+n+" 0,1,1 "+h+","+l+"A"+r+","+n+" 0,1,1 "+o+","+l,e},r.prototype.circleToPath=function(t){var e={},r=parseFloat(t.r)||0,n=parseFloat(t.cx)||0,i=parseFloat(t.cy)||0,a=n-r,o=i,s=parseFloat(n)+parseFloat(r),h=i;return e.d="M"+a+","+o+"A"+r+","+r+" 0,1,1 "+s+","+h+"A"+r+","+r+" 0,1,1 "+a+","+h,e},r.prototype.pathMaker=function(t,e){var r,n,i=document.createElementNS("http://www.w3.org/2000/svg","path");for(r=0;r<t.attributes.length;r++)n=t.attributes[r],-1===this.ATTR_WATCH.indexOf(n.name)&&i.setAttribute(n.name,n.value);for(r in e)i.setAttribute(r,e[r]);return i},r.prototype.parseAttr=function(t){for(var e,r={},n=0;n<t.length;n++){if(e=t[n],-1!==this.ATTR_WATCH.indexOf(e.name)&&-1!==e.value.indexOf("%"))throw new Error("Pathformer [parseAttr]: a SVG shape got values in percentage. This cannot be transformed into 'path' tags. Please use 'viewBox'.");r[e.name]=e.value}return r},i.LINEAR=function(t){return t},i.EASE=function(t){return-Math.cos(t*Math.PI)/2+.5},i.EASE_OUT=function(t){return 1-Math.pow(1-t,3)},i.EASE_IN=function(t){return Math.pow(t,3)},i.EASE_OUT_BOUNCE=function(t){var e=1-Math.cos(t*(.5*Math.PI)),r=Math.pow(e,1.5),n=Math.pow(1-t,2);return 1-n+(1-Math.abs(Math.cos(r*(2.5*Math.PI))))*n},i.prototype.setElement=function(e,r){var t,n;if(void 0===e)throw new Error('Vivus [constructor]: "element" parameter is required');if(e.constructor===String&&!(e=document.getElementById(e)))throw new Error('Vivus [constructor]: "element" parameter is not related to an existing ID');if(this.parentEl=e,r&&r.file){n=this,t=function(){var t=document.createElement("div");t.innerHTML=this.responseText;var e=t.querySelector("svg");if(!e)throw new Error("Vivus [load]: Cannot find the SVG in the loaded file : "+r.file);n.el=e,n.el.setAttribute("width","100%"),n.el.setAttribute("height","100%"),n.parentEl.appendChild(n.el),n.isReady=!0,n.init(),n=null};var i=new window.XMLHttpRequest;return i.addEventListener("load",t),i.open("GET",r.file),void i.send()}switch(e.constructor){case window.SVGSVGElement:case window.SVGElement:case window.SVGGElement:this.el=e,this.isReady=!0;break;case window.HTMLObjectElement:n=this,(t=function(t){if(!n.isReady){if(n.el=e.contentDocument&&e.contentDocument.querySelector("svg"),!n.el&&t)throw new Error("Vivus [constructor]: object loaded does not contain any SVG");n.el&&(e.getAttribute("built-by-vivus")&&(n.parentEl.insertBefore(n.el,e),n.parentEl.removeChild(e),n.el.setAttribute("width","100%"),n.el.setAttribute("height","100%")),n.isReady=!0,n.init(),n=null)}})()||e.addEventListener("load",t);break;default:throw new Error('Vivus [constructor]: "element" parameter is not valid (or miss the "file" attribute)')}},i.prototype.setOptions=function(t){var e=["delayed","sync","async","nsync","oneByOne","scenario","scenario-sync"],r=["inViewport","manual","autostart"];if(void 0!==t&&t.constructor!==Object)throw new Error('Vivus [constructor]: "options" parameter must be an object');if((t=t||{}).type&&-1===e.indexOf(t.type))throw new Error("Vivus [constructor]: "+t.type+" is not an existing animation `type`");if(this.type=t.type||e[0],t.start&&-1===r.indexOf(t.start))throw new Error("Vivus [constructor]: "+t.start+" is not an existing `start` option");if(this.start=t.start||r[0],this.isIE=-1!==window.navigator.userAgent.indexOf("MSIE")||-1!==window.navigator.userAgent.indexOf("Trident/")||-1!==window.navigator.userAgent.indexOf("Edge/"),this.duration=h(t.duration,120),this.delay=h(t.delay,null),this.dashGap=h(t.dashGap,1),this.forceRender=t.hasOwnProperty("forceRender")?!!t.forceRender:this.isIE,this.reverseStack=!!t.reverseStack,this.selfDestroy=!!t.selfDestroy,this.onReady=t.onReady,this.map=[],this.frameLength=this.currentFrame=this.delayUnit=this.speed=this.handle=null,this.ignoreInvisible=!!t.hasOwnProperty("ignoreInvisible")&&!!t.ignoreInvisible,this.animTimingFunction=t.animTimingFunction||i.LINEAR,this.pathTimingFunction=t.pathTimingFunction||i.LINEAR,this.delay>=this.duration)throw new Error("Vivus [constructor]: delay must be shorter than duration")},i.prototype.setCallback=function(t){if(t&&t.constructor!==Function)throw new Error('Vivus [constructor]: "callback" parameter must be a function');this.callback=t||function(){}},i.prototype.mapping=function(){var t,e,r,n,i,a,o,s;for(s=a=o=0,e=this.el.querySelectorAll("path"),t=0;t<e.length;t++)r=e[t],this.isInvisible(r)||(i={el:r,length:Math.ceil(r.getTotalLength())},isNaN(i.length)?window.console&&console.warn&&console.warn("Vivus [mapping]: cannot retrieve a path element length",r):(this.map.push(i),r.style.strokeDasharray=i.length+" "+(i.length+2*this.dashGap),r.style.strokeDashoffset=i.length+this.dashGap,i.length+=this.dashGap,a+=i.length,this.renderPath(t)));for(a=0===a?1:a,this.delay=null===this.delay?this.duration/3:this.delay,this.delayUnit=this.delay/(1<e.length?e.length-1:1),this.reverseStack&&this.map.reverse(),t=0;t<this.map.length;t++){switch(i=this.map[t],this.type){case"delayed":i.startAt=this.delayUnit*t,i.duration=this.duration-this.delay;break;case"oneByOne":i.startAt=o/a*this.duration,i.duration=i.length/a*this.duration;break;case"sync":case"async":case"nsync":i.startAt=0,i.duration=this.duration;break;case"scenario-sync":r=i.el,n=this.parseAttr(r),i.startAt=s+(h(n["data-delay"],this.delayUnit)||0),i.duration=h(n["data-duration"],this.duration),s=void 0!==n["data-async"]?i.startAt:i.startAt+i.duration,this.frameLength=Math.max(this.frameLength,i.startAt+i.duration);break;case"scenario":r=i.el,n=this.parseAttr(r),i.startAt=h(n["data-start"],this.delayUnit)||0,i.duration=h(n["data-duration"],this.duration),this.frameLength=Math.max(this.frameLength,i.startAt+i.duration)}o+=i.length,this.frameLength=this.frameLength||this.duration}},i.prototype.drawer=function(){var t=this;if(this.currentFrame+=this.speed,this.currentFrame<=0)this.stop(),this.reset();else{if(!(this.currentFrame>=this.frameLength))return this.trace(),void(this.handle=e(function(){t.drawer()}));this.stop(),this.currentFrame=this.frameLength,this.trace(),this.selfDestroy&&this.destroy()}this.callback(this),this.instanceCallback&&(this.instanceCallback(this),this.instanceCallback=null)},i.prototype.trace=function(){var t,e,r,n;for(n=this.animTimingFunction(this.currentFrame/this.frameLength)*this.frameLength,t=0;t<this.map.length;t++)e=(n-(r=this.map[t]).startAt)/r.duration,e=this.pathTimingFunction(Math.max(0,Math.min(1,e))),r.progress!==e&&(r.progress=e,r.el.style.strokeDashoffset=Math.floor(r.length*(1-e)),this.renderPath(t))},i.prototype.renderPath=function(t){if(this.forceRender&&this.map&&this.map[t]){var e=this.map[t],r=e.el.cloneNode(!0);e.el.parentNode.replaceChild(r,e.el),e.el=r}},i.prototype.init=function(){this.frameLength=0,this.currentFrame=0,this.map=[],new r(this.el),this.mapping(),this.starter(),this.onReady&&this.onReady(this)},i.prototype.starter=function(){switch(this.start){case"manual":return;case"autostart":this.play();break;case"inViewport":var t=this,e=function(){t.isInViewport(t.parentEl,1)&&(t.play(),window.removeEventListener("scroll",e))};window.addEventListener("scroll",e),e()}},i.prototype.getStatus=function(){return 0===this.currentFrame?"start":this.currentFrame===this.frameLength?"end":"progress"},i.prototype.reset=function(){return this.setFrameProgress(0)},i.prototype.finish=function(){return this.setFrameProgress(1)},i.prototype.setFrameProgress=function(t){return t=Math.min(1,Math.max(0,t)),this.currentFrame=Math.round(this.frameLength*t),this.trace(),this},i.prototype.play=function(t,e){if(this.instanceCallback=null,t&&"function"==typeof t)this.instanceCallback=t,t=null;else if(t&&"number"!=typeof t)throw new Error("Vivus [play]: invalid speed");return e&&"function"==typeof e&&!this.instanceCallback&&(this.instanceCallback=e),this.speed=t||1,this.handle||this.drawer(),this},i.prototype.stop=function(){return this.handle&&(t(this.handle),this.handle=null),this},i.prototype.destroy=function(){var t,e;for(this.stop(),t=0;t<this.map.length;t++)(e=this.map[t]).el.style.strokeDashoffset=null,e.el.style.strokeDasharray=null,this.renderPath(t)},i.prototype.isInvisible=function(t){var e,r=t.getAttribute("data-ignore");return null!==r?"false"!==r:!!this.ignoreInvisible&&(!(e=t.getBoundingClientRect()).width&&!e.height)},i.prototype.parseAttr=function(t){var e,r={};if(t&&t.attributes)for(var n=0;n<t.attributes.length;n++)r[(e=t.attributes[n]).name]=e.value;return r},i.prototype.isInViewport=function(t,e){var r=this.scrollY(),n=r+this.getViewportH(),i=t.getBoundingClientRect(),a=i.height,o=r+i.top;return o+a*(e=e||0)<=n&&r<=o+a},i.prototype.getViewportH=function(){var t=this.docElem.clientHeight,e=window.innerHeight;return t<e?e:t},i.prototype.scrollY=function(){return window.pageYOffset||this.docElem.scrollTop},n=function(){i.prototype.docElem||(i.prototype.docElem=window.document.documentElement,e=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(t){return window.setTimeout(t,1e3/60)},t=window.cancelAnimationFrame||window.webkitCancelAnimationFrame||window.mozCancelAnimationFrame||window.oCancelAnimationFrame||window.msCancelAnimationFrame||function(t){return window.clearTimeout(t)})},h=function(t,e){var r=parseInt(t,10);return 0<=r?r:e},"function"==typeof define&&define.amd?define([],function(){return i}):"object"==typeof exports?module.exports=i:window.Vivus=i}();
  </script>

  <div class="app-loading">
    <svg id="app-loading-svg" class="welcome-logo" width="567.36pt" height="536.62pt" version="1.2" viewBox="0 0 567.36 536.62" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
      <metadata>
        <rdf:rdf>
        <cc:work rdf:about="">
          <dc:format>image/svg+xml</dc:format>
          <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
          <dc:title/>
        </cc:work>
        </rdf:rdf>
      </metadata>
      <defs></defs>
      <g fill="none" stroke-miterlimit="10">
        <path d="m199.41 232.64h15.914v24.016h3.4336v-51.098h-3.4336v24.016h-15.914v-24.016h-3.3555v51.098h3.3555z" stroke="#ca8f6e"/>
        <path d="m241.75 218.04v26.137c0 3.8945 0.9375 7.0195 2.8125 9.3789 1.8711 2.3633 4.6602 3.543 8.3594 3.543 3.793 0 6.6289-1.168 8.5039-3.5039 1.8711-2.3359 2.8086-5.4766 2.8086-9.418v-26.137c0-3.9414-0.9375-7.0781-2.8086-9.4141-1.875-2.3359-4.7109-3.5039-8.5039-3.5039-3.6992 0-6.4883 1.1797-8.3594 3.5391-1.875 2.3633-2.8125 5.4883-2.8125 9.3789zm3.3594 26.355v-26.574c0-2.9648 0.63281-5.3125 1.8984-7.043 1.2656-1.7266 3.2344-2.5898 5.9141-2.5898 2.7227 0 4.7305 0.86328 6.0195 2.5898 1.2891 1.7305 1.9375 4.0781 1.9375 7.043v26.574c0 2.9688-0.64844 5.3164-1.9375 7.043-1.2891 1.7305-3.2969 2.5938-6.0195 2.5938-2.6797 0-4.6484-0.86328-5.9141-2.5938-1.2656-1.7266-1.8984-4.0742-1.8984-7.043z" stroke="#ca8f6e"/>
        <path d="m304.32 256.59 10.656-45.336v45.406h3.2148v-51.098h-4.8203l-10.656 45.188-10.73-45.188h-4.8203v51.098h2.9961v-45.258l10.801 45.188z" stroke="#ca8f6e"/>
        <path d="m351.91 237.02v19.637h3.3594v-19.637l11.535-31.461h-3.2852l-9.7852 26.863-9.7812-26.863h-3.5039z" stroke="#ca8f6e"/>
        <path d="m212.21 286c-3.7461 0-6.5195 1.1797-8.3203 3.5391-1.8008 2.3633-2.7031 5.4883-2.7031 9.3789v26.137c0 3.8945 0.90234 7.0195 2.7031 9.3789 1.8008 2.3633 4.5742 3.5391 8.3203 3.5391 3.7461 0 6.5234-1.1758 8.3242-3.5391 1.7969-2.3594 2.6992-5.4844 2.6992-9.3789v-5.8398h-3.2109v6.0586c0 2.918-0.6211 5.2422-1.8633 6.9727-1.2422 1.7266-3.1992 2.5898-5.875 2.5898s-4.6367-0.86328-5.8789-2.5898c-1.2383-1.7305-1.8594-4.0547-1.8594-6.9727v-26.574c0-2.918 0.62109-5.2539 1.8594-7.0078 1.2422-1.75 3.2031-2.6289 5.8789-2.6289s4.6328 0.8789 5.875 2.6289c1.2422 1.7539 1.8633 4.0898 1.8633 7.0078v4.4531h3.2109v-4.2344c0-3.8906-0.90235-7.0156-2.6992-9.3789-1.8008-2.3594-4.5781-3.5391-8.3242-3.5391z" stroke="#ca8f6e"/>
        <path d="m250.97 326.23h15.914l2.5547 11.312h3.3594l-11.387-51.172h-4.8906l-11.172 51.172h3.0664zm0.51172-2.9219 7.375-33.066 7.5195 33.066z" stroke="#ca8f6e"/>
        <path d="m305.94 286.44h-10.656v51.098h3.3555v-22.848h5.332c3.1602 0 5.5469 0.64453 7.1523 1.9336 1.6055 1.293 2.4102 3.543 2.4102 6.7539v8.0312c0 1.457 0.0703 2.6641 0.21875 3.6133 0.14453 0.94922 0.4375 1.7852 0.875 2.5156h3.5039c-0.82812-1.2656-1.2422-3.3086-1.2422-6.1289v-7.957c0-5.8906-2.457-9.3711-7.3711-10.441 2.5312-0.58203 4.3906-1.7383 5.5859-3.4688 1.1914-1.7266 1.7852-4.0977 1.7852-7.1172v-4.4531c0-7.6875-3.6484-11.531-10.949-11.531zm-1.8984 25.184h-5.4024v-22.117h7.2305c2.6758 0 4.6211 0.74219 5.8398 2.2227 1.2148 1.4883 1.8242 3.6641 1.8242 6.5352v4.8203c0 3.2578-0.78125 5.5-2.3359 6.7148-1.5586 1.2148-3.9414 1.8242-7.1562 1.8242z" stroke="#ca8f6e"/>
        <path d="m358.14 310.09h-13.941v-20.586h16.789v-3.0664h-20.148v51.098h20.148v-3.0664h-16.789v-21.316h13.941z" stroke="#ca8f6e"/>
        <!-- Draw squares -->
        <path transform="matrix(1,0,0,-1,0,536.62)" d="m408.45 142.18h-266.67v266.67h266.67z" stroke="#aeb591" stroke-width="2"/>
        <path transform="matrix(1,0,0,-1,0,536.62)" d="m429.46 122.36h-271.01v266.67h271.01z" stroke="#c2cdc2" stroke-width="5"/>
      </g>
    </svg>
  </div>

  <app-root class="scrollable">
  </app-root>

  <script>
    new Vivus('app-loading-svg', {
        duration: 100, // in frames
        pathTimingFunction: Vivus.EASE,
        animTimingFunction: Vivus.EASE_OUT,
      }, function(){document.querySelector("body").classList.add("animation-finished")});
  </script>
<script src="/assets/angular/runtime-es2015.46075a420c87b907f832.js" type="module"></script><script src="/assets/angular/runtime-es5.46075a420c87b907f832.js" nomodule="" defer=""></script><script src="/assets/angular/polyfills-es5.8e1015d909cd58191bbf.js" nomodule="" defer=""></script><script src="/assets/angular/polyfills-es2015.94976e62e804ea5315ec.js" type="module"></script><script src="/assets/angular/scripts.d5017c74900271ef4881.js" defer=""></script><script src="/assets/angular/main-es2015.875879f0658cd0807556.js" type="module"></script><script src="/assets/angular/main-es5.875879f0658cd0807556.js" nomodule="" defer=""></script></body>
</html>


