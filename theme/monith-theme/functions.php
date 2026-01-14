<?php
function monith_theme_styles() {
    wp_enqueue_style(
        'monith-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'monith_theme_styles');