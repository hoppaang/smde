<?php
	$menucode = 'company';
	$submenucode = 'partner';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent">
		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner1.png"/>
			<label>국제자산신탁(주)</label>
			<a href="https://www.kukjetrust.com/" target="_blank">www.kukjetrust.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner2.png"/>
			<label>한국해외기술공사</label>
			<a href="http://www.kcieng.com/" target="_blank">www.kcieng.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner3.png"/>
			<label>이에스개발(주)</label>
			<a href="<?=$baseurl?>" target="_blank">www..com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner4.png"/>
			<label>비즈마켓오션</label>
			<a href="<?=$baseurl?>" target="_blank">www..com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner5.png"/>
			<label>이도건설</label>
			<a href="<?=$baseurl?>" target="_blank">www..com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner6.png"/>
			<label>WEVIO</label>
			<a href="http://www.wevio.com/" target="_blank">www.wevio.com</a>
		</div>

		<div class="partnet-item">
			<img src="<?=$imageurl?>img-partner7.png"/>
			<label>통해</label>
			<a href="http://www.thgec.com/" target="_blank">www.thgec.com</a>
		</div>

	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
