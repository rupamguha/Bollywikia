/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e,t=location.hash.substring(1);/^[A-z0-9_-]+$/.test(t)&&(e=document.getElementById(t))&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus())},!1),function(){"use strict";if("querySelector"in document&&"addEventListener"in window){var e=document.body;e.addEventListener("mousedown",function(){e.classList.add("using-mouse")}),e.addEventListener("keydown",function(){e.classList.remove("using-mouse")})}}(),function(){"use strict";if("querySelector"in document&&"addEventListener"in window&&document.body.classList.contains("dropdown-hover"))for(var e=document.querySelectorAll("nav ul a"),n=document.querySelectorAll(".sf-menu .menu-item-has-children"),t=function(){if(!this.closest("nav").classList.contains("toggled")&&!this.closest("nav").classList.contains("slideout-navigation"))for(var e=this;-1===e.className.indexOf("main-nav");)"li"===e.tagName.toLowerCase()&&(-1!==e.className.indexOf("sfHover")?e.className=e.className.replace(" sfHover",""):e.className+=" sfHover"),e=e.parentElement},o=0;o<e.length;o++)e[o].addEventListener("focus",t),e[o].addEventListener("blur",t);if("touchend"in document.documentElement)for(o=0;o<n.length;o++)n[o].addEventListener("touchend",function(e){if(!n[o].closest("nav").classList.contains("toggled")&&1===e.touches.length&&(e.stopPropagation(),!this.classList.contains("sfHover"))){e.target!==this&&e.target.parentNode!==this||e.preventDefault();var t=n[o].closest("nav").querySelectorAll("ul.toggled-on");if(t&&!this.closest("ul").classList.contains("toggled-on")&&!this.closest("li").classList.contains("sfHover"))for(var s=0;s<t.length;s++)t[s].classList.remove("toggled-on"),t[s].closest("li").classList.remove("sfHover");this.classList.add("sfHover"),document.addEventListener("touchend",closeDropdown=function(e){e.stopPropagation(),this.classList.remove("sfHover"),document.removeEventListener("touchend",closeDropdown)})}},!0)}();