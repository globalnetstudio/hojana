$(function() {
	// Configuration
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

	function moveLeft() {
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
	}

	function moveRight() {
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
	}

	// Evento de botón mover a la izquierda
	previousButton.on('click', function(event) {
		event.preventDefault();
		moveLeft();
	});

	// Evento de botón mover a la derecha
	nextButton.on('click', function(event) {
		event.preventDefault();
		moveRight();
	});

	var interval;

	function autoplay() {
		interval = setInterval(function() {
			moveRight();
		}, pause);
	}

	function pauseSlider() {
		clearInterval(interval);
	}

	$slider.on('mouseenter', pauseSlider).on('mouseleave', autoplay);

	autoplay();

});