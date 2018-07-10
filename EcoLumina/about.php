<?php // include_once("db.php");
$page_title = '關於晟明'; // for meta title
include __DIR__.'/include/__page_head.php';
include __DIR__.'/include/__page_script.php';
?>
<link rel="stylesheet" href="css/about.css">
</head>
<body>
	<?php include __DIR__.'/include/__page_navbar.php'; ?>
	<section id="top" class="txt-white" style="background-image: url(img/about/about-1.jpg);">
		<div class="w1200">
			<h2 class="title" data-br="4">ABOUT<br>ECOLUMINA</h2>
			<div class="container">
				<p>晟明科技是一個客戶導向、研發見長的公司，並以達成客戶百分百的滿意度為目標。我們視邊緣運算物聯雲端的整合性技術為通往下一世代實虛連動、智慧統合的關鍵，而各別行業的垂直應用將是突破點所在。晟明科技專注於邊緣運算物聯網整合平台，與各產業的策略夥伴合作以應用在不同領域，晟明的解決方案整合各產業專業，共同向全球銷售這項結合後的新應用產品。</p>
			</div>
		</div>
	</section>
	<section id="key">
		<div class="w800 txt-center">
			<h3 class="txt-primary reveal_list">卓越是我們的承諾<br>而客戶是我們最珍貴的資源</h3>
			<p class="txt-primary reveal_list">在不同垂直應用帶來了專業知識與新興應用，晟明期許成為各行業客戶背後的邊緣運算物聯網平台。因此擴大異業結盟，切入不同通路，提供各別行業特有的實體設備相容性、以及虛擬介面統一化將是我們核心競爭力之一</p>
		</div>
	</section>
	<section id="ability" class="section txt-white" style="background-image: url(img/about/about-2.jpg);">
		<div class="w1200">
			<div class="container">
				<p>晟明科技具備系統創新式邊緣運算平台技術與快速軟硬體整合能力，藉由邊緣運算技術將不同應用的物聯網連結上對應的雲端服務，提供全方位連線解決方案，跨平台連線整合各種裝置，滿足多樣化產品；並且可以完整跨平台連線應用，縮短開發時程，所完成之產品達到簡易連線設定，降低售後服務成本，並能客製化與優化使用者介面。這些能力可以達成的目標市場包括科技安防、應用智慧宅與附屬產品、智慧停車服務與系統、工業控制的物聯技術解決方案等領域。</p>
			</div>
		</div>
	</section>
	<section id="slogan">
		<h2 class="title" data-br="12">ETI, your IoT<br>solution enabler</h2>
		<div class="bg-stripe"></div>
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
			sr.reveal('#top, #ability', {
				duration: 1000,
				distance:'0',
				afterReveal: function (domEl) {
					$(domEl).addClass('animated');
				},
				afterReset: function (domEl) {
					$(domEl).removeClass('animated');
				}
			});
		});
	</script>
</body>
</html>