jQuery(document).ready(function( $ ) {
	
	// console.log($);

	$(window).scroll(function() {
	    var scroll = $(window).scrollTop();

	    if (scroll >= 400) {
	        $("#top-bar-menu").addClass("is-stuck");
	        $(".headerHero").addClass("stickyPad");
	        $(".titleBar").addClass("stickyPad");
	    }
	    if (scroll === 0) {
	        $("#top-bar-menu").removeClass("is-stuck");
	        $(".headerHero").removeClass("stickyPad");
	        $(".titleBar").removeClass("stickyPad");
	    }
	});


});