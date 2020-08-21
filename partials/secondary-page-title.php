<section class="page-title container">

	<?php if ( is_archive() || is_home() ) { ?>

		<h2 class="h1"><?php the_field('blog_title', 'option'); ?></h2>

		<h1 class="optional-h1"><?php the_field('blog_optional_h1', 'option'); ?></h1>

	<?php } elseif ( is_search() ) { ?>

		<h1>Search Results</h1>

	<?php } elseif ( is_404() ) { ?>

		<h2 class="h1">404</h2>

		<h1 class="optional-h1">Whoops</h1>
	
	<?php } elseif ( is_single() ) { ?>

		<h2 class="h1"><?php the_field('blog_title', 'option'); ?></h2>

		<h2 class="optional-h1"><?php the_field('blog_optional_h1', 'option'); ?></h2>

	<?php } ?>

</section><!-- end page title -->