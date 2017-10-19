$(function(){
	$(".icon").click(function(){
		$(".nav_menu_second").slideToggle(200);
	})
	$("[data-toggle='popover']").popover();
})
	var checktext = function(v){
				var reg = /^\w{5,200}$/;
				if(reg.test(v)){
					 $('#texttip').popover('hide');
				}else{
					 $('#texttip').popover('show');
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
	var checkname = function(v){
				var reg = /^\w{5,15}$/;
				if(reg.test(v)){
					 $('#nametip').popover('hide');
				}else{
					 $('#nametip').popover('show');
				}
			}
	var checkLogin = function(){
			
			var textarea = document.getElementById("textarea").value;
			var phone = document.getElementById("phone").value;
			var name = document.getElementById("name").value;
			if(textarea =='' && phone ==''&& name ==''){
				return false;
			}
			//获取复选框，checked表示是否勾选，勾选返回true，否则返回false
			return true;
		}
