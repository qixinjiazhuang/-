$(document).ready(function(){
	$(".myorder").mouseenter(function(){
		$(this).children("a").addClass("hover");
		$(this).children("div").removeClass("hide");
	});
	$(".myorder").mouseleave(function(){
		$(this).children("a").removeClass("hover");
		$(this).children("div").addClass("hide");
	});
	$(".with-sub-nav").mouseenter(function(){
		$(this).addClass("enter-nav");
	});
	$(".with-sub-nav").mouseleave(function(){
		$(this).removeClass("enter-nav");
	});
	$(".search-item").mouseenter(function(){
		$(this).addClass("search-item-over");
		$(this).children("ul").show();
	});
	$(".search-item").mouseleave(function(){
		$(this).removeClass("search-item-over");
		$(this).children("ul").hide();
	});
	$(".zx_input input").focus(function(){
		$(this).css({"border-color":"#d00"});
	});
	$(".zx_input input").blur(function(){
		$(this).css({"border-color":""});
	});
	$(".huxing_btn").click(function(){
		$(this).parent().addClass("on");
	});
	$(".huxing_solo").mouseleave(function(){
		$(this).removeClass("on");
	});
	$(".v_indexBox li").mouseenter(function(){
		$(this).children().css({"backgroundPositionY":"-196px"});
	});
	$(".v_indexBox li").mouseleave(function(){
		$(this).children().css({"backgroundPositionY":"0px"});
	});
	$(".zz ol li").mouseenter(function(){
		$(this).addClass("on");
		$(this).siblings().removeClass("on");
		var index = $(this).index()+1;
		console.log(index);
		$(".dl"+index).css({"display":"block"}).siblings("dl").css({"display":"none"});
	});
	$(".do_firm_l a.fd").mouseenter(function(){
		$(this).addClass("hover");
	});
	$(".do_firm_l a.fd").mouseleave(function(){
		$(this).removeClass("hover");
	});
	$(".opacity_img").mouseenter(function(){
		$(this).animate({"opacity":"0.7"});
	});
	$(".opacity_img").mouseleave(function(){
		$(this).animate({"opacity":"1"});
	});
	$(".do_firm_l a.yd").mouseenter(function(){
		$(this).addClass("hover");
	});
	$(".do_firm_l a.yd").mouseleave(function(){
		$(this).removeClass("hover");
	});
	$(".bottomBtnList li").mouseenter(function(){
		$(this).addClass("nowOn");
		$(this).siblings().removeClass("nowOn");
		var index = $(this).index();
		$(".bottomTabBox").eq(index).addClass("nowOn");
		$(".bottomTabBox").eq(index).siblings().removeClass("nowOn");
	});
	$(".shortcutBox a.btnBox").click(function(){
		$("body,html").animate({scrollTop:0},500);
	});
	$(".case-content li.masonry-brick").mouseenter(function(){
		$(this).css({"border-color":"#d00"});
	});
	$(".case-content li.masonry-brick").mouseleave(function(){
		$(this).css({"border-color":""});
	});
	$(".search-item ul li").click(function(){
        $(this).addClass("on").siblings().removeClass("on");
        var text = $(this).children().text();
        $(".search-item span").html(text+"<em></em>");
        $(".search-item ul").css({"display":"none"});
    });
    $(".huxing_solo").each(function(){
        $(this).find("li").on("click",function(){
            $(this).addClass("on").siblings().removeClass("on");
            var text = $(this).children().text();
            $(this).parent().parent().find(".huxing_item").html(text);
            $(this).parent().parent().removeClass("on");
        });
    });
    $(".top_nav .lt").mouseenter(function(){
    	$(".region_box").css("display","block");
    });
    $(".top_nav .lt").mouseleave(function(){
    	$(".region_box").css("display","none");
    });
    $(".region_list li").hover(function(){
    	$(this).addClass("region_on").siblings().removeClass("region_on");
    	var index = $(this).index();
    	$(".region_con").eq(index).addClass("region_show").siblings().removeClass("region_show");
    });
	$(".address-li select").change(function(){
		var val = $(this).val();
		$(this).parent().parent().find(".location").text(val);
		$(".address-li #city #sel-pro").remove();
	});
	$(".help_info dl").each(function(){
		$(this).children("dt").click(function(){
			if($(this).hasClass("add")){
				$(this).removeClass("add");
				$(this).parent().children("dd").css("display","");
			}else{
				$(this).addClass("add");
				$(this).parent().children("dd").css("display","none");
			}
		});
	});
	

	var win=$(window); //得到窗口对象
		win.scroll(function(){
		var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
	   if(scrollTop>=600){
	   		$(".shortcutBox a.btnBox").css({"height":"40px","transition":"height ease 0.3s","border":"1px solid #e0e0e0"});
	   }else{
	  	 	$(".shortcutBox a.btnBox").css({"height":"0px","transition":"height ease 0.3s","border":"none"});
	   }
	});
});
/* 设置cookie */
	    var setCookie = function (name, value) {
	    	var Days = 7;
			var exp = new Date();
			exp.setTime(exp.getTime() + Days*24*60*60*1000);
	        document.cookie = name + "=" + value + ";path=/;expires=" + exp.toGMTString();

	    };

		function set_city(area_main,city_name){
			setCookie('area',area_main);
			setCookie('city',city_name);
		    
		}

		//JS操作cookies方法!
	//写cookies
	// var username=document.cookie.replace(/[ ]/g,"").split(";").split("=")[1];
	// $("#J_region").text(username);

