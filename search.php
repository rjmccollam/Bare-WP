<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('partials/post'); ?>

		<?php endwhile; ?>

		<?php get_template_part('partials/nav'); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>