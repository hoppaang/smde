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
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
