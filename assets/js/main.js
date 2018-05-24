$('a.scroll-trigger:not([href="#"])').click(function() {
	$('html, body').animate({
		scrollTop: $(this.hash).offset().top
	}, 750);
	return false;
});

$(".menu-toggle").click(function() {
	$(".collapse").toggle();
});