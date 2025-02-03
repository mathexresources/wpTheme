<?php
add_action( 'wp_enqueue_scripts', 'mtx_enqueue_styles' );
function mtx_enqueue_styles() {
	wp_enqueue_style('mtx', 'get_stylesheet_uri()');
}

function mytheme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue Bootstrap
function mytheme_enqueue_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

