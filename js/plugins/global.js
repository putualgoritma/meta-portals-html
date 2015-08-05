(function(){angular.module("marketing.global",["marketing.global.header","marketing.global.stickynav","marketing.global.accordion","marketing.global.mixpanel","marketing.global.eventlog"])}).call(this),function(){var e=angular.module("marketing.global.accordion",["ngAnimate"]);e.directive("uiAccordion",[function(){var e=["$scope",function(e){var n=e.items=[];this.collapseSiblings=function(e){angular.forEach(n,function(n){n!==e&&(n.active=!1)})},this.addItem=function(e){n.push(e)}}];return{restrict:"A",scope:{},controller:e}}]),e.directive("uiAccordionItem",["$animate",function(e){var n=function(n,t,i,a){n.active=!1,a.addItem(n),n.toggle=function(){n.active=!n.active,n.active&&a.collapseSiblings(n)},n.$watch("active",function(n){n?e.addClass(t,"active").then(function(){var e=$(".affix:visible").height()-1;$("html,body").animate({scrollTop:$(t).offset().top-e},1e3)}):e.removeClass(t,"active")})};return{restrict:"A",require:"^uiAccordion",scope:!0,link:n}}]),e.directive("uiAccordionItemToggle",[function(){var e=["$scope",function(e){e.toggle=function(){e.$parent.toggle()}}];return{restrict:"A",replace:!0,transclude:!0,scope:!1,template:'<a ng-click="toggle()" ng-href="" ng-transclude></a>',controller:e}}]),e.animation(".item",function(){return{beforeAddClass:function(e,n,t){var i=$(e);"active"===n&&i.find(".content").slideDown(t)},removeClass:function(e,n,t){var i=$(e);"active"===n&&i.find(".content").slideUp(t)}}})}.call(this),function(){var e=angular.module("marketing.global.eventlog",["components.core.log","components.core.model","ngCookies"]);e.directive("ologTrigger",["oLog","eoModelFactory","$cookies",function(e,n,t){return{restrict:"AE",scope:!0,link:function(i,a,o){if(o.ologLocation&&o.ologName){var c=n.get("Event",{type:o.ologName,location:o.ologLocation,sublocation:o.ologSublocation,event:o.hasOwnProperty("ologName")?o.ologName:"",data:o.hasOwnProperty("ologData")?JSON.parse(o.ologData):[]});if("impression"==o.ologName){var r=function(e){if(""==e)return{};for(var n={},t=0;t<e.length;++t){var i=e[t].split("=",2);1==i.length?n[i[0]]="":n[i[0]]=decodeURIComponent(i[1].replace(/\+/g," "))}return n}(window.location.search.substr(1).split("&"));c.data.push({vt_kw:r.vt_kw,vt_med:r.vt_med,vt_src:r.vt_src,vt_cmp:r.vt_cmp,vt_adg:r.vt_adg,recognized:t.recognized?1:0})}"undefined"==typeof o.ologEvent?e.event(c):a.on(o.ologEvent,function(){e.event(c)})}}}}])}.call(this),function(){var e=angular.module("marketing.global.header",["ngAnimate"]);e.directive("uiOffCanvas",["$animate",function(e){var n=function(n,t,i){n.canvasVisible=!1,n.$watch("canvasVisible",function(n){n?e.addClass(t,"move-left"):e.removeClass(t,"move-left")})};return{restrict:"A",scope:!0,transclude:!0,replace:!0,template:'<div class="off-canvas-wrap"><div class="inner-wrap" ng-transclude></div>',link:n}}]),e.directive("uiOffCanvasToggle",[function(){var e=function(e,n,t){e.toggleCanvas=function(){e.$parent.canvasVisible=!e.$parent.canvasVisible}};return{restrict:"A",replace:!0,transclude:!0,template:'<div class="right-off-canvas-toggle menu-icon" ng-click="toggleCanvas()" ng-transclude></div>',link:e}}]),e.directive("uiOffCanvasHide",[function(){var e=function(e,n,t){e.hideCanvas=function(){e.$parent.canvasVisible=!1}};return{restrict:"A",replace:!0,transclude:!0,template:'<a class="exit-off-canvas" ng-transclude ng-click="hideCanvas()"></a>',link:e}}]),e.directive("uiExpandList",["$animate","$compile",function(e,n){var t=function(t,i){t.expanded=!1,n(i.contents())(t),t.toggleExpand=function(){t.expanded=!t.expanded,t.expanded?e.addClass(i,"expanded"):e.removeClass(i,"expanded")}};return{restrict:"A",link:t,scope:{}}}]),e.directive("uiSubMenu",[function(){var e=["$scope",function(e){var n=e.submenus=[];this.closeSubmenus=function(e){angular.forEach(n,function(n){n!==e&&(n.active=!1)})},this.addSubmenuItem=function(e){n.push(e)}}];return{restrict:"A",scope:{},controller:e}}]),e.directive("uiMenuActive",["$document","$animate",function(e,n){var t=function(t,i,a,o){t.isOpen=!1;var c=function(){t.isOpen=!0,e.bind("click",l),n.addClass(i,"active")},r=function(){t.isOpen=!1,e.unbind("click",l),n.removeClass(i,"active")},l=function(e){if(t.isOpen){var n=i.parent()[0];e&&n.contains(e.target)||(r(),t.$apply())}};t.toggle=function(){t.isOpen?r():c()}};return{restrict:"A",require:"^uiSubMenu",replace:!0,transclude:!0,template:'<a ng-transclude ng-click="toggle()"></a>',link:t}}]),e.directive("uiSubMenuItem",["$animate",function(e){var n=function(n,t,i,a){var o=t.parent();n.active=o.hasClass("active"),a.addSubmenuItem(n),n.toggleActive=function(){n.active=!n.active,n.active&&a.closeSubmenus(n)},n.$watch("active",function(n){n?e.addClass(o,"active"):e.removeClass(o,"active")})};return{restrict:"A",require:"^uiSubMenu",scope:!0,replace:!0,transclude:!0,template:'<a ng-click="toggleActive()" ng-transclude></a>',link:n}}]),e.directive("ngPlaceholder",[function(){var e=function(e,n,t){e.$watch("placeholder",function(){n[0].placeholder=e.placeholder})};return{restrict:"A",scope:{placeholder:"=ngPlaceholder"},link:e}}]),e.directive("ngAction",[function(){var e=function(e,n,t){e.$watch("action",function(){n[0].action=e.action})};return{restrict:"A",scope:{action:"=ngAction"},link:e}}]),e.directive("setFocus",[function(){var e=function(e,n){e.$watch("focus",function(){!0===e.focus&&(n[0].focus(),e.focus=!1)})};return{restrict:"A",link:e}}]),e.controller("uiSearchController",["$scope","$element","$document",function(e,n,t){var i={client:{action:"/o/profiles/browse/",placeholder:"Find Freelancers"},freelancer:{action:"/o/jobs/browse/",placeholder:"Find Jobs"}};e.isOpen=!1,e.query="",e.placeholder="",e.action="",e.actionSelectDisabled=!1,e.focus=!1,e.context="client",e.$watch("context",function(n){var t=i[n];e.placeholder=t.placeholder,e.action=t.action});var a=function(){e.isOpen=!0,t.bind("click",c)},o=function(){e.isOpen=!1,t.unbind("click",c)},c=function(t){e.isOpen&&(t&&n&&n[0].contains(t.target)&&"INPUT"!==t.target.tagName||(e.focus=!0,o(),e.$apply()))};e.toggleDropDown=function(){e.isOpen?o():a()},e.search=function(){e.actionSelectDisabled=!0}}])}.call(this),function(){angular.module("marketing.global.mixpanel",[]).directive("mixpanelTrigger",function(){return{restrict:"AE",link:function(e,n,t){if(t.mixpanelEvent){var i=angular.fromJson(t.mixpanelData||"{}"),a=t.mixpanelEvent;if("undefined"==typeof t.mixpanelTrigger)mixpanel.track(a,i);else switch(t.mixpanelTrigger){case"enter":n.on("keyup",function(e){13==e.keyCode&&(i=angular.extend(i,{"Search Query":n.val(),"Search Type":n.attr("placeholder")}),mixpanel.track(a,i))});break;default:n.on(t.mixpanelTrigger,function(){mixpanel.track(a,i)})}}}}}).run(function(){function e(e,n){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]"),n=n||location.search;var t=(n.split("?").slice(-1)[0],new RegExp("[\\?&]"+e+"=([^&#]*)")),i=t.exec(n);return null==i?"":decodeURIComponent(i[1].replace(/\+/g," "))}var n={};angular.forEach(["vt_src","vt_cmp","vt_adg","vt_med","vt_kw"],function(t){var i=e(t);i&&(n[t]=i)}),mixpanel.register(n),"undefined"!=typeof Applet&&mixpanel.identify(Applet.getVisitorId())})}.call(this),function(){var e=angular.module("marketing.global.stickynav",[]);e.directive("uiStickyNav",[function(){return{restrict:"A",link:function(e,n,t){var i=$(n),a=$("body").css({position:"relative"}),o=i.parent(),c="nav-scrollspy";i.affix({offset:{top:o.position().top}}),o.addClass(c),a.scrollspy({target:"."+c,offset:0}),i.find("a[href*=#]").on("click",function(){var e=$(this),n=$(e.attr("href"));return a.data("bs.scrollspy").clear(),o.removeClass(c),e.parent().addClass("active"),n.length?($("html,body").animate({scrollTop:n.offset().top-o.height()},1e3,function(){o.addClass(c)}),!1):void 0}),$(window).on("resize",function(){i.data("bs.affix").options.offset=o.position().top})}}}])}.call(this);