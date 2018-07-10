<?php // include_once("db.php");
$page_title = '應用方案'; // for meta title
include __DIR__.'/include/__page_head.php';
include __DIR__.'/include/__page_script.php';
?>
<link rel="stylesheet" href="css/app.css">
</head>
<body>
	<?php include __DIR__.'/include/__page_navbar.php'; ?>
	<section id="top" class="w1300">
		<ul>
			<li class="active">
				<figure class="reveal_right">
					<div style="background-image: url(img/app/banner-security.jpg);"></div>
					<h2 class="title" data-br="4">SMART<br>SECURITY</h2>
				</figure>
				<h3 class="reveal_left">科技安防跨界應用解決方案</h3>
				<p class="reveal_left">透過科技設備、監測技術、資通訊系統平台，結合產業的安裝實務、空間資訊、供應鏈生態、法規等各地使用現狀，擴大與人工智慧、影像辨識、身分管理、直播技術與儲存、物連雲端、大數據等科技的融合，達成高度智慧畫與客製化的市場使用需求，提供安全、更聰明的決策管理與服務，讓跨界技術整合所創造的智慧應用更具市場價值。</p>
			</li>
			<li>
				<figure class="reveal_right">
					<div style="background-image: url(img/app/banner-home.jpg);"></div>
					<h2 class="title" data-br="4">SMART<br>HOME</h2>
				</figure>
				<h3 class="reveal_left"></h3>
				<p class="reveal_left"></p>
			</li>
			<li>
				<figure class="reveal_right">
					<div style="background-image: url(img/app/banner-parking.jpg);"></div>
					<h2 class="title" data-br="4">SMART<br>PARKING</h2>
				</figure>
				<h3 class="reveal_left"></h3>
				<p class="reveal_left"></p>
			</li>
			<li>
				<figure class="reveal_right">
					<div style="background-image: url(img/app/banner-light.jpg);"></div>
					<h2 class="title" data-br="4">SMART<br>LIGHT</h2>
				</figure>
				<h3 class="reveal_left"></h3>
				<p class="reveal_left"></p>
			</li>
		</ul>
	</section>
	<ul id="app_cate" class="w1600 cf">
		<li class="fleft active"><h3>SMART SECURITY</h3></li>
		<li class="fleft"><h3>SMART HOME</h3></li>
		<li class="fleft"><h3>SMART PARKING</h3></li>
		<li class="fleft"><h3>SMART LIGHT</h3></li>
	</ul>
	<ul id="app_sub_cate" class="w1600">
		<li class="active">SECURITY01</li>
		<li>SECURITY02</li>
		<li>SECURITY03</li>
		<li>SECURITY04</li>
		<li>SECURITY05</li>
		<li>SECURITY06</li>
	</ul>
	<section class="w1600">
		<hr>
		<ul id="app_list" class="txt-white txt-center cf">
		<?php for($i=0;$i<8;$i++){ ?>
			<li class="col25 fleft reveal_bottom">
				<figure style="background-image: url(img/app/01.jpg);"></figure>
				<div class="container">
					<h4>科技安防跨界應用解決方案</h4>
					<a href="app_content.php">閱讀更多</a>
					<ul class="txt-center">
						<li class="ib-middle"><a href="#" class="share-icon fb"></a></li>
						<li class="ib-middle"><a href="#" class="share-icon twitter"></a></li>
						<li class="ib-middle"><a href="#" class="share-icon line"></a></li>
						<li class="ib-middle"><a href="#" class="share-icon wa"></a></li>
					</ul>
				</div>
			</li>
		<?php } ?>
		</ul>
		<ul class="pagination">
			<li class="prev"><a href="">&lt;</a></li>
			<li><a href="" class="active">1</a></li>
			<li><a href="">2</a></li>
			<li><a>...</a></li>
			<li><a href="">5</a></li>
			<li><a href="">6</a></li>
			<li class="next"><a href="">&gt;</a></li>
		</ul>
	</section>
	<?php include __DIR__.'/include/__page_foot.php'; ?>
	<script src="lib/truncate.min.js"></script>
	<script>
		$(function () {
		// truncate for content title
			$('#app_list h4').truncate({
				lines: 2
			});
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
		});
	</script>
</body>
</html>