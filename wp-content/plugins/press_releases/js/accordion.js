$('.accordion-container').find('.question').click(function(){
	$(this).next().slideToggle();
	$(this).toggleClass('switch');
	$(".answer").not($(this).next()).slideUp();
	$(this).find('.fa').toggleClass('rotate');
	$('.question').not(this).each(function() {
		$(this).find('.fa').removeClass('rotate');
		$(this).removeClass('switch');
	});
});