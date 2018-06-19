<section class="image-callout image-<?php the_sub_field('image_side'); ?>">

	<div class="image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
	
	<div class="container clearfix">
		
		<div class="sub-content content">

			<?php if ( get_sub_field('title') ) { ?>
			
				<h2><?php the_sub_field('title'); ?></h2>

			<?php } ?>

			<?php the_sub_field('content'); ?>

			<div class="clear"></div>

			<?php $button = get_sub_field('button'); ?>

			<?php if ( $button ) { ?>

				<a href="<?php echo $button['url']; ?>" class="button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?>></a>

			<?php } ?>

		</div>

	</div><!-- end container -->

</section><!-- end image callout -->