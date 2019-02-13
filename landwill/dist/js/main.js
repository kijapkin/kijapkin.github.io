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

$('.block-slider-system-profile').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  variableWidth: true,
  slidesToScroll: 1,
  prevArrow: $('.prew-profile'),
  nextArrow: $('.next-profile'),
   responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        dots: false,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
        centerMode: true,
      }
    },
    {
      breakpoint: 770,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        dots: true,
      }
    },
  ]
});

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
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: $('.prew'),
  nextArrow: $('.next'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        dots: false
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