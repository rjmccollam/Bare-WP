<?php get_header(); ?>

<?php get_template_part('partials/secondary-page-title'); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('partials/post'); ?>

	<?php endwhile; ?>

		<?php get_template_part('partials/nav'); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

</section><!-- end content -->

<?php get_footer(); ?>