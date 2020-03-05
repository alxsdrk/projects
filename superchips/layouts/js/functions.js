$(document).ready(
function (){
	$("#pikame").PikaChoose({autoPlay:false});
});

$(document).ready(function() {
	var owlslideshow = $('.slideshow');
    owlslideshow.owlCarousel({
		animateOut: 'fadeOut',
        animateIn: 'fadeIn',
		autoplay:true,
		autoplaytimeout:1000,
		dots: true,
		nav: true,
		margin: 0,
    	loop: true,
		items: 1
    });
});

$(function () {
	$('.link_search').click(function(){
	  	$('.search-form').toggleClass("opened");
	  	return false;
	});	
	$('.mob-nav').click(function(){
		$('.site-header').toggleClass("nav-opened");
	  	return false;
	});
});

$( function() {
	$(".select").selectmenu();
	$( ".content__tabs" ).tabs();
	
	$( "#slider-weight" ).slider({
		range: "min",
      	min: 0,
      	max: 150,
      	value: 50,
      	slide: function( event, ui ) {
        	$( "#input-weight" ).val( ui.value );
      	}
    });
   	$( "#input-weight" ).val( $( "#slider-weight" ).slider( "value" ) );
  
	$( "#slider-height" ).slider({
		range: "min",
      	min: 0,
      	max: 220,
      	value: 150,
      	slide: function( event, ui ) {
        	$( "#input-height" ).val( ui.value );
      	}
    });
    $( "#input-height" ).val( $( "#slider-height" ).slider( "value" ) );

	$( "#slider-km" ).slider({
		range: "min",
      	min: 0,
      	max: 1000,
		step: 1,
      	value: 300,
      	slide: function( event, ui ) {
        	$( "#input-km" ).val( ui.value );
      	}
    });
    $( "#input-km" ).val( $( "#slider-km" ).slider( "value" ) );
	
	$( "#slider-km-b" ).slider({
		range: "min",
      	min: 0,
      	max: 1000,
		step: 1,
      	value: 300,
      	slide: function( event, ui ) {
        	$( "#input-km-b" ).val( ui.value );
      	}
    });
    $( "#input-km-b" ).val( $( "#slider-km-b" ).slider( "value" ) );
	
	$( "#slider-liters" ).slider({
		range: "min",
      	min: 0,
      	max: 120,
      	value: 40,
      	slide: function( event, ui ) {
        	$( "#input-liters" ).val( ui.value );
      	}
    });
    $( "#input-liters" ).val( $( "#slider-liters" ).slider( "value" ) );

	$( "#slider-liters-b" ).slider({
		range: "min",
      	min: 0,
      	max: 120,
      	value: 40,
      	slide: function( event, ui ) {
        	$( "#input-liters-b" ).val( ui.value );
      	}
    });
    $( "#input-liters-b" ).val( $( "#slider-liters-b" ).slider( "value" ) );

	$( "#slider-liters-c" ).slider({
		range: "min",
      	min: 0.0,
      	max: 30.0,
		step: 0.1,
      	value: 6.5,
      	slide: function( event, ui ) {
        	$( "#input-liters-c" ).val( ui.value );
      	}
    });
    $( "#input-liters-c" ).val( $( "#slider-liters-c" ).slider( "value" ) );
 	
	$( "#slider-liters-d" ).slider({
		range: "min",
      	min: 0.0,
      	max: 30.0,
		step: 0.1,
      	value: 6.5,
      	slide: function( event, ui ) {
        	$( "#input-liters-d" ).val( ui.value );
      	}
    });
    $( "#input-liters-d" ).val( $( "#slider-liters-d" ).slider( "value" ) );
 	
	$( "#slider-liters-e" ).slider({
		range: "min",
      	min: 0.0,
      	max: 30.0,
		step: 0.1,
      	value: 6.5,
      	slide: function( event, ui ) {
        	$( "#input-liters-e" ).val( ui.value );
      	}
    });
    $( "#input-liters-e" ).val( $( "#slider-liters-e" ).slider( "value" ) );
	
	$(".row__checkboxes").on("change", ":checkbox", function() {
    var $all   = $(".row__checkboxes").find(":checkbox");
    var $first = $all.eq(0);
    if ($first.is(":checked")) { 
        $all.not(this).prop("checked", false);
    }
});

});