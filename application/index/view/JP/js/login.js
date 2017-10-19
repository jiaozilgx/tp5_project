$(function(){
	$(".checkbox_first").bind("click",function(){
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
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$(".share ul li:nth-child(1) img").mouseover(function(){
		$(this).attr("src","img/qq2.png");
	})
	$(".share ul li:nth-child(1) img").mouseout(function(){
		$(this).attr("src","img/qq.png");
	})
	$(".share ul li:nth-child(2) img").mouseover(function(){
		$(this).attr("src","img/weixin.png");
	})
	$(".share ul li:nth-child(2) img").mouseout(function(){
		$(this).attr("src","img/weixin0.png");
	})
	$(".share ul li:nth-child(3) img").mouseover(function(){
		$(this).attr("src","img/weibo2.png");
	})
	$(".share ul li:nth-child(3) img").mouseout(function(){
		$(this).attr("src","img/weibo.png");
	})
})		
	var checkuser = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $("#userid_tip").html("账号格式不正确").hide();
			}else{
				$("#userid_tip").html("账号格式不正确").show();
				 
			}
		}
	var checkpwd = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $("#pwdid_tip").html("密码格式不正确").hide();
			}else{
				$("#pwdid_tip").html("密码格式不正确").show();
				 
			}
		}
	var checkLogin = function(){
			var user = document.getElementById("userid").value;
			var pwd = document.getElementById("pwd").value;
			if(user =='' || pwd ==''){
				return false;
			}

			return true;
		}
		

		