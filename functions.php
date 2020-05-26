<?php 
	 add_action( 'wp_enqueue_scripts', 'wpstarted_child_enqueue_styles' );
	 function wpstarted_child_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>