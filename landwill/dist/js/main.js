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
  costCalculation(); // первоначальные данные

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

   if ($(window).width() <= '992'){
    
    $('#windows-slider').slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      autoplaySpeed: 2000,
      prevArrow: $('.window-prew'),
      nextArrow: $('.window-next'),
    });

     $('#balconies-slider').slick({
      dots: false,
      infinite: true,
      slidesToShow: 1,
      autoplaySpeed: 2000,
      prevArrow: $('.balcony-prew'),
      nextArrow: $('.balcony-next'),
    });

  }

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


  $(window).load(faqListBlock); // при загрузке
  $(window).load(windowSize); // при загрузке
  $(window).resize(windowSize); // при изменении размеров

  if($("#call_measurer").length != 0){
    $("a[href=#call_measurer]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
    jQuery("#measurer").validate({
      rules: {
        firstname: "required",
        phone: "required",
        firstname: {
          required: true,
          minlength: 3
        },
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        firstname: {
          required: "",
          minlength: ""
        },
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }
  if($("#request_call").length != 0){
    $("a[href=#request_call]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
    jQuery("#request").validate({
      rules: {
        firstname: "required",
        phone: "required",
        firstname: {
          required: true,
          minlength: 3
        },
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        firstname: {
          required: "",
          minlength: ""
        },
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }

  if($(".slider-main-top").length != 0){
    $("#application_0").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });

    $("#application_1").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }

  if($("#free_application").length != 0){
    $("#free_application").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }

  if($("#order_measurements").length != 0){
    $("a[href=#order_measurements]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
    jQuery("#measurements").validate({
      rules: {
        firstname: "required",
        phone: "required",
        firstname: {
          required: true,
          minlength: 3
        },
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        firstname: {
          required: "",
          minlength: ""
        },
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }

   if($("#become_customer").length != 0){
    $("a[href=#become_customer]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
    $("#customer").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }













 //----------new----------
  if($("#installation_windows").length != 0){
    $("#installation_windows").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  };

   if($("#leave_request").length != 0){
    $("#leave_request").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  };

  selectTypeHome();

  function selectTypeHome(){
    var slectType = $("#select-type-home input");
    if(slectType.length < 1){ return false }
      var select;
      slectType.each(function(index, value){
        if($(value).prop('checked')){
          select = $(value).val();
        };
      });
      slectType.change(function() {
        select = $(this).val();
        showSelectPrise(select);
      });
  };

  function showSelectPrise(id){
    var typeBlock = $("#select-type-home");
    if(typeBlock.length < 1){ return false };

    var typeWindow = $(".type-window");
    var typeBalcony = $(".type-balcony");

    typeWindow.removeClass("show");
    typeWindow.removeClass("hidden");
    typeBalcony.removeClass("show");
    typeBalcony.removeClass("hidden");

    typeWindow.each(function(index, value){
      var dataIndex = $(value).data("type");
      if(id == dataIndex){
        $(value).css("opacity", "0");
        $(value).addClass("show");
        $(value).animate({ opacity : 1 }, 300);
      }else{
        $(value).addClass("hidden");
      };
    });
    typeBalcony.each(function(index, value){
      var dataIndex = $(value).data("type");
      if(id == dataIndex){
        $(value).css("opacity", "0");
        $(value).addClass("show");
        $(value).animate({ opacity : 1 }, 300);
      }else{
        $(value).addClass("hidden");
      };
    });
  };

  //Стилизация select
  if($(".main-block-prices .select-option").length != 0){
    $('.select-option select').styler({
      onSelectOpened : function(){
        var pointer = $(this).closest(".select-option").find("i");
        pointer.css({
          "transform" : "rotate(225deg)",
          "top" : "14px"
        });
      },
      onSelectClosed : function(){
        var pointer = $(this).closest(".select-option").find("i");
        pointer.css({
          "transform" : "rotate(45deg)",
          "top" : "5px"
        });
        var block = $(this).closest(".block-columm-price");
        var choice = $(this).find("select option:selected").val();
        handlerSelect(block, choice);
      },
      onFormStyled : function(){
        var block = $(".select-option select");
        block.addClass("hidden");
      }
    });
  };

  function handlerSelect(object, choice){
    var dataPrice = [];
    var insertObgect = [];
    $(object).find(".numb").each(function(index, value){
      if(choice == "deaf"){
        $(value).find("p").text($(value).data("deaf"));
      };
      if(choice == "folding"){
        $(value).find("p").text($(value).data("folding"));
      };
      if(choice == "swivel"){
        $(value).find("p").text($(value).data("swivel"));
      };
    });
  };

  if($("a[href='#order-window']").length != 0){
    $("a[href='#order-window']").on("click", function(){
      var choiceBlock = $(this).closest(".block-columm-price");
      var choiceModal = $("#order-window .parce-choice");
      var typeModal = $("#order-window .parce-bloc #type");
      var typeModalText = $("#order-window .parce-bloc .name-type")
      var choiceType = choiceBlock.find("select option:selected").text();
      var nameType = choiceBlock.find(".block > h3").html();
      var dataArray = [];
      typeModal.val(choiceType);
      typeModalText.val(nameType);

      choiceBlock.find(".numb p").each(function(index, data){
        dataArray[index] = $(data).text();
      });

      choiceModal.each(function(ind, data){
        $(data).find("input").val(dataArray[ind]);
      });

      $("#order-window").fancybox().trigger('click');
    });
  };

  if($("#order-window").length != 0){
     $("#price-order").validate({
      rules: {
        firstname: "required",
        phone: "required",
        firstname: {
          required: true,
          minlength: 3
        },
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        firstname: {
          required: "",
          minlength: ""
        },
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  };

  if($("a[href=#order-balcony]").length != 0){
    $("a[href=#order-balcony]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
  };
  if($("#order-balcony").length != 0){
    $("#balcony").validate({
      rules: {
        firstname: "required",
        phone: "required",
        firstname: {
          required: true,
          minlength: 3
        },
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        firstname: {
          required: "",
          minlength: ""
        },
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  };
   //----------new----------



  // ferst ----------------
    if($(".block-form-quetions").length != 0){
      console.log(true);
      $("#leave_question").validate({
        rules: {
          phone: "required",
          phone: {
            minlength: 10,
            required: true,
          },
        },
        messages: {
          phone: {
            required: "",
            minlength: ""
          },
        },
        submitHandler: function(event) {
          /*формирование ajax запрос */
          return false;
        },
      });
    };



  // ferst ----------------   




   if($("#become_customer").length != 0){
    $("a[href=#become_customer]").fancybox({
      showCloseButton : false,
      enableEscapeButton : false
    });
    $("#customer").validate({
      rules: {
        phone: "required",
        phone: {
          minlength: 10,
          required: true,
        },
      },
      messages: {
        phone: {
          required: "",
          minlength: ""
        },
      },
      submitHandler: function(event) {
        /*формирование ajax запрос */
        return false;
      },
    });
  }
});

 // partners
  if($("#form-cooperation").length != 0){
      console.log(true);
      $("#form-cooperation").validate({
        rules: {
          company: "required",
          phone: "required",
          company: {
            required: true,
            minlength: 3
          },
          phone: {
            minlength: 8,
            required: true,
          },
        },
        messages: {
          company: {
            required: "",
            minlength: ""
          },
          phone: {
            required: "",
            minlength: ""
          },
        },
        submitHandler: function(event) {
          /*формирование ajax запрос */
          return false;
        },
      });
    };
    // partners

    //testimonials

    if($("a[href='#gull_review']").length != 0){
      $("a[href='#gull_review'").fancybox({
        showCloseButton : false,
        enableEscapeButton : false
      });

      $("a[href='#gull_review']").validate({
        rules: {
          company: "required",
          phone: "required",
          company: {
            required: true,
            minlength: 3
          },
          phone: {
            minlength: 8,
            required: true,
          },
        },
        messages: {
          company: {
            required: "",
            minlength: ""
          },
          phone: {
            required: "",
            minlength: ""
          },
        },
        submitHandler: function(event) {
          /*формирование ajax запрос */
          return false;
        },
      });
    };
    //testimonials

    //contacts

    if($("#form-contacts").length != 0 ){
      $("#form-contacts").validate({
        rules: {
          firstname: "required",
          email: "required",
          firstname: {
            required: true,
            minlength: 3
          },
          email: {
            required: true,
            email: true
          },
        },
        messages: {
          firstname: {
            required: "",
            minlength: ""
          },
          email: "Не вірна адреса пошти",
        },
        submitHandler: function(event) {
          /*формирование ajax запрос */
          return false;
        },
      });
    }
    //contacts
    


function faqListBlock(){
  var sectionBlock = $(".section-faq");
  if(sectionBlock.length < 1){ return false };

  var hiidenP = $(".section-faq .block-text p");
  var hiidenUl = $(".section-faq .block-text ul");

  if ($(window).width() <= '768'){
    var clickBlock, spanText, swich, thisBlock;
    var clickShow = $(".section-faq .pointer");
    var blocks = $(".main-block-text .block-text");
    hiidenP.css("max-height", "0");
    hiidenUl.css("max-height", "0");
    clickShow.on("click", function(){
      thisBlock = $(this).closest(".block-text");
      if(thisBlock.attr("data-swich") == "true"){
        thisBlock.attr("data-swich", "false");
        console.log(true);
      }else{
        blocks.attr("data-swich", "false");
        thisBlock.attr("data-swich", "true");
      }
      blocks.each(function(index, value){
        spanText = $(value).find(".control-block span");
        pointer = $(value).find(".control-block i");
        spanText.css("opacity", "0");
        if($(value).attr("data-swich") == "true"){
          $(value).find("p").animate({"max-height" : 1000 },500);
          $(value).find("ul").animate({"max-height" : 1000 },500);
          $(spanText).text(spanText.attr("data-hidden"));
          spanText.animate({opacity : 1}, 500);
          pointer.css("transform", "rotate(180deg)");
        }else{
          $(value).find("p").animate({"max-height" : 0 },500);
          $(value).find("ul").animate({"max-height" : 0 },500);
          $(spanText).text(spanText.attr("data-show"));
          spanText.css("opacity", "1");
          pointer.css("transform", "rotate(0deg)");
        }
      });
    });
  }else{
    hiidenP.removeAttr("style");
    hiidenUl.removeAttr("style");
  }
};
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
    var countHeight;
    var countWidth;
    count = inputWidth.val()
    countWidth = count
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
      countWidth = maxWidth;
      positionWidth.animate({
        left : 100 + "%",
      }, 500);
    }
    if(minWidth > count){
      positionWidthText.text(minWidth);
      inputWidth.val(minWidth);
      countWidth = minWidth;
      positionWidth.animate({
        left : 0 + "%",
      }, 500);
    }
    costCalculation();
  });
 
  inputHeight.change(function() {
    var count;
    var result;
    var maxHeightBoulenCount;
    var minHeightBoulenCount;
    
    count = inputHeight.val()
    countHeight = count;
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
      countHeight = maxHeight;
      positionHeight.animate({
        bottom : 100 + "%",
      }, 500);

    }
    if(minHeight > count){
      positionHeightText.text(minHeight);
      inputHeight.val(minHeight);
      countHeight = minHeight;
      positionHeight.animate({
        bottom : 0 + "%",
      }, 500);
    }

    costCalculation();
  });
};

// подсчет стоимости окон



function costCalculation(){
  var block = $("#window-cost-calculator");
  if(block.length < 1){ return false }

  var changeWindowInput = $("#change-type-window label input");
  var changeTypeHomeInput = $("#change-type-home label input");
  var textCost = $("#window-cost-calculator .output-price");

  var countHeight = $("#height-window").val();
  var countWidth = $("#width-window").val();

  var changeTypeHome;
  var changeTypeWindow;
  var costWindow;
  var cost;

  changeWindowInput.each(function(index, value){
    if($(value).prop('checked')){
      changeTypeWindow = $(value).val();
    }
  });
  changeWindowInput.change(function() {
    changeTypeWindow = $(this).val();
    costCalculationStart();
  });

  changeTypeHomeInput.each(function(index, value){
    if($(value).prop('checked')){
      changeTypeHome = $(value).val()
    }
  });
   changeTypeHomeInput.change(function() {
    changeTypeHome = $(this).val();
    costCalculationStart();
  });

  costCalculationStart();
  
  function costCalculationStart(){
    //changeTypeWindow - Тип окна коэфицыенты
    //changeTypeHomeInput - Тип здания коэфицыенты
    //countHeight - Высота окна размер в (см)
    //countWidth - Высота окна размеры в (см)
    //52 - коефицыент
    costWindow = (countHeight/100) * (countWidth/100) * changeTypeWindow * changeTypeHome * 52;
    cost = numberFormatting(Math.round(costWindow));
    textCost.text(cost + " ₽");
  }

};

function numberFormatting(n) {
  n += "";
  n = new Array(4 - n.length % 3).join("U") + n;
  return n.replace(/([0-9U]{3})/g, "$1 ").replace(/U/g, "");
}

function windowSize(){
  if ($(window).width() <= '380'){
      $('.block-cards-bottom').slick();
      $('.wrapper-blocks-about').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dotsClass: 'works-about',
      });
  }
};


