// MOBILE NAVIGATION
$('.mobile-nav li.menu-item-has-children').prepend('<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>');
$('span.sub-toggle').click(function (){
  $(this).siblings('.sub-menu').slideToggle();
  $(this).children().toggleClass('fa-angle-down fa-angle-up');
});

// BODY OVERLAY HEIGHT
/*function bodyOverlayHeight() {
	$('.body-overlay').height($('#page-container').outerHeight());
}*/

// HAMBURGER ICON ANIMATION
$('.hamburger').click(function() {
	$('.hamburger, body, #page-container').toggleClass('is-active');
});

$('.body-overlay').click(function() {
	$('.hamburger, body, #page-container').toggleClass('is-active');
});

// CLOSE PANEL UPON LINK CLICK
$('.mobile-nav li > a').click(function() {
	$('.hamburger, body, #page-container').toggleClass('is-active');
});

// HAMBURGER VERTICAL ALIGN
function hamburgerIcon() {
	$('.hamburger').css('height', $('#logo-container').height());
}

$(document).ready(function () {
	hamburgerIcon();
	//bodyOverlayHeight();
});

$(window).resize(function () {
	hamburgerIcon();
	//bodyOverlayHeight();
});