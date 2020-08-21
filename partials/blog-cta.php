<div class="clear"></div>

<div class="blog-cta">

	<?php if ( get_field('cta_image') ) {

		$image = get_field('cta_image');

	} else {

		$image = get_field('cta_image', 'option');

	} ?>
	
	<div class="image" style="background-image: url(<?php echo $image; ?>);"></div>

	<div class="sub-content">
		
		<?php if ( get_field('cta_title') ) { ?>

			<h2><?php the_field('cta_title'); ?></h2>

		<?php } else { ?>

			<h2><?php the_field('cta_title', 'option'); ?></h2>

		<?php } ?>

		<?php if ( get_field('cta_text') ) { ?>

			<p><?php the_field('cta_text'); ?></p>

		<?php } else { ?>

			<p><?php the_field('cta_text', 'option'); ?></p>

		<?php } ?>

		<?php

			$button_global = get_field('cta_button', 'option');
			$button = get_field('cta_button');

		?>

		<?php if ( $button ) { ?>

			<a href="<?php echo $button['url']; ?>" class="button yellow" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>

		<?php } elseif ( $button_global ) { ?>

			<a href="<?php echo $button_global['url']; ?>" class="button yellow" target="<?php echo $button_global['target']; ?>"><?php echo $button_global['title']; ?></a>

		<?php } ?>


	</div>

</div><!-- end blog call to action -->