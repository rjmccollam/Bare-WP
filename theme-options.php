<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );


/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'wedodev_options', 'wedodev_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'enter_theme_name' ), __( 'Theme Options', 'enter_theme_name' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap" style="width: 960px;">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'enter_theme_name' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'enter_theme_name' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'wedodev_options' ); ?>
			<?php $options = get_option( 'wedodev_theme_options' ); ?>

			<table class="form-table">
				
				<tr>
					<td colspan="2"><h2>Header</h2><p>Insert your content below to populate your header</p></td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'Black Box Title', 'enter_theme_name' ); ?></th>
					<td>
						<input id="wedodev_theme_options[bb-title]" class="regular-text" type="text" name="wedodev_theme_options[bb-title]" value="<?php esc_attr_e( $options['bb-title'] ); ?>" />
						<label class="description" for="wedodev_theme_options[bb-title]"><?php _e( 'Insert your title', 'enter_theme_name' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Black Box Subtitle', 'enter_theme_name' ); ?></th>
					<td>
						<input id="wedodev_theme_options[bb-subtitle]" class="regular-text" type="text" name="wedodev_theme_options[bb-subtitle]" value="<?php esc_attr_e( $options['bb-subtitle'] ); ?>" />
						<label class="description" for="wedodev_theme_options[bb-subtitle]"><?php _e( 'Insert your subtitle', 'enter_theme_name' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Black Box Content', 'enter_theme_name' ); ?></th>
					<td>
						<textarea id="wedodev_theme_options[bb-content]" class="large-text" cols="50" rows="5" name="wedodev_theme_options[bb-content]"><?php echo esc_textarea( $options['bb-content'] ); ?></textarea>
						<label class="description" for="wedodev_theme_options[bb-content]"><?php _e( 'Insert your content', 'enter_theme_name' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'enter_theme_name' ); ?>" />
			</p>
			
		</form>
		
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/