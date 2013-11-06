<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

    // Theme Options
    require_once ( get_template_directory() . '/theme-options.php' );
    
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
        'sub_menu' => 'Sub Menu'
    ));

?>