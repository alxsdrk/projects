$(document).ready(function (){

//Фиксация высоты слайдера справа

var sliderHeight = $('.red-slide1').height();

$('.red-slider').css({
    "height": sliderHeight * 1.00
  });

//Переключение слайдера справа


$('.slide-button1').click(function(e1){
	e1.preventDefault();
	$('.slide-button').removeClass('slide-button-active');
	$(this).addClass('slide-button-active');
	$('.red-slide').removeClass('red-slide-active');
	$('.red-slide1').addClass('red-slide-active');
});
$('.slide-button2').click(function(e2){
	e2.preventDefault();
	$('.slide-button').removeClass('slide-button-active');
	$(this).addClass('slide-button-active');
	$('.red-slide').removeClass('red-slide-active');
	$('.red-slide2').addClass('red-slide-active');
});
$('.slide-button3').click(function(e3){
	e3.preventDefault();
	$('.slide-button').removeClass('slide-button-active');
	$(this).addClass('slide-button-active');
	$('.red-slide').removeClass('red-slide-active');
	$('.red-slide3').addClass('red-slide-active');
});

RotateSlide();

	
function  RotateSlide() {	
	
	setTimeout(function(){
		$('.slide-button2').trigger('click');
	}, 3000);
		
	setTimeout(function(){
		$('.slide-button3').trigger('click');
	}, 6000);
		
	setTimeout(function(){
		$('.slide-button1').trigger('click');
	}, 9000);
	
	
	setTimeout(function(){
		//if (!$(".red-slider").data('paused')) {
			RotateSlide();
		//}
	}, 9000);
}	

/*
$('.slider').add('.slide-buttons').hover(
	function() {
		$(".red-slider").data('paused', 1);
    },
    function() {
		$(".red-slider").data('paused', 0);
    }
);
*/	
		

/*
Переключатели формы
*/

$('.order-switch-item').click(function(){
		
	if($(this).find('input').is(':checked')) {
		$('.order-switch-item').removeClass('sel');
		$(this).addClass('sel');
	}
	if($('.order-switch-item3 input').is(':checked')) {
		$('.form-date-block').addClass('show');
	}
	else {
		$('.form-date-block').removeClass('show');
	}
});


/*
Переключатель поездки по городу
*/

$('.town').click(function(){
	if($('.town input').is(':checked')) {
		$('.town').addClass('sel');
		$('.form-dest').hide();
		$('.form-bottom-check.stop').hide();
	}
	else {
		$('.town').removeClass('sel');
		$('.form-dest').show();
		$('.form-bottom-check.stop').show();
	}
});


/*
Переключатель поездки по городу
*/

var add_stop = '<div class="form-stop form-input"><input type="text" class="form-input-item" name="form-stop[]" placeholder="Зупинка"><div class="close"></div></div>';

	
$(".form-bottom-check.stop").on("click", function () {
	$(".stop-pool").append(add_stop);
});	


$(document).on('click', '.close', function(events){
	//alert();
   $(this).closest('.form-stop').remove();
});


/*
Переключение типов авто
*/

$('.type-item').click(function(){
	$(this).find('input').prop('checked', true);
	
	$('.type-item').removeClass('type-item-selected');
	$(this).addClass('type-item-selected');
});
		
	
/*
Скрыть окно заказа звонка
*/
	$(".close").click(function () {
	$('.box_back').fadeOut(600);
	$('.box_back').removeClass('box_show');
	$('#call_window').hide();
	$('#comeback_window').hide();
	});
	  
	
	$('.box_back').click(function() {
		
	if ($(".box_back").hasClass("box_show")) {		
		
	$('.box_back').fadeOut(600);
	$('.box_back').removeClass('box_show');
	$('#call_window').hide();
	$('#comeback_window').hide();

	}
	
	
	});

	$('.box_back .callback2').click(function(event){
    event.stopPropagation();
	});

	  
/*	  
Показать окно
*/
	$("button").click(function (evv) {
		evv.preventDefault();
		 evv.stopPropagation();
	$('.box_back').addClass('box_show');
	
	$('#call_window').show();
	
	jQuery('.box_back').css('opacity', '1');
	$('.box_back').fadeIn(600);

	});
	
	
//Переключение тарифов

$('.price-table-row .price-cell.pr1 a').click(function(ev1){
	ev1.preventDefault();
	$(this).closest('.price-table-row').find('.price-cell a').removeClass('price-active');
	$(this).addClass('price-active');
	$(this).closest('.price-table').find('.yellow-text span').removeClass('cell-active');
	$(this).closest('.price-table').find('.yellow-text span.p1').addClass('cell-active');
});
$('.price-table-row .price-cell.pr2 a').click(function(ev2){
	ev2.preventDefault();
	$(this).closest('.price-table-row').find('.price-cell a').removeClass('price-active');
	$(this).addClass('price-active');
	$(this).closest('.price-table').find('.yellow-text span').removeClass('cell-active');
	$(this).closest('.price-table').find('.yellow-text span.p2').addClass('cell-active');
});
$('.price-table-row .price-cell.pr3 a').click(function(ev3){
	ev3.preventDefault();
	$(this).closest('.price-table-row').find('.price-cell a').removeClass('price-active');
	$(this).addClass('price-active');
	$(this).closest('.price-table').find('.yellow-text span').removeClass('cell-active');
	$(this).closest('.price-table').find('.yellow-text span.p3').addClass('cell-active');
});	
	
	
// Переключение мобменю
	
$('.mobmenu a').on('click', function(ex){
	ex.preventDefault();
	if ($(this).closest('#top-menu').hasClass('hide')) {
		$(this).closest('#top-menu').removeClass('hide');
		$(this).closest('#top-menu').addClass('show');
	}
	else if ($(this).closest('#top-menu').hasClass('show')) {
		$(this).closest('#top-menu').removeClass('show');
		$(this).closest('#top-menu').addClass('hide');
	}
});	
	
$('#top-menu ul li').on('click', function(){
	$('.mobmenu a').trigger('click');
});	

	
// Перемещение блока приложений при уменьшении экрана
	
$(window).on('resize', function(){
    appSwitch();
});	

appSwitch();

function appSwitch() {

if ($(window).width() < 1181) { 
			$('.numbers').insertBefore($('.left-block.white-block'));
	}
    else if ($(window).width() > 1180) {
			$('.numbers').insertBefore($('.red-block.slider'));
		}	
}

$(document).on('click', '.close-green', function(events2){
   $(this).closest('.app-block').remove();
});	


});


//Маска номера

jQuery(document).ready(function(){
   $(".input_phone").mask("+38 0(99) 999 99 99");
});
















