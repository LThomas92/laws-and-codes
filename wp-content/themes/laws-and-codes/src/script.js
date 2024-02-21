$ = jQuery.noConflict(); 
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {
//Mobile Menu 

$('.mobile-header__menu-icon').click(function() {
  $(this).toggleClass('open');
  $('.mobile-menu-overlay').toggleClass('mobile-menu-overlay__active');
});

$('.mobile-menu-overlay__close-icon').click(function() {
  $('.mobile-menu-overlay').removeClass('mobile-menu-overlay__active');
});

  $('.quote-btn').click(function() {
    $('.dark-bg').addClass('show-dark-bg');
    $('.c-popup-modal').addClass('c-popup-modal__active');
  });

  $('.search-btn').click(function() {
    $(".overlay-menu").addClass("show-overlay-menu");
  });

  $(".close-icon").click(function () {
    $(".overlay-menu").removeClass("show-overlay-menu");
  });

  $('.c-popup-modal__close').click(function(){
    $('.dark-bg').removeClass('show-dark-bg');
    $('.c-popup-modal').removeClass('c-popup-modal__active');
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
      }}, 
      { 
      // mobile portrait
      breakpoint: 479,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
      }
      ]
  });

  //PRICING PAGE
  $('.c-page-pricing__company-value-title').click(function() {
    var valuesTitle = $(this).attr('key');
    $(this).toggleClass('c-page-pricing__company-active-title').siblings().removeClass('c-page-pricing__company-active-title');

    $('.c-page-pricing__wrapper').each(function() {
      if($(this).attr('key') == valuesTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }
    });


  });


  //FAQs PAGE

  $('.c-page-faqs__accordion-title').click(function() {
      var termTitle = $(this).attr('key');
      $(this).toggleClass('c-page-faqs__active-title').siblings().removeClass('c-page-faqs__active-title');
  
  
    $('.c-page-faqs__wrapper').each(function() {
      if($(this).attr('key') == termTitle) {
        $(this).toggleClass('is-open').siblings().removeClass('is-open');
      }

    });
    
  });


    if ( jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });
  
    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >=
        jQuery(this).data("offset")
      ) {
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
      if (
        scrolled + windowHeight - blockTriggerHeight >=
        $(this).data("offset")
      ) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
  });
  
  $(window).resize(() => {
  if (
    jQuery(".gutenberg-styles > *").length &&
    !(window.location.hash != "" && jQuery(window.location.hash).length)
  ) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });
  
    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (
        jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >=
        jQuery(this).data("offset")
      ) {
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