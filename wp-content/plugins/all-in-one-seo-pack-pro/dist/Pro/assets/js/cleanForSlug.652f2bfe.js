import{g as s,M as f}from"./isArrayLikeObject.44af21ce.js";import{i as l,t as p,b as d,s as o,c as m,d as g}from"./constants.e179df36.js";var y=/\s/;function x(n){for(var e=n.length;e--&&y.test(n.charAt(e)););return e}var _=/^\s+/;function I(n){return n&&n.slice(0,x(n)+1).replace(_,"")}function w(n,e,r,t){for(var i=n.length,a=r+(t?1:-1);t?a--:++a<i;)if(e(n[a],a,n))return a;return-1}function E(n){return n!==n}function T(n,e,r){for(var t=r-1,i=n.length;++t<i;)if(n[t]===e)return t;return-1}function h(n,e,r){return e===e?T(n,e,r):w(n,E,r)}var b=/\.|\[(?:[^[\]]*|(["'])(?:(?!\1)[^\\]|\\.)*?\1)\]/,A=/^\w*$/;function C(n,e){if(s(n))return!1;var r=typeof n;return r=="number"||r=="symbol"||r=="boolean"||n==null||l(n)?!0:A.test(n)||!b.test(n)||e!=null&&n in Object(e)}var P="Expected a function";function c(n,e){if(typeof n!="function"||e!=null&&typeof e!="function")throw new TypeError(P);var r=function(){var t=arguments,i=e?e.apply(this,t):t[0],a=r.cache;if(a.has(i))return a.get(i);var u=n.apply(this,t);return r.cache=a.set(i,u)||a,u};return r.cache=new(c.Cache||f),r}c.Cache=f;var S=500;function N(n){var e=c(n,function(t){return r.size===S&&r.clear(),t}),r=e.cache;return e}var v=/[^.[\]]+|\[(?:(-?\d+(?:\.\d+)?)|(["'])((?:(?!\2)[^\\]|\\.)*?)\2)\]|(?=(?:\.|\[\])(?:\.|\[\]|$))/g,M=/\\(\\)?/g,O=N(function(n){var e=[];return n.charCodeAt(0)===46&&e.push(""),n.replace(v,function(r,t,i,a){e.push(i?a.replace(M,"$1"):t||r)}),e});const z=O;function F(n,e){return s(n)?n:C(n,e)?[n]:z(p(n))}var $=1/0;function L(n){if(typeof n=="string"||l(n))return n;var e=n+"";return e=="0"&&1/n==-$?"-0":e}function R(n,e){e=F(e,n);for(var r=0,t=e.length;n!=null&&r<t;)n=n[L(e[r++])];return r&&r==t?n:void 0}function D(n,e,r){var t=n==null?void 0:R(n,e);return t===void 0?r:t}function K(n,e){for(var r=n.length;r--&&h(e,n[r],0)>-1;);return r}function U(n,e){for(var r=-1,t=n.length;++r<t&&h(e,n[r],0)>-1;);return r}function X(n,e,r){if(n=p(n),n&&(r||e===void 0))return I(n);if(!n||!(e=d(e)))return n;var t=o(n),i=o(e),a=U(t,i),u=K(t,i)+1;return m(t,a,u).join("")}function G(n){return n?X(g(n).replace(/[\s./]+/g,"-").replace(/[^\w-]+/g,"").replace(/-+/g,"-").toLowerCase(),"-"):""}export{F as a,I as b,G as c,h as d,R as e,w as f,D as g,C as i,c as m,L as t};
