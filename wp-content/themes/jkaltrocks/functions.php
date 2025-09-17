<?php

// Theme version

$version = wp_get_theme()->get( 'Version' );

// Disable admin bar when viewing the site

add_filter('show_admin_bar', '__return_false');

// Disable editor on main page and custom post types to simplify UI

function jk_remove_default_fields() {
    remove_post_type_support( 'page', 'editor' );
    remove_post_type_support( 'service', 'editor' );
    remove_post_type_support( 'album', 'editor' );
}

add_action('init', 'jk_remove_default_fields');

// Enqueue stylesheets

function jk_enqueue_styles() {
    wp_enqueue_style(
        'jk-custom-styles',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version'),
        'all'
    );
}

function jk_enqueue_scripts() {
    
    // GSAP animations
    wp_enqueue_script(
        'jk-gsap-animation',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js',
        array(),
        '3.13.0',
        true
    ); 

    // GSAP scroll trigger
    wp_enqueue_script(
        'jk-gsap-animation-scroll-trigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js',
        array(),
        '3.13.0',
        true
    );

    // GSAP smooth scroll
    wp_enqueue_script(
        'jk-gsap-animation-smooth-scroll',
        'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js',
        array(),
        '3.13.0',
        true
    );

    // Install GSAP

    wp_enqueue_script(
        'jk-gsap-installation',
        get_template_directory_uri() . '/assets/js/install-gsap.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );


    // Mobile nav
    wp_enqueue_script(
        'jk-mobile-nav-js',
        get_template_directory_uri() . '/assets/js/mobile-nav.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Intro animation
        wp_enqueue_script(
        'jk-intro-animation-js',
        get_template_directory_uri() . '/assets/js/intro-animation.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'jk_enqueue_styles');
add_action('wp_enqueue_scripts', 'jk_enqueue_scripts');