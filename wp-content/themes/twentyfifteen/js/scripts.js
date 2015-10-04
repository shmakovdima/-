


// When the DOM is ready, run this function
$(document).ready(function() {
	new WOW().init();
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 5000,
  });


	jQuery(function(){
	    jQuery(".contact_phone").mask("+7 (999) 999-9999");
	});

});

$(document).on("focus",".form-control", function(){
	$(this).removeClass("wpcf7-not-valid");
})