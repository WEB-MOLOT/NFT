$('.project__slick').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	infinite: true,
	speed: 500,
	swipeToSlide: true,
	responsive: [
		{
			breakpoint: 500,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}
	]
});
$('.project .arrow.arrow_prew').on("click", function (event) {
	$(this).parents('.project').find('.project__slick').slick('slickPrev');
});
$('.project .arrow.arrow_next').on("click", function (event) {
	$(this).parents('.project').find('.project__slick').slick('slickNext');
});