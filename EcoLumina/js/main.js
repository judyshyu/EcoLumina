$(function(){
// hamburger trigger
	var ham = $('#hamburger'),
		nav = $('#header nav'),
		filter = $('#filter');

	ham.on('click',function(){
		$(this).toggleClass('active');
		nav.toggleClass('active');

		// if(!search.hasClass('active')){
			filter.toggleClass('active');
		// }

		// clear nav level
		// menu.removeClass('level-1 level-2');

		$('#filter.active').on('click',function(){
			$(this).removeClass('active');
			ham.removeClass('active');
			nav.removeClass('active');
		})
	})
// svg control
	$('img.svg').each(function(){
		var $img = $(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		$.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = $(data).find('svg');
			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}
			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');
			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}
			// Replace image with new SVG
			$img.replaceWith($svg);
		}, 'xml');
	});
// scrollReveal
	window.sr = ScrollReveal({
		reset: true,
		scale:1,
		duration: 800,
		viewFactor: 0.2
	});
	// page
		sr.reveal('.reveal_left', {
			duration: 1000,
			origin:'left',
			distance:'50px'
		});
		sr.reveal('.reveal_right', {
			duration: 1000,
			origin:'right',
			distance:'50px'
		});
		sr.reveal('.reveal_bottom', {
			reset: false,
			duration: 1000,
			distance:'50px'
		});
		sr.reveal('.reveal_list', {
			reset: false,
			duration: 1000,
			distance:'50px'
		},300);
	// title
		sr.reveal('h2.title', {
			duration: 1000,
			origin:'left',
			distance:'0',
			afterReveal: function (domEl) {
				$(domEl).addClass('animated');
			},
			afterReset: function (domEl) {
				$(domEl).removeClass('animated');
			}
		});
})