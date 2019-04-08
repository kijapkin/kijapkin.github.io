$(document).ready(function() {

    /* menu for mobile devices */
    $('.menu-btn').on('click', function(e) {
            $(this).next().slideToggle();
            if (!$(this).hasClass('active')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
    });

    /* tabs */
    $('.tabs-header').each(function () {
    	tab_action($(this).find('.item:first'));
    });

    $('.tabs-header .item').on('click', function() {
    	tab_action($(this));
    });

    function tab_action(tab_item) {
    	var header = tab_item.closest('.tabs-header');
    	var content = header.next();
    	var target = tab_item.attr('data-target');
    	var target_item = content.find('div.tab[data-id="'+target+'"]');
    	header.next().find('div.tab').hide();
    	$(target_item).show();
    	header.find('div.item').removeClass('active')
    	tab_item.addClass('active');
    }

    /* popup */
    function showPopup(whichpopup){
        var docHeight = $(document).height();
        var scrollTop = $(window).scrollTop();
        $('.overlay-bg').show().css({'height' : docHeight});
        $('.modal').hide();
        $('.modal#'+whichpopup).show();
    }
    // function to close our popups
    function closePopup(){
        $('.overlay-bg, .modal').hide();
    }

    $('.btn-modal').on('click', function(event) {
        event.preventDefault();
        var selectedPopup = $(this).attr('data-target');
        showPopup(selectedPopup);
    });

    $('.btn-close-modal, .overlay-bg').on('click', function(even){
        event.preventDefault();
        closePopup();
    });

    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            closePopup();
        }
    });

    $('.accordion-div').each(function () {
        var items = $(this).find('.accordion-item');
    });

    $('.accordion-item .accordion-title').on('click', function (){
        var cur_item = $(this).parent();

        if (!cur_item.hasClass('active'))
        {
            $(this).closest('.accordion-div').find('.accordion-item .accordion-inner').hide();
            $(this).closest('.accordion-div').find('.accordion-item').removeClass('active')
            $(this).parent().find('.accordion-inner').slideToggle();
            cur_item.addClass('active')
        }
    });

});
