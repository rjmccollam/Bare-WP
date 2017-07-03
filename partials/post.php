<?php if ( has_post_thumbnail() ) {
	
	// Get the post thumbnail URL
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

} else {
	
	// Get the default featured image in theme options
	$feat_image = get_field('default_featured_image', 'option');

} ?>

<article class="post">
				
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
	<p class="meta">Posted on: <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>

	<?php the_excerpt(); ?>

</article><!-- end post -->