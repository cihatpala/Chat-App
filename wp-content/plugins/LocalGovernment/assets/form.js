!function n(a,i,u){function c(r,e){if(!i[r]){if(!a[r]){var t="function"==typeof require&&require;if(!e&&t)return t(r,!0);if(l)return l(r,!0);var o=new Error("Cannot find module '"+r+"'");throw o.code="MODULE_NOT_FOUND",o}var s=i[r]={exports:{}};a[r][0].call(s.exports,function(e){return c(a[r][1][e]||e)},s,s.exports,n,a,i,u)}return i[r].exports}for(var l="function"==typeof require&&require,e=0;e<u.length;e++)c(u[e]);return c}({1:[function(e,r,t){"use strict";function n(){document.querySelectorAll(".field-msg").forEach(function(e){return e.classList.remove("show")})}document.addEventListener("DOMContentLoaded",function(e){var s=document.getElementById("ibbhaber-testimonial-form");s.addEventListener("submit",function(e){e.preventDefault(),n();var r,t,o={name:s.querySelector('[name = "name"]').value,email:s.querySelector('[name = "email"]').value,message:s.querySelector('[name = "message"]').value,nonce:s.querySelector('[name = "nonce"]').value};console.log(o),console.log("asd"),o.name?/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(o.email).toLowerCase())?o.message?(r=s.dataset.url,t=new URLSearchParams(new FormData(s)),s.querySelector(".js-form-submission").classList.add("show"),fetch(r,{method:"POST",body:t}).then(function(e){return e.json()}).catch(function(e){n(),s.querySelector(".js-form-error").classList.add("show")}).then(function(e){n(),0!==e&&"error"!==e.status?(s.querySelector(".js-form-success").classList.add("show"),s.reset()):s.querySelector(".js-form-error").classList.add("show")})):s.querySelector('[data-error="invalidMessage"]').classList.add("show"):s.querySelector('[data-error="invalidEmail"]').classList.add("show"):s.querySelector('[data-error="invalidName"]').classList.add("show")})})},{}]},{},[1]);
//# sourceMappingURL=form.js.map
