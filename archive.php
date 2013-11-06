<?php get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1>Archive for <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1>Archive for <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1>Archive for <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1>Author Archive</h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1>Blog Archives</h1>
			
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post">
				
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<?php the_excerpt(); ?>

				</div><!-- end post -->

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
		<?php else : ?>

			<h2>Nothing found</h2>

		<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>