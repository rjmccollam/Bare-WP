<article class="post">

	<a href="<?php the_permalink(); ?>" class="feat-image" style="background-image: url(<?php feat_image(); ?>);"></a>
				
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
	<p class="meta">Posted on: <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink(); ?>" class="button">Read More</a>

</article><!-- end post -->