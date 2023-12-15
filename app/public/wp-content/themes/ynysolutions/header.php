<?php 
/**
 * Header template.
 * 
 * @package ynysolutions
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>    
    <title>YNY Solutions</title>
</head>
<body>
<?php get_template_part('template-parts/header/navbar'); ?>



