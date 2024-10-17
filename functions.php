<?php

function testtheme_register_styles() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/style-tailwindoutput.css', array(), null);

    wp_enqueue_style('testtheme-styles', get_template_directory_uri() . '/assets/css/styles.css', array('tailwind-css'), null);
}
add_action('wp_enqueue_scripts', 'testtheme_register_styles');

function testtheme_register_scripts() {
    wp_enqueue_script('testtheme-js', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'testtheme_register_scripts');

?>


