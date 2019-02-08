$('.block-slider-system-profile').slick({
  dots: false,
  prevArrow: $('.prew-profile'),
  nextArrow: $('.next-profile'),

});
$('.block-slider-system-divider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
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
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.slider-feedback').slick({
  dots: false,
  prevArrow: $('.prew-feedback'),
  nextArrow: $('.next-feedback'),
});
