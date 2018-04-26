$(".read-bio").click(function() {
		$(this).siblings('.panel').addClass("show");
		$('body').addClass('reveal');
});

$(".profile .fa-close").click(function(e){
    $('.panel').removeClass("show");
    e.stopPropagation();
    $('body').removeClass('reveal');
});
$(".page-overlay").click(function() {
		$('body').removeClass('reveal');
		$('.panel').removeClass("show");
});