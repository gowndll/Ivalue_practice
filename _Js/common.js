var divWidth;
$(function($){
	// input & select
	$('.chk-select').find('select').change(function() {
		  var current = $('.select-input').val();
		  if (current != 'null') {
			  $(this).css({'color':'#000'})
			  $(this).parent().addClass('active');
		  } else {
			   $(this).css({'color':'#666'})	
			   $(this).parent().removeClass('active');
		  }
	}); 
	$('.chk-input').find('input[type=text],textarea').css({'color':'#000'});
	$('.chk-input').find('input[type=text],textarea').on('change keydown keypress keyup',function() {
	  var current = $(this).parent().find('input[type=text]').val();
	  if (current != 'null') {
		  $(this).css({'color':'#000'});
		  $(this).parent().addClass('active');
		  $(this).parent().find('.delete').show();
	  } else {
		  $(this).css({'color':'#000'});
		  $(this).parent().removeClass('active');
		  $(this).parent().find('.delete').hide();
	  }
	}); 
	$('.chk-input.active').find('input[type=text],textarea').css({'color':'#000'});
	$('.chk-input.active').find('input[type=text],textarea').change(function() {
	  var current = $(this).val();
	  if (current != 'null') {
		  $(this).css({'color':'#000'});
		  $(this).parent().find('.delete').show();
	  } else {
		  $(this).css({'color':'#000'});
		  $(this).parent().find('.delete').show();
	  }
	}); 
	$('.passValue').on('change keydown keypress keyup',function() {
		  var current = $('.passValue').val();
		  if (current != 'null') {
			  $(this).attr('type', 'password'); 
		  } else {
			 $(this).attr('type', 'text'); 
		  }
	}); 
	// top-btn & scroll
	if($(".top-btn").length<1) $("<a href='#n' class='top-btn'><span class='blind'>top</span></a>").appendTo($("#doc"));
	$('.top-btn').click(function(){
		$("body, html").animate({
				scrollTop: 0
		}, 500)
	});
});	
function sizeControl(width) {
	width = parseInt(width);
	var bodyHeight = document.documentElement.clientHeight; 
	var bodyWidth = document.documentElement.clientWidth; 
	var chkHeader = $('#header-wrap').outerHeight();
	var schHeader = $('.mobile-search').outerHeight();
	
}
jQuery(function($){
	sizeControl($(this).width());
	$(window).resize(function() {
		if(this.resizeTO) {
			clearTimeout(this.resizeTO);
		}
		this.resizeTO = setTimeout(function() {
			$(this).trigger('resizeEnd');
		}, 0);
	});
});	
$(window).on('resizeEnd', function() {
	sizeControl($(this).width());
});
$(window).load( function() { 
	sizeControl($(this).width());
});

$(window).scroll(function() {
	var position = $(window).scrollTop(); 
	var bodyWidth = document.documentElement.clientWidth; 
	var GnbH = $('#gnb-wrap').outerHeight();
	var headH = $('#header').outerHeight();
	if (position > 120){
		$('#header-wrap').removeClass('rlz')
		$('#header-wrap').addClass('fix');
	}
	if (position > 150){
		$('#header-wrap').removeClass('rlz')
		$('#header-wrap').addClass('active');
	}
	if (position < 39){
		$('#header-wrap').removeClass('fix active');	
		$('#header-wrap').addClass('rlz');
	}
	
	if (position > 300){
		$('.top-btn').addClass('over');
	}else{
		$('.top-btn').removeClass('over');
	}
});
$(window).load(function(){
	var position = $(window).scrollTop(); 
	var bodyWidth = document.documentElement.clientWidth; 
	var GnbH = $('#gnb-wrap').outerHeight();
	var headH = $('#header').outerHeight();
	if (position > 120){
		$('#header-wrap').removeClass('rlz')
		$('#header-wrap').addClass('fix');
	}
	if (position > 130){
		$('#header-wrap').removeClass('rlz')
		$('#header-wrap').addClass('active');
	}
	if (position < 39){
		$('#header-wrap').removeClass('fix active');	
		$('#header-wrap').addClass('rlz');
	}
	

	if (position > 240){
		$('#header-wrap').addClass('active');
	}else{
		$('#header-wrap').removeClass('active');
	}

	if (position > 300){
		$('.top-btn').addClass('over');
	}else{
		$('.top-btn').removeClass('over');
	}
});
function clearText(thefield) {
  if (thefield.defaultValue==thefield.value) {
    thefield.value="";
  }
} 
function defaultText(thefield) {
  if (thefield.value=="") {
    thefield.value=thefield.defaultValue;
  }
}
