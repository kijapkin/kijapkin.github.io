$(document).ready(function () {

  UMCB.initCallback(5000);
  UMCB.initComebacker(5000);

  $('.order-form button[type=submit]').text('Заказать');
  $('.order-form input[name=name_last]').val('Заказ').closest('.form-group').hide();
  $('.order-form').submit(function (e) {
    var price = $(this).closest('.order').find('.actual-price').text(),
        size = $(this).find('.order-info-sizes .active').data('size'),
        id =  $(this).closest('.order').find('.actual-price').data('id');

    $(".order-form input[name='features[qty]']").val(1);
    $(".order-form input[name='features[price]']").val(price);
    $(".order-form input[name='features[size]']").val(size);
    $(".order-form input[name='features[id]']").val(id);
  });


});