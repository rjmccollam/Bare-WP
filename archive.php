<?php get_header(); ?>

	<div id="content" class="left">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<div class="main">

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php single_cat_title(); ?></h1>

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

			</div>

			<?php while (have_posts()) : the_post(); ?>
			
				<div class="post full">

					<?php 
					    if ( has_post_thumbnail() ) { 
					        the_post_thumbnail( 'home-page-full', array(
								'class'	=> "attachment img-left")); 
					    } 
					?>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<?php echo excerpt(55); ?>

					<a class="read-more right" href="<?php the_permalink(); ?>">Read More</a> <div class="read-more-bg"></div>

					<div class="clear"></div>

				</div>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
		<?php else : ?>

			<div class="main">

				<h1>No Articles Found</h1>

			</div>

		<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>