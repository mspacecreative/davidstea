$(function () {

 function videoHeight() {
 	$('#top').height($(window).height());
 }
 
 $(document).ready(function () {
 	videoHeight();
 });
 
 $(window).resize(function () {
 	videoHeight();
 });
 
 $(window).scroll(function() {    
     var scroll = $(window).scrollTop();
 
     if (scroll >= 100) {
         $("#main-header, body").addClass("scroll");
     } else {
         $("#main-header, body").removeClass("scroll");
     }
 });

});