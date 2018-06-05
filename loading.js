jQuery(document).ready(function($) {

	'use strict';

/*==========================================================*/
/* Preloader
/*==========================================================*/
    /*讀取畫面loading*/
	$(window).load(function() {
		$('#status').fadeOut();
		/*status讀取圖片GIF*/
		$('#preloader').delay(350).fadeOut('slow');
		/*preloader黑背景底色*/
	});


});(jQuery);