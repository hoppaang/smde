<?php
	$menucode = 'support';
	$submenucode = 'location';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent">
		<!-- Google Map -->
		<!-- <div id="map" class="map map-box map-box-space margin-bottom-40"></div> -->
		<div class="map map-box margin-bottom-40">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12919.881854364226!2d126.76235588345726!3d35.947692480566914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35705b59e0179c83%3A0x6e11d71919a9fb0!2s20-6+Heukseok-gil%2C+Gaejeong-myeon%2C+Gunsan%2C+Jeollabuk-do!5e0!3m2!1sen!2skr!4v1459958380167" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<!-- End Google Map -->

		<!-- Contacts -->
		<div class="headline"><h2>Contacts</h2></div>
		<ul class="list-unstyled who margin-bottom-30">
			<li><a href="#">전북 군산시 계정면 흑석길 20-6 (우:54175)</a></li>
			<li><a href="#"><i class="fa fa-envelope"></i>info@sowp.com</a></li>
			<li><a href="#"><i class="fa fa-phone"></i>063.461.5541</a></li>
			<li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
		</ul>

		<!-- Business Hours -->
		<div class="headline"><h2>Business Hours</h2></div>
		<ul class="list-unstyled margin-bottom-30">
			<li><strong>월~금요일:</strong> 9am ~ 6pm / <strong>토요일:</strong> 9am ~ 1pm / <strong>일요일/공휴일:</strong> 휴무</li>
		</ul>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
