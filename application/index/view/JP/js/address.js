$(function(){
	$(".checkbox").bind("click",function(){
		if($(this).find("label").find("input").is(":checked")){
			$(this).find("label").addClass("on");
		}else{
			$(this).find("label").removeClass("on");
		}
	})
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$("[data-toggle='popover']").popover();
	$(".clear").click(function(){
		$(this).parents("li").remove();
	})
	
})
	var checkuser = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $('#usertip').popover('hide');
			}else{
				 $('#usertip').popover('show');
			}
		}
	var checkaddress = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $('#addresstip').popover('hide');
			}else{
				 $('#addresstip').popover('show');
			}
		}
	var checkphone = function(v){
			var reg = /^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
			if(reg.test(v)){
				 $('#phonetip').popover('hide');
			}else{
				 $('#phonetip').popover('show');
			}
		}
	var checkfixphone = function(v){
			var reg = /^([0-9])\d{7}$/i;
			if(reg.test(v)){
				 $('#fixphonetip').popover('hide');
			}else{
				 $('#fixphonetip').popover('show');
			}
		}
	var checkLogin = function(){
			var user=document.getElementById("user").value;
			var address = document.getElementById("detail_add").value;
			var phone = document.getElementById("phonen_number").value;
			var fixphone = document.getElementById("fix_phone").value;
			if(user =='' && address ==''&& phone =='' && fixphone ==''){
				return false;
			}

			return true;
		}
