/***
  ** Youtube
  **/

// var tag = document.createElement('script');

// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// var player;
// function onYouTubeIframeAPIReady() {
//   player = new YT.Player('player');
// }




$(function () {

/***
  ** Polyfills
  **/

objectFitImages(); // object-fit polyfill


/***
  ** Parallax
  **/

var ballScene1 = $('.ball-scene-1').get(0),
    ballScene2 = $('.ball-scene-2').get(0),
    ballScene3 = $('.ball-scene-3').get(0),
    ballScene4 = $('.ball-scene-4').get(0);

var ballScene1Inst = new Parallax(ballScene1, {
      frictionY: 0.01,
      frictionX: 0.01,
      invertX: false
    }),
    ballScene2Inst = new Parallax(ballScene2, {
      frictionY: 0.01,
      frictionX: 0.01,
      invertY: true,
      limitX: 1
    }),
    ballScene3Inst = new Parallax(ballScene3, {
      frictionY: 0.01,
      frictionX: 0.01,
      limitX: 1
    }),
    ballScene4Inst = new Parallax(ballScene4, {
      frictionY: 0.01,
      frictionX: 0.01,
      invertY: false
    });


/***
  ** Gallery
  **/

var flag = false;

var $galleryTabs = $('.gallery').find('.gallery-tab-content');

$galleryTabs.each(function() {
  var $slickCenter,
      $gallerySlider = $(this).find('.gallery-slider');

  $gallerySlider.on('init', function (event, slick) {

    $slickCenter = $(this).find('.slick-center');

    $slickCenter.find('.gallery-slider-inner').css({
      'transform': 'translateX(0) scale(1)',
      'opacity': 1
    })
    $slickCenter.next().find('.gallery-slider-inner').css({
      'transform': 'translateX(-41%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.prev().find('.gallery-slider-inner').css({
      'transform': 'translateX(41%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.next().next().find('.gallery-slider-inner').css({
      'transform': 'translateX(-106%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.prev().prev().find('.gallery-slider-inner').css({
      'transform': 'translateX(106%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.next().next().next().find('.gallery-slider-inner').css({
      'transform': 'translateX(-170%) scale(0.273)',
      'opacity': .5
    })

});


  $gallerySlider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    rows: 0,
    speed: 1100,
    arrows: true,
    dots: false,
    touchThreshold: 12,
    centerMode: true,
    centerPadding: 0,
    prevArrow: $gallerySlider.parent().find('.gallery-slider-prev'),
    nextArrow: $gallerySlider.parent().find('.gallery-slider-next'),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          centerMode: false,
          fade: true,
          speed: 900,
          cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)'
        }
      }
    ]
  });

  $gallerySlider.magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
    },
    mainClass: 'mfp-fade'
  });


  $gallerySlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    if (flag) {

      $slickCenter = $(slick.$slides.get(nextSlide));
      flag = false;

    } else if ((currentSlide > nextSlide && (nextSlide !== 0 || currentSlide === 1)) || (currentSlide === 0 && nextSlide === slick.slideCount - 1)) {

      $slickCenter = $(this).find('.slick-center').prev();

    } else if (currentSlide === nextSlide) {

        $slickCenter = $(this).find('.slick-center');

    } else {

      $slickCenter = $(this).find('.slick-center').next();

    }

    $slickCenter.find('.gallery-slider-inner').css({
      'transform': 'translate(0) scale(1)',
      'opacity': 1
    })
    $slickCenter.next().find('.gallery-slider-inner').css({
      'transform': 'translate(-41%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.prev().find('.gallery-slider-inner').css({
      'transform': 'translate(41%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.next().next().find('.gallery-slider-inner').css({
      'transform': 'translate(-106%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.prev().prev().find('.gallery-slider-inner').css({
      'transform': 'translate(106%) scale(0.273)',
      'opacity': .5
    })
    $slickCenter.next().next().next().find('.gallery-slider-inner').css({
      'transform': 'translate(-170%) scale(0.273)',
      'opacity': .5
    })

  });

  $gallerySlider.find('.slick-dots li button').on('click.sliderAnimation', function(e){
      flag = true;
  });

});



$(".gallery-tab-content").hide();
$(".gallery-tab-content:first").show();

