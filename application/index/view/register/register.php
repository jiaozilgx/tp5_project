<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>注册页</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/register.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/register.js"></script>
		<script type="text/javascript" src="js/cityDate.js"></script>
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
				<div class="input_list">
					<form class="form-horizontal fr_register" role="form" action="login.html" onsubmit="return checkLogin()">
						<div class="form-group">
							<label for="username">会员名</label>
							<input id="username" type="text" onblur="checkuser(this.value);"/>
							<div class="form_alert" id="user_alert">
								<i></i>
								<p>请输入会员名并牢记当前账号</p>
							</div>
						</div>
						<div class="form-group">
							<label for="pwd">密码</label>
							<input id="pwd" type="password" onblur="checkpwd(this.value);"/>
							<div class="form_alert" id="pwd_alert">
								<i></i>
								<p>请输入登录密码并牢记密码</p>
							</div>
						</div>
						<div class="form-group">
							<label for="okpwd">确认密码</label>
							<input id="okpwd" type="password" onblur="checkokpwd(this.value);"/>
							<div class="form_alert" id="ok_alert">
								<i></i>
								<p>请确认密码是否有误</p>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" type="text" onblur="checkemail(this.value);"/>
							<div class="form_alert" id="email_alert">
								<i></i>
								<p>请输入可用的邮箱账号</p>
							</div>
						</div>
						<div class="form-group">
							<label for="phone">手机号</label>
							<input id="phone" type="text" onblur="checkphone(this.value);"/>
							<div class="form_alert" id="phone_alert">
								<i></i>
								<p>请输入有效的手机号码</p>
							</div>
						</div>
						<div class="form-group">
							<label for="address">所在地</label>
							<select class="form-control" id="address">
								<option>广东省</option>
								<option>广西省</option>
								<option>安徽省</option>
							</select>
							<select class="form-control" id="address">
								<option>广州市</option>
								<option>中山市</option>
								<option>汕头市</option>
							</select>
							<div class="form_alert" id="address_alert">
								<i></i>
								<p>请正确填写所在地</p>
							</div>
						</div>
						<div class="form-group">
							<label for="test">验证码</label>
							<input id="test" type="text" onblur="checktest(this.value);"/>
							<a href="javascript:void(0)"><img src="img/test.jpg" /></a>
							<div class="form_alert" id="testphone_alert">
								<i></i>
								<p>请输入真确的验证码</p>
							</div>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" id="inlineCheckbox1" value="option1"/>同意注册协议
							</label>
						</div>
						<div>
							<input type="submit" value="确认注册" />
						</div>
						<div>
							<p><a href="login.html">已有账号返回登录</a></p>
						</div>	
					</form>
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
