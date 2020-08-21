<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

	<?php wp_head(); ?>

	<?php the_field('header_scripts', 'option'); ?>

	<style>
		
		<?php the_field('custom_css', 'option'); ?>

	</style>
	
</head>

<body <?php body_class(); ?>>

<?php the_field('body_scripts', 'option'); ?>

<header class="header">

	<a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" title="<?php the_field('logo_title', 'option'); ?>" alt="<?php the_field('logo_alt_text', 'option'); ?>"></a>
	
	<a class="menu-toggle" href="#">&#9776; Menu</a>

	<?php

		$defaults = array(
			'theme_location'  => 'main_menu',
			'container'       => 'nav',
			'container_class' => 'nav',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );

	?>

</header><!-- end header -->

<?php get_template_part('partials/mobile-nav'); ?>