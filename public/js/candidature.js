/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/candidature.js":
/*!*************************************!*\
  !*** ./resources/js/candidature.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

document.addEventListener('DOMContentLoaded', function () {
  $("#app-informations").hide();
  $("#app-candidatures").show();
  $("#mes-candidatures").show();
  $("#nouvelle-candidatures").hide();
  $("#discipline").hide();
  var height = $(window).height();
  $("#home").css({
    "min-height": height
  });
});
$(document).ready(function () {});
$("#sidebar-informations").click(function (event) {
  $("#sidebar-informations").addClass("active");
  $("#sidebar-candidatures").removeClass("active");
  $("#app-informations").show();
  $("#app-candidatures").hide();
});
$("#sidebar-candidatures").click(function (event) {
  $("#sidebar-informations").removeClass("active");
  $("#sidebar-candidatures").addClass("active");
  $("#app-informations").hide();
  $("#app-candidatures").show();
  $("#mes-candidatures").show();
  $("#nouvelle-candidatures").hide();
});
$("#candidater").click(function (event) {
  $("#mes-candidatures").hide();
  $("#nouvelle-candidatures").show();
  var disciplineID = $("#disciplines").val();
});
$("#programmes").change(function (event) {
  event.preventDefault();
  var programmes = $("#programmes");
  var programme_id_value = programmes.val();
  $("#disciplines").empty();
  $("#disciplines").removeAttr("disabled");
  $.ajax({
    type: 'GET',
    url: '/disciplines/' + programme_id_value,
    success: function success(data) {
      var disciplines = JSON.parse(data);
      $("#disciplines").append('<option selected disabled>Discipline</option>');
      disciplines.forEach(function (element) {
        $("#disciplines").append('<option value="' + element.discipline_id + '">' + element.titre + '</option>');
      });
    },
    error: function error(data) {
      alert(' Selected' + selectedValue);
    }
  });
});
$("#disciplines").change(function (event) {
  event.preventDefault();
  $("#discipline").show();
  var discipline_id_value = $("#disciplines").val();
  $("#type-bac").empty();
  $("#type-bac").removeAttr("disabled");
  $.ajax({
    type: 'GET',
    url: '/discipline/' + discipline_id_value,
    success: function success(data) {
      var disciplines = JSON.parse(data);
      $("#type-bac").append('<option selected disabled>Série de Baccalauréat</option>');
      disciplines.forEach(function (element) {
        $("#type-bac").append('<option value="' + element.type_bacalaureat_id + '">' + element.bacalaureat_fr + '</option>');
      });
    },
    error: function error(data) {
      alert('NO');
    }
  });
});
$("#confirmer-candidature").click(function (event) {
  event.preventDefault();
  var disciplineID = $("#disciplines").val();
  $.ajax({
    type: 'POST',
    url: '/candidater',
    data: {
      discipline_id: disciplineID
    },
    success: function success(data) {}
  });
});

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/candidature.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/amine/Developer/Bourse/resources/js/candidature.js */"./resources/js/candidature.js");


/***/ })

/******/ });