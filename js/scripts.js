jQuery(function($) {

	// Mobile Menu Dropdown
	var carrot = '<span class="carrot">+</span>'

	$('.mobile-nav .menu-item-has-children').append(carrot);
	$('.mobile-nav .carrot').click(function(event) {
		event.preventDefault();
		$(this).parent().children('ul').toggleClass('active');
	});

	// Mobile Nav Toggle
	$('.menu-toggle').click(function(event) {
		event.preventDefault();
		$('.mobile-nav-container').addClass('active');
	});

	$('.mobile-nav-container .close').click(function(event) {
		event.preventDefault();
		$('.mobile-nav-container').removeClass('active');
	});

	// Blog Category Selector
	$('.blog-cat-switcher').change(function(event) {
		var category = $('.blog-cat-switcher option:selected').val();
		window.location.href = category;
	});

});