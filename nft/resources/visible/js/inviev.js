inView('.bottom').on('enter', function (event, isInView) {
	$(event).addClass('bottom_visible');
});

/* UP button */
$('.arrow-top').hide();
/*$(document).on('scroll', function (){
	if ($(window).scrollTop() > 500) {
		$('.arrow-top').fadeIn();
	} else {
		$('.arrow-top').fadeOut();
	}
	scrollTop = $(window).scrollTop() + $(window).height();
	footerPosition = $('.footer').offset().top;
	footerHeight = $('.footer').outerHeight(true);
	if (scrollTop >= footerPosition) {
		$('.arrow-top').css({
			'position': 'absolute',
			'bottom': 'calc(20px + ' + footerHeight + 'px)',
		});
	} else {
		$('.arrow-top').css({
			'position': 'fixed',
			'bottom': '20px',
		});
	}
});*/

$( document ).ready(function() {

		setTimeout(function(){
			$(document).on('scroll', function (){
					var pageHeight = $('.page').outerHeight(true);
					var footerHeight = $('.footer').outerHeight(true);
					var footerElement = pageHeight - footerHeight;
					var scrollArrow = $(document).scrollTop();
					var windowHeight = window.innerHeight;

					if(scrollArrow > 100){
						$('.arrow-top').fadeIn();
					} else {
						$('.arrow-top').fadeOut();
					}
					//console.log(scrollArrow  +'>'+ (footerElement - windowHeight));
					if(scrollArrow  > (footerElement - windowHeight)) {
						$('.arrow-top').css({
							'position': 'absolute',
							'bottom': 'calc(20px + ' + footerHeight + 'px)',
						});
					} else {
						$('.arrow-top').css({
							'position': 'fixed',
							'bottom': '20px',
						});
					}

			});
		}, 300);
});
