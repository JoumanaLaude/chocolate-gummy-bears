<?php
function chocogummybears_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'chocogummybears_theme_setup');

function chocogummybears_enqueue_scripts() {
    wp_enqueue_style('chocogummybears-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'chocogummybears_enqueue_scripts');
