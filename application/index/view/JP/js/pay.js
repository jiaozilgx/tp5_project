$(function(){
	$(".radio_first").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".radio_second").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".radio_third").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".radio_fourth").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".radio_fifth").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".checkbox_sixth").bind("click",function(){
		if($(this).find("label").find("input").is(":checked")){
			$(this).find("label").addClass("on");
		}else{
			$(this).find("label").removeclass("on");
		}
	})
	$(".radio_seventh").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".radio_eight").bind("click",function(){
		$(this).find("label").addClass("on");
		$(this).siblings().find("label").removeClass("on");
	})
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$(".on_color>div").click(function(){
		var index = $(this).index();
		$(".on_color").find("label").eq(index).addClass("color");
		$(".on_color").find("div").eq(index).siblings().find("label").removeClass("color");
		$(".on_color1").find("p").eq(index).addClass("color1");
		$(".on_color1").find("p").eq(index).siblings().removeClass("color1");
		$(".on_color2").find("a").eq(index).addClass("color2");
		$(".on_color2").find("a").eq(index).siblings().removeClass("color2");
	})
	$(".clear").click(function(){
		$(this).parents("li").remove();
	})
})
