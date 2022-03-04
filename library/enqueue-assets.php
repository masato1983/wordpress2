<?php

// theme style
function udemyWordpress2_assets()
{
    wp_enqueue_style('udemy_worpress2-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'udemyWordpress2_assets');

// admin style
function udemyWordpress2_admin_assets()
{
    wp_enqueue_style('udemy_worpress2-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
}

add_action('admin_enqueue_scripts', 'udemyWordpress2_admin_assets');
