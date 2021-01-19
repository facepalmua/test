var _functions = {},
  winWidth;

jQuery(function ($) {

  "use strict";

  /* function on page ready */
  var isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);
  if (isTouchScreen) $('html').addClass('touch-screen');
  var winScr, winHeight,
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
    is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0;



  /* check browser */
  winWidth = $(window).width();
  winHeight = $(window).height();

  if (is_Mac) {
    $('html').addClass('mac');
  }
  if (is_IE) {
    $('html').addClass('ie');
  }
  if (is_Chrome) {
    $('html').addClass('chrome');
  }
 



  //images preload
  _functions.imagesLazyLoad = function () {
    //images load 
    $('[data-bg]').each(function(i, el){
      $(el).css({'background-image': 'url('+$(el).data('bg')+')'});
    });
    $('img[data-src]').each(function(i, el){
      $(el).attr({'src': $(el).data('src')});
    })
  }

  setTimeout(function () {
    _functions.imagesLazyLoad();
  }, 100);



  setTimeout(function () {
    $('body').addClass('site-ready');
  }, 1000);


  setTimeout(function () {
    if (!is_IE && $('.rellax').length && $(window).width() > 1199) {
      var rellax = new Rellax('.rellax', {
        center: true
      });
    }
  }, 100);



  /* function on page scroll */
  $(window).scroll(function () {
    _functions.scrollCall();
  });

  var prev_scroll = 0;
  _functions.scrollCall = function () {
    winScr = $(window).scrollTop();
    if (winScr > 10) {
      $('header').addClass('scrolled');
    } else if (winScr < 10) {
      $('header').removeClass('scrolled');
      prev_scroll
    }
  }
  _functions.scrollCall();



  /*menu*/
  $(document).on('click', '.hamburger', function () {
    $('html').toggleClass('overflow-menu');
    $(this).parents('header').toggleClass('open-menu');
    $(this).toggleClass('is-active');
  });



  /* swiper sliders */
  _functions.getSwOptions = function (swiper) {
    var options = swiper.data('options');
    options = (!options || typeof options !== 'object') ? {} : options;
    var $p = swiper.closest('.swiper-entry'),
      slidesLength = swiper.find('>.swiper-wrapper>.swiper-slide').length;
    if (!options.pagination) options.pagination = {
      el: $p.find('.swiper-pagination')[0],
      clickable: true
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.find('.swiper-button-next')[0],
      prevEl: $p.find('.swiper-button-prev')[0]
    };
    options.preloadImages = false;
    options.lazy = {
      loadPrevNext: true
    };
    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    if (!options.speed) options.speed = 500;
    options.roundLengths = false;
    if (!options.centerInsufficientSlides) options.centerInsufficientSlides = false;
    if (options.customFraction) {
      $p.addClass('custom-fraction-swiper');
      if (slidesLength > 1 && slidesLength < 10) {
        $p.find('.custom-current').text('01');
        $p.find('.custom-total').text('0' + slidesLength);
      } else if (slidesLength > 1) {
        $p.find('.custom-current').text('01');
        $p.find('.custom-total').text(slidesLength);
      }
    }
    if (isTouchScreen) options.direction = "horizontal";
    return options;
  };

  _functions.initSwiper = function (el) {
    var swiper = new Swiper(el[0], _functions.getSwOptions(el));
  };

  $('.swiper-entry .swiper-container').each(function () {
    _functions.initSwiper($(this));
  });

  $('.swiper-thumbs').each(function () {
    var top = $(this).find('.swiper-container.swiper-thumbs-top')[0].swiper,
      bottom = $(this).find('.swiper-container.swiper-thumbs-bottom')[0].swiper;
    top.thumbs.swiper = bottom;
    top.thumbs.init();
    top.thumbs.update();
  });

  $('.swiper-control').each(function () {
    var top = $(this).find('.swiper-container')[0].swiper,
      bottom = $(this).find('.swiper-container')[1].swiper;
    top.controller.control = bottom;
    bottom.controller.control = top;
  });
  //custom fraction
  $('.custom-fraction-swiper').each(function () {
    var $this = $(this),
      $thisSwiper = $this.find('.swiper-container')[0].swiper;

    $thisSwiper.on('slideChange', function () {
      $this.find('.custom-current').text(
        function () {
          if ($thisSwiper.realIndex < 9) {
            return '0' + ($thisSwiper.realIndex + 1)
          } else {
            return $thisSwiper.realIndex + 1
          }
        }
      )
    });
  });


  _functions.certificateSwiperWrapperHeight = function () {
    if (!$('.certificate-slide').length) return; {
      setTimeout(function () {
        const h = $('.certificate-slide').find('.swiper-container').height();
        $('.certificate-slide').find('.swiper-wrapper').css({
          'height': h
        });
      }, 500);
    }
  }
  _functions.certificateSwiperWrapperHeight();
 


  //popup
  var popupTop = 0;

  function removeScroll() {
    popupTop = $(window).scrollTop();
    $('html').css({
      "top": -$(window).scrollTop(),
      "width": "100%"
    }).addClass("overflow-hidden");
  }

  function addScroll() {
    $('html').css({
      // "position": "static"
    }).removeClass("overflow-hidden");
    window.scroll(0, popupTop);
  }
  _functions.openPopup = function (popup) {
    $('.popup-content').removeClass('active');
    $(popup + ', .popup-wrapper').addClass('active');
    removeScroll();
  };

  _functions.closePopup = function () {
    $('.popup-wrapper, .popup-content').removeClass('active');
    addScroll();
  };

  _functions.textPopup = function (title, description) {
    $('#text-popup .text-popup-title').html(title);
    $('#text-popup .text-popup-description').html(description);
    _functions.openPopup('#text-popup');
  };

  $(document).on('click', '.open-popup', function (e) {
    e.preventDefault();
    _functions.openPopup('.popup-content[data-rel="' + $(this).data('rel') + '"]');
  });

  $(document).on('click', '.popup-wrapper .btn-close, .popup-wrapper .layer-close, .popup-wrapper .close-popup', function (e) {
    e.preventDefault();
    _functions.closePopup();
  });

  //close popup with ESCAPE key
  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      _functions.closePopup();
    }
  });

  /*video pop-up*/
  $(document).on('click', '.video-open', function (e) {
    e.preventDefault();
    var video = $(this).attr('href');
    $('.video-popup-container iframe').attr('src', video);
    $('.video-popup').addClass('active');
    $('html').addClass('overflow-hidden');
  });
  $('.video-popup-close, .video-popup-layer').on('click', function (e) {
    $('html').removeClass('overflow-hidden');
    $('.video-popup').removeClass('active');
    $('.video-popup-container iframe').attr('src', 'about:blank');
    e.preventDefault();
  });




  function pageScroll(current, headerHeight) {
    if ($(window).width() > 991) {
      $('html, body').animate({
        scrollTop: current.offset().top - 90
      }, 888);
    } else {
      $('html, body').animate({
        scrollTop: current.offset().top - 59
      }, 777);
    }
  }



  //scroll animation
  function scrollAnime() {
    if ($('.full-size').length && !is_IE) {
      $('.animate-item').not('.animated').each(function () {
        var th = $(this);
        if ($(window).scrollTop() >= th.offset().top - ($(window).height() * 0.8)) {
          th.addClass('animated');
        }
      });
    } else if ($('.animate-item').length && !is_IE) {
      $('.animate-item').not('.animated').each(function () {
        var th = $(this);
        if ($(window).scrollTop() >= th.offset().top - ($(window).height() * 0.6)) {
          th.addClass('animated');
        }
      });
    }
  }
  scrollAnime();
  $(window).on('scroll', function () {
    scrollAnime();
  });



  $(".scroll-to").on("click", function () {
    $("html,body").animate({
      scrollTop: $(".scroll-to-block").offset().top - $("header").height()
    }, 1500)
  })



  // mouse move image
  document.addEventListener("mousemove", parallax);
  function parallax (e){
  document.querySelectorAll(".object").forEach(function(move){
    var moving_value = move.getAttribute("data-value");

    var x  = (e.clientX * moving_value) / 250;
    var y = (e.clientY * moving_value) / 250;

    move.style.transform = "translateX("+ x +"px) translateY(" + y + "px)";
    });
  }



  //invalid
  $('input:not([type="file"]), textarea').blur(function () {
    if ($(this).is(":invalid")) {
      $(this).addClass("invalid");
    } else {
      $(this).removeClass("invalid");
    }
  });


  //inputmask
  if ($(".inputmask").length) {
    $(".inputmask").inputmask({
      // clearMaskOnLostFocus: false
      showMaskOnHover: false
    });
  }


  // counter
  const counters = document.querySelectorAll('.counter');
  const speed = 400;

  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-count');
      const count = +counter.innerText;

      const inc = target / speed;

      if (count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(updateCount, 1);
      } else {
        // count.innerText = target;
      }
    }

    updateCount();
  })

});