if ($(".file__link").length > 0) {
	var files;
	$('.file__value').on('change', function(){
		files = $(this).prop('files');
		console.log(files);
		if (files.length == 0) {
			$(this).prev().text('Select a file');
		} else if (files.length == 1) {
			$(this).prev().text(files[0].name);
			$(this).prev().addClass("active");
			$(this).parents('.file').find('.file__caption').addClass("active");
		} else if (files.length > 1) {
			$(this).prev().text(files.length + ' files selected');
			$(this).prev().addClass("active");
			$(this).parents('.file').find('.file__caption').addClass("active");
		}
	});
}

if ($(".date-from, .date-to").length > 0) {
	$.fn.datepicker.language['en'] =  {
		days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
		daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
		daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
		months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
		monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		today: "Today",
		clear: "Clear",
		dateFormat: 'dd.mm.yyyy',
		timeFormat: 'hh:ii',
		//firstDay: 1
	};

	$('.my-datepicker').datepicker({
		classes: "dates",
		language: "en",
		navTitles: {
			days: 'MM',
		},
		/*minDate: new Date(),*/
		timepicker: true,
		minutesStep: 1,
		minMinutes: 0,
		autoClose: false,
		dateTimeSeparator: ",",
		inputID: 3
	});

	var date_from = $('.date-from ').datepicker({
		classes: "dates",
		language: "en",
		navTitles: {
			days: 'MM',
		},
		timepicker: true,
		minutesStep: 1,
		minMinutes: 0,
		dateTimeSeparator: ",",
		multipleDates: false,
		inputID: 1,
		onSelect(formattedDate, date, inst){
			var time = $(".times[data-id='"+this.inputID+"']").find('.select-open--js').text();
			var timeZone = $(".times[data-id='"+this.inputID+"']").find('.select-timezone-open--js').text();
			//time = time.slice(0,5);

			formattedDate = formattedDate.substring(0, formattedDate.indexOf(','));
			if(time != 'time'){
				$(inst.$el).val(formattedDate + ', '+time+', '+timeZone);
			} else {
				$(inst.$el).val(formattedDate);
				$(".times[data-id='"+this.inputID+"']").find('.times__left:not(.times__right)').addClass('error');
			}
		}
	});

	var date_to = $('.date-to ').datepicker({
		multipleDates: false,
		classes: "dates",
		language: "en",
		navTitles: {
			days: 'MM',
		},
		timepicker: true,
		minutesStep: 1,
		minMinutes: 0,
		dateTimeSeparator: ",",
		multipleDates: false,
		inputID: 2,
		minDate: new Date(),
		onSelect(formattedDate, date, inst){
			var time = $(".times[data-id='"+this.inputID+"']").find('.select-open--js').text();
			var timeZone = $(".times[data-id='"+this.inputID+"']").find('.select-timezone-open--js').text();
			time = time.slice(0,5);

			formattedDate = formattedDate.substring(0, formattedDate.indexOf(','));
			if(time != 'time'){
				$(inst.$el).val(formattedDate + ', '+time+', '+timeZone);
			} else {
				$(inst.$el).val(formattedDate);
				$(".times[data-id='"+this.inputID+"']").find('.times__left:not(.times__right)').addClass('error');
			}
		}
	});

	$('.my-datepicker').on('focus', function () {
		$(this).parent().find('.form__date-icon').addClass("active");
	});
	$('.my-datepicker').on('focusout', function () {
		$(this).parent().find('.form__date-icon').removeClass("active");
	});
}

if ($(window).width() >= 760) {
	function changeRadio(el){
		el.parents('.form__info').find('.form__info-icon').removeClass('center');
		var mainChangeValue = el.data("change");
		if(mainChangeValue == '1'){
			el.parent().parent().find('.form__info-icon').removeClass('active');
			el.parents('.form__info-value').find('[data-change="1"]').prop("checked", false);
			el.parents('.form__info-value').find('[data-change="2"]').prop("checked", true);
		} else {
			el.parent().parent().find('.form__info-icon').addClass('active');
			el.parents('.form__info-value').find('[data-change="2"]').prop("checked", false);
			el.parents('.form__info-value').find('[data-change="1"]').prop("checked", true);
		}
	}

	$(".form__radio_1").on("click", function(event){
		event.preventDefault();
		var mainChange = $(this).parents('.form__info').find('input[data-change="1"]');
		changeRadio($(mainChange));
	});
	$(".form__radio_2").on("click", function(event){
		event.preventDefault();
		var mainChange = $(this).parents('.form__info').find('input[data-change="2"]');
		changeRadio($(mainChange));
	});
	$(".form__info-icon").on("click", function(event){
		event.preventDefault();
		if($(this).parents('.form__info').find('.form__info-icon').hasClass('center')){
			var mainChange = $(this).parents('.form__info').find('input[data-change="2"]');
		} else {
			if($(this).parents('.form__info').find('.form__info-icon').hasClass('active')){
				var mainChange = $(this).parents('.form__info').find('input[data-change="1"]');
			} else {
				var mainChange = $(this).parents('.form__info').find('input[data-change="2"]');
			}
		}
		changeRadio($(mainChange));
	});
}

