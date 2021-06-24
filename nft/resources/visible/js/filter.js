$(".filter__category-item").on("click", function(){
	$(this).toggleClass("active");
});



// Main menu open
if ($(".filter__btn").length > 0) {
	$(".filter__btn").on("click", function(){
		$("body").addClass("bg-lock");
		$(".filter__bottom").addClass("active");
	});
	$(".filter__closed").on("click", function(){
		$("body").removeClass("bg-lock");
		$(".filter__bottom").removeClass("active");
	});
}

$(".filter__checkbox").on("change", function(){
	if($(this).find("input").prop("checked")){
		$(this).addClass('active');
	} else {
		$(this).removeClass('active');
	}
	var name = $(this).find("input").attr("name");
	var nameClass = $("."+name);
	nameClass.toggleClass("visible");
	if ($(window).width() > 1010) {
		var mainChenge = $(this).find("input").data("chenge");
		if($('.filter__checkbox input[data-chenge="1"]').prop("checked") || $('.filter__checkbox input[data-chenge="2"]').prop("checked")){
			$(".catalog__body").removeClass('hidden');
		} else {
			$(".catalog__body").addClass('hidden');
		}
	}
});
$(".filter-sort--js").on("click", function(event){
	event.preventDefault();


	var value = $(this).find('span').text();
	$('.filter-sort--js.active').not(this).removeClass('active');
	$('.select-filter--js').removeClass('select_active');
	if($(this).hasClass('active')){

		if($(this).hasClass('desc')){
			$(this).removeClass('desc');
			$(this).addClass('asc');
			$('.sort_by--js').val('asc');
			$('.sort_order--js').val(value);
		} else if($(this).hasClass('asc')){
			$(this).removeClass('active');
			$(this).removeClass('asc');
			$('.sort_by--js').val('undefined');
			$('.sort_order--js').val('undefined');
		}

	} else {
		$(this).addClass('active desc');
		$('.sort_by--js').val('desc');
		$('.sort_order--js').val(value);
	}
	var sort_order = $('.sort_order--js').val();
	var sort_by = $('.sort_by--js').val();
});

if ($(".filter__type").length > 0) {
	var min_width = 1010;
	$(window).on('resize', function () {
		var new_width = $(window).width();
		if (new_width <= min_width) {
		var $nav = $('.filter__type'),
		$line = $('<div class="type-bg">'),
		$activeLi,
		lineWidth,
		liPos;
		if ($('.type-bg').length == 0) {
			$line.appendTo($nav)
		}
		function refresh() {
			if($nav.find('.filter__checkbox.actives').length==0){
				$activeLi = $nav.find('.filter__checkbox').first();
			} else {
				$activeLi = $nav.find('.filter__checkbox.actives');
			}
			lineWidth = $activeLi.outerWidth();
			liPos = $activeLi.position().left;
		}
		refresh();
		$nav.css('position','relative');
		//line setup
		function lineSet() {
			if($nav.find('.filter__checkbox.actives').length>0){
				$line.animate({
					'left':liPos,
				}, 0);
			}
		}
		lineSet();
		$nav.find('.filter__checkbox').on("click", function() {
			//alert($nav.find('.filter__checkbox.actives').length);
			if($nav.find('.filter__checkbox.actives').length==0){
				$(this).addClass('active');
			}
			$(".type-bg").addClass("visible");
			$activeLi.removeClass('actives');
			$(this).addClass('actives');
			refresh();
			lineSet();
			var mainChenge = $(this).find("input").data("chenge");
			if(mainChenge == '2'){
				$(".type-bg").addClass("type-bg_orange");
			} else {
				$(".type-bg").removeClass("type-bg_orange");
			}
		});
		if ($('.filter__checkbox.actives').length == 0) {
			$('.filter__checkbox').first().click();
		}
		}
	}).trigger('resize');
}

if ($(".filter").length > 0) {
	$(window).on('resize', function () {
		var new_width = $(window).outerWidth();
		var min_width = 1010;
		console.log(new_width);
		var container = $('.filter');
		if (new_width <= min_width) {
			$('.filter__prices').insertBefore($('.filter__category'));
			$('.filter__sort').insertAfter($('.filter__btn'));
			$('.filter__verified').insertAfter($('.filter__category'));
		}
		if (new_width > min_width) {
			$('.filter__prices').insertAfter($('.filter__top-first'));
			$('.filter__sort').insertAfter($('.filter__category'));
			$('.filter__verified').insertAfter($('.filter__type'));
		}
	}).trigger('resize');
}

$(document).ready(function () {
	$(".filter__bottom").addClass("filter__bottom_block");
});


/*
var $body = $('body'),
$header = $('.filter__fixed');
$(document).on('scroll', function () {
	var position = $body.scrollTop(),
	block_position = $('.filter').offset().top; // расположение блока, от которого и зависит фиксированность хэдера
	console.log(block_position);
	if (position > block_position) { // если позиция скролла страницы больше, то ставим фикс
		$header.addClass('header-fixed');
	} else {
		$header.removeClass('header-fixed');
	}
});
*/

$( document ).ready(function() {
	if($('.catalog').length > 0){
		setTimeout(function(){
			var positionElement = $('.catalog').offset().top;
			if($(document).scrollTop()>0){
				$('.filter__fixed').removeClass('bottom delay-6');
					$('.filter').addClass('fixed');
			}
			$(document).on('scroll', function (){
				var scroll = $(document).scrollTop();
				if(scroll  > positionElement  ) {
					$('.filter').addClass('fixed')
				} else {
					$('.filter').removeClass('fixed')
				}
			})
		}, 200);
	}
});
