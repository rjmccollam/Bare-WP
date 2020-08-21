<article class="post">

	<a href="<?php the_permalink(); ?>" class="feat-image-post" style="background-image: url(<?php feat_image(); ?>);"></a>

	<div class="sub-content">
				
		<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<?php the_excerpt(); ?>

		<a href="<?php the_permalink(); ?>" class="button">Read More</a>

	</div>

</article><!-- end post -->