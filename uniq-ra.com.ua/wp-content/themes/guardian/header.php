<!doctype html>
<!--[if IE 7 ]>    <html lang="ru" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ru" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ru" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128429833-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128429833-1');
</script>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<meta charset="<?php bloginfo('charset'); ?>" />
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" />
	<?php } ?>	
	<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div>
<header id="header">
	<div id="trueHeader">
		<div class="wrapper">    
			<div class="container">    
				<!-- Logo -->
				<div class="col-md-2 logo">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo" >
						<?php if($wl_theme_options['upload_image_logo']!='') 
						{ ?>
						<img src="<?php echo esc_url($wl_theme_options['upload_image_logo']); ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "50"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "180"; } ?>px;" />
						<?php } else { echo get_bloginfo('name'); } ?>						
					</a>
				</div>

				<div class="col-md-8 right con-info">
					<?php $guardian_image=get_header_image();
					if(! empty($guardian_image)){ ?><img src="<?php echo get_header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="image" /><?php } ?>
					<ul>
						<?php if($wl_theme_options['contact_email']!=''){ ?>
							<li class="g_email"><a href="mailto:<?php echo esc_url($wl_theme_options['contact_email']); ?>"><i class="fa fa-envelope"></i> <?php echo esc_attr($wl_theme_options['contact_email']); ?></a></li> <?php } ?>
						<?php if($wl_theme_options['contact_phone_no']!=''){ ?>
							<li class="g_contact"><i class="fa fa-phone"></i> <?php echo esc_attr($wl_theme_options['contact_phone_no']); ?></li>
						<?php } ?>
					</ul>
				</div>

				<div class="lang-switcher">
					<?php wp_nav_menu( array(
							'theme_location' => 'langsw',
							'menu_class' => 'nav navbar-nav navbar-right',
							'fallback_cb' => 'weblizar_fallback_page_menu',
							'walker' => new Walker_Nav_Menu()
						)
					); ?>
				</div>

				<!-- Menu -->
				<div class="menu_main">
					<div class="navbar yamm navbar">
						<div class="navbar-header">
								<div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  ><span><?php __('Menu','weblizar'); ?></span>
									<button type="button" ><i class="fa fa-bars"></i></button>
								</div>
							</div>
							<!-- /Navigation  menus -->
						<div id="navbar-collapse-1" class="navbar-collapse collapse">  
						<?php
								wp_nav_menu( array(  
										'theme_location' => 'primary',
										'menu_class' => 'nav navbar-nav navbar-right',
										'fallback_cb' => 'weblizar_fallback_page_menu',
										'walker' => new weblizar_nav_walker()
										)
									);	
								?>	
						</div>		
					</div>			 
				</div>
				<!-- end menu -->
			</div>			
		</div>    
	</div>    
</header>
<div class="clearfix"></div>