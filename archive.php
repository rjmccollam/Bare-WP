<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<h1>

			<?php if (is_category()) { ?><?php single_cat_title(); ?>

			<?php } elseif( is_tag() ) { ?>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;

			<?php } elseif (is_day()) { ?>Archive for <?php the_time('F jS, Y'); ?>

			<?php } elseif (is_month()) { ?>Archive for <?php the_time('F, Y'); ?>

			<?php } elseif (is_year()) { ?>Archive for <?php the_time('Y'); ?>

			<?php } elseif (is_author()) { ?>Author Archive

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>Blog Archives<?php } ?>

		</h1>

	<?php while (have_posts()) : the_post(); ?>
		
		<?php get_template_part('partials/post'); ?>

	<?php endwhile; ?>

		<?php get_template_part('partials/nav'); ?>
		
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>