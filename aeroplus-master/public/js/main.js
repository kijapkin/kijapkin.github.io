jQuery(document).ready(function() {
	// Управление меню
	if (jQuery(".menu-mini").length != 0) {
		//управление главным меню
		var swich = false;
		jQuery(".menu-mini").click(function() {
			jQuery(".home-header-wrap").toggleClass("click-menu");
			if (!swich) {
				jQuery(".menu-mini i").removeClass("fa-bars");
				jQuery(".menu-mini i").addClass("fa-times");
				jQuery(".menu-mini").removeClass("active");
				swich = true;
			} else {
				jQuery(".menu-mini i").removeClass("fa-times");
				jQuery(".menu-mini i").addClass("fa-bars");
				if (countLav) {
					jQuery(".menu-mini").addClass("active");
				};
				swich = false;
			};
		});
		// Управление подменю
		jQuery(".main-menu .mean-expand").click(function() {

			var meanExpand = jQuery(this).parent();
			jQuery(".main-menu li").removeClass("minor_active");
			jQuery(meanExpand).addClass("minor_active");

			jQuery(".mean-expand").css("transform", "rotate(0deg)");
			jQuery(this).css("transform", "rotate(180deg)");
		});
	};

	if (jQuery("#header-search").length != 0) {
		var emptyBlock = jQuery(".header-empty-search");
		var inputCeach = jQuery("#autocomplete");
		var divList = $(".open-search-list ul");
		var containersearchList = $(".open-search-list");
		var responseData  = $(".search-header-autocomplete");
		var clickChangeProduct = $(".open-search-list ul");

		jQuery("#header-search").submit(function(event){
			event.preventDefault();
		});
		jQuery('#header-search .clear').click(function() {
			jQuery('#header-search input').val(""); // удаление текста в input
		});

		inputCeach.on('keyup',function(){
		  var $this = $(this),
		      val = $this.val();
		  if(val.length == 0){
		    emptyBlock.animate({
					"opacity" : 0
				}, 500, function(){
					emptyBlock.css("display", "none");
				});
				containersearchList.animate({
					opacity: 0
				}, 500, function(){
					containersearchList.css("display", "none");
				});
		  }
		});
		$(document).mouseup(function(e) { // событие клика по веб-документу
			var div = $("#filter-choice .price-slider-choice"); // тут указываем ID элемента
			if (!containersearchList.is(e.target) // если клик был не по нашему блоку
				&& containersearchList.has(e.target).length === 0) { // и не по его дочерним элементам
				containersearchList.animate({
					opacity: 0
				}, 500, function(){
					containersearchList.css("display", "none");
					inputCeach.val("");
				});
				emptyBlock.animate({
					"opacity" : 0
				}, 500, function(){
					emptyBlock.css("display", "none");
				});
			}
		});

		clickChangeProduct.on("click", "li", function(){
			var nameProduct = $(this).find(".header-search-name").text();
			inputCeach.val(nameProduct);
			containersearchList.animate({
				opacity: 0
			}, 500, function(){
				containersearchList.css("display", "none");
			});
		});

		jQuery("#autocomplete").autocomplete({
			source: '/goods/search',
			minLength: 2,
			appendTo : "#langsList",
			classes: {
				"ui-autocomplete": "search-header-autocomplete",
			},
			open:function( event ) {
				var openList = $(".search-header-autocomplete").html();
				divList.html(openList);
			},
			select: function(event, ui) {
				jQuery(".click-menu .main-menu").fadeIn(500);
				jQuery("#autocomplete").val(ui.item.name);
				return false;
			},
			response: function( event, ui ) {
				var countFind = ui.content.length;
				
				if(countFind > 0){
					containersearchList.css("display", "inline-block");
					containersearchList.animate({
						opacity : 1
					}, 500);

					emptyBlock.animate({
						"opacity" : 0
					}, 500, function(){
						emptyBlock.css("display", "none");
					});

				}else{
					emptyBlock.css("display", "inline-block");
						emptyBlock.animate({
						"opacity" : 1
						}, 500);
						containersearchList.animate({
							opacity: 0
						}, 500, function(){
							containersearchList.css("display", "none");
						});
				};
			}
		}).autocomplete("instance")._renderItem = function(ul, item) {
			jQuery(".click-menu .main-menu").fadeOut(500);
			return jQuery("<li>")
				.append("<a class = 'search-linck'  href='" + item.url + "'></a>")
				.append("<div class='header-search-image'><img src='" + item.image + "' alt=''></div><div class='header-search-title-price'><div class='header-search-name'>" + item.name + "</div><div class='header-search-price'>" + item.price + "</div></div>")
				.appendTo(ul);
		};
	};

	if($(".favorite-cabinet").length != 0){

		var hoverFavoriteBlock = $(".favorite-cabinet .favorite");
		var showFavoriteBlock =  $("#show-favorite");

		hoverFavoriteBlock.hover(function() {
			showFavoriteBlock.css({
				"display": "inline-block",
				"opacity": 0
			});
			showFavoriteBlock.animate({opacity : 1},300);
		},
		function(){ 
			showFavoriteBlock.animate({
				opacity : 0
			}, 300, function(){
				showFavoriteBlock.css("display", "none");
			}); 
		}
	);

	};

	jQuery('.slider-logos').slick({
		arrows: false,
		slidesToShow: 6,
		draggable: true,
		autoplaySpeed: 5000,
		dots: false,
		arrows: false,
		autoplay: true,
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 4
			}
		}, {
			breakpoint: 769,
			settings: {
				slidesToShow: 3
			}
		}, {
			breakpoint: 621,
			settings: {
				slidesToShow: 2
			}
		}]
	});

	sliderOneGallery();

	//Появление следующего блока. Список Новостей.
	jQuery(".section-col-3-list .button-border-blue span").click(function() {
		jQuery(".li-new-hidden").each(function(index, value) {
			if (index < 6) {
				jQuery(value).fadeIn(1000);
				jQuery(value).removeClass("li-new-hidden");
			};
		});
		if (jQuery(".li-new-hidden").hasClass("li-new-hidden") == 0) {
			jQuery(".section-col-3-list .button-border-blue").fadeOut(1000);
		};
	});

	/*-------------------Подключение карты-------------------*/
	if ($('#home-map').length) {
		var el = document.getElementById("home-map");
		var adress = el.getAttribute('data-adress');
		var lat = el.getAttribute('data-lat');
		var lng = el.getAttribute('data-lng');

		myLatlng = new google.maps.LatLng(lat, lng);
		var myOptions = {
			zoom: 18,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("home-map"), myOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: adress
		});
	};

	// home валидатор feedback massage
	if (jQuery(".feedback").length != 0) {
		jQuery("#feedback").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
			},
			messages: {
				username: {
					required: "Введіть ім’я користувача",
					minlength: "Ваше ім'я закоротке."
				},
				email: "Не вірна адреса пошти",
			},
			submitHandler: function(event) { 
					var orderForm = jQuery(" #feedback");
					jQuery("#feedback .button-line-blue button").attr('disabled','disabled');
					$.ajax({
					type        : "POST",
				  url         : orderForm.attr("action"),
				  data        : orderForm.serialize(),
				  dataType    : "json",
						success: function(responsive) {
							$(".shipped_order").fancybox().trigger('click');
							jQuery("#feedback .button-line-blue button").removeAttr('disabled');
						},
						error: function(xhr, str) {
						}
					});
					return false;
	    },
		});
	};

	if (jQuery(".section-brief-description-card").length != 0) {
		jQuery(".full-picture-wrap a").fancybox();
		var choiceBlock;
		var selectBlock;
		jQuery(".pictures-card-block .picture-mini").click(function() {
			choiceBlock = jQuery(this).data("choice");
			jQuery(".pictures-card-block .picture-mini").removeClass("active");
			jQuery(this).addClass("active");
			jQuery(".full-picture-wrap a").removeClass("active");
			jQuery(".full-picture-wrap a").fadeOut(0);
			jQuery(".full-picture-wrap a").each(function(index, val) {
				selectBlock = jQuery(val).data("select");
				if (choiceBlock == selectBlock) {
					jQuery(val).fadeIn(100, function() {
						jQuery(val).addClass("active");
					});
				};
			});
		});	

		$(".makingo_order form").validate({
			errorLabelContainer: $(".makingo_order div.error")
		});

		if($(".makingo_order").length != 0){

		jQuery("#formx").submit(function( event ) {
			event.preventDefault();
			var orderForm = jQuery(" #formx");

			$(".makingo_order").animate({
				opacity : .7
			}, 500);
			$("#formx button").attr("disabled", "disabled");

			$.ajax({
			type        : "POST",
		  url         : orderForm.attr("action"),
		  data        : orderForm.serialize(),
		  dataType    : "json",
				success: function(responsive) {
					if("message" in responsive){
						$.fancybox.close();
						$(".shipped_order").fancybox().trigger('click');
						$(".makingo_order").css("opacity", "1");
					}else{
						$("#formx button").removeAttr("disabled");
						$(".makingo_order").animate({
							opacity : 1
						}, 500);
					};
				}
			});
			return false;
		});
		};
	};

	var dataFilter = 0;
	var dataSelected = 0;
	var datafilter = 0;

	function selectActive(idActive) {

		jQuery(".description-car-filter-block").removeClass("active");
		jQuery(".description-car-selected-block").removeClass("active");
		jQuery(".description-car-selected-block").fadeOut(0);

		jQuery(".description-car-selected-block").each(function(index, value) {
			dataSelected = jQuery(value).data("selected");
			if (idActive == dataSelected) {
				jQuery(value).fadeIn(200, function() {
					jQuery(value).addClass("active");
				});
			}
		});

		jQuery(".description-car-filter-block").each(function(index, value) {
			datafilter = jQuery(value).data("filter");
			if (idActive == datafilter) {
				jQuery(value).addClass("active");
			};
		});
	};

	if (jQuery(".section-full-description-card").length != 0) {

		jQuery(".description-car-filter-block").click(function() {
			dataFilter = jQuery(this).data("filter");
			selectActive(dataFilter);
		});

		// скрол по старанице
		var idCharacteristic;
		jQuery(".scrol-page a").click(function(event) {
			idCharacteristic = jQuery(".scrol-page a").data("characteristic");
			selectActive(idCharacteristic);
			//отменяем стандартную обработку нажатия по ссылке
			event.preventDefault();
			//забираем идентификатор бока с атрибута href
			var id = $(this).attr('href'),
				//узнаем высоту от начала страницы до блока на который ссылается якорь
				top = $(id).offset().top;
			//анимируем переход на расстояние - top за 1500 мс
			$('body,html').animate({
				scrollTop: top
			}, 1500);
		});

	};

	if (jQuery(".about-us-photo-list").length != 0) {
		if ($(window).width() <= '767') {
			jQuery(".about-us-photo-list .photo-list").slick({
				arrows: false,
				centerMode: false,
				slidesToShow: 2,
				draggable: true,
				autoplaySpeed: 5000,
				dots: false,
				arrows: false,
				autoplay: true,
				infinite: true,
				centerPadding: '10px',
			});
		};
	};

	if (jQuery(".page-aside-wrap .list-services").length != 0) {
		if ($(window).width() <= '768') {
			sliderAsidePage();
		};
	}

	if (jQuery(".section-feedback-horizon").length != 0) {
		feedbackHorizon();
	};

	if (jQuery(".data-fancybox").length != 0) {
		$(".data-fancybox").fancybox({
			openEffect: 'elastic',
			closeEffect: 'elastic',
			autoSize: true,
			type: 'iframe',
			iframe: {
				preload: false // fixes issue with iframe and IE
			}
		});
	};

	clickSound(); // Керування звуком
	calculation();
	dropUp(); //анимация плавного перехода на header
	switchFilterProducts() //перемикач для сторінки Products
	showProducts(); // показує певну кількість товарів на сторінці
	styeleSelect(); // Стилізація <select>.
	priceSliderChoice(); // Валідатор, контролер слайдера.
	priceSliderChoiceRight(); // Валідатор, контролер слайдера правого видемого блока.
	clickFilter() // розгортання та згортання фільтра.
	clickFilterRight() // аякс запрос при кліку на фільтр
	socHover() // подія на соціальні іконки при hover


	LoadListFavorite(); //Добавлення-видалення у фаворити
	updateListFavorite(); // Обновити список при переході на іншу сторніку.

});

