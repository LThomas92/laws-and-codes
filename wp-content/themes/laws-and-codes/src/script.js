$ = jQuery.noConflict(); 
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {

  //NUMBER COUNTER
const counters = document.querySelectorAll('.value');
const speed = 9000;

counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('akhi');
      const data = +counter.innerText;
     
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        } else {
          counter.innerText = value;
        }
     
   }
   
   animate();
});

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