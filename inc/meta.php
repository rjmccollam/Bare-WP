<p class="meta">Posted on: <?php the_time('F jS, Y') ?> by <?php the_author() ?> 

<?php if (is_home()) { ?>
	   
	   <!-- Don't show on the home page -->

<?php } else {

	comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', '');

 } ?>

</p>