function LoadListFavorite(){
	var block = $(".laved");
	if(block.length < 1){ return false }

	jQuery(".laved").click(function() {
		var idLaved = jQuery(this).data("id");
		var lavedBlock = jQuery(this).find("i");
		var topFavorite = $('.favorite');
		var topCountFavorite = $('.count-loved-round');

		var check = false;

		$.post('/goods/favorite_list', {id: idLaved})
		.done(function(response) {
			var count = response.count;
			var masID = response.id;
			var list = response.list;

			if(count == 0){
				lavedBlock.removeClass("fas");
				lavedBlock.addClass("far");
			};
			for (var i = 0; count > i; i++) {
				if(masID[i] == idLaved){ 
					lavedBlock.removeClass("far");
					lavedBlock.addClass("fas");
				}else{
					lavedBlock.removeClass("fas");
					lavedBlock.addClass("far");
				};
			}
			if(count > 0){
				topFavorite.addClass('active');
				topCountFavorite.text(count);
				$('.drop-down-list-favorite').removeClass('hidden');
				$('.drop-down-list-favorite').addClass('show');
				$('.none-products').removeClass('show');
				$('.none-products').addClass('hidden');

				$('.drop-down-list-favorite ul').html('');
				for(var i = 0; i < response.count; i++) {
					$('.drop-down-list-favorite ul').append(`
						<li>
							<a class="" href="/goods/` + response.list[i].gc_slug + `/` + response.list[i].id +`"></a>
							<img src="` + response.list[i].image + `" alt="">
							<div class = "name-product">
								<div class="title">` + response.list[i].title + `</div>
								<span class="">` + response.list[i].price + ` грн.</span>
							</div>
						</li>
					`);
				}
			}else{
				topFavorite.removeClass('active');
				topCountFavorite.text("");
				$('.drop-down-list-favorite ul').html('');
				$('.none-products').removeClass('hidden');
				$('.none-products').addClass('show');
				$('.drop-down-list-favorite').removeClass('show');
				$('.drop-down-list-favorite').addClass('hidden');
			};
		})
	});
};

