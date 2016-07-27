<?php
	$menucode = 'biz';
	$submenucode = 'biz3';
	require('../common/config.php') ;
	virtual('../common/basetag.php');
?>
<!-- top color bar --><?php virtual('../common/colorbar.php');?>

<div class="container">
	<!-- submenu incloud --><?php virtual('../common/submenu.php');?>

	<!-- subcontent begin -->
	<div class="subcontent biz3">
		<img src="<?=$imageurl?>imgtitle-01.png" class="imgtitle"/>
		<ul class="margin-bottom-30">
			<li class="subtitle">시행방법</li>
			<li>- 사업신청자 : 사업시행 7개 회사가 특수목적법인 SPC(SMDE)설립으로 시행</li>
			<li>- 참여기업 : 국제자산신탁 / 이에스개발/ 한국해외기술공사 / SMD(인터파크비즈마켓) / 이도건설 / WEVIO / 통해</li>
			<li class="subtitle">역할분담</li>
			<li>- 마리나 부지조성 : 국제자산신탁, 이에스개발, 한국해외기술공사, 이도건설, 통해</li>
			<li>- 해수워터파크 및 계류시설 설치 : SMD(인터파크비즈마켓), Wevio(미국,뉴질랜드)</li>
			<li>- 리조트 및 분양호텔건축 : 대명, Wevio(겸)</li>
			<li class="subtitle">사업내용</li>
			<li>- 사업위치 : [부안]새만금 관광레저 용지</li>
			<li>- 사업량 : [부안]1,100억원(약 936,077m², 28.3만평), 계류시설1,000척</li>
			<li>- 사업내용: 마리나 부지조성 후, 관광시설설치(계류시설/해수워터파크/분양호텔/컨벤션/Aqua Park/아울렛 등)</li>
			<li>- 인허가 및 공사기간 : ’16년 1월~’18년 12월(총 36개월)</li>
		</ul>

		<img src="<?=$imageurl?>imgtitle-02.png" class="imgtitle"/>
		<table>
			<tr>
				<th class="depth1" rowspan="3">구분</th>
				<th class="depth1" colspan="12" style="border:1px solid rgba(0,0,0,.07);border-width:0 1px 1px 1px">사업기간(개월)</th>
				<th class="depth1" rowspan="3">비고</th>
			</tr>
			<tr>
				<th class="depth2" colspan="4" style="border:1px solid rgba(0,0,0,.07);border-width:0 0 1px 1px">2016년</th>
				<th class="depth2" colspan="4" style="border:1px solid rgba(0,0,0,.07);border-width:0 1px 1px 1px">2017년</th>
				<th class="depth2" colspan="4" style="border:1px solid rgba(0,0,0,.07);border-width:0 1px 1px 0">2018년</th>
			</tr>
			<tr>
				<th class="depth3">3</th>
				<th class="depth3">6</th>
				<th class="depth3">9</th>
				<th class="depth3">12 </th>
				<th class="depth3">3</th>
				<th class="depth3">6</th>
				<th class="depth3">9</th>
				<th class="depth3">12 </th>
				<th class="depth3">3</th>
				<th class="depth3">6</th>
				<th class="depth3">9</th>
				<th class="depth3">12 </th>
			</tr>
			<tr class="border-left">
				<td class="tbody-th">인허가 완료 및 사업착수 준비</td>
				<td colspan="2"><span class="ganttbar"></span></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr class="border-left">
				<td class="tbody-th">마리나 부지조성 공사 및 분양계획 수립</td>
				<td></td>
				<td colspan="9"><span class="ganttbar"></span></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr class="border-left">
				<td class="tbody-th">기반시설공사 및 계류시설 설치</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="4"><span class="ganttbar"></span></td>
				<td></td>
				<td></td>
			</tr>
			<tr class="border-left">
				<td class="tbody-th">준공계제출및분양실시</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="2"><span class="ganttbar"></span></td>
				<td></td>
			</tr>
		</table>
	</div>
	<!-- subcontent end -->
</div>


<!---footer include-->
<?php virtual('../common/footer.php');?>
