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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

$ = jQuery.noConflict();
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  //Mobile Menu 

  $('.mobile-header__menu-icon').click(function () {
    $(this).toggleClass('open');
    $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay__active');
  });

  $('.mobile-menu-overlay__close-icon').click(function () {
    $('.mobile-menu-overlay').removeClass('mobile-menu-overlay__active');
  });

  $('.quote-btn').click(function () {
    $('.dark-bg').addClass('show-dark-bg');
    $('.c-popup-modal').addClass('c-popup-modal__active');
  });

  $('.search-btn').click(function () {
    $(".overlay-menu").addClass("show-overlay-menu");
  });

  $(".close-icon").click(function () {
    $(".overlay-menu").removeClass("show-overlay-menu");
  });

  $('.c-popup-modal__close').click(function () {
    $('.dark-bg').removeClass('show-dark-bg');
    $('.c-popup-modal').removeClass('c-popup-modal__active');
  });

  $(document).mouseup(function (e) {
    var modal = $('#modal');
    if (!modal.is(e.target) && modal.has(e.target).length === 0) {
      $('.dark-bg').removeClass('show-dark-bg');
      $('.c-popup-modal').removeClass('c-popup-modal__active');
    }
  });

  $(document).keydown(function (e) {
    if (e.key === "Escape") {
      $('.dark-bg').removeClass('show-dark-bg');
      $('.c-popup-modal').removeClass('c-popup-modal__active');
    }
  });

  //Pages - ABOUT 

  $('.c-about-page__image-slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    slidesPerRow: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    fade: true,
    fadeSpeed: 5000
  });

  // Pages - Single Project 
  $('.c-single-project__images').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    arrows: false,
    responsive: [{
      // tablet 
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      } }, {
      // mobile portrait
      breakpoint: 479,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

  //PRICING PAGE
  $('.c-page-pricing__company-value-title').click(function () {
    var valuesTitle = $(this).attr('key');
    $(this).toggleClass('c-page-pricing__company-active-title').siblings().removeClass('c-page-pricing__company-active-title');

    $('.c-page-pricing__wrapper').each(function () {
      if ($(this).attr('key') == valuesTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }
    });
  });

  //FAQs PAGE

  $('.c-page-faqs__accordion-title').click(function () {
    var termTitle = $(this).attr('key');
    $(this).toggleClass('c-page-faqs__active-title').siblings().removeClass('c-page-faqs__active-title');

    $('.c-page-faqs__wrapper').each(function () {
      if ($(this).attr('key') == termTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }
    });
  });

  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data("offset")) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

$(window).scroll(() => {
  let scrolled = $(window).scrollTop();
  // gutenberg scroll anims
  if (gutenbergScrollAnims) {
    $(".gutenberg-styles .to-reveal").each(function () {
      if (scrolled + windowHeight - blockTriggerHeight >= $(this).data("offset")) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
});

$(window).resize(() => {
  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data("offset")) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map