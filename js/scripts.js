$(function() {
	// ------------ Scroll Up ------------
	var button = $('.scroll-top');

	button.on('click', function(event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: 0,
		}, 500);
	});

	$(window).on('scroll', function() {
		var self   = $(this), 					// current window
				height = self.height(),			// height browser
	  		top    = self.scrollTop();	// current position
	  
	  if (top > height) {
  		if (!button.is(':visible')) {
  			button.fadeIn();
  		}
	  } else {
			button.fadeOut();
		}
	});
});