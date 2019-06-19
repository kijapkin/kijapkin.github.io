 $(document).ready(function(){
    $(document).on("click","#arrow-up", function (e) {
        e.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
    $(document).scroll(function () {
    	if ($(this).scrollTop() > 40) {
    		$('#arrow-up').fadeIn();
    	} else {
    		$('#arrow-up').fadeOut();
    	}
    });
    $.stellar();
});