<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
	<input type="text" id="s" name="s" value="Search..." onfocus="if(this.value == 'Search...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search...'; }" />    
    <input type="submit" value="Search" id="searchsubmit" />
</form>