jQuery(function($) {

	// Mobile Menu Dropdown
	var carrot = '<span class="carrot">+</span>'

	$('.nav .menu-item-has-children').append(carrot);
	$('.nav .carrot').click(function(event) {
		event.preventDefault();
		$(this).parent().children('ul').toggleClass('active');
	});

	var $menu = $('#nav'),
		  $menulink = $('.menu-link'),
		  $menuTrigger = $('.menu-item-has-children > a');

	$menulink.click(function(e) {
		e.preventDefault();
		$menulink.toggleClass('active');
		$menu.toggleClass('active');
	});

});