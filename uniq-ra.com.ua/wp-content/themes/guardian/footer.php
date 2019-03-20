<?php if (pll_current_language() === 'ru'){
	$lang = true;
} else {
	$lang = false;
}?>
<div id="footer" class="footer">
	<div id="doit-section">
		<div class="container">
			<div class="clearfix text-center">
				<?php
				if ($lang) {?>
					<a class="button-red" href="<?php echo esc_url(home_url( '/' )); ?>contactu/">
						РАЗМЕСТИТЬ ЭФФЕКТИВНУЮ РЕКЛАМУ<br/>
						НА ЛИФТ-БОРДАХ!
					</a>
				<?php } else { ?>
					<a class="button-red" href="<?php echo esc_url(home_url( '/' )); ?>contactu-ua/">
						РОЗМІСТИТИ ЕФЕКТИВНУ РЕКЛАМУ<br/>
						НА ЛІФТ-БОРДАХ!
					</a>
				<?php } ?>

			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="copyright_info">
			<div class="container">
				<?php $wl_theme_options = weblizar_get_options(); ?>
		
				<?php if($wl_theme_options['footer_section_social_media_enbled'] == "on") { ?>
		
				<div class="col-md-3 col-sm-4 one_third pull-left social-l">
					<ul class="footer_social_links">
					<?php if($wl_theme_options['facebook_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['facebook_link']); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php  }  if($wl_theme_options['twitter_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>" target="_blank"><i class="fa fa-vk"></i></a></li>
					<?php  }  if($wl_theme_options['google_plus']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['google_plus']); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<?php  }  if($wl_theme_options['linkedin_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<?php  }  if($wl_theme_options['flicker_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['flicker_link']); ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
					<?php  }  if($wl_theme_options['youtube_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['youtube_link']); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<?php  }  if($wl_theme_options['rss_link']!= '') { ?>
						<li class="animate" data-anim-type="zoomIn"><a href="<?php echo esc_url($wl_theme_options['rss_link']); ?>" target="_blank"><i class="fa fa-rss"></i></a></li>
					<?php  }  ?>
					</ul>
				</div>
		
				<div class="col-md-6 col-sm-4 one_third footer-logo pull-center">
					<img src="<?php bloginfo('template_url'); ?>/images/logo_white.png" alt="Logo">
					
						<p>
						<?php
							if($wl_theme_options['footer_customizations']!= '') { echo esc_attr($wl_theme_options['footer_customizations']); }
						?>
					</p>
			
				</div>

				
				<div class="col-md-3 col-sm-4 one_third" data-anim-type="fadeInUp">
					<div class="qlinks">
						<ul>
							<li class="tel-n">
								<i class="fa fa-phone" aria-hidden="true"></i>
								(067) 431 37 17 <br/>
								(067) 431 80 88
							</li>
							<li class="c-mail">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								uniq.ada@gmail.com
								<br/>
							</li>
							<li class="c-mail">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								uniq.dima@gmail.com
								<br/>
							</li>
							<li class="skype-id">
								<i class="fa fa-skype" aria-hidden="true"></i>
								uniq.ada
							</li>
						</ul>
					</div>
				</div>
				<?php } ?>
			</div>
	</div>
</div>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>	
	<?php if(isset($wl_theme_options['custom_css'])) { ?> 
	<style type="text/css"><?php echo esc_attr($wl_theme_options['custom_css']); ?></style>
	<?php } ?>
	<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a><!-- end scroll to top of the page-->	
	<script>/* for scroll arrow */
	var amountScrolled = 300;

jQuery(window).scroll(function() {
	if ( jQuery(window).scrollTop() > amountScrolled ) {
		jQuery('a.back-to-top').fadeIn('slow');
	} else {
		jQuery('a.back-to-top').fadeOut('slow');
	}
});

jQuery('a.back-to-top').click(function() {
	jQuery('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
	</script>
</body>
</html>