function updateListFavorite(){
	$.get('/goods/favorite_list')
	.done(function(response) {

		var topFavorite = $('.favorite');
		var topCountFavorite = $('.count-loved-round');

	  var count = response.count;
		var masID = response.id;
		var list = response.list;

		if(count){
			topFavorite.addClass("active");
			topCountFavorite.text(count);
			$('.drop-down-list-favorite').removeClass('hidden');
			$('.drop-down-list-favorite').addClass('show');
			$('.none-products').removeClass('show');
			$('.none-products').addClass('hidden');
			$('.drop-down-list-favorite ul').html('');
				for(var i = 0; i < response.count; i++) {
					$('.drop-down-list-favorite ul').append(`
						<li>
							<a class="" href="/goods/` + response.list[i].gc_slug + `/` + response.list[i].id +`"></a>
							<img src="` + response.list[i].image + `" alt="">
							<div class = "name-product">
								<div class="title">` + response.list[i].title + `</div>
								<span class="">` + response.list[i].price + ` грн.</span>
							</div>
						</li>
					`);
					$('[data-id="' + masID[i] + '"] i').removeClass('far');
					$('[data-id="' + masID[i] + '"] i').addClass('fas');
				}
		};
		if(count == 0){
			topFavorite.removeClass("active");
			topCountFavorite.text("");
			$('.drop-down-list-favorite ul').html('');
			$('.drop-down-list-favorite ul').html('');
			$('.none-products').removeClass('hidden');
			$('.none-products').addClass('show');
			$('.drop-down-list-favorite').removeClass('show');
			$('.drop-down-list-favorite').addClass('hidden');
		};

	});
};


