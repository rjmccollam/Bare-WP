<?php get_header(); ?>

	<div id="content" class="left">

	<?php if (have_posts()) : ?>

		<div class="main">

			<h1>Search Results</h1>

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
