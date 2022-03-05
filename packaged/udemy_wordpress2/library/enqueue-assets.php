<?php

// theme style
function udemy_wordpress2_assets()
{
    wp_enqueue_style('udemy_wordpress2-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_script('udemy_wordpress2-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'udemy_wordpress2_assets');

// admin style
function udemy_wordpress2_admin_assets()
{
    wp_enqueue_style('udemy_wordpress2-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
    wp_enqueue_script('udemy_wordpress2-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_enqueue_scripts', 'udemy_wordpress2_admin_assets');
