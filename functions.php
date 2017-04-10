<?php

// styles
function style_script_load() {
    wp_enqueue_script( 'main', get_template_directory_uri() .'/js/main.js' );
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'style_script_load');

// miniatures
add_theme_support( 'post_thumbnail' );

// header menu
register_nav_menu( 'menu', 'header menu' );

?>