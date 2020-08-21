<div class="mobile-nav-container">
	
	<a href="#" class="close">&times; Close</a>

	<?php

		$defaults = array(
			'theme_location'  => 'main_menu',
			'container'       => 'nav',
			'container_class' => 'mobile-nav',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );

	?>

	<div class="header-actions">
		
		<?php if ( get_field('primary_phone_number', 'option') ) { ?>

			<a href="tel:<?php the_field('primary_phone_number', 'option'); ?>" class="phone"><span><?php the_field('phone_number_text', 'option'); ?></span><?php the_field('primary_phone_number', 'option'); ?></a>

		<?php } ?>

		<?php $button = get_field('header_button', 'option'); ?>

		<?php if ( $button ) { ?>

			<a href="<?php echo $button['url']; ?>" class="button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>

		<?php } ?>

	</div>

</div>