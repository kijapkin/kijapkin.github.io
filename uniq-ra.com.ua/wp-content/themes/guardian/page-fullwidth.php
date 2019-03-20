<?php get_header(); ?>
	<div id="main-content" class="clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post();
			get_template_part('post', 'content');
		endwhile;
		else :
			get_template_part('nocontent');
		endif; ?>
	</div>
<?php get_footer(); ?>