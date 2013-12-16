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

    // Excerpt Customizations
    function new_excerpt_more( $more ) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }
     
    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

    // Add Featured Image support
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'home-page-half', 115, 90, true );
    add_image_size( 'home-page-full', 155, 110, true );

    // Custom Menus
    register_nav_menus( array(
        'main_menu' => 'Main Menu',
        'top_menu' => 'Top Menu',
        'affiliate_menu_left' => 'Left Affiliate Menu',
        'affiliate_menu_right' => 'Right Affiliate Menu'
    ));

    // Extra Author Information Fields
    add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
    add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

    function my_show_extra_profile_fields( $user ) { ?>

      <h3>Extra profile information</h3>

      <table class="form-table">

        <tr>
          <th><label for="twitter">Twitter</label></th>

          <td>
            <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description">Please enter your Twitter username.</span>
          </td>
        </tr>

      </table>

    <?php }

    // Save and post the extra author information
    add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
    add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

    function my_save_extra_profile_fields( $user_id ) {

      if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

      /* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
      update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
    }

?>