// Custom Select
$('.form__currency').on("click", function(event) {
	if(!$(this).hasClass('disabled')){
		$('.form__currency').not(this).removeClass('active').find('.form__currency-options').slideUp(50);
		$(this).toggleClass('active');
		$(this).find('.form__currency-options').slideToggle(50);
	}
});
$('.form__currency-options__item').on("click", function() {
	var mainText = $(this).find('.form__currency-options__value').html();
	$(this).parents('.form__currency').find('.form__currency-title__value').html(mainText);
	$(this).parents('.form__currency').addClass("check");
	if($.trim($(this).data('value'))!=''){
		$(this).parents('.form__currency').find('input').val($(this).data('value'));
	}else{
		$(this).parents('.form__currency').find('input').val(mainText);
	}
});
$(document).on("click", function(e) {
	if (!$(e.target).is(".form__currency *")) {
		$('.form__currency').removeClass('active');
		$('.form__currency-options').slideUp(50);
	};
});

// Custom Select
$('.form__promotion').on("click", function(event) {
	if(!$(this).hasClass('disabled')){
		$('.form__promotion').not(this).removeClass('active').find('.form__promotion-options').slideUp(50);
		$(this).toggleClass('active');
		$(this).find('.form__promotion-options').slideToggle(50);
	}
});
$('.form__promotion-options__item').on("click", function() {
	var mainText = $(this).find('.form__promotion-options__caption').html();
	$(this).parents('.form__promotion').find('.form__promotion-caption').html(mainText);
	if($.trim($(this).data('value'))!=''){
		$(this).parents('.form__promotion').find('input').val($(this).data('value'));
	}else{
		$(this).parents('.form__promotion').find('input').val(mainText);
	}
});
$(document).on("click", function(e) {
	if (!$(e.target).is(".form__promotion *")) {
		$('.form__promotion').removeClass('active');
		$('.form__promotion-options').slideUp(50);
	};
});

if ($(".form__info-value").length > 0) {
	var min_width_radio = 760;
	$(window).on('resize', function () {
		var new_width = $(window).width();
		if (new_width <= min_width_radio) {
		var $nav = $('.form__info-value'),
		$lineRadio = $('<div class="type-bg">'),
		$activeLi,
		lineWidth,
		liPos;
		if ($('.type-bg').length == 0) {
			$lineRadio.appendTo($nav);
		}
		function refresh() {
			if($nav.find('.form__radio.actives').length==0){
				$activeLi = $nav.find('.form__radio').first();
			} else {
				$activeLi = $nav.find('.form__radio.actives');
			}
			lineWidth = $activeLi.outerWidth();
			liPos = $activeLi.position().left;
		}
		refresh();
		$nav.css('position','relative');
		//line setup
		function lineSet() {
			if($nav.find('.form__radio.actives').length>0){
				$lineRadio.animate({
					'left':liPos,
				}, 0);
			}
		}
		lineSet();
		$nav.find('.form__radio').on("click", function(event) {
			event.preventDefault();
			//alert($nav.find('.form__radio.actives').length);
			if($nav.find('.form__radio.actives').length==0){
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
		if ($('.form__radio.actives').length == 0) {
			$('.form__radio').first().click();
		}
		}
	}).trigger('resize');
}

/*Focus*/
if ($(".password").length > 0) {
	$('.password .field').on('focus', function () {
		$(this).parent().addClass("active");
		$(this).parent().find(".password__icon").addClass("visible");
	});
	$('.password .field').on('blur', function () {
		let email = $(this).val();
		if (email.length == 0) {
			$(this).parent().removeClass("active");
			$(this).parent().find(".password__icon").removeClass("visible");
		} else {
			$(this).parent().addClass("active");
			$(this).parent().find(".password__icon").addClass("visible");
		}
	});
}
$("body").on('click', '.password__icon:not(.active)', function () {
	$(this).addClass("active");
	$(this).parent().find('.field').attr('type', 'text');
});
$("body").on('click', '.password__icon.active', function () {
	$(this).removeClass("active");
	$(this).parent().find('.field').attr('type', 'password');
});

$('.contacts__form, .promotion__form').on("submit", function(event){
	event.preventDefault();
	var form = $(this);
	var errors = false;
	if ($('.contacts__form .form__checkbox input:checked').length > 0){
		$('.form__box').removeClass("error");
	} else {
		$('.form__box').addClass("error");
		errors = true;
	}
	form.find('.validate--js').each(function(){
		var val = $(this).val();
		if(val==''){
			$(this).removeClass('success');
			$(this).parent().removeClass('success');
			$(this).addClass('error');
			$(this).parent().addClass('error');
			errors = true;
		} else {
			$(this).removeClass('error');
			$(this).parent().removeClass('error');
			$(this).addClass('success');
			$(this).parent().addClass('success');
		}
		if($(this).hasClass('validate-email--js')){
			if(!validateEmail(val)){
				$(this).removeClass('success');
				$(this).parent().removeClass('success');
				$(this).addClass('error');
				$(this).parent().addClass('error');
			} else {
				$(this).removeClass('error');
				$(this).parent().removeClass('error');
				$(this).addClass('success');
				$(this).parent().addClass('success');
			}
		}
	});
});
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$('.validate--js').on('keyup', function(){
	var val = $(this).val();
	if(val==''){
		$(this).removeClass('success');
		$(this).parent().removeClass('success');
		$(this).addClass('error');
		$(this).parent().addClass('error');
		errors = true;
	} else {
		$(this).removeClass('error');
		$(this).parent().removeClass('error');
		$(this).addClass('success');
		$(this).parent().addClass('success');
	}

	if($(this).hasClass('validate-email--js')){
		if(!validateEmail(val)){
			$(this).removeClass('success');
			$(this).parent().removeClass('success');
			$(this).addClass('error');
			$(this).parent().addClass('error');
		} else {
			$(this).removeClass('error');
			$(this).parent().removeClass('error');
			$(this).addClass('success');
			$(this).parent().addClass('success');
		}
	}
});
