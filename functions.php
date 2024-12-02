<?php
add_action( 'wp_enqueue_scripts', 'mtx_enqueue_styles' );
function mtx_enqueue_styles() {
	wp_enqueue_style('mtx', 'get_stylesheet_uri()');
}
