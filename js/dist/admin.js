module.exports=function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=8)}({0:function(t,e){t.exports=flarum.core.compat.app},5:function(t,e){t.exports=flarum.core.compat["components/SettingsModal"]},8:function(t,e,n){"use strict";n.r(e);var r=n(0),o=n.n(r);var i=n(5),u=function(t){var e,n;function r(){return t.apply(this,arguments)||this}n=t,(e=r).prototype=Object.create(n.prototype),e.prototype.constructor=e,e.__proto__=n;var o=r.prototype;return o.className=function(){return"EjinSettingsModal Modal--small"},o.title=function(){return"Like Counter"},o.form=function(){return[m("div",{className:"Form-group"},m("label",null,"Like Count Caption"),m("input",{className:"FormControl",bidi:this.setting("like-counter.caption")})),m("div",{className:"Form-group"},m("label",null,"Display Under Comments?"),m("input",{type:"checkbox",className:"",bidi:this.setting("like-counter.display_under_comments")}))]},r}(n.n(i).a);o.a.initializers.add("like-counter",(function(){o.a.extensionSettings["ejin-like-counter"]=function(){return o.a.modal.show(new u)}}))}});
//# sourceMappingURL=admin.js.map