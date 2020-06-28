<?php
//main css
ini_set('display_errors', 'all');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
wp_enqueue_style('normalize.css', get_template_directory_uri() . '/css/normalize.css');
wp_enqueue_style('main.css', get_template_directory_uri() . '/css/main.css', false, '1.1', 'all');
wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, '1.1', 'all');
wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-3.8.0.min.js');
wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js', [], 1, true);
wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', 'main', 1, true);
wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', 'gsap', 1, true);
wp_enqueue_script('lazy', get_template_directory_uri() . '/js/lazy.js', [], 1, true);

//let wp manage page title
add_theme_support('title-tag');
