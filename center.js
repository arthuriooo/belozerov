$(document).ready(function(){

	// $(elem).html(data);
	// setTimeout(function() {
	// 	var $img = $('#img1'), wid = $img.width();
	// 	alert(wid);
	
	// 	$('#slider').css('width', wid);
	// },0);

	$("body").append($('#img1')); 
	var $img = $('#img1'), wid = $img.width();
	alert(wid);

	$('.preview').append($img);

	$('#slider').css('width', wid);

	$("body").append($('#slider')); 
	var $slid = $('#slider'), wid2 = $slid.width();
	alert(wid2);

	

	var $docW = $(document).width();

	$dif = $docW - wid2;

	alert($dif);

	$('#slider').css('left', $dif/2);


	// $('#slider').css('width', wid);



});



