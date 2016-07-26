<?php
	$menucode = 'company';
	$submenucode = 'org';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent org">
		<img src="<?=$imageurl?>img-org.png">
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
