$(function(){
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$(".delete a:nth-child(1)").click(function(){
		$(this).parents("tr").remove();
	})
	$(".all_product li").eq(0).find("a").addClass("active_line");
	$(".all_product li").eq(0).find("b").addClass("active_cl");
	$(".all_product li").click(function(){
		$(this).siblings().find("a").removeClass("active_line");
		$(this).siblings().find("b").removeClass("active_cl");
		$(this).find("a").addClass("active_line");
		$(this).find("b").addClass("active_cl");
		
		
	})
})
