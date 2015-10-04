


// When the DOM is ready, run this function
$(document).ready(function() {
	new WOW().init();
  //Set the carousel options
  $('#quote-carousel').carousel({
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