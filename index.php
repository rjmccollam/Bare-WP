<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post">
				
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			
			<?php include (TEMPLATEPATH . '/partials/meta.php' ); ?>

			<?php the_excerpt(); ?>

		</article><!-- end post -->

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/partials/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>