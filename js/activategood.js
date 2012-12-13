
$(document).ready(function(){


// ***************************************************************************************
// *** EVENTS
// ***************************************************************************************

	// When the window is resized, re-center everything
	$(window).scroll(function(){
		
		if($(window).scrollTop() > 70) {
			$('#main-nav').addClass('navbar-fixed-top');
		} else {
			$('#main-nav').removeClass('navbar-fixed-top');
		}
		
	});
	


});