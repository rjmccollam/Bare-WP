<?php get_header(); ?>

<?php get_template_part('partials/secondary-page-title'); ?>

<section class="content container clearfix">

	<h2>We're sorry, we couldn't find the page that you were looking for.</h2>

	<p>You can try searching for something else below, or you could return to our <a href="<?php bloginfo('url'); ?>">home page</a></p>

	<?php get_search_form(); ?>

</section><!-- end content -->

<?php get_footer(); ?>