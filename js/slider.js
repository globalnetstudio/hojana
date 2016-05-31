$(function() {
	// Configuration
	var animationSpeed = 700;
	var pause = 5000;

	// Cache Carousel DOM
	$slider = $('#carousel');

	// Cantidad de Slides
	var slides = $slider.find('.slider__slide');

	// Buttons
	var previousButton = $slider.find('#previous-btn');
	var nextButton  = $slider.find('#next-btn');

	// Agregar una clase con sufijo indice
	slides.each(function(index) {
		index++;
		$(this).addClass('slide-' + index);
	});

	// Por default pon el primero en segundo lugar
	$slider.find('.slider__slide:last')
			.insertBefore($slider.find('.slider__slide:first'));

	// Evento de botón mover a la izquierda
	previousButton.on('click', function(event) {
		event.preventDefault();

		$slider.find('.slider__slide:eq(1)')
			.animate({ left: '-' + 500 + 'px' },
				function() {
					$(this).removeAttr('style').fadeIn();
				});

		$slider.find('.slider__slide:first')
			.fadeOut(500, function() {
				$(this).insertAfter($slider.find('.slider__slide:last'))
				.fadeIn();	
			});
	});

	// Evento de botón mover a la derecha
	nextButton.on('click', function(event) {
		event.preventDefault();

		$slider.find('.slider__slide:eq(1)')
			.animate({ right: '-' + 500 + 'px' },
				function() {
					$(this).removeAttr('style');
				});

		$slider.find('.slider__slide:last')
			.fadeOut(500, function() {
				$(this).insertBefore($slider.find('.slider__slide:first'))
				.fadeIn();	
			});
	});
});