$(function() {
	$(window).load(function() {
		onMainSlider();
		$('.visual-txt').addClass('anitxt');

	});

});
function onMainSlider() {
	$('.msec-visual').addClass("ani")
	$('.visual-slide').on('init', function(){
		$(this).addClass("ani");
	}).slick({
		autoplay: true,
		dots: true,
		arrows: true,
		speed: 650,
		autoplaySpeed: 18000, // first video slide time 
		fade: true,
		infinite: true,
		cssEase: 'linear',
	});
	
	$('.visual-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
		//console.log(currentSlide);
		if(currentSlide == 0){
			$('.visual-slide').slick('slickSetOption', 'autoplaySpeed', '18000');
			/*var $video = $('#vid');
			$video.on('canplaythrough', function() {
			   this.get(0).play();
			});*/
			var $video = $('#vid').get(0);
			$video.play();

		}
		if(currentSlide == 1){		
			$('.visual-slide').slick('slickSetOption', 'autoplaySpeed', '4000');	
			/*
			$video.on('canplaythrough', function() {
			   this.get(0).stop();
			});*/
			var $video = $('#vid').get(0);
			$video.pause();
			$video.currentTime = 0;
			
		}
		if(currentSlide == 2){
			$('.visual-slide').slick('slickSetOption', 'autoplaySpeed', '4000');	
			/*
			$video.on('canplaythrough', function() {
			   this.get(0).stop();
			});*/
			var $video = $('#vid').get(0);
			$video.pause();
			$video.currentTime = 0;	
		}
	});
	
}
function sizeControlMain(width) {
	width = parseInt(width);
	var bodyHeight = document.documentElement.clientHeight; 
	var bodyWidth = document.documentElement.clientWidth; 
	
	
}
jQuery(function($){
	sizeControlMain($(this).width());
	$(window).resize(function() {
		if(this.resizeTO) {
			clearTimeout(this.resizeTO);
		}
		this.resizeTO = setTimeout(function() {
			$(this).trigger('resizeEnd');
		}, 1);
	});
});	
$(window).on('resizeEnd', function() {
	sizeControlMain($(this).width());
});
$(window).load( function() { 
	sizeControlMain($(this).width());
});



	
	
	
	
	
	
	
	
	
//scrolltopPosition
$(document).ready(function(){
	
	
	$(".mn_a1").click(function() {
		
	var scrollPosition = $($(this).attr("data-target")).offset().top;
		//	aa=$(this).attr("data-target");
		//	console.log(aa)
		$('html').stop().animate({scrollTop:scrollPosition});
	})
	
	$('.mn_a2').click(function(){
		
	var scrollPosition = $($(this).attr("data-target")).offset().top;
		//console.log('a2');
		$('html').stop().animate({ scrollTop:scrollPosition});
	})
	
	$('.itemtop span').click(function(){
		
	var scrollPosition = $($(this).attr("data-target")).offset().top;
		//console.log('dd')
		$('html').stop().animate({scrollTop:scrollPosition});
	})
});





