$('.promo__slick').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
});
$('.promo .arrow.arrow_prew').on("click", function (event) {
	$(this).parents('.promo').find('.promo__slick').slick('slickPrev');
});
$('.promo .arrow.arrow_next').on("click", function (event) {
	$(this).parents('.promo').find('.promo__slick').slick('slickNext');
});