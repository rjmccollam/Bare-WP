<?php get_header(); ?>

	<div id="content" class="left">

		<div class="main">

			<h2 class="bar">Error 404</h2>

			<h2>Sorry! We couldn't find the page you were looking for.</h2>

			<p>So what do we do now? Well you can go back to the <a href="<?php bloginfo('url'); ?>">home page</a>, or you can go to one of our more recent articles below.</p>

			<h1>Recent Posts</h1>

		</div>

		<?php $my_query = new WP_Query('posts_per_page=10');
			  while ($my_query->have_posts()) : $my_query->the_post();
			  $do_not_duplicate = $post->ID; ?>

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

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>