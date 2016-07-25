<?php
	$menucode = 'main';
	require('common/config.php') ;
	virtual('common/basetag.php');
?>

<!--=== Slider ===-->
<div class="ms-layers-template">
	<!-- masterslider -->
	<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
		<div class="ms-slide" style="z-index: 10">
			<img src="<?=$assetsurl?>plugins/master-slider/masterslider/style/blank.gif" data-src="<?=$imageurl?>slider1.png" alt="">
			<div class="ms-layer ms-promo-info color-light" style="left:15px; top:160px"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="700"
			data-ease="easeOutExpo"
			>Introducing</div>

			<div class="ms-layer ms-promo-info ms-promo-info-in color-light" style="left:15px; top:210px"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1000"
			data-ease="easeOutExpo"
			>SMDE</div>

			<div class="ms-layer ms-promo-sub color-light" style="left:15px; top:310px"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1300"
			data-ease="easeOutExpo"
			>Ship Marina Development Energy<br> key digital services on web and mobile.</div>


			<a class="ms-layer btn-u" style="left:15px; top:390px" href="#"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1300"
			data-ease="easeOutExpo"
			>사업추진 계획</a>

			<a class="ms-layer btn-u btn-u-dark" style="left:150px; top:390px" href="#"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1300"
			data-ease="easeOutExpo"
			>마리나 개발</a>
		</div>

		<div class="ms-slide" style="z-index: 13">
			<img src="<?=$assetsurl?>plugins/master-slider/masterslider/style/blank.gif" data-src="<?=$imageurl?>slider2.png" alt="">

			<img class="ms-layer" src="<?=$assetsurl?>plugins/master-slider/masterslider/style/blank.gif" data-src="<?=$imageurl?>slider2.png" alt=""
			style="bottom:-10px; left:15px; width:400px; height: auto;"
			data-effect="bottom(100)"
			data-duration="2000"
			data-ease="easeOutExpo"
			data-type="image"
			/>

			<h3 class="ms-layer ms-promo-info-in color-light"  style="left:450px; top:170px;"
			data-effect="right(40)"
			data-duration="2300"
			data-delay="1300"
			data-ease="easeOutExpo"
			>MOST</h3>

			<h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:230px"
			data-effect="left(40)"
			data-duration="2300"
			data-delay="1400"
			data-ease="easeOutBack"
			>INCREDIBLE</h3>

			<h3 class="ms-layer ms-promo-info-in color-darker"  style="left:450px; top:290px"
			data-effect="left(40)"
			data-duration="2300"
			data-delay="1400"
			data-ease="easeOutBack"
			>NEW <span class="color-light">FEATURES</span></h3>

			<a class="ms-layer btn-u" style="left:450px; top:370px" href="#"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1300"
			data-ease="easeOutExpo"
			>LEARN MORE</a>

			<a class="ms-layer btn-u btn-u-dark" style="left:580px; top:370px" href="#"
			data-effect="bottom(40)"
			data-duration="2000"
			data-delay="1300"
			data-ease="easeOutExpo"
			>DOWNLOAD NOW</a>
		</div>
	</div>
</div>
<!-- end of masterslider -->
</div>
<!--=== End Slider ===-->

<!--=== Service Blcoks ===-->
<div class="container content-md">
	<div class="text-center margin-bottom-50">
		<h2 class="title-v2 title-center">SMDE의 3단계 개발계획</h2>
		<p class="space-lg-hor">
			SPC의 집약된 노하우를 바탕으로 새만금 개발단지 내에 볼거리, 먹거리, 놀거리, 쉴거리를 제공하여 국내외 관광객을 대상으로 하는 <span class="color-blue">국내 최대 해양레저 복합 단지로의 도약</span>을 목표로 하며,</br>
			총 3단계, 6년간 개발계획을 수립하여 진행되며 각 단계별 내용은 다음과 같습니다.
		</p>
	</div>

	<!-- Service Blcoks -->
	<div class="row service-box-v1">
		<div class="col-md-4 col-sm-6 md-margin-bottom-40">
			<div class="service-block service-block-default no-margin-bottom">
				<i class="icon-lg rounded-x icon icon-badge"></i>
				<h2 class="heading-sm">Web Design &amp; Development</h2>
				<p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
				<ul class="list-unstyled">
					<li>Responsive Web Desgin</li>
					<li>E-commerce</li>
					<li>App &amp; Icon Design</li>
					<li>Logo &amp; Brand Design</li>
					<li>Mobile Development</li>
					<li>UI/UX Design</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 md-margin-bottom-40">
			<div class="service-block service-block-default no-margin-bottom">
				<i class="icon-lg rounded-x icon-line icon-trophy"></i>
				<h2 class="heading-sm">Marketing &amp; Cunsulting</h2>
				<p>Donec id elit non mi porta gravida at eget metus id elit mi egetine usce dapibus elit nondapibus</p>
				<ul class="list-unstyled">
					<li>Analysis &amp; Consulting</li>
					<li>Email Marketing</li>
					<li>App &amp; Icon Design</li>
					<li>Responsive Web Desgin</li>
					<li>Social Networking</li>
					<li>Documentation</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="service-block service-block-default no-margin-bottom">
				<i class="icon-lg rounded-x icon-line icon-layers"></i>
				<h2 class="heading-sm">SEO &amp; Advertising</h2>
				<p>Donec id elit non mi porta gravida at eget metus id elit mi egetine. Fusce dapibus</p>
				<ul class="list-unstyled">
					<li>Display Advertising</li>
					<li>App &amp; Icon Design</li>
					<li>Analysis &amp; Consulting</li>
					<li>Google AdSense</li>
					<li>Social Media</li>
					<li>Google/Bing Analysis</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- End Service Blcoks -->
</div>
<!--=== End Service Blcoks ===-->

<!--=== Carallax Counter v1 ===-->
<div class="parallax-counter-v1 parallaxBg" style="background-position: 50% 20px;">
	<div class="container">
		<div class="row margin-bottom-10">
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">10629</span>
					<h4>Users</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">277</span>
					<h4>Projects</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">78</span>
					<h4>Team Members</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">109</span>
					<h4>Awards</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!--=== End Carallax Counter v1 ===-->

		<!--=== Owl Clients v1 ===-->
		<div class="container content-sm">
			<div class="owl-clients-v1">
				<div class="item">
					<img src="assets/img/clients4/1.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/2.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/3.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/4.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/5.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/6.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/7.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/8.png" alt="">
				</div>
				<div class="item">
					<img src="assets/img/clients4/9.png" alt="">
				</div>
			</div>
		</div>
		<!--=== End Owl Clients v1 ===-->

	<!---footer include-->
	<?php virtual('common/footer.php');?>
