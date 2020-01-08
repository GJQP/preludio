/******/
(function (modules) { // webpackBootstrap
    /******/ 	// The module cache
    /******/
    var installedModules = {};
    /******/
    /******/ 	// The require function
    /******/
    function __webpack_require__(moduleId) {
        /******/
        /******/ 		// Check if module is in cache
        /******/
        if (installedModules[moduleId]) {
            /******/
            return installedModules[moduleId].exports;
            /******/
        }
        /******/ 		// Create a new module (and put it into the cache)
        /******/
        var module = installedModules[moduleId] = {
            /******/            i: moduleId,
            /******/            l: false,
            /******/            exports: {}
            /******/
        };
        /******/
        /******/ 		// Execute the module function
        /******/
        modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
        /******/
        /******/ 		// Flag the module as loaded
        /******/
        module.l = true;
        /******/
        /******/ 		// Return the exports of the module
        /******/
        return module.exports;
        /******/
    }

    /******/
    /******/
    /******/ 	// expose the modules object (__webpack_modules__)
    /******/
    __webpack_require__.m = modules;
    /******/
    /******/ 	// expose the module cache
    /******/
    __webpack_require__.c = installedModules;
    /******/
    /******/ 	// define getter function for harmony exports
    /******/
    __webpack_require__.d = function (exports, name, getter) {
        /******/
        if (!__webpack_require__.o(exports, name)) {
            /******/
            Object.defineProperty(exports, name, {enumerable: true, get: getter});
            /******/
        }
        /******/
    };
    /******/
    /******/ 	// define __esModule on exports
    /******/
    __webpack_require__.r = function (exports) {
        /******/
        if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
            /******/
            Object.defineProperty(exports, Symbol.toStringTag, {value: 'Module'});
            /******/
        }
        /******/
        Object.defineProperty(exports, '__esModule', {value: true});
        /******/
    };
    /******/
    /******/ 	// create a fake namespace object
    /******/ 	// mode & 1: value is a module id, require it
    /******/ 	// mode & 2: merge all properties of value into the ns
    /******/ 	// mode & 4: return value when already ns object
    /******/ 	// mode & 8|1: behave like require
    /******/
    __webpack_require__.t = function (value, mode) {
        /******/
        if (mode & 1) value = __webpack_require__(value);
        /******/
        if (mode & 8) return value;
        /******/
        if ((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
        /******/
        var ns = Object.create(null);
        /******/
        __webpack_require__.r(ns);
        /******/
        Object.defineProperty(ns, 'default', {enumerable: true, value: value});
        /******/
        if (mode & 2 && typeof value != 'string') for (var key in value) __webpack_require__.d(ns, key, function (key) {
            return value[key];
        }.bind(null, key));
        /******/
        return ns;
        /******/
    };
    /******/
    /******/ 	// getDefaultExport function for compatibility with non-harmony modules
    /******/
    __webpack_require__.n = function (module) {
        /******/
        var getter = module && module.__esModule ?
            /******/            function getDefault() {
                return module['default'];
            } :
            /******/            function getModuleExports() {
                return module;
            };
        /******/
        __webpack_require__.d(getter, 'a', getter);
        /******/
        return getter;
        /******/
    };
    /******/
    /******/ 	// Object.prototype.hasOwnProperty.call
    /******/
    __webpack_require__.o = function (object, property) {
        return Object.prototype.hasOwnProperty.call(object, property);
    };
    /******/
    /******/ 	// __webpack_public_path__
    /******/
    __webpack_require__.p = "/";
    /******/
    /******/
    /******/ 	// Load entry module and return exports
    /******/
    return __webpack_require__(__webpack_require__.s = 2);
    /******/
})
/************************************************************************/
/******/({

    /***/ "./resources/js/comentarios.js":
    /*!*************************************!*\
      !*** ./resources/js/comentarios.js ***!
      \*************************************/
    /*! no static exports found */
    /***/ (function (module, exports) {

        var crearAlerta = function crearAlerta(context, message) {
            var alert = document.createElement('div');
            alert.classList.add('alert', "alert-".concat(context), 'position-fixed');
            alert.style.top = '10px';
            alert.style.left = '50%';
            alert.style.transform = 'translateX(-50%)';
            alert.innerHTML = message;
            setTimeout(function () {
                return alert.remove();
            }, 2500);
            return alert;
        };

        var MAX_CHARS = 255;
        document.addEventListener('readystatechange', function (e) {
            if ('complete' === document.readyState) {
                var comentarios = document.querySelectorAll('.js-comentario');

                if (comentarios) {
                    comentarios.forEach(function (comentario) {
                        var reportLink = comentario.querySelector('.report-link');

                        if (reportLink) {
                            reportLink.addEventListener('click', function (event) {
                                event.preventDefault();
                                axios.post(event.target.href, {
                                    '_token': csrf_token
                                }).then(function (res) {
                                    var alert = crearAlerta('success', res.data);
                                    document.body.appendChild(alert);
                                })["catch"](function (res) {
                                    var alert = crearAlerta('danger', res.data);
                                    document.body.appendChild(alert);
                                });
                            });
                        }
                    });
                }

                var cuenta = document.getElementById('char-count');
                /** @var HTMLTextAreaElement comentario */

                var comentario = document.getElementById('comentario');

                if (cuenta && comentario) {
                    comentario.addEventListener('input', function (e) {
                        cuenta.innerHTML = comentario.textLength;
                        if (comentario.textLength === MAX_CHARS) cuenta.parentElement.classList.add('text-danger'); else cuenta.parentElement.classList.remove('text-danger');
                    });
                }
            }
        });

        /***/
    }),

    /***/ 2:
    /*!*******************************************!*\
      !*** multi ./resources/js/comentarios.js ***!
      \*******************************************/
    /*! no static exports found */
    /***/ (function (module, exports, __webpack_require__) {

        module.exports = __webpack_require__(/*! /home/tomas/Development/preludio/resources/js/comentarios.js */"./resources/js/comentarios.js");


        /***/
    })

    /******/
});