function socHover(){
	var socBlock = jQuery(".soc-list ul li");
	var spanText = jQuery(".soc-list span");
	if(socBlock.length < 1){ return false }
	socBlock.hover(
		function() {
			spanText.css("display", "inline-block");
			spanText.text(jQuery(this).data("signature"));
			spanText.animate({opacity : 1}, 300);
		},
		function(){  
			spanText.css("display", "none");
			spanText.text("");
		}
	);
};

function clickSound(){
	var block = $(".video-wrap .button-sound");
	var swich = false;

	if(jQuery(block).length < 1){ return false; }
	


	var videoEl = document.getElementById('videobaner');
	videoEl.addEventListener('canplaythrough', function () {
      videoEl.play = true;
  }, false);

	block.click(function(){
		if(videoEl.muted){
			videoEl.muted = false;
			block.find('.soundless').hide();
		}else{
			videoEl.muted = true;
			block.find('.soundless').show();
		};
	});
};

function heightFilter(){ // Корегуємо висоту фільтра 
	var countProducts = jQuery(".section-col-4-list.active .list-col-4 li").length
		if(countProducts < 8){ 
			jQuery(".price-slider-choice").css({
				"max-height": "80vh",
     		 "overflow-x": "hidden"
			});
		}else{
			jQuery(".price-slider-choice").css({
				"max-height": "none",
     		 "overflow-x": "auto"
			});
		};
}; 

function offsetUbdate(value){
	var block = jQuery(".section-filter-wrap");
	if(block.length < 1){ return false };
	jQuery(".offset-filter").val(value);
};

function clickFilter() {
	var block = jQuery("#filter-choice");
	var priceChoice = jQuery(".price-slider-choice");
	var buttonFilter = jQuery("#filter-choice .span-title .filter-icon");
	var buttonRemove = jQuery("#filter-choice .span-title .remove-blue-icon");
	var swich = false;

	if (block.length < 1) { return false; };
	if ($(window).width() > 991) { return false; };

	buttonFilter.click(function() {
		heightFilter();
		if (!swich) {
			buttonFilter.animate({
				opacity : 0
			},500, function(){
				buttonFilter.css("display", "none");
				buttonRemove.css("display", "inline-block");
				buttonRemove.animate({
					opacity: 1
				}, 300);
				swich = true;
			});
			priceChoice.css({
				"opacity": "0",
				"display": "inline-block",
			});
			priceChoice.animate({
				opacity: 1,
			}, 500, function() {
				swich = true;
			});
		}
	});
	
	/*.remove*/
	buttonRemove.click(function() {
		if (swich) { 
			buttonRemove.animate({
				opacity: 0
			},300, function(){
				buttonRemove.css("display", "none");
				buttonFilter.css("display", "inline-block");
				buttonFilter.animate({
					opacity : 1
				}, 300);
			});
			hiddenBlock();
		}
	});


	function hiddenBlock() {
		priceChoice.css("opacity", "1");
		priceChoice.animate({
			opacity: 0,
		}, 500, function() {
			priceChoice.css("display", "none");
			swich = false;
		});
	};
	// инпут офсет 0.

	offsetUbdate(0); // offset = 0
	// Запрос к БД фільтра для отображения найденіх товаров.
	var itemForm = jQuery(".filter");
	var isObject = false;

	jQuery('#select-options').on('change', function() {
		$('.offset-filter').val('0');
		$.ajax({
		  type        : "POST",
		  url         : itemForm.attr("action"),
		  data        : itemForm.serialize(),
		  dataType    : "json",
		  success     : function(response){
		  	jQuery(".section-col-4-list.active .list-col-4 li").remove(); // удаляємо початкові товари
		  	filterReceivedData(response);
		  	showEmptyBlock();
		  	heightFilter();
		  	offsetUbdate(response.length); // offset = response.length
		  }
		});
	});
	// запрос до бази данних у режимі мобільної версії
	jQuery(".filter").submit(function( event ) {


		event.preventDefault();
		$('.offset-filter').val('0');
		$.ajax({
		  type        : "POST",
		  url         : itemForm.attr("action"),
		  data        : itemForm.serialize(),
		  dataType    : "json",
		  success     : function(response){
		  	jQuery(".section-col-4-list.active .list-col-4 li").remove(); // удаляємо початкові товари
		  	filterReceivedData(response);
		  	showEmptyBlock();
		  	heightFilter();
		  	jQuery("#filter-choice .span-title .remove-blue-icon").trigger( "click" );
		  	offsetUbdate(response.length); // offset = response.length
		  }
		});
	});
}


// Запуск розгорнутого фільтра
function clickFilterRight() {
	var form = jQuery(".filter-right");
	jQuery(".filter-right").submit(function( event ) {


		event.preventDefault();
		$('.offset-filter').val('0');
		$.ajax({
		  type        : "POST",
		  url         : form.attr("action"),
		  data        : form.serialize(),
		  dataType    : "json",
		  success     : function(response){
		  	jQuery(".section-col-4-list.active .list-col-4 li").remove(); // удаляємо початкові товари
		  	filterReceivedData(response);
		  	showEmptyBlock();
		  	heightFilter();
		  	offsetUbdate(response.length); // offset = response.length
		  }
		});
	});
}

