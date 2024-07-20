<?php
function drb_style() {
    wp_enqueue_style(
        'lesson-one-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'drb_style' );
