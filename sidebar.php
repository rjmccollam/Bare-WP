<div id="sidebar" class="right">

	<ul class="social">
		<li><a class="fb" href="<?php $options = get_option('wedodev_theme_options'); echo $options['fb']; ?>" title="Like Us on Facebook!">Facebook</a></li>
		<li><a class="twitter" href="<?php $options = get_option('wedodev_theme_options'); echo $options['twitter']; ?>" title="Follow Us on Twitter!">Twitter</a></li>
		<li><a class="email" href="mailto:enter@youremail.com?subject=Check Out PhoenixBites!&body=You should definitely check out PhoenixBites! It's a great site about the food in Phoenix - http://www.phoenixbites.com" title="Email Us!">Email</a></li>
		<li><a class="pinterest" href="<?php $options = get_option('wedodev_theme_options'); echo $options['pinterest']; ?>" title="Follow Us on Pinterest!">Pinterest</a></li>
		<li><a class="rss" href="<?php $options = get_option('wedodev_theme_options'); echo $options['rss']; ?>" title="Subscribe to Our Feed!">RSS</a></li>
	</ul>

	<div class="social-shadow"></div>

    <?php dynamic_sidebar('Sidebar Widgets'); ?>

</div><!-- end sidebar -->