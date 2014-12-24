<?php

    // Theme Scripts & Styles
    function theme_scripts() {
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700' );
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', ("http".($_SERVER['SERVER_PORT'] == 443 ? "s" : "")."://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), true, '1.11.1');
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

    // Theme Options
    if ( !function_exists( 'of_get_option' ) ) {
        function of_get_option($name, $default = false) {

            $optionsframework_settings = get_option('optionsframework');

            // Gets the unique option id
            $option_name = $optionsframework_settings['id'];

            if ( get_option($option_name) ) {
                $options = get_option($option_name);
            }

            if ( isset($options[$name]) ) {
                return $options[$name];
            } else {
                return $default;
            }
        }
    }

    // Add title tag to <head> section
    add_theme_support( 'title-tag' );

    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function theme_slug_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
        }
        add_action( 'wp_head', 'theme_slug_render_title' );
    endif;
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    // Sidebar Widgets
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    // Add Read More link to excerpt
    function new_excerpt_more($more) {
        global $post;
        return '… <a class="read-more" href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');


    // Add Featured Image support
    add_theme_support( 'post-thumbnails' );

    // Custom Menus
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ));

?>