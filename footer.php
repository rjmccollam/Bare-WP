	<div class="clear"></div>

</div><!-- end container -->

<div id="footer">

	<div class="container">

		<div class="box left">

			<h3>About Us</h3>

			<hr />

			<img class="img-left" src="<?php $options = get_option('wedodev_theme_options'); echo $options['about-img']; ?>" alt="About PhoenixBites" />

			<p><?php $options = get_option('wedodev_theme_options'); echo $options['about-content']; ?></p>

			<a href="<?php $options = get_option('wedodev_theme_options'); echo $options['about-link']; ?>">Find Out More</a>

		</div>

		<div class="box left" id="twitter">

			<h3>Twitter Feed</h3>

			<hr />

			<div id="example1"></div>

			<a href="https://twitter.com/PhoenixBites">Hey You...Follow Us!</a>

		</div>

		<div class="box left">

			<h3>Our Affiliates</h3>

			<hr />

			<?php wp_nav_menu(array(
				'theme_location'  => 'affiliate_menu_left',
				'container'       => '',
				'menu_class'         => 'left',
			)); ?>

			<?php wp_nav_menu(array(
				'theme_location'  => 'affiliate_menu_right',
				'container'       => '',
				'menu_class'         => 'left',
			)); ?>

			<div class="clear"></div>

		</div>

		<div class="clear"></div>

	</div><!-- end container -->

</div><!-- end footer -->

<div id="copy">

	<div class="container">

		<p class="left">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | Site Designed by <a href="http://www.wedodev.com" title="Custom WordPress Themes in Scottsdale, AZ">WeDoDev</a></p>

		<p class="right">All rights reserved. <a href="<?php $options = get_option('wedodev_theme_options'); echo $options['privacy-link']; ?>">Privacy Policy</a> | <a href="<?php $options = get_option('wedodev_theme_options'); echo $options['disclosure-link']; ?>">Disclosure Policy</a> | <a href="<?php $options = get_option('wedodev_theme_options'); echo $options['sitemap-link']; ?>">Sitemap</a></p>

		<div class="clear"></div>

	</div><!-- end container -->

</div><!-- end copy -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tweets.js"></script>

<?php wp_footer(); ?>
		
</body>
</html>