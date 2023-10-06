<?php
add_action('init', 'addTranslation');
function addTranslation()
{
    load_textdomain('davidtheme', get_stylesheet_directory() . '/language/davidtheme-it_IT.mo', get_locale());
}

add_action('wp_enqueue_scripts', 'addscriptsStyle');
function addscriptsStyle(){
    wp_register_script('bootstraps_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstraps_js');
    wp_register_style('bootstraps_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstraps_css');
    wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css');
}