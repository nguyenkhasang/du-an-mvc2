
var detectDevice=false;
$(function(){
	$('#uipgMenuWrap ul li').hover(function(){
		if(!detectDevice){$(this).addClass('hover');}
	},function(){
		if(!detectDevice){$(this).removeClass('hover');}
	});

	$('#uipgMenuWrap ul li').click(function(event){
		event.stopPropagation();
		$(this).toggleClass('active').siblings().removeClass('active');
	});
	
	$(window).resize(function(){ detectDeviceFunc(); });
	detectDeviceFunc();

	$( "<div id='uipgOverlay'></div>" ).insertAfter( "#uipgMenuWrap" );
	$( "<div class='uipgHamMenu'></div>" ).insertBefore( "#uipgMenuWrap .uipgMenu" );

	$('.uipgHamMenu').click(function(){
		$('#uipgOverlay, #uipgMenuWrap').toggleClass('showMenu');
	});

});

function detectDeviceFunc(){
	$('#uipgMenuWrap li').removeClass('hover').removeClass('active');
	if( parseInt($(document).width()) <= 767 ){ 
		detectDevice=true;
		$('#uipgMenuWrap').addClass('uipgM').removeClass('uipgD');
	}
	else{
		detectDevice=false;
		$('#uipgMenuWrap').addClass('uipgD').removeClass('uipgM');
	}
}

