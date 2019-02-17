$(document).ready(function(){

  $('.slider-main-top').slick({
    dots: false,
    adaptiveHeight: true,
    prevArrow: $('.arrow-prew-main'),
    nextArrow: $('.arrow-next-main'),
  });

  $('.slider-block-cards').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $(''),
    nextArrow: $(''),
     responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        }
      },
      {
        breakpoint: 700,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        }
      },
    ]
  });

  sliderThreeTop();
  sliderThreeBottom();
  windowCostCalculator();
  controlMenu();

  $('.block-slider-system-divider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    prevArrow: $('.prew-divider'),
    nextArrow: $('.next-divider'),
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        }
      },
    ]
  });

  $('.slider-works').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('.prew'),
    nextArrow: $('.next'),
    dotsClass: 'works-paging',
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 993,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },

      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ]
  });

  $('.slider-feedback').slick({
    dots: true,
    prevArrow: $('.prew-feedback'),
    nextArrow: $('.next-feedback'),
  });

  $('.block-cards-news').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $(''),
    nextArrow: $(''),
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: false,
          dots: false,
        }
      },
      {
        breakpoint: 720,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        }
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: false,
          dots: true,
        }
      },
    ]
  });
});

function controlMenu(){
  var block, swich, clouseMenu;
  block = $("#menu");
  blockMenu = $("#control-menu");
  clouseMenu = $("#clouse-menu");
  if(block.length < 1){ return false };
  swich = true;
  blockMenu.click(function(){
    if(swich){
      block.addClass("show-menu");
      $(".show-menu > ul").css("max-height", "0");

      $(".show-menu > ul").animate({
        "max-height" : 1000
      }, 300);
      swich = false;
    }else{
      block.removeClass("show-menu");
      swich = true;
    }
  });

  clouseMenu.click(function(){
    if(!swich){
      $(".show-menu > ul").animate({
        "max-height" : 0
      }, 300, function(){
        block.removeClass("show-menu");
      });
      swich = true;
    }else{
      block.addClass("show-menu");
      swich = false;
    }
  });
  $(".arrow-down").click(function(){
    $("#menu ul li ul").css({
      "max-height" : 0,
      "opacity" : 0
    });
    $("#menu ul li ul").animate({
    "max-height" : 0,
    "opacity" : 0
    }, 100);

    var blockUl = $(this).closest("li").find("ul");

    blockUl.animate({
      "opacity" : 1,
      "max-height" : 1000
    }, 100);
    blockHiddenUlLiUl(blockUl);
  });
  function blockHiddenUlLiUl(blockUl){
      $(document).mouseup(function(e) { // событие клика по веб-документу
        /*blockUl*/ // тут указываем ID элемента
        if (!blockUl.is(e.target) // если клик был не по нашему блоку
          && blockUl.has(e.target).length === 0) { // и не по его дочерним элементам
          $("#menu ul li ul").animate({
            "max-height" : 0,
            "opacity" : 0
            }, 100);
        }
    });
  };
};