function showEmptyBlock(){

	var block = jQuery(".section-col-4-list.active .list-col-4");
	if(block.length < 1) { return false };

	var emptyProducts = jQuery(".section-col-4-list.active .empty-products");
	var buttonBlock = jQuery(".section-col-4-list.active .button-border-blue-wrap");
	var countProducts = jQuery(".section-col-4-list.active .list-col-4 li").length;

	if(countProducts == 0){
		emptyProducts.css({
			"display" : "inline-block",
			"opacity"	: "0"
		});
		jQuery(emptyProducts).animate({ 
			opacity: 1 
		}, 500, function(){ emptyProducts.css("display", "inline-block"); });
		
	}else{
		emptyProducts.css({
			"opacity"	: "1"
		});
		jQuery(emptyProducts).animate({ 
			opacity: 0 
		}, 500, function(){ emptyProducts.css("display", "none"); });

	};
}

// Формурованяя списку товарів по отриманому запросу (FILTER)
function filterReceivedData(data){

	var block = jQuery(".section-col-4-list.active .list-col-4");
	if(block.length < 1) { return false };

	if( data.length > 0){
		for(var i = 0; i < data.length; i++){
			jQuery('.section-col-4-list.active .list-col-4').append(
			"<li>"+
				"<div class=\"li-block\">"+
					"<div class=\"block\">"+
						"<div class=\"top-li-block\">"+
							"<span class=\"span-left\">Код: "+ data[i].article +"</span>"+
							"<span class=\"span-right laved\" data-id=\"36\">"+
								"<i class=\"far fa-heart\"></i>"+
							"</span>"+
						"</div>"+
						"<a href=\""+ data[i].url +"\">"+
							"<div class=\"li-image\">"+
								((data[i].image) ? "<img src=\""+ data[i].image +"\" alt=\"\">" : "") +
							"</div>"+
							"<div class=\"li-title\">"+
								"<h2>"+ data[i].name +"</h2>"+
							"</div>"+
							"<div class=\"li-price\">"+
								"<span>"+ data[i].price +" грн.</span>"+
							"</div>"+
						"</a>"+
					"</div>"+
				"</div>"+
			"</li>");
		};
	}else{ 
		showEmptyBlock();
	}
};

function priceSliderChoice() {

	var block = jQuery(".price-slider-choice");
	if (block.length < 1) {
		return false
	};

	var min, max, defaultMin;
	var defaultMax, countKeyMin, countKeyMax;

	min = jQuery("#slider-range").data("min");
	max = jQuery("#slider-range").data("max");
	defaultMin = jQuery("#slider-range").data("defaultmin");
	defaultMax = jQuery("#slider-range").data("defaultmax");
	var fromMin = jQuery("#amount-min");
	var fromMax = jQuery("#amount-max");

	jQuery("#amount-min").val(parserNumberInput(defaultMin)[1]);
	jQuery("#amount-max").val(parserNumberInput(defaultMax)[1]);

	var inputMin = jQuery("#amount-min");
	var inputMax = jQuery("#amount-max");

	inputMin.change(function() {
		countKeyMin = jQuery("#amount-min").val();
		var numberMin = parserNumberInput(countKeyMin);
		if (numberMin[0] > max) {
			jQuery("#slider-range").slider('values', 0, max);
			jQuery("#amount-min").val(parserNumberInput(max)[1]);
		} else {
			jQuery("#slider-range").slider('values', 0, numberMin[0]);
			jQuery("#amount-min").val(numberMin[1]);
		};
	});

	inputMin.keyup(function(e) {
		countKeyMin = jQuery("#amount-min").val();
		var numberMin = parserNumberInput(countKeyMin);
		if (e.keyCode === 13) {
			jQuery("#amount-min").val(numberMin[1]);
		};
		numberMin = 0;
	});

	inputMax.change(function() {
		countKeyMax = jQuery("#amount-max").val();
		var numberMax = parserNumberInput(countKeyMax);
		if (numberMax[0] > max) {
			jQuery("#slider-range").slider('values', 1, max);
			jQuery("#amount-max").val(parserNumberInput(max)[1]);
		} else {
			jQuery("#slider-range").slider('values', 1, numberMax[0]);
			jQuery("#amount-max").val(numberMax[1]);
		};
	});

	inputMax.keyup(function(e) {
		countKeyMax = jQuery("#amount-max").val();
		var numberMax = parserNumberInput(countKeyMax);
		if (e.keyCode === 13) {
			jQuery("#amount-max").val(numberMax[1]);
		};
		numberMax = 0;
	});

	jQuery("#slider-range").slider({
		range: true,
		min: min,
		max: max,
		values: [defaultMin, defaultMax],
		slide: function(event, ui) {
			var inputMin = parserNumberInput(ui.values[0]);
			var inputMax = parserNumberInput(ui.values[1])
			jQuery("#amount-min").val(inputMin[1]);
			jQuery("#amount-max").val(inputMax[1]);
		},
	});
};


