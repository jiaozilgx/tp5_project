<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>联系我们</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/contact.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/contact.js"></script>
		<script type="text/javascript" src="js/common.js" ></script>
	</head>
	<body>
		<!--header-->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-5 col-lg-3">
						<p>欢迎来到佳普电气有限公司！</p>
					</div>
					<div class="pull-right col-xs-3 col-sm-4 col-md-4 col-lg-3">
						<a href="user.html">会员中心</a>
						<a href="login.html">登录</a>
						<a href="register.html">注册</a>
						<a href="shop_cart.html">购物车</a>
					</div>
				</div>
			</div>
		</div>
		<!--header-->
		<!--nav-->
		<div class="nav_menu">
			<div class="container">
				<div class="row">
					<div class="logo col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<a href="index.html"><img src="img/index_logo.png" /></a>
					</div>
					<div class="nav_bar pull-left col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<ul>
							<li><a href="index.html">首页</a></li>
							<li class="state"><a href="about.html">品牌介绍</a></li>
							<li class="state"><a href="product.html">产品中心</a></li>
							<li class="state"><a href="news.html">新闻中心</a></li>
							<li class="state"><a href="contact.html">联系我们</a></li>
						</ul>
					</div>
					<div class="input-group col-xs-2 col-sm-2 col-md-2 col-lg-2 search">
						<input type="text" class="form-control pull-right" placeholder="输入关键字"/>
						<span class="input-group-addon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					</div>
					<div class="pull-right col-xs-2 col-sm-1 col-md-1 col-lg-1 icon">
						<span class="glyphicon glyphicon-th-large"></span>
					</div>
				</div>
			</div>
			<div class="nav_menu_second hidden-lg hidden-md">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="about.html">品牌介绍</a></li>
					<li><a href="product.html">产品中心</a></li>
					<li><a href="news.html">新闻中心</a></li>
					<li><a href="contact.html">联系我们</a></li>
				</ul>
			</div>
		</div>
		<!--nav-->
		<!--banner-->
		<div class="banner">
			<div class="banner_content">
				<div class="background">
					<div>
						<h3>联系我们 /</h3>
						<h3>contact us</h3>
						<i></i>
						<p><a href="javascript:void(0)">联系我们</a></p>
					</div>
				</div>
				<div class="scrollbar" id="style-10">
					<div class="force-overflow">
						<div class="map">
							<div style="width:100%;height:560px;border:white solid 1px;" id="dituContent"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-lg-5">
										<form action="index.html" onsubmit="return checkLogin()">
											<textarea placeholder="留言:" style="resize: none;" onblur="checktext(this.value);" id="textarea"></textarea>
											<div id="texttip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
											<input type="text" placeholder="验证码"/>
											<button type="button">获取验证码</button>
											<input type="text" placeholder="电话" onblur="checkphone(this.value);" id="phone"/>
											<div id="phonetip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
											<input type="text" placeholder="昵称" onblur="checkname(this.value);" id="name"/>
											<div id="nametip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
											<button type="submit">提交</button>
										</form>
									</div>
									<div class="col-md-5 col-lg-5 contact_ways">
										<h4>联系方式</h4>
										<p>地址：广州市天河区石牌桥天俊阁</p>
										<p>电话：13666136661</p>
										<p>邮箱：13666136661@qq.com</p>
										<p>联系人：张先生、李先生</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<!--banner-->
		<!--footer-->
		<div class="footer">
			<div>
				<span>版权所有©佳普国际电气有限公司</span>
				<ul>
					<li>分享：</li>
					<li><a href="javascript;void(0)"><img src="img/qq.png"/></a></li>
					<li><a href="javascript;void(0)"><img src="img/weixin0.png"/></a></li>
					<li><a href="javascript;void(0)"><img src="img/weibo.png"/></a></li>
				</ul>
			</div>
		</div>
		<!--footer-->
	</body>
</html>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript" src="js/map.js"></script>
