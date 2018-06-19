<?php

    // Theme Scripts & Styles
    function theme_scripts() {
        wp_enqueue_style( 'main', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css') );
        wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,400,300,700' );
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), filemtime( get_template_directory() . '/js/scripts.min.js'), true );
    }
    add_action( 'wp_enqueue_scripts', 'theme_scripts' );

    // Theme Options
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    // Add title tag to <head> section
    add_theme_support( 'title-tag' );

    if ( ! function_exists( '_wp_render_title_tag' ) ) :
        function theme_slug_render_title() {
            return '<title>' . wp_title( '|', true, 'right' ) . '</title>';
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
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }

    // Add Read More link to excerpt
    function new_excerpt_more($more) {
        global $post;
        return '…';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // Add Featured Image support
    add_theme_support( 'post-thumbnails' );

    // Set Featured Image
    function feat_image() {
        if ( has_post_thumbnail() ) {
            // Get the post thumbnail URL
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        } else {
            // Get the default featured image in theme options
            $feat_image = get_field('default_featured_image', 'option');
        }
        echo $feat_image;
    }

    // Custom Menus
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    ));

    function login_logo() { ?>
        <style type="text/css">
            body {background: #fff9eb !important;}
            body.wp-core-ui .button-primary {background: #be2126; border-color: #be2126 !important; text-shadow: none;}
            body.wp-core-ui .button-primary:hover {background: #3d2217;}
            body.login div#login h1 a {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg);
                background-size: 215px;
                width: 100%;
                height: 100px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'login_logo' );

?>