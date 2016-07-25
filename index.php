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
			>Ship Marina Development Energy.</div>


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
	<div class="text-center margin-bottom-20">
		<h2 class="title-v2 title-center">SMDE의 3단계 개발계획</h2>
		<p class="space-lg-hor">
			SPC의 집약된 노하우를 바탕으로 새만금 개발단지 내에 볼거리, 먹거리, 놀거리, 쉴거리를 제공하여 국내외 관광객을 대상으로 하는 <span class="color-blue">국내 최대 해양레저 복합 단지로의 도약</span>을 목표로 하며,</br>
			총 3단계, 6년간 개발계획을 수립하여 진행되며 각 단계별 내용은 다음과 같습니다.
		</p>
	</div>

	<!-- Service Blcoks -->
	<div class="row service-box-v1">
		<div class="col-md-4 col-sm-6 md-margin-bottom-10">
			<div class="service-block service-block-default no-margin-bottom">
				<span class="service-icon column1"></span>
				<h2 class="heading-sm">1차 관광레저 부지조성 [2년간계획]</h2>
				<p>새만금개발 당위성 설명</p>
				<ul class="list-unstyled">
					<li>18.6만평 관광레저용 단지 조성</li>
					<li>16.48만평 4호방조재 시점 단지 조성</li>
					<li>18.6만평 관광레저용 단지 조성</li>
					<li>16.48만평 4호방조재 시점 단지 조성</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 md-margin-bottom-40">
			<div class="service-block service-block-default no-margin-bottom">
				<span class="service-icon column2"></span>
				<h2 class="heading-sm">2차 기업투자유치 및 시설활성화 [1년간계획]</h2>
				<p>계류시설활성화</p>
				<ul class="list-unstyled">
					<li>외국기업투자유치 - wevio</li>
					<li>관광사업 - 인터파크비즈마켓</li>
					<li>국내관광투자유치 - SMDE</li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="service-block service-block-default no-margin-bottom">
				<span class="service-icon column3"></span>
				<h2 class="heading-sm">3차 부동산조성 및 시설운영투자 [3년간계획]</h2>
				<p>리조트 및 분양호텔건축</p>
				<ul class="list-unstyled">
					<li>KCI한국해외기술공사</li>
					<li>ES개발</li>
					<li>이도건설</li>
					<li>통해</li>
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
			<label><span class="color-blue">한눈에 보는</span> 새만금개발규모</label>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">5,000</span>억원
					<h4>MOU규모</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">186,000</span>평
					<h4>관광레저용지</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">137,900</span>평
					<h4>상가시설</h4>
				</div>
			</div>
			<div class="col-sm-3 col-xs-6">
				<div class="counters">
					<span class="counter">183,500</span>평
					<h4>주거시설</h4>
				</div>
			</div>
		</div>
	</div>
</div>
<!--=== End Carallax Counter v1 ===-->

<div class="container content-md">
	<h2>협력업체</h2>
	<ul class="partners">
		<li><img src="<?=$imageurl?>img-partner1.png"/></li>
		<li><img src="<?=$imageurl?>img-partner2.png"/></li>
		<li><img src="<?=$imageurl?>img-partner3.png"/></li>
		<li><img src="<?=$imageurl?>img-partner4.png"/></li>
		<li><img src="<?=$imageurl?>img-partner5.png"/></li>
		<li><img src="<?=$imageurl?>img-partner6.png"/></li>
		<li><img src="<?=$imageurl?>img-partner7.png"/></li>
	</ul>
</div>

		<!--=== Owl Clients v1 ===-->
		<!-- <div class="container content-sm">
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
		</div> -->
		<!--=== End Owl Clients v1 ===-->

	<!---footer include-->
	<?php virtual('common/footer.php');?>
