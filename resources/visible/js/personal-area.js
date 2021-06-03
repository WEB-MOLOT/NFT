$('[data-personal-area]').on('click', function (e) {
	e.preventDefault();
	$('.personal-area__tab').removeClass('active');
	$('.personal-area__block').removeClass('active');
	$(this).addClass('active');
	var personalArea = $(this).data('personal-area');
	$('[data-personal-area-block="' + personalArea + '"]').toggleClass('active');
});