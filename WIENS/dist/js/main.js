$(document).ready(function(){

	$('.multiple-items .wr-slide').css({
		"display": "block",
	});
	$('.multiple-items').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: false,
	  arrows: false,
	});
	jQuery(".white-tringle .block-arrows .prev").click(function(){
		console.log(true);
    $('.multiple-items').slick('slickPrev');
  	});
 	 jQuery(".white-tringle .block-arrows .next").click(function(){
 	 	console.log(true);
    $('.multiple-items').slick('slickNext');
  	});
});