<?php


function enqueue_scripts(){
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script( 'main-js', get_theme_file_uri( '/js/script.js' ), array(), '1', true );
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');









?>