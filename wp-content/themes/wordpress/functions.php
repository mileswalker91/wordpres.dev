<?php

function wordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wordpress_scripts' );

function wordpress_google_fonts() {
				wp_register_style('ShadowsIntoLight', 'http://fonts.googleapis.com/css?family=Shadows+Into+Light:400');
				wp_enqueue_style( 'ShadowsIntoLight');
		}

add_action('wp_print_styles', 'wordpress_google_fonts');
