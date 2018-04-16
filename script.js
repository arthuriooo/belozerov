$(document).ready(function(){

// MENU MENU MENU MENU MENU MENU MENU MENU MENU MENU MENU MENU

	$('#homeButton').on('click', function(){
		$('#home').fadeIn();

		$('#works').fadeOut();
		$('#contact').fadeOut();

		$('.logo p').css('color', '#ece8e8');
		$('.menu a').attr('class', 'dark');
	});

	$('#worksButton').on('click', function(){
		$('#works').fadeIn();

		$('#home').fadeOut();
		$('#contact').fadeOut();

		$('.logo p').css('color', '#656969');
		$('.menu a').attr('class', 'light');
	});

	$('#contactButton').on('click', function(){
		$('#contact').fadeIn();

		$('#home').fadeOut();
		$('#works').fadeOut();

		$('.logo p').css('color', '#656969');
		$('.menu a').attr('class', 'light');
	});

	// SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER SLIDER

	$('.photo').on('click', function(){
		$('.main').fadeOut();
		$('#slider').css('display','flex');
		var srrc = $(this).find('img').attr('src');
	    $('#img1').attr('src', srrc);
	});

	$('.closePhoto').on('click', function(){
		$('#slider').fadeOut();
		$('.main').css('display', 'flex');
	});

	// listing photos

	var allPhotos = $('.photo').length;

	var pp = 0;
	var nn = 0;

	var photos = [
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',

	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',
	'./pho2_min.png',
	'./pho_min.png',

	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png',
	'./pho2_min.png'
	];

	var current = [];

	(function (){
		for (var i = 0; i < allPhotos; i++) {
			current[i] = photos[nn];
			nn++;
		}

		$('.pic').each(function(i, obj) {
			$(obj).attr('src', current[i]);
		});
	})();

	function previousPhotos() {

		for (var c = 0; c < allPhotos.length; c++) {
			current[c] = '';
		}

		nn = nn - 24;

		for (var i = 0; i < allPhotos; i++) {
			current[i] = photos[nn];
			nn++;
		}

		$('.pic').each(function(i, obj) {
			$(obj).attr('src', current[i]);
		});

		// alert(nn);
	}

	function nextPhotos() {
		// nn = nn + 12;

		for (var c = 0; c < allPhotos.length; c++) {
			current[c] = '';
		}

		for (var i = 0; i < allPhotos; i++) {
			if (current[i] != '') {
				current[i] = photos[nn];
				nn++;
			}
		}

		$('.pic').each(function(i, obj) {
			$(obj).attr('src', current[i]);
		});

		// alert(nn);

		// pp = nn;
	}
	

	$('.left').on('click', function() {
		previousPhotos();
	});

	$('.right').on('click', function() {
		nextPhotos();
	});

});
