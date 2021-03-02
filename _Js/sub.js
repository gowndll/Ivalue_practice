$(function() {
	if($(".content-slider-ovclick").length<1) $("<div class='content-slider-ovclick'/>").appendTo($("#contents")).hide();
	$('#snbNav').find('.ctrl').click(function(){
		var $cback = $(".content-slider-ovclick");
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('#snbNav').find('ul').hide();
			$('.content-slider-ovclick').hide();

			
		}else{
			$(this).addClass('active');
			$('#snbNav').find('ul').show();
			$('.content-slider-ovclick').show();
			$cback.unbind("click").bind("click",function(){
				$('#snbNav').find('ul').hide();	
				$('#snbNav').find('.ctrl').removeClass('active');
				$('.content-slider-ovclick').hide();
			}).show();
		}
	});

	

	
	
});
function sizeControlSub(width) {
	width = parseInt(width);
	var bodyHeight = document.documentElement.clientHeight; 
	var bodyWidth = document.documentElement.clientWidth; 
	
	var docH = $('#doc').outerHeight();
	var chkHeader = $('#header-wrap').outerHeight();
	var chkVis = $('#top-vis').outerHeight();
	var snbH = $('#snbNav').outerHeight();
	
	
	$('.content-slider-ovclick').css({'height': docH - chkHeader - chkVis + 300});
}
jQuery(function($){
	sizeControlSub($(this).width());
	$(window).resize(function() {
		if(this.resizeTO) {
			clearTimeout(this.resizeTO);
		}
		this.resizeTO = setTimeout(function() {
			$(this).trigger('resizeEnd');
		}, 10);
	});
});	
$(window).on('resizeEnd', function() {
	sizeControlSub($(this).width());
});
$(window).load( function() { 
	sizeControlSub($(this).width());
});
	

function view_tab(f,b)	{
	for(i=1; i<=b; i++) {
		contentid = document.getElementById("v-con"+i);
		tabid = document.getElementById("v-tab"+i);
		if(i==f) {			
			contentid.className = "con";
			tabid.className = "active";
		}else{
			contentid.className = "con hide";
			tabid.className = "";
		}
	}
}