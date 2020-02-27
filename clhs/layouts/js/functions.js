/*
function resizeInput() {
    $(this).attr('size', $(this).val().length);
}

$('input[type="text"].quantity-form__input')
    // event handler
    .keyup(resizeInput)
    // resize on page load
    .each(resizeInput);
*/



$(document).ready(function () {
	$('input[type="radio"]').click(function(){
			if($(this).attr("value")=="passport"){
				$(".row_passport").addClass('show');
				$(".row_cart_id").removeClass('show');
			}
			if($(this).attr("value")=="cart_id"){
				$(".row_cart_id").addClass('show');
				$(".row_passport").removeClass('show');

			}        
		});
	
});



Circles.create({
	id:           'circles-1',
	value:        79,
	radius:       75,
	width:        20,
	duration:     10,
	colors:       ['#024e7d', '#02be6a']
});

$( function() {
	$(".select").selectmenu();
	
	$('.mob-nav').click(function(){
	  	$('.site-header').toggleClass("nav-opened");
	  	return false;
	});
});


 $(function() {
	 var select = $( "#slider-request-sum" );
     var slider = $( "<div id='request-sum'></div>" ).insertAfter( select ).slider({
		 min: 50,
		 max: 15000,
		 value: 1,
		 step: 50,
         range: "min",
		 slide: function( event, ui ) {
        	$( "#input-request-sum" ).val(ui.value);
      	},
         change: function(event, ui) { 
         	var sliderValue = $( "#request-sum" ).slider( "option", "value" );
            $('#sliderPosition').html(sliderValue);
            }        
	 	});
	 $('#increase-request-sum').click(function() {
        var sliderCurrentValue = $( "#request-sum" ).slider( "option", "value" );
        slider.slider( "value", sliderCurrentValue + 100 );
		 
		var $input = $("#input-request-sum");
        $input.val(parseInt($input.val()) + 100);
        $input.change();
        return false;
		 
     });
     $('#decrease-request-sum').click(function() {
        var sliderCurrentValue = $( "#request-sum" ).slider( "option", "value" );
        slider.slider( "value", sliderCurrentValue - 100 );
		
		var $input = $("#input-request-sum");
        var count = parseInt($input.val()) - 100;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
		 
     });
	 $( "#input-request-sum" ).val( $( "#slider-request-sum" ).slider( "value" ));
});
jQuery(document).ready(function($) {
	 var select = $( "#slider-request-day" );
     var slider = $( "<div id='request-day'></div>" ).insertAfter( select ).slider({
		 min: 0,
		 max: 50,
		 value: 0,
		 step: 1,
         range: "min",
		 slide: function( event, ui ) {
        	$( "#input-request-day" ).val(ui.value);
      	},
         change: function(event, ui) { 
         	var sliderValue = $( "#request-day" ).slider( "option", "value" );
           
            }        
	 	});
	 
	$('#increase-request-day').click(function() {
		
        var sliderCurrentValue = $( "#request-day" ).slider( "option", "value" );
        slider.slider( "value", sliderCurrentValue + 1 );
		
		var $input = $("#input-request-day");
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
       
     });
     $('#decrease-request-day').click(function() {
        var sliderCurrentValue = $( "#request-day" ).slider( "option", "value" );
        slider.slider( "value", sliderCurrentValue - 1 );
		 
    	var $input = $("#input-request-day");
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
			
     });
	 $( "#input-request-day" ).val( $( "#slider-request-day" ).slider( "value" ));
});

jQuery(document).ready(function($) {
	$('.option_terms a.quantity-form__minus').click(function () {
    	var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
	});
    $('.option_terms a.quantity-form__plus').click(function () {
    	var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
	});
});
jQuery(document).ready(function($) {
	$('.option_sum a.quantity-form__minus').click(function () {
    	var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 500;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
	});
    $('.option_sum a.quantity-form__plus').click(function () {
    	var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 500);
        $input.change();
        return false;
	});
});

jQuery(document).ready(function(){
   $(".input_date").mask("99.99.9999");
   $(".input_phone").mask("+38 0(99) 999 99 99");
   $(".input_ipn").mask("999999999");
});

$(document).ready(function(){
	$('.credit-info__link').click(function(){
		if(!$(this).parent().hasClass('active')){
			$('.credit-info__item').removeClass('active'); 
			$(this).parent().addClass('active');
		} else {
			$(this).parent().removeClass('active');
		}
	});
});



$('input[type="radio"].radio_credit').click(function(){
        if($(this).attr("value")=="credit_first"){
            $(this).parent().parent().children("td.credit-td__calc").children(".calc__result.credit_first").addClass('checked');
			$(this).parent().parent().children("td.credit-td__calc").children(".calc__result.credit_second").removeClass('checked');
        }
        if($(this).attr("value")=="credit_second"){
          	$(this).parent().parent().children("td.credit-td__calc").children(".calc__result.credit_first").removeClass('checked');
			$(this).parent().parent().children("td.credit-td__calc").children(".calc__result.credit_second").addClass('checked');

        }        
    });

$( function() {
    var progressbar = $( "#progressbar" ),
      progressLabel = $( ".progress-label" );
 
    progressbar.progressbar({
      value: false,
      change: function() {
        progressLabel.text( progressbar.progressbar( "value" ) + "%" );
      },
      complete: function() {
        progressLabel.text( "Подбор завершен!" );
		$(".progress-label__note").hide('slow');
      }
    });
 
    function progress() {
      var val = progressbar.progressbar( "value" ) || 0;
 
      progressbar.progressbar( "value", val + 2 );
 
      if ( val < 99 ) {
        setTimeout( progress, 200 );
      }
    }
 
    setTimeout( progress, 10 );
  } );
