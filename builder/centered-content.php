<section class="centered-content content container clearfix">

	<h2><?php the_sub_field('title'); ?></h2>

	<?php the_sub_field('content'); ?>

	<div class="clear"></div>

	<?php $button = get_sub_field('button'); ?>

	<?php if ( $button ) { ?>

		<a href="<?php echo $button['url']; ?>" class="button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>

	<?php } ?>

</section><!-- end content -->