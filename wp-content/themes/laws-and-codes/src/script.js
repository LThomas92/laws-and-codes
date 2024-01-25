$ = jQuery.noConflict(); 
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {

  $('.c-podcast__audio audio').addClass('audio-player');
  
  $('.modal-trigger').click(function() {
    var modal_id = $(this).data('target');
    var video_url = $(this).data('src');
        $('#' + modal_id + ' iframe').attr('src', video_url);
        $('#' + modal_id).addClass('open');
  });
  
  $('.modal-close').click(function(e) {
    $(this).closest('.c-featured-videos__modal').removeClass('open');
  });
  
  $('.c-featured-videos__modal').click(function(e) {
    if ($(e.target).hasClass('c-featured-videos__modal')) {
      $(this).removeClass('open');
    }
  });

  $(".site-header__search").click(function () {
    $(".overlay-menu").addClass("show-overlay-menu");
  });
  
  $('.close-icon').click(function() {
    $('.overlay-menu').removeClass('show-overlay-menu');
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