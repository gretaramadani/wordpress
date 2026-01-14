<?php
function load_scripts() {
    wp_enqueue_style('style', get_template_directory_uri()."/style.css", false, '1.1', 'all');
    wp_enqueue_script('main', get_template_directory_uri()."/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');
?>