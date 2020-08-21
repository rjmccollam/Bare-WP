<form>

	<?php

		$categories = get_categories( array(
		    'hide_empty' => true
		));

	?>
	
	<select class="blog-cat-switcher <?php if ( get_field('button_type', 'option') == "pill" ) { echo "rounded"; } ?>">

		<option value="*">Categories</option>

		<?php foreach ($categories as $cat) { ?>

			<option value="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></option>

		<?php } ?>

	</select>

</form>