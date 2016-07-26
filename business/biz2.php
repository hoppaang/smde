<?php
	$menucode = 'biz';
	$submenucode = 'biz2';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent">
		<img src="<?=$imageurl?>img-biz2-1.png" class="margin-bottom-30">
		<img src="<?=$imageurl?>img-biz2-2.png">
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
