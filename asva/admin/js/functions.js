$( function() {
	$(".form__select").selectmenu();
    $(".input_date").datepicker({
        dateFormat: 'dd.mm.y',
        minDate: new Date($('#hiddendelivdate').val()),
        monthNames : ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
        dayNamesMin : ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        closeText: ['Закрыть'],
	prevText: ['&#x3C;Пред'],
	nextText: ['След&#x3E;'],
	currentText: ['Сегодня'],
    });
});

$('.select-color_1').css('color','#ff0000');