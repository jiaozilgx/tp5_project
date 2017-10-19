$(function(){
	$(".checkbox").bind("click",function(){
		if($(this).find("label").find("input").is(":checked")){
			$(this).find("label").addClass("on");
		}else{
			$(this).find("label").removeClass("on");
		}
		
	})
	$(".checkbox_second").bind("click",function(){
		if($(this).find("label").find("input").is(":checked")){
			$(this).find("label").addClass("on");
		}else{
			$(this).find("label").removeClass("on");
		}
		
	})
	$(".checkbox_third").bind("click",function(){
		if($(this).find("label").find("input").is(":checked")){
			$(this).find("label").addClass("on");
		}else{
			$(this).find("label").removeClass("on");
		}
		
	})
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$(".add_num").click(function(){
		var num = parseInt($(this).siblings(".pro_number").val());
		num++;
		if(num>99){
			num=99;
		}
		var tdv2=parseInt($(this).parents("td").siblings("td:nth-child(2)").find("b").text());
		$(this).parents("td").siblings(".price").find("p").text(tdv2*num);
		$(this).siblings(".pro_number").val(num);
		total();
		
	})
	$(".reduce_num").click(function(){
		var num = parseInt($(this).siblings(".pro_number").val());
		num--;
		if(num<=1){
			num=1;
		}
		var tdv2=parseInt($(this).parents("td").siblings("td:nth-child(2)").find("b").text());
		$(this).parents("td").siblings(".price").find("p").text(tdv2*num);
		$(this).siblings(".pro_number").val(num);
		total();
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
		var tdv2=parseInt($(this).parents("td").siblings("td:nth-child(2)").find("b").text());
		$(this).parents("td").siblings(".price").find("p").text(tdv2*num);
		total();
	})
	var count=function(){
		var len1=$(".force-overflow input[type=checkbox]").length;
		var len2=$(".force-overflow input[type=checkbox]:checked").length;
		return len1-len2;
	}
	$(".table_first input").click(function(){
		if($(this).is(":checked")){
			$(".checkbox_second>label").addClass("on");
			$(".force-overflow input").prop("checked","checked");
			$(".checkbox_third label").addClass("on");
			$(".checkbox_third input").prop("checked","checked");
			total();
		}else{
			$(".force-overflow input").removeAttr("checked");
			$(".checkbox_second>label").removeClass("on");
			$(".checkbox_third input").removeAttr("checked");
			$(".checkbox_third label").removeClass("on");
			total();
				}
		})
	$(".force-overflow input[type=checkbox]").bind("click",function(){
		if(!count()){
			$(".table_first label").addClass("on");
			$(".table_first input").prop("checked","checked");
		}else{
			$(".table_first input").removeAttr("checked");
			$(".table_first label").removeClass("on");
		}
		total();
	})
	$(".checkbox_third input").click(function(){
		if($(this).is(":checked")){
			$(".table_first label").addClass("on");
			$(".table_first input").prop("checked","checked");
			$(".checkbox_second>label").addClass("on");
			$(".force-overflow input").prop("checked","checked");
			total();
			
		}else{
			$(".table_first input").removeAttr("checked");
			$(".table_first label").removeClass("on");
			$(".force-overflow input").removeAttr("checked");
			$(".checkbox_second>label").removeClass("on");
			total();
			}
		})
	$(".force-overflow input[type=checkbox]").bind("click",function(){
		if(!count()){
			$(".checkbox_third label").addClass("on");
			$(".checkbox_third input").prop("checked","checked");
		}else{
			$(".checkbox_third input").removeAttr("checked");
			$(".checkbox_third label").removeClass("on");
		}
		total();
	})
	var total=function(){
		var check=$(".force-overflow input[type=checkbox]:checked");
		var a=0;
		for(var i=0;i<check.length;i++){
			a+=parseInt(check.eq(i).parents("td").siblings(".price").find("p").text());
		}
		$(".confirm ul li:nth-child(5)").find("b").text(a.toFixed(2));
	}
	$(".confirm ul li:nth-child(2) a").click(function(){
		var check=$(".force-overflow input[type=checkbox]:checked");
		for(var i=0;i<check.length;i++){
			check.eq(i).parents("tr").remove();
		}
		$(".table_first input").removeAttr("checked");
		$(".table_first label").removeClass("on");
		$(".checkbox_third input").removeAttr("checked");
		$(".checkbox_third label").removeClass("on");
		
		total();
	})
	$(".delete a:nth-child(1)").click(function(){
		$(this).parents("tr").remove();
		$(".table_first input").removeAttr("checked");
		$(".table_first label").removeClass("on");
		$(".checkbox_third input").removeAttr("checked");
		$(".checkbox_third label").removeClass("on");
		total();
	})
	
})