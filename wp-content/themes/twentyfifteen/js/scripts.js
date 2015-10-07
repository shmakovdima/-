


// When the DOM is ready, run this function , #top-carousel

	new WOW().init();
  //Set the carousel options
  $('#quote-carousel, #Carousel, .carousel').carousel({
    pause: true,
    interval: 5000,
  });


	jQuery(function(){
	    jQuery(".contact_phone").mask("375 (99) (99) (99) (99)");
	});



$(document).on("focus",".form-control", function(){
	$(this).removeClass("wpcf7-not-valid");
})

$(function(){
  $.scrollIt({
  	easing: 'linear', 
  	scrollTime: 1400,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: check_size(),    // function(pageIndex) that is called when page is changed
	topOffset: 0     
  });
});



 check_size();

function check_size(){
   var scrollTop = window.pageYOffset || document.documentElement.scrollTop; 
    if ( scrollTop > 52)
    {
        if ($("#footer_second").hasClass("navbar-fixed-top")) return;
        $("#footer_second").addClass('navbar-fixed-top');
    } 
    else 
    {
        if (!$("#footer_second").hasClass("navbar-fixed-top")) return;
        $("#footer_second").removeClass("navbar-fixed-top");
        console.log("срf");
    }
}


$(window).scroll(function() {
   check_size();
});

jQuery(document).ready(function ($) {
    'use strict';
    // CENTERED MODALS
    // phase one - store every dialog's height
    $('.modal').each(function () {
        var t = $(this),
            d = t.find('.modal-dialog'),
            fadeClass = (t.is('.fade') ? 'fade' : '');
        // render dialog
        t.removeClass('fade')
            .addClass('invisible')
            .css('display', 'block');
        // read and store dialog height
        d.data('height', d.height());
        // hide dialog again
        t.css('display', '')
            .removeClass('invisible')
            .addClass(fadeClass);
    });
    // phase two - set margin-top on every dialog show
    $('.modal').on('show.bs.modal', function () {
        var t = $(this),
            d = t.find('.modal-dialog'),
            dh = d.data('height'),
            w = $(window).width(),
            h = $(window).height();
        // if it is desktop & dialog is lower than viewport
        // (set your own values)
        if (w > 380 && (dh + 60) < h) {
            d.css('margin-top', Math.round(0.96 * (h - dh) / 2));
        } else {
            d.css('margin-top', '');
        }
    });

});