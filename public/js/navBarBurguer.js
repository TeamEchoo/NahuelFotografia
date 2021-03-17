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

/***/ "./resources/js/navBarBurguer.js":
/*!***************************************!*\
  !*** ./resources/js/navBarBurguer.js ***!
  \***************************************/
/***/ (() => {

eval("var menuButton = document.querySelector(\".main-menu-button\");\nvar navItems = document.querySelector(\".main-nav\");\nvar barHide = document.querySelector(\".main-menu-bar-two\");\nvar barLeft = document.querySelector(\".main-menu-bar-one\");\nvar barRight = document.querySelector(\".main-menu-bar-three\");\nmenuButton.onclick = openMenu;\n\nfunction openMenu() {\n  navItems.classList.toggle(\"toggle-main-nav\");\n  barHide.classList.toggle(\"hide-bar-two\");\n  barLeft.classList.toggle(\"cross-bar-one\");\n  barRight.classList.toggle(\"cross-bar-three\");\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbmF2QmFyQnVyZ3Vlci5qcz9kYWQ5Il0sIm5hbWVzIjpbIm1lbnVCdXR0b24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJuYXZJdGVtcyIsImJhckhpZGUiLCJiYXJMZWZ0IiwiYmFyUmlnaHQiLCJvbmNsaWNrIiwib3Blbk1lbnUiLCJjbGFzc0xpc3QiLCJ0b2dnbGUiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLFVBQVUsR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLG1CQUF2QixDQUFqQjtBQUNBLElBQUlDLFFBQVEsR0FBR0YsUUFBUSxDQUFDQyxhQUFULENBQXVCLFdBQXZCLENBQWY7QUFDQSxJQUFJRSxPQUFPLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixvQkFBdkIsQ0FBZDtBQUNBLElBQUlHLE9BQU8sR0FBR0osUUFBUSxDQUFDQyxhQUFULENBQXVCLG9CQUF2QixDQUFkO0FBQ0EsSUFBSUksUUFBUSxHQUFHTCxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsc0JBQXZCLENBQWY7QUFFQUYsVUFBVSxDQUFDTyxPQUFYLEdBQXFCQyxRQUFyQjs7QUFFQSxTQUFTQSxRQUFULEdBQW9CO0FBQ2xCTCxFQUFBQSxRQUFRLENBQUNNLFNBQVQsQ0FBbUJDLE1BQW5CLENBQTBCLGlCQUExQjtBQUNBTixFQUFBQSxPQUFPLENBQUNLLFNBQVIsQ0FBa0JDLE1BQWxCLENBQXlCLGNBQXpCO0FBQ0FMLEVBQUFBLE9BQU8sQ0FBQ0ksU0FBUixDQUFrQkMsTUFBbEIsQ0FBeUIsZUFBekI7QUFDQUosRUFBQUEsUUFBUSxDQUFDRyxTQUFULENBQW1CQyxNQUFuQixDQUEwQixpQkFBMUI7QUFDRCIsInNvdXJjZXNDb250ZW50IjpbImxldCBtZW51QnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tYWluLW1lbnUtYnV0dG9uXCIpO1xyXG5sZXQgbmF2SXRlbXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1haW4tbmF2XCIpO1xyXG5sZXQgYmFySGlkZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubWFpbi1tZW51LWJhci10d29cIik7XHJcbmxldCBiYXJMZWZ0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tYWluLW1lbnUtYmFyLW9uZVwiKTtcclxubGV0IGJhclJpZ2h0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tYWluLW1lbnUtYmFyLXRocmVlXCIpO1xyXG5cclxubWVudUJ1dHRvbi5vbmNsaWNrID0gb3Blbk1lbnU7XHJcblxyXG5mdW5jdGlvbiBvcGVuTWVudSgpIHtcclxuICBuYXZJdGVtcy5jbGFzc0xpc3QudG9nZ2xlKFwidG9nZ2xlLW1haW4tbmF2XCIpO1xyXG4gIGJhckhpZGUuY2xhc3NMaXN0LnRvZ2dsZShcImhpZGUtYmFyLXR3b1wiKTtcclxuICBiYXJMZWZ0LmNsYXNzTGlzdC50b2dnbGUoXCJjcm9zcy1iYXItb25lXCIpO1xyXG4gIGJhclJpZ2h0LmNsYXNzTGlzdC50b2dnbGUoXCJjcm9zcy1iYXItdGhyZWVcIik7XHJcbn0iXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL25hdkJhckJ1cmd1ZXIuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/navBarBurguer.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/navBarBurguer.js"]();
/******/ 	
/******/ })()
;