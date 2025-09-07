<?php
function chocogummybears_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption'));
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'chocogummybears_theme_setup');

function chocogummybears_enqueue_scripts() {
    $version = wp_get_theme()->get('Version');
    
    // Main stylesheet
    wp_enqueue_style('chocogummybears-style', get_stylesheet_uri(), array(), $version, 'all');
    
    // Custom CSS
    wp_enqueue_style('chocogummybears-custom', get_template_directory_uri() . '/assets/css/custom.css', array('chocogummybears-style'), $version, 'all');
    
    // FontAwesome
    wp_enqueue_style('chocogummybears-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css', array(), '7.0.1', 'all');
    
    // Google Fonts
    wp_enqueue_style('chocogummybears-googlefonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap', false);

    // JS
    wp_enqueue_script('chocogummybears-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'chocogummybears_enqueue_scripts');