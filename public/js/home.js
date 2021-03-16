/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/***/ (() => {

eval("\n\nvar modalEle = document.querySelector(\".modal\");\nvar modalImage = document.querySelector(\".modalImage\");\nvar captionText = document.querySelector(\".caption\");\nArray.from(document.querySelectorAll(\".myImg\")).forEach(function (item) {\n  item.addEventListener(\"click\", function (event) {\n    modalEle.style.display = \"block\";\n    modalImage.src = event.target.src;\n    captionText.innerHTML = event.target.alt;\n  });\n});\ndocument.querySelector(\".close\").addEventListener(\"click\", function () {\n  modalEle.style.display = \"none\";\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvaG9tZS5qcz8wMGQyIl0sIm5hbWVzIjpbIm1vZGFsRWxlIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibW9kYWxJbWFnZSIsImNhcHRpb25UZXh0IiwiQXJyYXkiLCJmcm9tIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJpdGVtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50Iiwic3R5bGUiLCJkaXNwbGF5Iiwic3JjIiwidGFyZ2V0IiwiaW5uZXJIVE1MIiwiYWx0Il0sIm1hcHBpbmdzIjoiQUFBQTs7QUFFQSxJQUFJQSxRQUFRLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixRQUF2QixDQUFmO0FBQ0EsSUFBSUMsVUFBVSxHQUFHRixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsYUFBdkIsQ0FBakI7QUFDQSxJQUFJRSxXQUFXLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixVQUF2QixDQUFsQjtBQUNBRyxLQUFLLENBQUNDLElBQU4sQ0FBV0wsUUFBUSxDQUFDTSxnQkFBVCxDQUEwQixRQUExQixDQUFYLEVBQWdEQyxPQUFoRCxDQUF3RCxVQUFBQyxJQUFJLEVBQUk7QUFDOURBLE1BQUksQ0FBQ0MsZ0JBQUwsQ0FBc0IsT0FBdEIsRUFBK0IsVUFBQUMsS0FBSyxFQUFJO0FBQ3BDWCxZQUFRLENBQUNZLEtBQVQsQ0FBZUMsT0FBZixHQUF5QixPQUF6QjtBQUNBVixjQUFVLENBQUNXLEdBQVgsR0FBaUJILEtBQUssQ0FBQ0ksTUFBTixDQUFhRCxHQUE5QjtBQUNBVixlQUFXLENBQUNZLFNBQVosR0FBd0JMLEtBQUssQ0FBQ0ksTUFBTixDQUFhRSxHQUFyQztBQUNILEdBSkQ7QUFLRCxDQU5EO0FBT0FoQixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsUUFBdkIsRUFBaUNRLGdCQUFqQyxDQUFrRCxPQUFsRCxFQUEyRCxZQUFNO0FBQy9EVixVQUFRLENBQUNZLEtBQVQsQ0FBZUMsT0FBZixHQUF5QixNQUF6QjtBQUNELENBRkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvaG9tZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIid1c2Ugc3RyaWN0J1xuXG52YXIgbW9kYWxFbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1vZGFsXCIpO1xudmFyIG1vZGFsSW1hZ2UgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLm1vZGFsSW1hZ2VcIik7XG52YXIgY2FwdGlvblRleHQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmNhcHRpb25cIik7XG5BcnJheS5mcm9tKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIubXlJbWdcIikpLmZvckVhY2goaXRlbSA9PiB7XG4gIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGV2ZW50ID0+IHtcbiAgICAgIG1vZGFsRWxlLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XG4gICAgICBtb2RhbEltYWdlLnNyYyA9IGV2ZW50LnRhcmdldC5zcmM7XG4gICAgICBjYXB0aW9uVGV4dC5pbm5lckhUTUwgPSBldmVudC50YXJnZXQuYWx0O1xuICB9KTtcbn0pO1xuZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5jbG9zZVwiKS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xuICBtb2RhbEVsZS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XG59KTsiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/home.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/home.js"]();
/******/ 	
/******/ })()
;