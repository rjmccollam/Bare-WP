<!DOCTYPE html>

<html lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=1200">
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow"> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<!-- Google Web Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--[if lte IE 8]>
		<style>
			body {background: url(images/bg.jpg) repeat;}
		</style>
	<![endif]-->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<header>

	<div id="top-bar">

		<div class="container">

			<?php wp_nav_menu(array(
				'theme_location'  => 'top_menu',
				'container'       => 'nav',
				'menu_class'         => 'left',
			)); ?>

			<?php include (TEMPLATEPATH . '/searchform.php' ); ?>

			<div class="clear"></div>

		</div>

	</div><!-- end top bar -->

	<div class="container">

		<a id="top-banner-ad" href="<?php $options = get_option('wedodev_theme_options'); echo $options['ad-link']; ?>" target="_blank"><img src="<?php $options = get_option('wedodev_theme_options'); echo $options['ad-img']; ?>" alt="Top Ad" /></a>

		<a id="logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>

		<?php wp_nav_menu(array(
			'theme_location'  => 'main_menu',
			'container'       => 'nav',
			'menu_id'         => 'nav',
		)); ?>

	</div><!-- end container -->

</header><!-- end header -->

<div class="container wrapper">