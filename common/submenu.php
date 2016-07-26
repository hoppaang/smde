<?php if($menucode == "company"): ?>
	<div class="submenu">
		<a href="<?=$baseurl?>company/ceo.php" <?php if($submenucode == "ceo"): ?>class="active"<?php endif; ?>>대표인사말</a>
		<a href="<?=$baseurl?>company/history.php" <?php if($submenucode == "history"): ?>class="active"<?php endif; ?>>연혁</a>
		<a href="<?=$baseurl?>company/org.php" <?php if($submenucode == "org"): ?>class="active"<?php endif; ?>>조직도</a>
		<a href="<?=$baseurl?>company/partner.php" <?php if($submenucode == "partner"): ?>class="active"<?php endif; ?>>고객사</a>
	</div>
<?php elseif($menucode == "biz"): ?>
	<div class="submenu">
		<a href="<?=$baseurl?>business/biz1.php" <?php if($submenucode == "biz1"): ?>class="active"<?php endif; ?>>사업추진계획</a>
		<a href="<?=$baseurl?>business/biz2.php" <?php if($submenucode == "biz2"): ?>class="active"<?php endif; ?>>개발컨셉 및 테마</a>
		<a href="<?=$baseurl?>business/biz3.php" <?php if($submenucode == "biz3"): ?>class="active"<?php endif; ?>>마리나 개발</a>
			<a href="<?=$baseurl?>business/biz4.php" <?php if($submenucode == "biz4"): ?>class="active"<?php endif; ?>>친환경 에너지 개발</a>
	</div>
<?php elseif($menucode == "support"): ?>
	<div class="submenu">
		<a href="<?=$baseurl?>support/news.php" <?php if($submenucode == "news"): ?>class="active"<?php endif; ?>>뉴스&자료실</a>
		<a href="<?=$baseurl?>support/location.php" <?php if($submenucode == "location"): ?>class="active"<?php endif; ?>>오시는길</a>
	</div>
<?php endif; ?>
