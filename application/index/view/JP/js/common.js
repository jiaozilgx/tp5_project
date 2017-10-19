$(function(){
	$(".footer ul li:nth-child(2) img").mouseover(function(){
		$(this).attr("src","img/qq2.png");
	})
	$(".footer ul li:nth-child(2) img").mouseout(function(){
		$(this).attr("src","img/qq.png");
	})
	$(".footer ul li:nth-child(3) img").mouseover(function(){
		$(this).attr("src","img/weixin.png");
	})
	$(".footer ul li:nth-child(3) img").mouseout(function(){
		$(this).attr("src","img/weixin0.png");
	})
	$(".footer ul li:nth-child(4) img").mouseover(function(){
		$(this).attr("src","img/weibo2.png");
	})
	$(".footer ul li:nth-child(4) img").mouseout(function(){
		$(this).attr("src","img/weibo.png");
	})
})
