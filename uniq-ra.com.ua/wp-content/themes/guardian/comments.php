<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'weblizar' ); ?></p>
	<?php return; endif; ?>
    <?php if ( have_comments() ) : ?>
	<h4><?php _e('Comments','weblizar'); ?></h4>
	<div class="mar_top_bottom_lines_small3"></div>	
	<ol class="comment list">
	<?php wp_list_comments( array( 'callback' => 'weblizar_comment' ) ); ?>
	</ol>	
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h5 class="assistive-text"><?php _e( 'Comment navigation', 'weblizar'); ?></h5>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'weblizar' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'weblizar' ) ); ?></div>
		</nav>
	<?php endif;  ?>		
	<?php endif; ?>
	<?php if ( comments_open() ) : ?>
	<div class="col-md-12 comment_form">							
	<?php $fields=array(
		'author' => '<input type="text" name="author" id="name" class="comment_input_bg" /><label for="name">'.__('Name*','weblizar').'</label>',
		'email' => '<input type="text" name="email" id="mail" class="comment_input_bg" /><label for="mail">'.__('Mail*','weblizar').'</label>',
		'website' => '<input type="text" name="website" id="website" class="comment_input_bg" /><label for="website">'.__('Website','weblizar').'</label>',
	);
	function weblizar_my_fields($fields) { 
		return $fields;
	}
	add_filter('comment_form_default_fields','weblizar_my_fields');
		$defaults = array(
		'fields'=> apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'=> '<textarea id="comment" name="comment" class="col-md-12 comment_textarea_bg" rows="10" cols="7"></textarea>',		
		'logged_in_as' => '',
		'title_reply_to' => __( 'Leave a Reply to %s','weblizar'),
		'id_submit' => 'comment_submit',
		'label_submit'=>__( 'Post Comment','weblizar'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h4>'.__('Leave a Comment','weblizar').'</h4>',		
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>		
	</div>
<?php endif; // If registration required and not logged in ?>