<?php if( have_rows('content_blocks') ): while ( have_rows('content_blocks') ) : the_row();

    if( get_row_layout() == 'content' ):

    	get_template_part('builder/content');

    elseif( get_row_layout() == 'image_callout' ):

    	get_template_part('builder/image-callout');

    elseif( get_row_layout() == 'form_callout' ):

    	get_template_part('builder/form-callout');

    endif;

endwhile; endif; ?>