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

/***/ "./resources/js/previewPhoto.js":
/*!**************************************!*\
  !*** ./resources/js/previewPhoto.js ***!
  \**************************************/
/***/ (() => {

eval("\n\nvar inpPhoto = document.getElementById(\"inpPhoto\");\nvar previewContainer = document.getElementById(\"photoPreview\");\nvar previewPhoto = previewContainer.querySelector(\".photo-preview__image\");\nvar previewDefaultText = previewContainer.querySelector(\".photo-preview__default-text\");\ninpPhoto.addEventListener(\"change\", function () {\n  var file = this.files[0];\n\n  if (file) {\n    var reader = new FileReader();\n    previewDefaultText.style.display = \"none\";\n    previewPhoto.style.display = \"block\";\n    reader.addEventListener(\"load\", function () {\n      previewPhoto.setAttribute(\"src\", this.result);\n    });\n    reader.readAsDataURL(file);\n  } else {\n    previewDefaultText.style.display = null;\n    previewPhoto.style.display = null;\n    previewPhoto.setAttribute(\"src\", \"\");\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcHJldmlld1Bob3RvLmpzPzhkY2EiXSwibmFtZXMiOlsiaW5wUGhvdG8iLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicHJldmlld0NvbnRhaW5lciIsInByZXZpZXdQaG90byIsInF1ZXJ5U2VsZWN0b3IiLCJwcmV2aWV3RGVmYXVsdFRleHQiLCJhZGRFdmVudExpc3RlbmVyIiwiZmlsZSIsImZpbGVzIiwicmVhZGVyIiwiRmlsZVJlYWRlciIsInN0eWxlIiwiZGlzcGxheSIsInNldEF0dHJpYnV0ZSIsInJlc3VsdCIsInJlYWRBc0RhdGFVUkwiXSwibWFwcGluZ3MiOiJBQUFBOztBQUVBLElBQU1BLFFBQVEsR0FBR0MsUUFBUSxDQUFDQyxjQUFULENBQXdCLFVBQXhCLENBQWpCO0FBQ0ksSUFBTUMsZ0JBQWdCLEdBQUdGLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixjQUF4QixDQUF6QjtBQUNBLElBQU1FLFlBQVksR0FBR0QsZ0JBQWdCLENBQUNFLGFBQWpCLENBQStCLHVCQUEvQixDQUFyQjtBQUNBLElBQU1DLGtCQUFrQixHQUFHSCxnQkFBZ0IsQ0FBQ0UsYUFBakIsQ0FBK0IsOEJBQS9CLENBQTNCO0FBRUFMLFFBQVEsQ0FBQ08sZ0JBQVQsQ0FBMEIsUUFBMUIsRUFBb0MsWUFBVTtBQUMxQyxNQUFNQyxJQUFJLEdBQUcsS0FBS0MsS0FBTCxDQUFXLENBQVgsQ0FBYjs7QUFFSSxNQUFHRCxJQUFILEVBQVM7QUFDTCxRQUFNRSxNQUFNLEdBQUcsSUFBSUMsVUFBSixFQUFmO0FBRUFMLHNCQUFrQixDQUFDTSxLQUFuQixDQUF5QkMsT0FBekIsR0FBb0MsTUFBcEM7QUFDQVQsZ0JBQVksQ0FBQ1EsS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsT0FBN0I7QUFFQUgsVUFBTSxDQUFDSCxnQkFBUCxDQUF3QixNQUF4QixFQUFnQyxZQUFXO0FBQ3ZDSCxrQkFBWSxDQUFDVSxZQUFiLENBQTBCLEtBQTFCLEVBQWlDLEtBQUtDLE1BQXRDO0FBRUgsS0FIRDtBQUtBTCxVQUFNLENBQUNNLGFBQVAsQ0FBcUJSLElBQXJCO0FBRUgsR0FiRCxNQWFLO0FBQ0RGLHNCQUFrQixDQUFDTSxLQUFuQixDQUF5QkMsT0FBekIsR0FBb0MsSUFBcEM7QUFDQVQsZ0JBQVksQ0FBQ1EsS0FBYixDQUFtQkMsT0FBbkIsR0FBNkIsSUFBN0I7QUFDQVQsZ0JBQVksQ0FBQ1UsWUFBYixDQUEwQixLQUExQixFQUFpQyxFQUFqQztBQUNIO0FBQ0osQ0FyQkwiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcHJldmlld1Bob3RvLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJ3VzZSBzdHJpY3QnXHJcblxyXG5jb25zdCBpbnBQaG90byA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiaW5wUGhvdG9cIik7XHJcbiAgICBjb25zdCBwcmV2aWV3Q29udGFpbmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwaG90b1ByZXZpZXdcIik7XHJcbiAgICBjb25zdCBwcmV2aWV3UGhvdG8gPSBwcmV2aWV3Q29udGFpbmVyLnF1ZXJ5U2VsZWN0b3IoXCIucGhvdG8tcHJldmlld19faW1hZ2VcIik7XHJcbiAgICBjb25zdCBwcmV2aWV3RGVmYXVsdFRleHQgPSBwcmV2aWV3Q29udGFpbmVyLnF1ZXJ5U2VsZWN0b3IoXCIucGhvdG8tcHJldmlld19fZGVmYXVsdC10ZXh0XCIpO1xyXG4gICAgICAgIFxyXG4gICAgaW5wUGhvdG8uYWRkRXZlbnRMaXN0ZW5lcihcImNoYW5nZVwiLCBmdW5jdGlvbigpe1xyXG4gICAgICAgIGNvbnN0IGZpbGUgPSB0aGlzLmZpbGVzWzBdO1xyXG5cclxuICAgICAgICAgICAgaWYoZmlsZSkge1xyXG4gICAgICAgICAgICAgICAgY29uc3QgcmVhZGVyID0gbmV3IEZpbGVSZWFkZXIoKTtcclxuXHJcbiAgICAgICAgICAgICAgICBwcmV2aWV3RGVmYXVsdFRleHQuc3R5bGUuZGlzcGxheSAgPSBcIm5vbmVcIjtcclxuICAgICAgICAgICAgICAgIHByZXZpZXdQaG90by5zdHlsZS5kaXNwbGF5ID0gXCJibG9ja1wiO1xyXG5cclxuICAgICAgICAgICAgICAgIHJlYWRlci5hZGRFdmVudExpc3RlbmVyKFwibG9hZFwiLCBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICAgICBwcmV2aWV3UGhvdG8uc2V0QXR0cmlidXRlKFwic3JjXCIsIHRoaXMucmVzdWx0KVxyXG5cclxuICAgICAgICAgICAgICAgIH0pO1xyXG5cclxuICAgICAgICAgICAgICAgIHJlYWRlci5yZWFkQXNEYXRhVVJMKGZpbGUpO1xyXG5cclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICBwcmV2aWV3RGVmYXVsdFRleHQuc3R5bGUuZGlzcGxheSAgPSBudWxsO1xyXG4gICAgICAgICAgICAgICAgcHJldmlld1Bob3RvLnN0eWxlLmRpc3BsYXkgPSBudWxsO1xyXG4gICAgICAgICAgICAgICAgcHJldmlld1Bob3RvLnNldEF0dHJpYnV0ZShcInNyY1wiLCBcIlwiKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/previewPhoto.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/previewPhoto.js"]();
/******/ 	
/******/ })()
;