function priceSliderChoiceRight() {

	var block = jQuery(".price-slider-choice-right");
	if (block.length < 1) {
		return false
	};

	var min, max, defaultMin;
	var defaultMax, countKeyMin, countKeyMax;

	min = jQuery("#slider-range-right").data("min");
	max = jQuery("#slider-range-right").data("max");
	defaultMin = jQuery("#slider-range-right").data("defaultmin");
	defaultMax = jQuery("#slider-range-right").data("defaultmax");
	var fromMin = jQuery("#amount-min-right");
	var fromMax = jQuery("#amount-max-right");

	jQuery("#amount-min-right").val(parserNumberInput(defaultMin)[1]);
	jQuery("#amount-max-right").val(parserNumberInput(defaultMax)[1]);

	var inputMin = jQuery("#amount-min-right");
	var inputMax = jQuery("#amount-max-right");

	inputMin.change(function() {
		countKeyMin = jQuery("#amount-min-right").val();
		var numberMin = parserNumberInput(countKeyMin);
		if (numberMin[0] > max) {
			jQuery("#slider-range-right").slider('values', 0, max);
			jQuery("#amount-min-right").val(parserNumberInput(max)[1]);
		} else {
			jQuery("#slider-range-right").slider('values', 0, numberMin[0]);
			jQuery("#amount-min-right").val(numberMin[1]);
		};
	});

	inputMin.keyup(function(e) {
		countKeyMin = jQuery("#amount-min-right").val();
		var numberMin = parserNumberInput(countKeyMin);
		if (e.keyCode === 13) {
			jQuery("#amount-min-right").val(numberMin[1]);
		};
		numberMin = 0;
	});

	inputMax.change(function() {
		countKeyMax = jQuery("#amount-max-right").val();
		var numberMax = parserNumberInput(countKeyMax);
		if (numberMax[0] > max) {
			jQuery("#slider-range-right").slider('values', 1, max);
			jQuery("#amount-max-right").val(parserNumberInput(max)[1]);
		} else {
			jQuery("#slider-range-right").slider('values', 1, numberMax[0]);
			jQuery("#amount-max-right").val(numberMax[1]);
		};
	});

	inputMax.keyup(function(e) {
		countKeyMax = jQuery("#amount-max-right").val();
		var numberMax = parserNumberInput(countKeyMax);
		if (e.keyCode === 13) {
			jQuery("#amount-max-right").val(numberMax[1]);
		};
		numberMax = 0;
	});

	jQuery("#slider-range-right").slider({
		range: true,
		min: min,
		max: max,
		values: [defaultMin, defaultMax],
		slide: function(event, ui) {
			var inputMin = parserNumberInput(ui.values[0]);
			var inputMax = parserNumberInput(ui.values[1])
			jQuery("#amount-min-right").val(inputMin[1]);
			jQuery("#amount-max-right").val(inputMax[1]);
		},
	});
};








function parserNumberInput(value) {

	if (!value) {	value = 0; }

	var number = "";
	var parsLine = "";
	var count = 0;
	var difference = 0;
	var intline = 0;
	var data = [];
	parsLine = value.toString().replace(/\s/g, '');
	intline = parseInt(parsLine);
	count = parsLine.length;
	difference = count - 3;
	if (intline > 999) {
		for (i = 0; i < count; i++) {
			number += parsLine[i];
			if (difference == (i + 1)) {
				number += " ";
			};
		};
	} else {
		return data = [parsLine, parsLine];
	};
	return data = [parsLine, number];
};

// Стилізація select.
function styeleSelect() {
	var block = jQuery("#select-options");
	if (block.length < 1) {
		return false
	};
	jQuery("#select-options").styler();
};

function showHiddenButtonResponsiv(value){ // Показати скирити кнопку
	var buttonBlock = jQuery(".section-col-4-list.active .button-border-blue-wrap");
	if( value == 0 ){
		buttonBlock.css({
			"display" : "inline-block",
			"opacity"	: "1"
		});
		buttonBlock.animate({
			opacity : 0
		}, 500, function(){
			buttonBlock.css("display", "none");
		});
	}else{
		buttonBlock.css({
			"display" : "inline-block",
			"opacity"	: "0"
		});
		buttonBlock.animate({	opacity : 1	}, 500);
	}
};

// показати певну кількість продукції
function showProducts() {
	var products = jQuery(".section-col-4-list");
	if (products.length < 1) { return false; }

	var conunt = 0;
	var number = parseInt(jQuery(".button-border-blue-wrap").data("count"));

	if (!number) { count = 4 } else {	count = number };


	//Появление следующего блока.
	jQuery(".section-col-4-list .button-border-blue span").click(function() {

		var countProducts = jQuery(".section-col-4-list.active .list-col-4 li").length;
		offsetUbdate(countProducts);
		showEmptyBlock();

		// Запрос к БД фільтра для отображения найденіх товаров.
		var itemForm = jQuery(".filter");

			$.ajax({
			  type        : "POST",
			  url         : itemForm.attr("action"),
			  data        : itemForm.serialize(),
			  dataType    : "json",
			  success     : function(response){
			  	heightFilter();
			  	filterReceivedData(response);
			  	showHiddenButtonResponsiv(response.length); // показать скрити кнопку 
			  }
			});
	});
};

