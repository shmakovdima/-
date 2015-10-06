


// When the DOM is ready, run this function , #top-carousel
$(window).load(function() {
	new WOW().init();
  //Set the carousel options
  $('#quote-carousel, #Carousel, .carousel').carousel({
    pause: true,
    interval: 5000,
  });


	jQuery(function(){
	    jQuery(".contact_phone").mask("+375 (99) (99) (99) (99)");
	});


});

$(document).on("focus",".form-control", function(){
	$(this).removeClass("wpcf7-not-valid");
})