$(".gallery-tabs li").click(function() {

  if(!$(this).hasClass('active')) {

    $(".gallery-tab-content").hide();
    var activeTab = $(this).attr("rel");

    $("#"+activeTab).stop(true,true).fadeIn(1200);
    $("#"+activeTab).find('.gallery-slider').slick('setPosition');
    $("#"+activeTab).find('.gallery-slider-nav').slick('setPosition');

    $(".gallery-tabs li").removeClass("active");
    $(this).addClass("active");

  }

});


/**
** Order Forms
**/

var orderForms = $('.order-form');

orderForms.each(function(){

  var orderForm = $(this);

  orderForm.find('input[name=phone]').closest('.form-group')
  .after(
    '<div class="order-info-sizes form-group size-group">' +
      '<div data-size="40" class="size">40</div>' +
      '<div data-size="41" class="size">41</div>' +
      '<div data-size="42" class="size">42</div>' +
      '<div data-size="43" class="size">43</div>' +
      '<div data-size="44" class="size">44</div>' +
      '<div data-size="45" class="size">45</div>' +
    '</div>'
  );

  orderForm.find('input[name=name_last]').parent().css({
    'visibility': 'hidden',
    'position': 'absolute'
  });

  orderForm.find('button').addClass('btn btn__order').closest('.form-group').addClass('btn-group');
  orderForm.find('input').addClass('input').closest('.form-group').addClass('input-group');

});


/**
** Order Sliders
**/

var orders = $('.order');

orders.each(function() {

  var $order = $(this),
      $orderSliders = $order.find('.order-slider');

  $orderSliders.each(function() {

    var $orderSlider = $(this);

    $orderSlider.on('init', function(event, slick) {
      objectFitImages($(this).find('img'));
    });

    $orderSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 0,
      speed: 900,
      fade: true,
      arrows: true,
      dots: false,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      prevArrow: $orderSlider.parent().find('.order-slider-prev'),
      nextArrow: $orderSlider.parent().find('.order-slider-next')
    });

    $orderSlider.magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
      },
      mainClass: 'mfp-fade'
    });

  });

  /***
    ** Order Toggle
    **/

  var $toggle = $order.find('.order-toggle > div'),
      $toggleActive = $toggle.filter('.active'),
      $toggleContent = $order.find('.order-sliders > div'),
      $sizeTable = $order.find('.size-table-animated'),
      $orderDescr = $order.find('.order-descr'),
      $orderDescrBtn = $order.find('.order-descr-expander'),
      $orderDescrHeight = $orderDescr.height();

      $toggleContent.hide();
      $toggleContent.eq(0).fadeIn().find('.order-slider').slick('setPosition');
      $sizeTable.hide();
      $orderDescrBtn.hide();
      $orderDescr.css('max-height', $orderDescrHeight);

  $toggle.on('click', function() {
    var _this = $(this);

    if ( !(_this.hasClass('active')) ) {

      $toggle.removeClass('active');
      $toggleContent.hide();

      var activeSlider = _this.attr('data-slider');
      $order.find('.order-slider-' + activeSlider).stop(true,true).fadeIn(1200).find('.order-slider').slick('setPosition');
      _this.addClass('active');

      if ( !($sizeTable.hasClass('shown')) ) {
        $sizeTable.addClass('shown');
        $sizeTable.slideDown(900).css({'opacity': 1});
      }

      $orderDescrBtn.fadeIn(600);
      $orderDescr.css('max-height', '37px').addClass('active');

    } else {
      return false;
    }
    return false;
  });

  $orderDescrBtn.on('click', function () {
    $orderDescrBtn.fadeOut(400);
    $orderDescr.css('max-height', $orderDescrHeight);
  });

  $(document).on('mouseup touchend', function(e) {
    if ($orderDescr.hasClass('active') && !$orderDescr.is(e.target) && $orderDescr.has(e.target).length === 0) {
      $orderDescrBtn.fadeIn(600);
      $orderDescr.css('max-height', '37px');
    }
  });

  var $sizes = $order.find('.size');

  $sizes.on('click', function() {
    $sizes.removeClass('active');
    $(this).addClass('active');
  });

});


/***
  ** Reviews Sliders
  **/
var womanReviewsSlider = $('.reviews-slider-woman').find('.reviews-slider'),
    manReviewsSlider = $('.reviews-slider-man').find('.reviews-slider'),
    manReviews = womanReviewsSlider.find('.review-m').detach();

womanReviewsSlider.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  rows: 0,
  speed: 300,
  arrows: true,
  dots: false,
  prevArrow: womanReviewsSlider.siblings('.reviews-slider-next')
});