function switchFilterProducts() {
	var number = 0;

	var choiceProducts = jQuery(".choice-products");
	var productsBlock = jQuery(".active section-col-4-list");

	if (choiceProducts.length < 1) {
		return false
	}
	if (productsBlock.length < 1) {
		return false;
	}

	choiceProducts.find("li").click(function() {
		choiceProducts.find("li").removeClass("active");
		jQuery(this).addClass("active");
		number = jQuery(this).data("number");
		jQuery(".section-col-4-list").css("opacity", "0");
		jQuery(".section-col-4-list").each(function(index, value) {
			if (jQuery(value).data("choice") == number) {
				jQuery(value).addClass("active");
				jQuery(value).animate({
					opacity: 1,
				}, 500);
			} else {
				jQuery(value).removeClass("active");
			}
		});

	});
};

//анимация плавного перехода на header
function dropUp() {
	var round = jQuery("#drop_up");
	if (round < 1) {
		return false
	};
	jQuery("#drop_up").click(function() {
		var elementClick = $(this).attr("href")
		var destination = $(elementClick).offset().top;
		jQuery("html:not(:animated),body:not(:animated)").animate({
			scrollTop: destination
		}, 800);
		return false;
	});
};

// ajax запрос
function call() {
	var msg = $('#formx').serialize();
	$.ajax({
		type: 'POST',
		url: '../html/handler-order.php',
		data: msg,
		success: function(data) {
			$('#results').html(data); // блок куда виводяться иформация
		},
		error: function(xhr, str) {
			//alert('Возникла ошибка: ' + xhr.responseCode);
		}
	});
}

function calculation() {

	var modalCalculator = jQuery(".modal-calculator");

	if (modalCalculator.length < 1) {
		return false;
	}

	var roomArea = jQuery(".modal-calculator input[id = 'area']").data("area");
	var ceilingHeight = jQuery(".modal-calculator input[id = 'height']").data("height");

	jQuery("#calculation-form").validate({
		rules: {
			area: "required",
			height: "required",
			area: {
				required: true,
				minlength: 2
			},
			height: {
				required: true,
				minlength: 1
			},
		},
		messages: {
			area: {
				required: roomArea,
				minlength: roomArea,
				number: roomArea
			},
			height: {
				required: ceilingHeight,
				minlength: ceilingHeight,
				number: ceilingHeight
			}
		}
	});

	jQuery("#linck-calculator").fancybox({
		modal: true,
		helpers: {
			overlay: {
				hideOnOverlayClick: true
			} //Disable click outside event
		}
	});

	jQuery("#modal-calculator .close").click(function() {
		$.fancybox.close();
	});

	if(jQuery("#linck-calculator").length != 0){
		$(document).mouseup(function(e) { // событие клика по веб-документу
			var div = $("#modal-calculator"); // тут указываем ID элемента
			if (!div.is(e.target) // если клик был не по нашему блоку
				&& div.has(e.target).length === 0) { // и не по его дочерним элементам
				$.fancybox.close();
			}
		});
	};

	//Стилизация <select>
	jQuery(".input-select select").styler();

	var area, height,result, level;
	result = 0;

	jQuery("#calculation-form").submit(function( event ) {
		area = $("#calculation-form .left input[type='number']").val();
		height = $("#calculation-form .right input[type='number']").val();
		level = $(" #location").val();
		if(area > 0 & height > 0){
			result = area * height * (level/1000)+1*0.3+1*0.1;
			$("#calculation-form .result").text(result.toFixed(1)+" кВт");
			$("#calculation-form .modal-result").css({
				"max-height" : "none"
			});
			jQuery("#calculation-form .modal-result").animate({
				opacity : 1
			}, 500);
		}else{
			jQuery("#calculation-form .modal-result").animate({
				opacity : 0
			}, 500, function(){
				$("#calculation-form .modal-result").css({
					"max-height" : "0"
				});
			});
		}
		return false;
	});
};

