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
})	
	var checkuser = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $("#user_alert").hide();
			}else{
				 $("#user_alert").show();
			}
		}	
	var checkpwd = function(v){
			var reg = /^\w{5,15}$/;
			if(reg.test(v)){
				 $("#pwd_alert").hide();
			}else{
				 $("#pwd_alert").show();
			}
		}		
	var checkokpwd = function(v){
		var chkPass = $("#pwd").val()
			if(v == chkPass){
				 $("#ok_alert").hide();
			}else{
				 $("#ok_alert").show();
			}
		}			
	var checkemail = function(v){
			var reg = /[a-z0-9-.]{1,30}@[a-z0-9-]{1,65}.(com|net|org|info|biz|([a-z]{2,3}.[a-z]{2}))/;
			if(reg.test(v)){
				 $("#email_alert").hide();
			}else{
				 $("#email_alert").show();
			}
		}				
	var checkphone = function(v){
			var reg = /^(13[0-9]|14[0-9]|15[0-9]|18[0-9])\d{8}$/i;
			if(reg.test(v)){
				 $("#phone_alert").hide();
			}else{
				 $("#phone_alert").show();
			}
		}
	var checktest = function(v){
			var reg = /^\w{4}$/;
			if(reg.test(v)){
				 $("#testphone_alert").hide();
			}else{
				 $("#testphone_alert").show();
			}
		}
	var checkLogin = function(){
			var user = document.getElementById("username").value;
			var pwd = document.getElementById("pwd").value;
			var okpwd = document.getElementById("okpwd").value;
			var email = document.getElementById("email").value;
			var phone = document.getElementById("phone").value;
			var test = document.getElementById("test").value;
			if(user =='' || pwd =='' || okpwd =='' || email =='' || phone =='' || test==''){
				return false;
			}

			return true;
		}
