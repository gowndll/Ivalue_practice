<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

?>

	<!-- s : #header-wrap //-->
	<header id="header-wrap">
		<div id="header">
			
			<div class="inner">
				<div style="max-width:2000px; margin: 0 auto;">
				<h1 id="logo"><a href="./"><span class="blind">HGP</span></a></h1>
				<a href="#n" class="bt-mnall"><span class="blind">메뉴</span></a>
				<!-- s: mainNavi-wrap -->
				<div id="mainNavi-wrap" >
					<h2 class="blind">HGP 메뉴</h2>
					<div id="mainNavi">
						<div class="mn-top">
							<h2><span class="blind">HGP MENU</span></h2>
							<button class="bt-mnclose"><span class="blind">메뉴닫기</span></button>
						</div>
						<!-- <a href="#n" class="m-language"><span>English</span></a> -->
						<ul class="topmenu" id="topmenu">
							<li id="tm01" class="mn_l1">
								<a href="#about" class="mn_a1" data-target="#about"><span>ABOUT</span></a>
							</li>
							<li id="tm02" class="mn_l1"><a href="#service" class="mn_a1" data-target="#service"><span>SERVICE</span></a>
								<div class="depth2-wrap">
									<ul class="depth2">
										<li class="mn_l2"><a href="#advisory" class="mn_a2" data-target="#advisory"><span>Advisory Services</span></a></li>
										<li class="mn_l2"><a href="#consultancy" class="mn_a2" data-target="#consultancy"><span>Consultancy Services</span></a></li>
										<li class="mn_l2"><a href="#government" class="mn_a2" data-target="#government"><span>Government Contracting Services</span></a></li>
										<li class="mn_l2"><a href="#landing"  class="mn_a2" data-target="#landing"><span>Business Expansion Services-Soft Landing</span></a></li>
										<li class="mn_l2"><a href="#investment" class="mn_a2" data-target="#investment"><span>Investment Services</span></a></li>
										<li class="mn_l2"><a href="#development" class="mn_a2" data-target="#development"><span>Development Services</span></a></li>
									</ul>
								</div>
							</li>
							<li id="tm03" class="mn_l1">
								<a href="#introduce"  class="mn_a1" data-target="#introduce"> <span>LEADERSHIP</span></a>
							</li>
							<li id="tm04" class="mn_l1">
								<a href="#partners"  class="mn_a1" data-target="#partners"><span>PARTNERS</span></a>
							</li>
							<li id="tm05" class="mn_l1">
								<a href="#contact"  class="mn_a1" data-target="#contact"><span>CONTACT</span></a>
							</li>
						</ul>
						<ul class="mth-link">
							<li><a href="#n"><span></span></a></li>
							<li><a href="#n"><span></span></a></li>
							<li><a href="#n"><span>English</span></a></li>
						</ul>
					</div>
					<script type="text/javascript">initNavigation(0,0)</script>
				</div></div>
			</div>
			<!-- e: mainNavi-wrap -->
		</div>
		<div class="mn-bar"></div>
	</header>
	<!-- e :#header-wrap //-->