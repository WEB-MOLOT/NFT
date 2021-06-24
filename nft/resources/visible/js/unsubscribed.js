$(".unsubscribed__icon").on("click", function (event) {
	$(this).parent().slideUp(500);
});
$("body").on("click",".select-social__closed", function (event) {
	var el = $(this).parent();
	el.slideUp(500);
	setTimeout(function(){
		el.remove();
	}, 500);
});
