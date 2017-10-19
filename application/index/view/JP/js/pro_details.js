$(function(){
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$(".small_pic>ul>li").find("img").eq(0).addClass("on");
	$(".small_pic>ul>li").find(".active_color").eq(0).addClass("on_sec");
	$(".small_pic>ul>li").click(function(){
		var src = $(this).find("img").attr("src");
		$(".img").attr("src",src);
		var index = $(this).find("img").index();
		$(this).siblings().find("img").removeClass("on");
		$(this).find("img").addClass("on");
		$(this).siblings().find(".active_color").removeClass("on_sec");
		$(this).find(".active_color").addClass("on_sec");
	})
	$(".add_num").click(function(){
		var num = parseInt($(this).siblings(".pro_number").val());
		num++;
		if(num>99){
			num=99;
		}
		$(this).siblings(".pro_number").val(num);
	})
	$(".reduce_num").click(function(){
		var num = parseInt($(this).siblings(".pro_number").val());
		num--;
		if(num<=1){
			num=1;
		}
		$(this).siblings(".pro_number").val(num);
	})
	$(".pro_number").change(function(){
		var numa=$(this).val();
		if(isNaN(numa)){
			numa=1;
		}else if(numa>99){
			numa=99;
		}else if(numa<1){
			numa=1;
		}
		numa=Math.round(numa);
		$(this).val(numa);
	})
})