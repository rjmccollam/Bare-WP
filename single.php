<?php get_header(); ?>

	<div id="content" class="left">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="main">
					
					<h1><?php the_title(); ?></h1>
						
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<ul class="sharing">
						<li><a class="sharing-fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a></li>
						<li><a class="sharing-twitter" href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" target="_blank">Twitter</a></li>
						<li><a class="sharing-email" href="mailto:enter@youremail.com?subject=<?php the_title(); ?>&body=You should definitely check out this article on PhoenixBites! <?php the_permalink(); ?>">Email</a></li>
						<li><a class="sharing-pinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_post_thumbnail(); ?>&description=<?php the_title(); ?>" target="_blank">Pinterest</a></li>
					</ul>

					<?php the_content(); ?>

					<div class="clear"></div>

					<div class="about-author">
						
						<h4>About the Author - <?php the_author(); ?></h4>

						<?php echo get_avatar( get_the_author_meta( 'user_email' ), 128 ); ?>

						<p><?php the_author_meta( 'description' ); ?></p>

						More Posts by <?php the_author_posts_link(); ?>

						<?php if ( get_the_author_meta( 'user_url' ) ) { ?>
			
							&nbsp;|&nbsp;<a href="<?php the_author_meta( 'user_url' ); ?>">Website</a>
						
						<?php } // End check for authors url ?>

						<?php if ( get_the_author_meta( 'twitter' ) ) { ?>
			
							&nbsp;|&nbsp;<a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>" title="Follow <?php the_author_meta( 'display_name' ); ?> on Twitter">Follow <?php the_author_meta( 'display_name' ); ?> on Twitter</a>
						
						<?php } // End check for twitter ?>

						<div class="clear"></div>

					</div>

				</div>

			<?php endwhile; endif; ?>  

			<h2 class="bar">Related Posts</h2>

			<?php 

				$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
				if( $related ) foreach( $related as $post ) {
				setup_postdata($post); ?>
				
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

			<?php } wp_reset_postdata(); ?>

			<div class="clear"></div>
				     
			<?php comments_template(); ?>

	</div><!-- end content -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>