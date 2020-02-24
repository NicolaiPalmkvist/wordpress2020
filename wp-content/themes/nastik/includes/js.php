<?php

if( !function_exists ('nastik_enqueue_scripts') ) :
	function nastik_enqueue_scripts() {
	$nastik_options = get_option('nastik');
	wp_enqueue_script('nastik-plugins', get_template_directory_uri() . '/includes/js/plugins.js', array('jquery'), '1.0',true);
	wp_enqueue_script('nastik-scripts', get_template_directory_uri() . '/includes/js/scripts.js', array('jquery'), '1.0',true);
	
	if (nastik_AfterSetupTheme::return_thme_option('enableajax')=='st1'){
	wp_enqueue_script('nastik-ajax', get_template_directory_uri() . '/includes/js/disableajx.js', array('jquery'), '1.0',true);
	}
	else{
	wp_enqueue_script('nastik-title-replace', get_template_directory_uri() . '/includes/js/title-replace.js', array('jquery'), '1.0',true);
	}
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}
	add_action('wp_enqueue_scripts', 'nastik_enqueue_scripts');
endif;