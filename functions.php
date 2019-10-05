<?php
function communitymanila_resources() {
    wp_enqueue_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato&display=swap' );
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js' );
    
}
add_action('wp_enqueue_scripts', 'communitymanila_resources');

function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="' . get_template_directory_uri() . '/assets/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');