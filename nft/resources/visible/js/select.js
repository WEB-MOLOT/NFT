// Custom Select
$('.select').on("click", function(event) {
	if(!$(this).hasClass('disabled')){
		$('.select').not(this).removeClass('active').find('.select-options').slideUp(50);
		$(this).toggleClass('active');
		$(this).find('.select-options').slideToggle(50);
	}
});
$('.select-options__value').on("click", function() {
	$(this).parents('.select').find('.select-title__value').html($(this).html());
	if($.trim($(this).data('value'))!=''){
		$(this).parents('.select').find('input').val($(this).data('value'));
		$(this).parents('.select').addClass('select_active');
	}else{
		$(this).parents('.select').find('input').val($(this).text());
		$(this).parents('.select').addClass('select_active');
		$('.filter-sort--js.active').removeClass('active desc asc');
		$('.sort_by--js').val('desc');
		$('.sort_order--js').val($(this).text());
	}
});
$(document).on("click", function(e) {
	if (!$(e.target).is(".select *")) {
		$('.select').removeClass('active');
		$('.select-options').slideUp(50);
	};
});

$('.select-social').on("click", function(event) {
	if(!$(this).hasClass('disabled')){
		$('.select-social').not(this).removeClass('active').find('.select-social__options').slideUp(50);
		$(this).find(".select-social__title").toggleClass('active');
		$(this).find('.select-social__options').slideToggle(50);
	}
});
$('.select-social__options-value').on("click", function() {
	var mainValue = $(this).data('value');
	var mainName = $(this).data('name');
	if($.trim($(this).data('value'))!=''){
		$('.form__label_social').before('<div class="form__label"><input type="text" name="' + mainName + '[]" class="form__field field" placeholder="' + mainValue + ' "><div class="select-social__closed"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.75 1L11 2.25L2.25 11L1 9.75L9.75 1Z" fill="#5E7C8D"/><path d="M11 9.75L9.75 11L1 2.25L2.25 1L11 9.75Z" fill="#5E7C8D"/></svg></div></div>');
	}
});
$(document).on("click", function(e) {
	if (!$(e.target).is(".select-social *")) {
		$('.select-social').find(".select-social__title").removeClass('active');
		$('.select-social__options').slideUp(50);
	};
});
$(document).on("click", function(e) {
	if (!$(e.target).is(".times__left *,.times__right * ")) {
		$('.times__select--js.active').removeClass('active');
	};
});
$('body').on("click", '.times__select--js .times__select-option:not(.timezone)', function() {
	var value = $(this).text();
	var parent = $(this).parents('.times__left');
	var inputID = parent.parents('.times').attr('data-id');
	var timeZone = parent.parents('.times').find('.select-timezone-open--js').text();
	var input = $('[data-calendar-id="'+inputID+'"]');
	var inputVal = input.val();
	if (inputVal!='') {
		inputVal = inputVal.slice(0,10);
	}
	parent.find('.times__left-text--js').text(value );
	parent.addClass('active');
	parent.removeClass('error');
	$(this).parent().removeClass('active');
	if(!parent.hasClass('times__right')){
		if(inputVal.length < 10){
			input.val(value + ', '+timeZone);
		} else {
			input.val(inputVal + ', '+value + ', '+timeZone);
		}
		
	}	
});
$('body').on("click", '.times__select--js .times__select-option.timezone', function() {
	var timeZone = $(this).text();
	var parent = $(this).parents('.times__left');
	var inputID = parent.parents('.times').attr('data-id');
	var time = parent.parents('.times').find('.select-open--js').text();
	var input = $('[data-calendar-id="'+inputID+'"]');
	var inputVal = input.val();
	if (inputVal!='') {
		inputVal = inputVal.slice(0,10);
	}
	parent.find('.times__left-text--js').text(timeZone );
	parent.addClass('active');
	parent.removeClass('error');
	$(this).parent().removeClass('active');
	if(parent.hasClass('times__right')){
		if(time != 'time'){
			input.val(inputVal + ', '+time + ', '+timeZone);
		} else {
			if(inputVal.length < 10){
				input.val(timeZone);
			} else {
				input.val(inputVal+ ', '+timeZone);
			}
		}
		
	}	
});
$('body').on("click", '.select-open--js', function() {
	$(this).next('.times__select--js').addClass('active');
});
$('body').on("click", '.select-timezone-open--js', function() {
	$(this).next('.times__select--js').addClass('active');
	console.log(1);
});
$('body').on("click", '.select-clear--js', function() {
	var parent = $(this).parents('.times__left');
	var inputID = parent.parents('.times').attr('data-id');
	var input = $('[data-calendar-id="'+inputID+'"]');
	var inputVal = input.val();
	if (inputVal.length>10) {
		inputVal = inputVal.slice(0,10);
	} else {
		inputVal = '';
	}
	input.val(inputVal);
	parent.find('.times__left-text--js').text('time');
	parent.removeClass('active');
	$(this).next('.times__select--js').removeClass('active');
});



$(".select-social__closed").on("click", function () {
	$(this).parent().slideUp(500);
});
