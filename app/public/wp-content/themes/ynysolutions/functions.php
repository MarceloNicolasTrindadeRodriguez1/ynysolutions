<?php 
/**
 * Theme Functions
 * 
 * @package ynysolutions
 */

if(! defined('YNYSOLUTIONS_DIR_PATH')){
    DEFINE ('YNYSOLUTIONS_DIR_PATH', untrailingslashit(get_template_directory()));
}

echo '<pre>';
print_r('YNYSOLUTIONS_DIR_PATH');
WP_DIE();

 require_once 'YNYSOLUTIONS_DIR_PATH' . '/inc/helpers/autoloader.php';

function ynysolutions_enqueue_scripts(){
    //Register Styles
    wp_register_style('style-css', get_stylesheet_uri(), [], 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], 'all');

    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], false, true );
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [], false, true );

    //Enqueue Styles 
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');

}

add_action('wp_enqueue_scripts', 'ynysolutions_enqueue_scripts');
?>