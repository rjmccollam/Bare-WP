<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<h1><?php the_title(); ?></h1>
			
		<?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>

		<?php the_content(); ?>

		<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>