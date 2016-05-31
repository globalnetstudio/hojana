$(document).ready(function() {

	// Slider
	$("#carousel").featureCarousel({
		smallFeatureWidth: .8,
		smallFeatureHeight: .8,
		smallFeatureOffset: 35,
		topPadding: 0,
		sidePadding: 0,
		captionBelow: false
  });

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