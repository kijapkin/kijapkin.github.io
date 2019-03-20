
jQuery(document).ready(function() {
	if( jQuery(window).width() > 767) {
		jQuery('.nav li.dropdown').hover(function() {
			jQuery(this).addClass('open');
		}, function() {
			jQuery(this).removeClass('open');
		});
		jQuery('.nav li.dropdown-menu').hover(function() {
			jQuery(this).addClass('open');
		}, function() {
			jQuery(this).removeClass('open');
		});
	}

	jQuery('.nav li.dropdown').find('.fa-angle-down').each(function(){
		jQuery(this).on('click', function(){
			if( jQuery(window).width() < 768) {
				jQuery(this).parent().next().slideToggle();
			}
			return false;
		});
	});
});
/* for menu in responsive */
jQuery(document).ready(function() {
	jQuery(window).scroll(function () {
		if( jQuery(window).width() > 768 ) {
			if (jQuery(this).scrollTop() >= 0) {
				jQuery('body #main-content').css('margin-top', jQuery('#header').height());
				jQuery('#header').addClass('sticky-head');
			}
			else {
				jQuery('#header').removeClass('sticky-head');
				jQuery('body #main-content').css('margin-top', 0);
			}
		}
	});
});

/* Sticky footer */
jQuery(document).ready(function() {
	var fHeight = jQuery('#footer').height();
	jQuery('body > div #main-content').css('padding-bottom', fHeight);
});

jQuery(document).ready(function() {
	jQuery('.map-buttons li a').on('click', function(){
		var li = jQuery(this).parent();
		jQuery('.map-buttons li').removeClass('active');
		li.addClass('active');
	});
});

/* CEO Text */
jQuery(document).ready(function() {
	jQuery('#show_link').on('click', function(event){
		event.preventDefault();
		jQuery(this).addClass('hidden');
		jQuery('#short_text').removeClass('b-hide');
	});
});

