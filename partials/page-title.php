<section class="page-title container">
		
	<?php

		$optional_h1 = get_field('optional_h1');

		if ( get_field('title') ) {

			$title = get_field('title');

		} else {

			$title = get_the_title();

		}

	?>

	<?php if ( $optional_h1 ) { ?>

		<h2 class="h1"><?php echo $title; ?></h2>

		<h1 class="optional-h1"><?php echo $optional_h1; ?></h1>
	
	<?php } else { ?>

		<h1><?php echo $title; ?></h1>

	<?php } ?>

</section><!-- end page title -->