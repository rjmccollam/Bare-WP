<?php get_header(); ?>

	<div id="content" class="left">

		<h2 class="bar">Featured Articles</h2>

		<?php $my_query = new WP_Query('category_name=featured&posts_per_page=4');
		  while ($my_query->have_posts()) : $my_query->the_post();
		  $do_not_duplicate = $post->ID; ?>

			<div class="post half left">

				<?php 
				    if ( has_post_thumbnail() ) { 
				        the_post_thumbnail( 'home-page-half', array(
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

		<div class="clear"></div>

		<h2 class="bar">Interviews</h2>

		<?php $my_query = new WP_Query('category_name=interviews&posts_per_page=2');
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

		  <h2 class="bar">Restaurants</h2>

			<?php $my_query = new WP_Query('category_name=restaurants&posts_per_page=4');
			  while ($my_query->have_posts()) : $my_query->the_post();
			  $do_not_duplicate = $post->ID; ?>

				<div class="post half left">

					<?php 
					    if ( has_post_thumbnail() ) { 
					        the_post_thumbnail( 'home-page-half', array(
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

			<div class="clear"></div>

			<h2 class="bar">Kitchen</h2>

			<?php $my_query = new WP_Query('category_name=kitchen-2&posts_per_page=2');
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

	</div><!-- end content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>