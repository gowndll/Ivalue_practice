<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

	<!-- s: #footer-wrap //-->
	<footer id="footer-wrap" >
		<div id="footer" class="div-cont">	
			<p class="in-copy" style="color: #fff">Copyright ⓒ Healthcare Green Partners. All rights reserved.</p>
			<p class="f-mail"><a href="mailto:contact@hgpworld.com"><img src="/_Img/Layout/mail.png" alt="">contact@hgpworld.com</a></p>

		</div>
	</footer>
	<!-- e: #footer-wrap //-->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>