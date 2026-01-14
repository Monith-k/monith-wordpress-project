<?php
/*
Plugin Name: Monith Footer Message
Description: Adds a custom message to the footer of the site.
Version: 1.0
Author: Monith
*/

function monith_footer_message() {
    echo "<p style='text-align:center;color:#333;'>Powered by Monith 🚀</p>";
}

add_action('wp_footer', 'monith_footer_message');