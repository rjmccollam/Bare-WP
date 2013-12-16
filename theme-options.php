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
	add_theme_page( __( 'Theme Options', 'phoenixbites' ), __( 'Theme Options', 'phoenixbites' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
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
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'phoenixbites' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'phoenixbites' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'wedodev_options' ); ?>
			<?php $options = get_option( 'wedodev_theme_options' ); ?>

			<table class="form-table">
				
				<tr>
					<td colspan="2"><h2>Header</h2><p>Insert your content below to populate your header</p></td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'Ad Image', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[ad-img]" class="regular-text" type="text" name="wedodev_theme_options[ad-img]" value="<?php esc_attr_e( $options['ad-img'] ); ?>" />
						<label class="description" for="wedodev_theme_options[ad-img]"><?php _e( 'Insert the image URL (image should be 728px X 90px)', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Ad Link', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[ad-link]" class="regular-text" type="text" name="wedodev_theme_options[ad-link]" value="<?php esc_attr_e( $options['ad-link'] ); ?>" />
						<label class="description" for="wedodev_theme_options[ad-link]"><?php _e( 'Insert your URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'phoenixbites' ); ?>" />
			</p>

			<table class="form-table">
				
				<tr>
					<td colspan="2"><h2>Sidebar</h2><p>Insert your content below to populate your sidebar</p></td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'Facebook', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[fb]" class="regular-text" type="text" name="wedodev_theme_options[fb]" value="<?php esc_attr_e( $options['fb'] ); ?>" />
						<label class="description" for="wedodev_theme_options[fb]"><?php _e( 'Insert your profile URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Twitter', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[twitter]" class="regular-text" type="text" name="wedodev_theme_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" />
						<label class="description" for="wedodev_theme_options[twitter]"><?php _e( 'Insert your profile URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Pinterest', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[pinterest]" class="regular-text" type="text" name="wedodev_theme_options[pinterest]" value="<?php esc_attr_e( $options['pinterest'] ); ?>" />
						<label class="description" for="wedodev_theme_options[pinterest]"><?php _e( 'Insert your profile URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'RSS', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[rss]" class="regular-text" type="text" name="wedodev_theme_options[rss]" value="<?php esc_attr_e( $options['rss'] ); ?>" />
						<label class="description" for="wedodev_theme_options[rss]"><?php _e( 'Insert your RSS URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'phoenixbites' ); ?>" />
			</p>

			<table class="form-table">
				
				<tr>
					<td colspan="2"><h2>Footer</h2><p>Insert your content below to populate your footer</p></td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Privacy Policy Link', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[privacy-link]" class="regular-text" type="text" name="wedodev_theme_options[privacy-link]" value="<?php esc_attr_e( $options['privacy-link'] ); ?>" />
						<label class="description" for="wedodev_theme_options[privacy-link]"><?php _e( 'Insert the URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Disclosure Policy Link Link', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[disclosure-link]" class="regular-text" type="text" name="wedodev_theme_options[disclosure-link]" value="<?php esc_attr_e( $options['disclosure-link'] ); ?>" />
						<label class="description" for="wedodev_theme_options[disclosure-link]"><?php _e( 'Insert the URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Sitemap Link', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[sitemap-link]" class="regular-text" type="text" name="wedodev_theme_options[sitemap-link]" value="<?php esc_attr_e( $options['sitemap-link'] ); ?>" />
						<label class="description" for="wedodev_theme_options[sitemap-link]"><?php _e( 'Insert the URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>
				
				<tr valign="top"><th scope="row"><?php _e( 'About Image', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[about-img]" class="regular-text" type="text" name="wedodev_theme_options[about-img]" value="<?php esc_attr_e( $options['about-img'] ); ?>" />
						<label class="description" for="wedodev_theme_options[about-img]"><?php _e( 'Insert the image URL (image should be 140px X 115px)', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Find Out More Link', 'phoenixbites' ); ?></th>
					<td>
						<input id="wedodev_theme_options[about-link]" class="regular-text" type="text" name="wedodev_theme_options[about-link]" value="<?php esc_attr_e( $options['about-link'] ); ?>" />
						<label class="description" for="wedodev_theme_options[about-link]"><?php _e( 'Insert the URL', 'phoenixbites' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'About Content', 'phoenixbites' ); ?></th>
					<td>
						<textarea id="wedodev_theme_options[about-content]" class="large-text" cols="50" rows="5" name="wedodev_theme_options[about-content]"><?php echo esc_textarea( $options['about-content'] ); ?></textarea>
						<label class="description" for="wedodev_theme_options[about-content]"><?php _e( 'Insert your content', 'phoenixbites' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'phoenixbites' ); ?>" />
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