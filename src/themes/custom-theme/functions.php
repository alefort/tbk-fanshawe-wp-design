<?php

function our_scripts() {
	
	if(!is_home()){
		wp_enqueue_style( 'our-style', get_stylesheet_uri() . '/custom.css', array(), '1.0.0' );
	}
	}

	
	add_action( 'wp_enqueue_scripts', 'our_scripts' );	
?>