function sliderThreeTop(){
  var block = $("#slidert-two-top");
  if(block.length < 1){ return false };
  $("#slidert-two-top .slider-list").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.prew-profile-top'),
    nextArrow: $('.next-profile-top'),
    dotsClass: 'custom-paging',
    responsive: [
      {
        breakpoint: 1200,
        settings: {  slidesToShow: 2 }
      },
      {
        breakpoint: 992,
        settings: {  
          slidesToShow: 3,
          dots: true,
        }
      },
      {
        breakpoint: 769,
        settings: { 
          slidesToShow: 2,
          dots: true,
        }
      },
      {
        breakpoint: 529,
        settings: {  
          slidesToShow: 1,
          dots: true,
        }
      },
    ]
  });
  var $slickElement = $("#slidert-two-top .slider-list");
  var prew = $("#slidert-two-top .prew-profile-top");
  var next = $("#slidert-two-top .next-profile-top");
  $slickElement.on('init reInit beforeChange', function (event, slick, currentSlide, nextSlide) {
    i = nextSlide;
    if(1 <= i){
      prew.css("display", "inline-block");
      prew.animate({ opacity: 0.7 }, 200);
    }else{
      prew.css("opacity", "1");
      prew.animate({ opacity: 0 }, 200, function(){
      prew.css("display", "none");
      });
    };
    if((i+1) == slick.slideCount){
      next.animate({
        opacity: 0
      }, 300, function(){
        next.css("display", "none");
      });
    }else{
      next.css({
        "display" : "inline-block",
        "opacity" : "0"
      });
      next.animate({
        opacity: 0.7
      },200);
    }
  });
};
function sliderThreeBottom(){
  var block = $("#slidert-two-bottom");
  if(block.length < 1){ return false };
  $("#slidert-two-bottom .slider-list").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('.prew-profile-bottom'),
    nextArrow: $('.next-profile-bottom'),
    dotsClass: 'custom-paging',
    responsive: [
      {
        breakpoint: 1200,
        settings: {  slidesToShow: 2 }
      },
      {
        breakpoint: 992,
        settings: {  
          slidesToShow: 3,
          dots: true,
        }
      },
      {
        breakpoint: 769,
        settings: { 
          slidesToShow: 2,
          dots: true,
        }
      },
      {
        breakpoint: 529,
        settings: {  
          slidesToShow: 1,
          dots: true,
        }
      },
    ]
  });
  var $slickElement = $("#slidert-two-bottom .slider-list");
  var prew = $("#slidert-two-bottom .prew-profile-bottom");
  var next = $("#slidert-two-bottom .next-profile-bottom");
  $slickElement.on('init reInit beforeChange', function (event, slick, currentSlide, nextSlide) {
    i = nextSlide;
    if(1 <= i){
      prew.css("display", "inline-block");
      prew.animate({ opacity: 0.7 }, 200);
    }else{
      prew.css("opacity", "0.7");
      prew.animate({ opacity: 0 }, 200, function(){
      prew.css("display", "none");
      });
    };
    if((i+1) == slick.slideCount){
      next.animate({
        opacity: 0
      }, 300, function(){
        next.css("display", "none");
      });
    }else{
      next.css({
        "display" : "inline-block",
        "opacity" : "0"
      });
      next.animate({
        opacity: 0.7
      },200);
    }
  });
};
function windowCostCalculator(){
  var bloc = $("#window-cost-calculator");
  if(bloc.length < 1){ return false };
  var maxHeight = $("#window-cost-calculator .polzunok-vertical").data("max-height");
  var minHeight = $("#window-cost-calculator .polzunok-vertical").data("min-height");
  var defaultHeight = $("#window-cost-calculator .polzunok-vertical").data("default");
  
  var maxWidth = $("#window-cost-calculator .polzunok-horizontal").data("max-width");
  var minWidth = $("#window-cost-calculator .polzunok-horizontal").data("min-width");
  var defaultWidth = $("#window-cost-calculator .polzunok-horizontal").data("default");
  
  var positionHeight = $("#window-cost-calculator .polzunok-vertical .circle");
  var positionWidth = $("#window-cost-calculator .polzunok-horizontal .circle");
  var positionHeightText =  $("#window-cost-calculator .polzunok-vertical .circle span");
  var positionWidthText =  $("#window-cost-calculator .polzunok-horizontal .circle span");

  inputWidth = $("#width-window");
  inputHeight = $("#height-window");
  var defaultH;
  var defaultW;

  defaultH = (defaultHeight*100)/maxHeight;
  /*defaultW = ((defaultWidth - minWidth)*100)/(maxWidth - minWidth);*/
  defaultW = (defaultWidth*100)/maxWidth;

  positionHeight.css("bottom", defaultH + "%");
  positionWidth.css("left", defaultW + "%");

  inputWidth.change(function() {
    var count;
    var result;
    var maxWidthBoulenCount;
    var minWidthBoulenCount;
    
    count = inputWidth.val()
    
    if(maxWidth > count || maxWidth == count){
      maxWidthBoulenCount = true;
    }else{ maxWidthBoulenCount = false; };

    if(minWidth < count || minWidth == count){
      minWidthBoulenCount = true;
    }else{ minWidthBoulenCount = false };
  
    if( maxWidthBoulenCount && minWidthBoulenCount ){

      result  = ((count - minWidth)*100)/(maxWidth - minWidth);
      positionWidthText.text(count);
      positionWidth.animate({
        left : result + "%",
      }, 500);
      positionWidth.css("left", result + "%");
    };
    if(maxWidth < count){
      positionWidthText.text(maxWidth);
      inputWidth.val(maxWidth);
      positionWidth.animate({
        left : 100 + "%",
      }, 500);
    }
    if(minWidth > count){
      positionWidthText.text(minWidth);
      inputWidth.val(minWidth);
      positionWidth.animate({
        left : 0 + "%",
      }, 500);
    }
  });
 
  inputHeight.change(function() {
    var count;
    var result;
    var maxHeightBoulenCount;
    var minHeightBoulenCount;
    
    count = inputHeight.val()
    
    if(maxHeight > count || maxHeight == count){
      maxHeightBoulenCount = true;
    }else{ maxHeightBoulenCount = false; };

    if(minHeight < count || minHeight == count){
      minHeightBoulenCount = true;
    }else{ minHeightBoulenCount = false };

    if( maxHeightBoulenCount & minHeightBoulenCount ){
      result  = ((count - minHeight)*100)/(maxHeight - minHeight);
      positionHeightText.text(count);
      positionHeight.animate({
        bottom : result + "%",
      }, 500);
      positionHeight.css("bottom", result + "%");
    };
    if(maxHeight < count){
      positionHeightText.text(maxHeight);
      inputHeight.val(maxHeight);
      positionHeight.animate({
        bottom : 100 + "%",
      }, 500);
    }
    if(minHeight > count){
      positionHeightText.text(minHeight);
      inputHeight.val(minHeight);
      positionHeight.animate({
        bottom : 0 + "%",
      }, 500);
    }
  });
};