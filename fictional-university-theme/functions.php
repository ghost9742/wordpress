<?php

function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,700');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('unversity_main_styles', get_theme_file_uri('build/style-index.css'));
    wp_enqueue_style('unversity_extra_styles', get_theme_file_uri('build/index.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
