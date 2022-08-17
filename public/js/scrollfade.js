/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scrollfade.js":
/*!************************************!*\
  !*** ./resources/js/scrollfade.js ***!
  \************************************/
/***/ (() => {

eval("// ScrollFade 0.1\nvar fadeElements = document.getElementsByClassName('scrollFade');\n\nfunction scrollFade() {\n  var viewportBottom = window.scrollY + window.innerHeight;\n\n  for (var index = 0; index < fadeElements.length; index++) {\n    var element = fadeElements[index];\n    var rect = element.getBoundingClientRect();\n    var elementFourth = rect.height / 4;\n    var fadeInPoint = window.innerHeight - elementFourth;\n    var fadeOutPoint = -(rect.height / 2);\n\n    if (rect.top <= fadeInPoint) {\n      element.classList.add('scrollFade--visible');\n      element.classList.add('scrollFade--animate');\n      element.classList.remove('scrollFade--hidden');\n    } else {\n      element.classList.remove('scrollFade--visible');\n      element.classList.add('scrollFade--hidden');\n    }\n\n    if (rect.top <= fadeOutPoint) {\n      element.classList.remove('scrollFade--visible');\n      element.classList.add('scrollFade--hidden');\n    }\n  }\n}\n\ndocument.addEventListener('scroll', scrollFade);\nwindow.addEventListener('resize', scrollFade);\ndocument.addEventListener('DOMContentLoaded', function () {\n  scrollFade();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJmYWRlRWxlbWVudHMiLCJkb2N1bWVudCIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJzY3JvbGxGYWRlIiwidmlld3BvcnRCb3R0b20iLCJ3aW5kb3ciLCJzY3JvbGxZIiwiaW5uZXJIZWlnaHQiLCJpbmRleCIsImxlbmd0aCIsImVsZW1lbnQiLCJyZWN0IiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwiZWxlbWVudEZvdXJ0aCIsImhlaWdodCIsImZhZGVJblBvaW50IiwiZmFkZU91dFBvaW50IiwidG9wIiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwiYWRkRXZlbnRMaXN0ZW5lciJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2Nyb2xsZmFkZS5qcz82NTIzIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIFNjcm9sbEZhZGUgMC4xXG5cbnZhciBmYWRlRWxlbWVudHMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdzY3JvbGxGYWRlJyk7XG5cbmZ1bmN0aW9uIHNjcm9sbEZhZGUoKSB7XG5cdHZhciB2aWV3cG9ydEJvdHRvbSA9IHdpbmRvdy5zY3JvbGxZICsgd2luZG93LmlubmVySGVpZ2h0O1xuXG5cdGZvciAodmFyIGluZGV4ID0gMDsgaW5kZXggPCBmYWRlRWxlbWVudHMubGVuZ3RoOyBpbmRleCsrKSB7XG5cdFx0dmFyIGVsZW1lbnQgPSBmYWRlRWxlbWVudHNbaW5kZXhdO1xuXHRcdHZhciByZWN0ID0gZWxlbWVudC5nZXRCb3VuZGluZ0NsaWVudFJlY3QoKTtcblxuXHRcdHZhciBlbGVtZW50Rm91cnRoID0gcmVjdC5oZWlnaHQvNDtcblx0XHR2YXIgZmFkZUluUG9pbnQgPSB3aW5kb3cuaW5uZXJIZWlnaHQgLSBlbGVtZW50Rm91cnRoO1xuXHRcdHZhciBmYWRlT3V0UG9pbnQgPSAtKHJlY3QuaGVpZ2h0LzIpO1xuXG5cdFx0aWYgKHJlY3QudG9wIDw9IGZhZGVJblBvaW50KSB7XG5cdFx0XHRlbGVtZW50LmNsYXNzTGlzdC5hZGQoJ3Njcm9sbEZhZGUtLXZpc2libGUnKTtcblx0XHRcdGVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnc2Nyb2xsRmFkZS0tYW5pbWF0ZScpO1xuXHRcdFx0ZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKCdzY3JvbGxGYWRlLS1oaWRkZW4nKTtcblx0XHR9IGVsc2Uge1xuXHRcdFx0ZWxlbWVudC5jbGFzc0xpc3QucmVtb3ZlKCdzY3JvbGxGYWRlLS12aXNpYmxlJyk7XG5cdFx0XHRlbGVtZW50LmNsYXNzTGlzdC5hZGQoJ3Njcm9sbEZhZGUtLWhpZGRlbicpO1xuXHRcdH1cblxuXHRcdGlmIChyZWN0LnRvcCA8PSBmYWRlT3V0UG9pbnQpIHtcblx0XHRcdGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZSgnc2Nyb2xsRmFkZS0tdmlzaWJsZScpO1xuXHRcdFx0ZWxlbWVudC5jbGFzc0xpc3QuYWRkKCdzY3JvbGxGYWRlLS1oaWRkZW4nKTtcblx0XHR9XG5cdH1cbn1cblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgc2Nyb2xsRmFkZSk7XG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgc2Nyb2xsRmFkZSk7XG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XG4gICAgc2Nyb2xsRmFkZSgpO1xufSk7Il0sIm1hcHBpbmdzIjoiQUFBQTtBQUVBLElBQUlBLFlBQVksR0FBR0MsUUFBUSxDQUFDQyxzQkFBVCxDQUFnQyxZQUFoQyxDQUFuQjs7QUFFQSxTQUFTQyxVQUFULEdBQXNCO0VBQ3JCLElBQUlDLGNBQWMsR0FBR0MsTUFBTSxDQUFDQyxPQUFQLEdBQWlCRCxNQUFNLENBQUNFLFdBQTdDOztFQUVBLEtBQUssSUFBSUMsS0FBSyxHQUFHLENBQWpCLEVBQW9CQSxLQUFLLEdBQUdSLFlBQVksQ0FBQ1MsTUFBekMsRUFBaURELEtBQUssRUFBdEQsRUFBMEQ7SUFDekQsSUFBSUUsT0FBTyxHQUFHVixZQUFZLENBQUNRLEtBQUQsQ0FBMUI7SUFDQSxJQUFJRyxJQUFJLEdBQUdELE9BQU8sQ0FBQ0UscUJBQVIsRUFBWDtJQUVBLElBQUlDLGFBQWEsR0FBR0YsSUFBSSxDQUFDRyxNQUFMLEdBQVksQ0FBaEM7SUFDQSxJQUFJQyxXQUFXLEdBQUdWLE1BQU0sQ0FBQ0UsV0FBUCxHQUFxQk0sYUFBdkM7SUFDQSxJQUFJRyxZQUFZLEdBQUcsRUFBRUwsSUFBSSxDQUFDRyxNQUFMLEdBQVksQ0FBZCxDQUFuQjs7SUFFQSxJQUFJSCxJQUFJLENBQUNNLEdBQUwsSUFBWUYsV0FBaEIsRUFBNkI7TUFDNUJMLE9BQU8sQ0FBQ1EsU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0IscUJBQXRCO01BQ0FULE9BQU8sQ0FBQ1EsU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0IscUJBQXRCO01BQ0FULE9BQU8sQ0FBQ1EsU0FBUixDQUFrQkUsTUFBbEIsQ0FBeUIsb0JBQXpCO0lBQ0EsQ0FKRCxNQUlPO01BQ05WLE9BQU8sQ0FBQ1EsU0FBUixDQUFrQkUsTUFBbEIsQ0FBeUIscUJBQXpCO01BQ0FWLE9BQU8sQ0FBQ1EsU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0Isb0JBQXRCO0lBQ0E7O0lBRUQsSUFBSVIsSUFBSSxDQUFDTSxHQUFMLElBQVlELFlBQWhCLEVBQThCO01BQzdCTixPQUFPLENBQUNRLFNBQVIsQ0FBa0JFLE1BQWxCLENBQXlCLHFCQUF6QjtNQUNBVixPQUFPLENBQUNRLFNBQVIsQ0FBa0JDLEdBQWxCLENBQXNCLG9CQUF0QjtJQUNBO0VBQ0Q7QUFDRDs7QUFFRGxCLFFBQVEsQ0FBQ29CLGdCQUFULENBQTBCLFFBQTFCLEVBQW9DbEIsVUFBcEM7QUFDQUUsTUFBTSxDQUFDZ0IsZ0JBQVAsQ0FBd0IsUUFBeEIsRUFBa0NsQixVQUFsQztBQUNBRixRQUFRLENBQUNvQixnQkFBVCxDQUEwQixrQkFBMUIsRUFBOEMsWUFBVztFQUNyRGxCLFVBQVU7QUFDYixDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3Njcm9sbGZhZGUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scrollfade.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/scrollfade.js"]();
/******/ 	
/******/ })()
;