


// When the DOM is ready, run this function , #top-carousel

	new WOW().init();
  //Set the carousel options
  $('#quote-carousel, #Carousel, .carousel').carousel({
    pause: true,
    interval: 5000,
  });


	jQuery(function(){
	    jQuery(".contact_phone").mask("+375 (99) (99) (99) (99)");
	});



$(document).on("focus",".form-control", function(){
	$(this).removeClass("wpcf7-not-valid");
})

$(function(){
  $.scrollIt({
  	easing: 'linear', 
  	scrollTime: 1400,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: 0     
  });
});

if ($(window).scrollTop() > 52) {
	var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	 if (scrollTop> 52)
    {
        $("#footer_second").addClass('navbar-fixed-top');
    } 
    else 
    {
        $("#footer_second").removeClass("navbar-fixed-top");
    }
}

$(window).scroll(function() { 
    if ($(window).scrollTop() > 52)
    {
        $("#footer_second").addClass('navbar-fixed-top');
    } 
    else 
    {
        $("#footer_second").removeClass("navbar-fixed-top");
    }
});