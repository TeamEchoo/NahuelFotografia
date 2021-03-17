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

/***/ "./resources/js/dragNDrop.js":
/*!***********************************!*\
  !*** ./resources/js/dragNDrop.js ***!
  \***********************************/
/***/ (() => {

eval("$(document).ready(function () {\n  $('.file_drag_area').on('dragover', function () {\n    $(this).addClass('file_drag_over');\n    return false;\n  });\n  $('.file_drag_area').on('dragleave', function () {\n    $(this).removeClass('file_drag_over');\n    return false;\n  });\n  $('.file_drag_area').on('drop', function (e) {\n    e.preventDefault();\n    $(this).removeClass('file_drag_over');\n    var formData = new FormData();\n    var files_list = e.originalEvent.dataTransfer.files; //console.log(files_list);\n\n    for (var i = 0; i < files_list.lenght; i++) {\n      formData.append('file[]', file_list[i]);\n    } //console.log(formData);\n\n\n    $.ajax({\n      url: \"createAlbum.blade.php\",\n      method: \"POST\",\n      data: formData,\n      contentType: false,\n      cache: false,\n      processData: false,\n      success: function success(data) {\n        $('#uploaded_file').html(data);\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZHJhZ05Ecm9wLmpzPzIwMGYiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJvbiIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJlIiwicHJldmVudERlZmF1bHQiLCJmb3JtRGF0YSIsIkZvcm1EYXRhIiwiZmlsZXNfbGlzdCIsIm9yaWdpbmFsRXZlbnQiLCJkYXRhVHJhbnNmZXIiLCJmaWxlcyIsImkiLCJsZW5naHQiLCJhcHBlbmQiLCJmaWxlX2xpc3QiLCJhamF4IiwidXJsIiwibWV0aG9kIiwiZGF0YSIsImNvbnRlbnRUeXBlIiwiY2FjaGUiLCJwcm9jZXNzRGF0YSIsInN1Y2Nlc3MiLCJodG1sIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0FBQ3hCRixFQUFBQSxDQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQkcsRUFBckIsQ0FBd0IsVUFBeEIsRUFBb0MsWUFBVTtBQUMxQ0gsSUFBQUEsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRSSxRQUFSLENBQWlCLGdCQUFqQjtBQUNBLFdBQU8sS0FBUDtBQUVQLEdBSkc7QUFLSkosRUFBQUEsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJHLEVBQXJCLENBQXdCLFdBQXhCLEVBQXFDLFlBQVU7QUFDM0NILElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUssV0FBUixDQUFvQixnQkFBcEI7QUFDQSxXQUFPLEtBQVA7QUFDSCxHQUhEO0FBSUFMLEVBQUFBLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCRyxFQUFyQixDQUF3QixNQUF4QixFQUFnQyxVQUFTRyxDQUFULEVBQVc7QUFDdkNBLElBQUFBLENBQUMsQ0FBQ0MsY0FBRjtBQUNBUCxJQUFBQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFLLFdBQVIsQ0FBb0IsZ0JBQXBCO0FBQ0EsUUFBSUcsUUFBUSxHQUFHLElBQUlDLFFBQUosRUFBZjtBQUNBLFFBQUlDLFVBQVUsR0FBR0osQ0FBQyxDQUFDSyxhQUFGLENBQWdCQyxZQUFoQixDQUE2QkMsS0FBOUMsQ0FKdUMsQ0FLM0I7O0FBQ1osU0FBSSxJQUFJQyxDQUFDLEdBQUMsQ0FBVixFQUFhQSxDQUFDLEdBQUNKLFVBQVUsQ0FBQ0ssTUFBMUIsRUFBa0NELENBQUMsRUFBbkMsRUFDQTtBQUNJTixNQUFBQSxRQUFRLENBQUNRLE1BQVQsQ0FBZ0IsUUFBaEIsRUFBMEJDLFNBQVMsQ0FBQ0gsQ0FBRCxDQUFuQztBQUNILEtBVHNDLENBVTVCOzs7QUFDWGQsSUFBQUEsQ0FBQyxDQUFDa0IsSUFBRixDQUFPO0FBQ0hDLE1BQUFBLEdBQUcsRUFBQyx1QkFERDtBQUVIQyxNQUFBQSxNQUFNLEVBQUMsTUFGSjtBQUdIQyxNQUFBQSxJQUFJLEVBQUNiLFFBSEY7QUFJSGMsTUFBQUEsV0FBVyxFQUFDLEtBSlQ7QUFLSEMsTUFBQUEsS0FBSyxFQUFFLEtBTEo7QUFNSEMsTUFBQUEsV0FBVyxFQUFFLEtBTlY7QUFPSEMsTUFBQUEsT0FBTyxFQUFDLGlCQUFTSixJQUFULEVBQWM7QUFDakJyQixRQUFBQSxDQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQjBCLElBQXBCLENBQXlCTCxJQUF6QjtBQUNKO0FBVEUsS0FBUDtBQVdDLEdBdEJMO0FBdUJDLENBakNEIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAkKCcuZmlsZV9kcmFnX2FyZWEnKS5vbignZHJhZ292ZXInLCBmdW5jdGlvbigpe1xuICAgICAgICAkKHRoaXMpLmFkZENsYXNzKCdmaWxlX2RyYWdfb3ZlcicpO1xuICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgXG59KTtcbiQoJy5maWxlX2RyYWdfYXJlYScpLm9uKCdkcmFnbGVhdmUnLCBmdW5jdGlvbigpe1xuICAgICQodGhpcykucmVtb3ZlQ2xhc3MoJ2ZpbGVfZHJhZ19vdmVyJyk7XG4gICAgcmV0dXJuIGZhbHNlO1xufSk7XG4kKCcuZmlsZV9kcmFnX2FyZWEnKS5vbignZHJvcCcsIGZ1bmN0aW9uKGUpe1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAkKHRoaXMpLnJlbW92ZUNsYXNzKCdmaWxlX2RyYWdfb3ZlcicpO1xuICAgIHZhciBmb3JtRGF0YSA9IG5ldyBGb3JtRGF0YSgpO1xuICAgIHZhciBmaWxlc19saXN0ID0gZS5vcmlnaW5hbEV2ZW50LmRhdGFUcmFuc2Zlci5maWxlcztcbiAgICAgICAgICAgICAgICAvL2NvbnNvbGUubG9nKGZpbGVzX2xpc3QpO1xuICAgIGZvcih2YXIgaT0wOyBpPGZpbGVzX2xpc3QubGVuZ2h0OyBpKyspXG4gICAge1xuICAgICAgICBmb3JtRGF0YS5hcHBlbmQoJ2ZpbGVbXScsIGZpbGVfbGlzdFtpXSk7XG4gICAgfVxuICAgICAgICAgICAgICAgLy9jb25zb2xlLmxvZyhmb3JtRGF0YSk7XG4gICAgJC5hamF4KHsgIFxuICAgICAgICB1cmw6XCJjcmVhdGVBbGJ1bS5ibGFkZS5waHBcIiwgIFxuICAgICAgICBtZXRob2Q6XCJQT1NUXCIsICBcbiAgICAgICAgZGF0YTpmb3JtRGF0YSwgIFxuICAgICAgICBjb250ZW50VHlwZTpmYWxzZSwgIFxuICAgICAgICBjYWNoZTogZmFsc2UsICBcbiAgICAgICAgcHJvY2Vzc0RhdGE6IGZhbHNlLCAgXG4gICAgICAgIHN1Y2Nlc3M6ZnVuY3Rpb24oZGF0YSl7ICBcbiAgICAgICAgICAgICAkKCcjdXBsb2FkZWRfZmlsZScpLmh0bWwoZGF0YSk7ICBcbiAgICAgICAgfSAgXG4gICAgICAgfSkgIFxuICAgIH0pO1xufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9kcmFnTkRyb3AuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/dragNDrop.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/dragNDrop.js"]();
/******/ 	
/******/ })()
;