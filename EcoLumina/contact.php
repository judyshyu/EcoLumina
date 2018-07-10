<?php // include_once("db.php");
$page_title = '聯絡我們'; // for meta title
include __DIR__.'/include/__page_head.php';
include __DIR__.'/include/__page_script.php';
?>
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
	<?php include __DIR__.'/include/__page_navbar.php'; ?>
	<section id="contact" style="background-image: url(img/contact/contact.jpg);" data-src="img/contact/contact.jpg">
		<div class="w1300">
			<h2 class="title txt-white txt-center">CONTACT</h2>
			<div class="container txt-primary cf" data-vibrancy-vibrance="100" data-vibrancy-brightness="0" data-vibrancy-blur="100">
				<div class="col50 fleft">
					<div id="map"></div>
					<ul class="map_info reveal_bottom">
						<li class="cf">
							<img src="img/contact/phone.svg" alt="tel">
							<p><a href="callto:+886-2-2720-3109">+886-2-2720-3109</a></p>
						</li>
						<li class="cf">
							<img src="img/contact/fax.svg" alt="fax">
							<p><a href="callto:+886-2-2720-7265">+886-2-2720-7265</a></p>
						</li>
						<li class="cf">
							<img src="img/contact/mail.svg" alt="mail">
							<p><a href="mailto:info@ecoluminatech.com">info@ecoluminatech.com</a></p>
						</li>
						<li class="cf">
							<img src="img/contact/location.svg" alt="location">
							<p>台北市信義區基隆路一段432號六樓之五</p>
						</li>
					</ul>
				</div>
				<div class="col50 fleft blur_box reveal_bottom">
					<div class="form_container">
						<h4>聯絡晟明</h4>
						<p>我們重視您的意見，有任何訊息想與我們聯絡，歡迎來信<br>請將聯繫資料填寫完成，我們將儘速派專員與您聯繫。</p>
						<form action="">
							<label for="">
								<p>姓名*</p>
								<input type="text" required>
							</label>
							<label for="">
								<p>電話*</p>
								<input type="text" required>
							</label>
							<label for="">
								<p>信箱*</p>
								<input type="email" required>
							</label>
							<label for="">
								<p>內容*</p>
								<input type="text" required>
							</label>
							<button type="button">
								<img src="img/icons/contact.svg" alt="" class="svg">
								寄送
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include __DIR__.'/include/__page_foot.php'; ?>
	<script>
		$(function () {
		// split title for animation
			var text = $('h2.title');
			text.each(function(){
				var $this = $(this),
					$thisText = $this.text(),
					textSplit = $thisText.split(''),
					brPos = $this.data('br'),
					tag = '';
				for (var j = 0; j < textSplit.length; j++) {
					tag+='<span style="animation-delay:'+j*0.08+'s">';
					tag+=textSplit[j];
					tag+='</span>';
					if(j == brPos){
						tag+='<br>'
					}
				}
				$this.html(tag);
			})
		// block animation
			sr.reveal('#contact', {
				duration: 1000,
				distance:'0',
				afterReveal: function (domEl) {
					$(domEl).addClass('animated');
				},
				afterReset: function (domEl) {
					$(domEl).removeClass('animated');
				}
			});
		// input focus
			$('#contact input').on('focus', function(){
				$(this).parent().addClass('active');
			}).on('blur', function(){
				$(this).parent().removeClass('active');
			})
		});
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBijeoDWGWFHtPCIZjd5uQmWiTWSgqLxD8&extension=.js"></script>
	<script>
		google.maps.event.addDomListener(window, 'load', init);
		var map, markersArray = [];
		function init() {
			var mapOptions = {
				center: new google.maps.LatLng(25.036045, 121.559601),
				zoom: 17,
				gestureHandling: 'auto',
				fullscreenControl: false,
				zoomControl: false,
				disableDoubleClickZoom: false,
				mapTypeControl: false,
				scaleControl: false,
				scrollwheel: true,
				streetViewControl: false,
				draggable : true,
				clickableIcons: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill"},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#7dcdcd"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]}]
			}
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var locations = [
				{"title":"晟明科技","address":"台北市信義區基隆路一段432號六樓之五","desc":"","tel":"","int_tel":"","email":"","web":"","web_formatted":"","open":"","time":"","lat":25.034045,"lng": 121.559601,"vicinity":"","open_hours":"","marker":{"url":"img/contact/map_pin.svg"},"iw":{"address":true,"desc":true,"email":false,"enable":false,"int_tel":true,"open":true,"open_hours":true,"photo":true,"tel":false,"title":true,"web":false}}
			];
			for (i = 0; i < locations.length; i++) {
				marker = new google.maps.Marker({
					icon: locations[i].marker,
					position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
					map: map,
					title: locations[i].title,
					address: locations[i].address,
					desc: locations[i].desc,
					tel: locations[i].tel,
					int_tel: locations[i].int_tel,
					vicinity: locations[i].vicinity,
					open: locations[i].open,
					open_hours: locations[i].open_hours,
					photo: locations[i].photo,
					time: locations[i].time,
					email: locations[i].email,
					web: locations[i].web,
					iw: locations[i].iw
				});
				markersArray.push(marker);
			}
		}
	</script>
</body>
</html>