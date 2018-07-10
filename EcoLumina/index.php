<?php // include_once("db.php");
$page_title = '首頁'; // for meta title
include __DIR__.'/include/__page_head.php';
include __DIR__.'/include/__page_script.php';
?>
	<link rel="stylesheet" href="lib/jquery.fullPage.css?ver=<?php echo filemtime('lib/jquery.fullPage.css'); ?>">
	<link rel="stylesheet" href="lib/owl.carousel.min.css?ver=<?php echo filemtime('lib/owl.carousel.min.css'); ?>">
	<link rel="stylesheet" href="css/index.css?ver=<?php echo filemtime('css/index.css'); ?>">
</head>
<body>
	<?php include __DIR__.'/include/__page_navbar.php'; ?>
	<div id="index">
		<section id="top" class="section txt-white txt-center" style="background-image: url(img/index/kv.jpg);">
			<div class="container">
				<h1><img src="img/index/kv-title.svg" alt="ETI SMART HOME" class="svg"></h1>
				<hr>
				<p>ETI, your IoT solution enable</p>
			</div>
		</section>
		<section id="features" class="section fp-auto-height">
			<div class="w1200">
				<ul id="flow" class="txt-center cf">
					<li class="col33 fleft">
						<img src="img/index/features/phone.svg" class="svg" alt="mobile device">
						<h3>Control<br>Interface</h3>
					</li>
					<li class="col33 fleft">
						<img src="img/index/features/cloud.svg" class="svg" alt="cloud">
						<h3>Compute<br>Cloud</h3>
					</li>
					<li class="col33 fleft">
						<img src="img/index/features/gateway.svg" class="svg" alt="gateway">
						<h3>Coordinate<br>Gateway</h3>
					</li>
				</ul>
			</div>
			<div class="bg-stripe">
				<div class="w1200">
					<div id="apps" class="owl-carousel">
						<div class="item active" data-target="0"><img src="img/index/app/lock.svg" class="svg" alt=""></div>
						<div class="item" data-target="1"><img src="img/index/app/monitor.svg" class="svg" alt=""></div>
						<div class="item" data-target="2"><img src="img/index/app/tv.svg" class="svg" alt=""></div>
						<div class="item" data-target="3"><img src="img/index/app/plug.svg" class="svg" alt=""></div>
						<div class="item" data-target="4"><img src="img/index/app/alarm.svg" class="svg" alt=""></div>
						<div class="item" data-target="5"><img src="img/index/app/airconditioner.svg" class="svg" alt=""></div>
						<div class="item" data-target="6"><img src="img/index/app/refrigerator.svg" class="svg" alt=""></div>
						<div class="item" data-target="7"><img src="img/index/app/thermometer.svg" class="svg" alt=""></div>
						<div class="item" data-target="8"><img src="img/index/app/window.svg" class="svg" alt=""></div>
						<div class="item" data-target="9"><img src="img/index/app/lighting.svg" class="svg" alt=""></div>
						<div class="item" data-target="10"><img src="img/index/app/washingmachine.svg" class="svg" alt=""></div>
					</div>
					<ul id="app_description">
					<?php for($i=0;$i<11;$i++){?>
						<li <?=($i==0)?'class="active"':'""'?>><p><?=$i?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas atque iure soluta, voluptatem minima velit illum doloribus fuga architecto, placeat nobis corporis quo veniam qui obcaecati in. Itaque, nobis omnis!</p></li>
					<?php }?>
					</ul>
				</div>
			</div>
		</section>
		<section id="smartSecurity" class="section secSmart txt-right">
			<div class="w90">
				<h2>SMART<br>SECURITY</h2>
				<div class="container">
					<h3>智能監控&emsp;居家安心</h3>
					<p class="txt-primary">Connecting and Coordinating your smart devices and sensors via wireless Zigbee, and Wi-Fi.</p>
				</div>
				<a href="#" class="btn">SEE MORE</a>
			</div>
			<figure style="background-image: url(img/index/smartSecurity.png);"></figure>
		</section>
		<section id="smartHome" class="section secSmart txt-left">
			<div class="w90">
				<h2>SMART<br>HOME</h2>
				<div class="container">
					<h3 class="txt-primary">智慧家庭&emsp;雲控系統</h3>
					<p>Connecting and Coordinating your smart devices and sensors via wireless Zigbee, and Wi-Fi.</p>
				</div>
				<a href="#" class="btn">SEE MORE</a>
			</div>
			<figure style="background-image: url(img/index/smartHome.png);"></figure>
		</section>
		<section id="smartParking" class="section secSmart txt-right">
			<div class="w90">
				<h2>SMART<br>PARKING</h2>
				<div class="container">
					<h3>自動停車&emsp;便捷生活</h3>
					<p class="txt-primary">Connecting and Coordinating your smart devices and sensors via wireless Zigbee, and Wi-Fi.</p>
				</div>
				<a href="#" class="btn">SEE MORE</a>
			</div>
			<figure style="background-image: url(img/index/smartParking.png);"></figure>
		</section>
		<section id="smartLight" class="section secSmart txt-left">
			<div class="w90">
				<h2>SMART<br>LIGHT</h2>
				<div class="container">
					<h3 class="txt-primary">節能燈光&emsp;明亮生活</h3>
					<p>Connecting and Coordinating your smart devices and sensors via wireless Zigbee, and Wi-Fi.</p>
				</div>
				<a href="#" class="btn">SEE MORE</a>
			</div>
			<figure style="background-image: url(img/index/smartLight.png);"></figure>
		</section>
		<?php include __DIR__.'/include/__page_foot.php'; ?>
	</div>
	<script src="lib/jquery.fullPage.js?ver=<?php echo filemtime('lib/jquery.fullPage.js'); ?>"></script>
	<script src="lib/owl.carousel.min.js?ver=<?php echo filemtime('lib/owl.carousel.min.js'); ?>"></script>
	<script>
		$(function(){
			var header = $('#header'),
				index = $('#index'),
				allSections = index.find('.section');
			index.fullpage({
				autoScrolling: true,
				fixedElements:'#header',
				// fitToSectionDelay: 100,
				responsiveWidth: 620,
				scrollingSpeed: 600,
				// anchors: ['top',
				// 		  'features',
				// 		  'smartSecurity',
				// 		  'smartHome',
				// 		  'smartParking',
				// 		  'smartLight'],
				navigation: false,
				// navigationPosition: 'right',
				// navigationTooltips: ['TOP',
				// 					 'FEATURES',
				// 					 'SMART SECURITY',
				// 					 'SMART HOME',
				// 					 'SMART PARKING',
				// 					 'SMART LIGHT'],
				afterLoad: function(anchorLink, index){
				// change nav opacity after 'top' section
					if(index === 1){
						header.removeClass('fixed');
					}else{
						header.addClass('fixed');
					}
				// section animateion (不重置即不做removeClass)
					allSections.eq(index-1).addClass('fp-animated');
					if(index == 7){
						allSections.eq(index-2).addClass('fp-animated');
					}else if(index < 7){
						allSections.eq(index-1).siblings().removeClass('fp-animated');
					}
				}
			});
			$('#apps').owlCarousel({
				nav:false,
				dots:false,
				loop:false,
				autoplay:false,
				autoHeight:false,
				responsive:{
					0:{
						items:5,
						mouseDrag:true
					},
					768:{
						items:8,
						mouseDrag:true
					},
					1023:{
						items:11,
						mouseDrag:false
					}
				}
			})

		// click feature app icon switch content
			var appContent = $('#app_description li');
			$('#apps .item').on('click', function(){
				var $this = $(this),
					n = $this.data('target');
				$this.addClass('active');
				$this.parent().siblings().children('.item').removeClass('active');
				appContent.eq(n).addClass('active').siblings().removeClass('active');
			})

		// split title for animation
			var text = $('.secSmart h2');
			text.each(function(){
				var $this = $(this),
					$thisText = $this.text(),
					textSplit = $thisText.split(''),
					tag = '';
				for (var j = 0; j < textSplit.length; j++) {
					tag+='<span style="animation-delay:'+j*0.15+'s">';
					tag+=textSplit[j];
					tag+='</span>';
					if(j == 4){
						tag+='<br>'
					}
				}
				$this.html(tag);
			})

		})
	</script>
</body>
</html>