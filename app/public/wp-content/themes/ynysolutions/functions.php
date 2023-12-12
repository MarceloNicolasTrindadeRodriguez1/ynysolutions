<?php 
/**
 * Theme Functions
 * 
 * @package ynysolutions
 */

function ynysolutions_enqueue_scripts(){
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], false, true );

}

add_action('wp_enqueue_scripts', 'ynysolutions_enqueue_scripts');
?>