function sliderOneGallery() {
	var section = jQuery(".section-text-one-gallery");
	if (section < 1) {
		return false
	};


	var countImg = 0;
	var current = 0;
	var currentProc = 0;
	var nameImgActive;
	var masshAltGallery = [];
	var reversedAltGallery = [];
	/*var handlerMass = [];*/

	var lineBlock = jQuery(".one-gallery-settings .line");


	var dataSpeed = parseInt(jQuery(".one-gallery").data("speed"));

	var speed = sliderParse(500, dataSpeed);

	//при загруски отобразить остальные блоки слайдера
	jQuery('.one-gallery .image').css("display", "inline-block");
	var oneGalleryObject = jQuery('.one-gallery').slick({
		centerMode: false,
		autoplaySpeed: speed,
		dots: false,
		arrows: true,
		autoplay: true,
		/*infinite: true,*/
/*		cssEase: 'linear',*/
		slidesToShow: 1,
	    /*slidesToScroll: -1,
	    variableWidth: true*/
	    rtl: true


	});


	// запись названий изображений в масив.
	var i = 0;
	jQuery(".one-gallery .image").each(function(id, value) {
		if (jQuery(value).hasClass("slick-cloned")) {
			masshAltGallery[i] = jQuery(value).find("img").attr("alt");
			i++;
		};
	});
	//видаляємо непотрібний останній елемент створений слайдером
	masshAltGallery.splice(masshAltGallery.indexOf(masshAltGallery.length - 1), 1);

	//запис данних у зворотньому порядку
	var r = masshAltGallery.length - 1;
	
	for(var i = 0 ; i < masshAltGallery.length ; i++){
		reversedAltGallery[i] = masshAltGallery[r];
		r--;
	};

	if(reversedAltGallery.length > 2){
		jQuery(".name-image-active span").html(reversedAltGallery[(reversedAltGallery.length - 1)]);
	}else{
		jQuery(".name-image-active span").html(reversedAltGallery[0]);
	};
	
	countImg = reversedAltGallery.length; // количество єлементов в масиве.

	var count = 0;
	if (countImg < 10) {
		count = "0" + countImg;
	} else {
		count = countImg;
	};
	jQuery(".one-gallery-settings .total-number").html(count);

	jQuery(".section-text-one-gallery .name-image-active span").css("opacity", 1);

	function currentPlasProc(value) {
		lineBlock.stop();
		lineBlock.css({
			"left" : "0",
			"right" : "auto",
			"width" : 0
		});
		lineBlock.animate({
			"width" : 100 +"%",
		}, speed, "linear", function(){
			lineBlock.css({
				"left" : "auto",
				"right" : "0"
			});
			lineBlock.animate({
				"width" : 0 +"%",
			}, 500, "linear", function(){
				lineBlock.css({
					"left" : "0",
					"right" : "auto"
				});
			});
		});
	};

	currentPlasProc(speed); // вводим начальную позицыю

	$('.one-gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		if (nextSlide < 9) {
			current = "0" + (nextSlide + 1);
			jQuery(".one-gallery-settings .current").html(current);
			currentPlasProc(speed);
		} else {
			jQuery(".one-gallery-settings .current").html(nextSlide + 1);
			currentPlasProc(speed);
		};

		jQuery(".name-image-active span").html(reversedAltGallery[nextSlide]);
		currentPlasProc(speed);
	});

	
	
/*	$(".slick-next").on("click", function(){
		console.log("next");

	});
	$(".slick-prev").on("click", function(){

		var numberImg = parseInt(jQuery(".one-gallery-settings .current").text());

		console.log(reversedAltGallery.length);
		numberImg++;

		if(numberImg < 9){
			current = "0" + numberImg;
		}else{
			current = numberImg;
		}
		
		if(numberImg == reversedAltGallery.length){
			numberImg = 0;
			current = "0" + 1;
		}
		jQuery(".one-gallery-settings .current").html(current);
	});*/

	
	jQuery(".one-gallery-settings .prev-icon").click(function() {
		$('.one-gallery').slick('slickPrev');
		currentPlasProc(speed);
	});
	jQuery(".one-gallery-settings .next-icon").click(function() {
		$('.one-gallery').slick('slickNext');
		currentPlasProc(speed);
	});
};

//Функція яка обробляє дані для швидкості слайдера
function sliderParse(minspeed, value) {
	var speed = 0;
	var val = parseInt(value);
	(!(val == "") & (val > minspeed) & !(val == "NaN")) ? speed = val: speed = minspeed;
	return speed;
};

function sliderAsidePage() {

	if (jQuery(".page-aside-wrap").length < 1) {
		return false;
	}
	var sliderAside = jQuery(".list-services");
	var dataSpeed = jQuery(".list-services").data("speed");

	var speed = sliderParse(500, dataSpeed);

	var sliderCurrent = jQuery(".page-aside-wrap .current-count .current");
	var sliderCount = jQuery(".page-aside-wrap .current-count .count");

	sliderAside.slick({
		arrows: false,
		centerMode: false,
		slidesToShow: 2,
		draggable: true,
		autoplaySpeed: speed,
		dots: false,
		arrows: false,
		autoplay: true,
		infinite: true,
		centerPadding: '50px',
	});
	sliderAside.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
		var i = (currentSlide ? currentSlide : 0) + 1;
		sliderCurrent.text(i);
		sliderCount.text(slick.slideCount);
	});
};

// page валидатор
function feedbackHorizon() {

	if (jQuery("form").length < 1) {
		return false
	}

	var inputUsername = jQuery("input[name='username']");
	var usernameError = inputUsername.data("error");
	var usernameMinlength = inputUsername.data("minlength");

	var inputPhone = jQuery("input[name='phone']");
	var phoneEmpty = inputPhone.data("error");
	var phoneError = inputPhone.data("minlength");

	jQuery("#feedback-horizon").validate({
		rules: {
			username: "required",
			phone: "required",
			username: {
				required: true,
				minlength: 3
			},
			phone: {
				required: true,
				minlength: 10
			},
		},
		messages: {
			username: {
				required: usernameError,
				minlength: usernameMinlength
			},
			phone: {
				required: phoneEmpty,
				minlength: phoneError
			}
		}
	});
	jQuery("#feedback-horizon").submit(function(event){
		event.preventDefault();
		var itemForm = jQuery("#feedback-horizon");
		$.ajax({
		  type        : "POST",
		  url         : itemForm.attr("action"),
		  data        : itemForm.serialize(),
		  dataType    : "json",
		  success     : function(response){
		  	if("success" in response) {
		  		jQuery('.feedback-server-text').html('<span>' + response.success + '</span>');
		  		inputUsername.val("");
					inputPhone.val("");
		  	} else {
		  		jQuery('.feedback-server-text').html('<span>' + response.error + '</span>');
		  	}
		  	jQuery('.feedback-server-text').addClass('active');
		  }
		});
	});
};