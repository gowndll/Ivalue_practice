var _thisSite = {};	
var _thisPage = {};
var _isMobile_ = false;
var _isLowBr_ = false 
if('onorientationchange' in window){window.addEventListener('onorientationchange', setWindowRotation, false);}
$(document).ready(function(){
	try{initPageCssFiles();}catch(e){}
	try{initPageJavascript();}catch(e){}

	try{getWindowSize();}catch(e){ alert(e);}
	try{getPageSize();}catch(e){}
	
	try{setLowBrowser();}catch(e){	}
	try{initPageLayout();}catch(e){	}
	try{setMediaObjectFunc();}catch(e){	}
	
	try{_thisLayout_style = getPageStyle(); }catch(e){}
	docLoading(function(){
	});
});
$(window).load(function(){
	try{initImgSizeInfo();}catch(e){	}
	setPageLayout();	
});
$(window).resize(function(e){
	var resizeTimeGap = 10;
	if(_isLowBr_) resizeTimeGap=100;
	clearTimeout(window.resizeEvt);
	window.resizeEvt = setTimeout(function()
	{
		getWindowSize();getPageSize();
		try{
		if(old_wsize.win== undefined ||  wsize.win.w!=old_wsize.win.w){
			resetPageLayout();
		}else{
			resizePageLayoutHeight();
		}
		}catch(e){
			resetPageLayout();
		}
		try{ $(msgPopArr).each(function(k,pp){
			pp._resize();
			});		
		}catch(e){}
	}, resizeTimeGap);
});
$(window).scroll(function(){
	var scrTimeGap = 10;
	if(_isLowBr_) scrTimeGap=100;
	clearTimeout(window.scrollEvt);
	window.scrollEvt = setTimeout(function()
	{
		try{ setScrollEndLayout();}catch(e){}
	}, scrTimeGap);
	clearTimeout(window.scrollAfterEvt);
	window.scrollAfterEvt = setTimeout(function()
	{
		try{ setScrollAfertLayout();}catch(e){}
	}, 5000);
});
function initPageLayout(){
	initNavigation();
	if(_thisPage.initAction!=undefined && _thisPage.initAction.length>0){
		$(_thisPage.initAction).each(function(i,func){try{func();}catch(e){ alert(e);}});
	}
}
function setPageLayout(){
	if(_thisPage.initAction!=undefined && _thisPage.initAction.length>0){
		$(_thisPage.initAction).each(function(i,func){try{func();}catch(e){ alert(e);}});
	}
	try{ thisPageResizeAction(); }catch(e){}
}
function resetPageLayout(){
	mainNavi._reset();
	if(_thisPage.resizeAction!=undefined && _thisPage.resizeAction.length>0){
		$(_thisPage.resizeAction).each(function(i,func){try{func();}catch(e){ alert(e);}});
	}
	try{ thisPageResizeAction(); }catch(e){}
}
function resizePageLayoutHeight(){}
function setScrollEndLayout(){
	var scrTop = $(window).scrollTop();	
	if(_thisPage.scrollAction!=undefined && _thisPage.scrollAction.length>0){$(_thisPage.scrollAction).each(function(i,func){try{func();}catch(e){ alert(e);}});}
}
function setScrollAfertLayout(){}
function setWindowRotation(){
	if(typeof(thisPageRotation)=="function" && thisPageRotation!=undefined){ thisPageRotation();}
	else {
	}
}
