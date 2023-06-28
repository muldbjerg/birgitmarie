<?php

// Remove scripts and styles from parent theme
add_action( 'wp_enqueue_scripts', 'child_deregister_styles_scripts', 11 );
function child_deregister_styles_scripts() {
	wp_dequeue_style( 'font-awesome' );
	wp_dequeue_style( 'cashier-style' );
	wp_dequeue_style( 'cashier-woocommerce' );
	wp_dequeue_style( 'wc-blocks-style' );
	wp_dequeue_script( 'cashier-navigation' );
}

// include custom jQuery
function remove_jquery() {
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery');