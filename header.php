<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width">

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