manReviewsSlider.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  rows: 0,
  speed: 300,
  arrows: true,
  dots: false,
  nextArrow: manReviewsSlider.siblings('.reviews-slider-prev')
});


/**
** Magnific Popup Policy
**/

$('.policy-link').magnificPopup({
  type: 'inline',
  closeBtnInside: true,
  fixedContentPos: true
});


/**
** Smooth Scroll
**/

$('.btn__banner, .btn__video').click(function() {

  var scrollOn = $(this).data('smoothOffset') ? $(this).data('smoothOffset') : 0;

  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  if (target.length) {
    $('html,body').animate({
      scrollTop: target.offset().top - scrollOn
    }, 1000);
    return false;
  }

});


/**
** Media Query Events via JavaScript
**/

//
// 1200px
//
// on document.ready
if(matchMedia("(max-width: 1199px)").matches) {

  } else {

}
//
// on window.resize
matchMedia("(max-width: 1199px)").addListener(function(mql) {

  if(mql.matches) {

  } else {

  }

});


//
// 992px
//
// on document.ready
if(matchMedia("(max-width: 991px)").matches) {

} else {

}
//
// on window.resize
matchMedia("(max-width: 991px)").addListener(function(mql) {

  if(mql.matches) {

  } else {

  }

});

//
// 768px
//
// on document.ready
if(matchMedia("(max-width: 767px)").matches) {

  ballScene1Inst.disable();
  ballScene2Inst.disable();
  ballScene3Inst.disable();
  ballScene4Inst.disable();

  if (womanReviewsSlider.hasClass('slick-initialized')) {
    womanReviewsSlider.slick('unslick');
  }

  womanReviewsSlider.find('.review-w').each(function(i){
    $(this).after(manReviews.eq(i));
  });

  womanReviewsSlider.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    rows: 0,
    speed: 300,
    arrows: true,
    fade: true,
    dots: false,
    prevArrow: womanReviewsSlider.siblings('.reviews-slider-next')
  });

  if (manReviewsSlider.hasClass('slick-initialized')) {
    manReviewsSlider.slick('unslick');
  }

} else {

}
//
// on window.resize
matchMedia("(max-width: 767px)").addListener(function(mql) {

  if(mql.matches) {

    ballScene1Inst.disable();
    ballScene2Inst.disable();
    ballScene3Inst.disable();
    ballScene4Inst.disable();

    if (womanReviewsSlider.hasClass('slick-initialized')) {
      womanReviewsSlider.slick('unslick');
    }

    womanReviewsSlider.find('.review-w').each(function(i){
      $(this).after(manReviews.eq(i));
    });

    womanReviewsSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 0,
      speed: 300,
      fade: true,
      arrows: true,
      dots: false,
      prevArrow: womanReviewsSlider.siblings('.reviews-slider-next')
    });

    if (manReviewsSlider.hasClass('slick-initialized')) {
      manReviewsSlider.slick('unslick');
    }

  } else {

    ballScene1Inst.enable();
    ballScene2Inst.enable();
    ballScene3Inst.enable();
    ballScene4Inst.enable();

    if (womanReviewsSlider.hasClass('slick-initialized')) {
      womanReviewsSlider.slick('unslick');
    }

    manReviews = womanReviewsSlider.find('.review-m').detach();

    womanReviewsSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 0,
      speed: 300,
      arrows: true,
      dots: false,
      prevArrow: womanReviewsSlider.siblings('.reviews-slider-next')
    });

    manReviewsSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      rows: 0,
      speed: 300,
      arrows: true,
      dots: false,
      nextArrow: manReviewsSlider.siblings('.reviews-slider-prev')
    });

  }

});

//
// 576px
//
// on document.ready
if(matchMedia("(max-width: 575px)").matches) {

} else {

}
//
// on window.resize
matchMedia("(max-width: 575px)").addListener(function(mql) {

  if(mql.matches) {

  } else {

  }

});



/**
** Mobile Device Detection via JavaScript
**/

// var isApple = navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i) ? true : false;
// if (isApple) {

//   var appleButtons = document.querySelectorAll(".g-btn");
//   for (var i = 0; i < appleButtons.length; i++) {
//     appleButtons[i].classList.add('iShitButton');
//   }

// }

// if( /Android/i.test(navigator.userAgent) ) {

//   var androidButtons = document.querySelectorAll(".g-btn");
//   for (var i = 0; i < androidButtons.length; i++) {
//       androidButtons[i].classList.add('androidShitButton');
//   }

// }


});
