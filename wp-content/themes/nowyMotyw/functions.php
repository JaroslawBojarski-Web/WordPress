<?php
function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), filemtime(get_template_directory().'/style.css') );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );