<?php


function add_theme_scripts() {
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap-grid', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap-grid.min.css', array(), 20141119 );
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), false, true ); 
    wp_enqueue_script( 'gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), false, true );

    wp_enqueue_script("cri-script", get_template_directory_uri() . "/js/scripts.js", array(), "1.1", "all");
}

add_action("wp_enqueue_scripts", "add_theme_scripts");



    /**
     * Function to add Team Custom Post type to WP Admin Panel.
     */
    function create_team_post_type() {
        register_post_type( 'team',
            array(
                'labels' => array(
                    'name' => __('Team'),
                    'singular_name' => __('Team Member'),
                    'add_new' => __('Add Team member'),
                    'add_new_item' => __('Add Team member'),
                    'view_item' => __('View Team Member'),
                    'edit_item' => __('Edit Team Member'),
                    'search_items' => __('Search Team Members'),
                    'not_found' => __('No Team Members found'),
                    'not_found_in_trash' => __('No Team Member found in Bin')
                ),
                'public' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => 21,
                'rewrite' => array('slug' => 'team'),
                'supports' => array('title', 'thumbnail'),
                'show_ui' => true
            )
        );
    }
    add_action('init', 'create_team_post_type');


    // Set up Navigation menu
    function cri_main_menu() {
        register_nav_menus( array(
            'main-menu' => 'Main Navigation'
        ) );
    }
    add_action('init', 'cri_main_menu');

