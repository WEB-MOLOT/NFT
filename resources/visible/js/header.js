$( document ).ready(function() {
	setTimeout(function(){		
		$('.page_hide').removeClass('page_hide');
	}, 100);
})

/*Focus*/
if ($(".header__search-field").length > 0) {
	$('.header__search-field').on('focus', function () {
		$(this).parent().addClass("active");
	});
	$('.header__search-field').on('blur', function () {
		let email = $(this).val();
		if (email.length == 0) {
			$(this).parent().removeClass("active");
		} else {
			$(this).parent().addClass("active");
		}
	});
	$('.header__search-field').on('keyup', function () {
		var val = $(this).val();
		if(val!=''){
			$('.header__search-list').addClass("visible");
			$('.header__search-box').addClass("border");
		} else {
			$('.header__search-list').removeClass("visible");
			$('.header__search-box').removeClass("border");
		}
		
	});
	$('.header__search-list ul li a').on('click', function () {
		var val = $(this).find('span').text();
		$('.header__search-list').removeClass("visible");
		$('.header__search-field').val(val);
		$('.header__search-box').removeClass("border");
		
	});
	$(function ($) {
		$(document).mouseup(function (e) {
			var div = $(".header__search");
			if (!div.is(e.target) && div.has(e.target).length === 0) {
				$('.header__search-list').removeClass("visible");
				$('.header__search-box').removeClass("border");
			}
		});
	});
}

// Main menu open
if ($(".header__burger").length > 0) {
	$(".header__burger").on("click", function(){
		$("body").addClass("lock");
		$(".header__contain").addClass("active");
	});
	$(".header__closed").on("click", function(){
		$("body").removeClass("lock");
		$(".header__contain").removeClass("active");
	});
}

if ($(".header__btn").length > 0) {
	var min_width = 1010;
	$(window).on('resize', function () {
		var new_width = $(window).width();
		var container = $('.header');
		if (new_width <= min_width) {
			$('.header__btn').insertBefore($('.social_hidden'));
			$('.header__promotion').insertBefore($('.header__btn'));
			$('.header__cabinet').insertBefore($('.header__burger'));
		}
		if (new_width > min_width) {
			$('.header__btn').insertAfter($('.header__buttons'));
			$('.header__promotion').insertAfter($('.header__buttons-hidden'));
			$('.header__cabinet').insertAfter($('.header__promotion'));
		}
	}).trigger('resize');
}

$(".arrow-top").on("click", function () {
	var elementClick = $(this).attr("href")
	var destination = $(elementClick).offset().top;
	jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 600);
	return false;
});

if ($(".header__profile-box").length > 0){
	$('.header__profile-box').on("click", function(){
		$(this).parent().toggleClass('active');
		if( $(this).parent().hasClass('active')) {
			$(this).next().slideDown();
		} else {
			$('.header__profile-block').slideUp();
			$(".header__profile").removeClass("active");
		}
	});
	$('.header__profile-link').on("click", function(){
		$('.header__profile-block').slideUp();
		$(".header__profile").removeClass("active");
	});
	$(function ($) {
		$(document).mouseup(function (e) {
		var div = $(".header__profile.active");
		if (!div.is(e.target) && div.has(e.target).length === 0) {
				div.removeClass("active");
				$('.header__profile-block').slideUp();
			}
		});
	});
}