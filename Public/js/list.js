$(function(){
	$(".list-middle li span").hover(function(){
		$(this).siblings().show();
	},function(){
		$(this).siblings().hide();
	});
	
	$(".more").click(function() {
        if($(this).hasClass("more-to")){
	        $(this).parents('.tag-list').find('.area-choice,dt').stop().animate({height:"40px"},{queue:false,duration:300});
	        $(this).find('span').text("更多");
	        $(this).parent().find(".more").removeClass('more-to');
        }else{
        	var el = $(this).parents('.tag-list').find('.area-choice');
	        var et = $(this).parents('.tag-list').find('dt');
	        curHeight = el.height();
	        autoHeight = el.css('height', 'auto').height();
	        el.height(curHeight).stop().animate({height:autoHeight},{queue:false,duration:300});
	        et.height(curHeight).stop().animate({height:autoHeight},{queue:false,duration:300});
	        $(this).find('span').text("收起");
	        $(this).parent().find(".more").addClass('more-to');
        }
	        
	});
    
});