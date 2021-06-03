if ($('#price').length > 0) {
	var nonLinearStepSlider = document.getElementById('price');
	noUiSlider.create(nonLinearStepSlider, {
		start: [0, 654],
		connect: true,
		behaviour: 'drag',
		tooltips: [true, true],
		range: {
			'min': [0],
			'max': [999]
		}, 
		format: wNumb({
			decimals: 0,
			thousand: ' ',
			suffix: '',
			to: function (value) {
				return Math.round(value) + '';
			},
			from: function (value) {
				return Math.round(value) + '';
			}
		})
	});

	nonLinearStepSlider.noUiSlider.on('update', function (values, handle) {
		var minValue = values[0];
		var maxValue = values[1];
		var parcentMin = (100 / 1000) * minValue;
		var parcentMax = (100 / 1000) * maxValue;
		$('#price .noUi-bg-line').css('width', parcentMin+'%');
		$('#price .c-1-color').css('width', parcentMax+'%');
		$('[name="price"]').val(maxValue);
	});

	$("#price").find('.noUi-connects').append('<div class="noUi-bg"><span></span></div><div class="noUi-bg-line"><span></span></div>');
	var connect = nonLinearStepSlider.querySelectorAll('.noUi-bg');
	var classes = ['c-1-color'];
	for (var i = 0; i < connect.length; i++) {
		connect[i].classList.add(classes[i]);
	}
}