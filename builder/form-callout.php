<section class="form-callout">
	
	<div class="content container">
		
		<div class="sub-content clearfix">
			
			<?php if ( get_sub_field('image') ) { ?>

				<div class="image" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>

			<?php } ?>

			<?php the_sub_field('content'); ?>

		</div>

		<div class="form-container">
			
			<?php

			    $form_object = get_sub_field('form');
			    echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]');

			?>

		</div>

	</div><!-- end content -->

</section><!-- end form callout -->