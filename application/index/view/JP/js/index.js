$(function() {
	$("#myCarousel").swipe({

		swipeLeft: function() {
			$(this).carousel("next")
		},
		swipeRight: function() {
			$(this).carousel("prev")
		}
	})
	
	$(".box").swipe({
		swipeLeft: function() {
			console.log(123);
			$("#next").trigger("click");
		},
		swipeRight: function() {
			$("#prev").trigger("click");
		},
		tap:function(){
			console.log(123)
		},
		excludedElements:"button, input, select, textarea, .noSwipe"
	})
	$(".icon").click(function() {
		$(".nav_menu_second").slideToggle(200);
	})
	$('.max-pro').height($("body").height());
	$(".scroll_top").click(function() {
		
		$(".max-pro").fadeIn(700).css("display", "flex");
		$(".scroll_down").fadeIn(700);
		$(".scroll_top").fadeOut(700);
	})
	$(".scroll_down").click(function() {
		$(".max-pro").fadeOut(700);
		$(".scroll_down").fadeOut(700);
		$(".scroll_top").fadeIn(700);

	})

	var bool = true;
	var liLen = $(".box li").length; //li的个数
	var liWidth = $(".box li").eq(0).width(); //一个li的宽度
	$(".box ul").css({
		"width": liLen * liWidth + "px"
	}); //整个ul的宽度
	for(var i = 0; i < liLen; i++) {
		$(".box li").eq(i).css({
			"left": i * liWidth + "px"
		});
	}
	$("#next").click(function() {
		show()
	})
	$("#prev").click(function() {
		if(bool) {
			bool = false;
			if(liLen > 4) {
				for(var i = 0; i < liLen - 1; i++) {
					$(".box li").eq(i).animate({
						"left": liWidth * (i + 1) + "px"
					}, function() {
						bool = true;
					})
				}
				$(".box li").eq(liLen - 1).prependTo(".box ul").css({
					"left": -liWidth + "px"
				}).animate({
					"left": 0 + "px"
				}, function() {});
			}
		}
	})
	$("#prev,#next").mouseover(function() {
		clearInterval(lun)
	})
	$("#prev,#next").mouseout(function() {
		lun = setInterval(function() {
			show(1)
		}, 3000)
	})

	function show() {
		if(bool) {
			bool = false;
			if(liLen > 4) {
				$(".box li").eq(0).animate({
					"left": -liWidth + "px"
				}, function() {
					$(".box li").eq(0).css({
						"left": liWidth * (liLen - 1) + "px"
					}).appendTo(".box ul");
					bool = true;
				});
				for(var i = 1; i < liLen; i++) {
					$(".box li").eq(i).animate({
						"left": liWidth * (i - 1) + "px"
					}, function() {
						bool = true;
					})
				}
			}
		}
	}
	var lun = setInterval(function() {
		show()
	}, 3000)

})