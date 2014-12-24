<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">
		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<header class="header">
	
	<a class="menu-link" href="#nav">&#9776; Menu</a>

	<?php

		$defaults = array(
			'theme_location'  => 'main_menu',
			'menu'            => 'Main Menu',
			'container'       => 'nav',
			'container_class' => 'nav',
			'container_id'    => 'nav',
			'menu_class'      => ''
		);

		wp_nav_menu( $defaults );

	?>

</header><!-- end header -->