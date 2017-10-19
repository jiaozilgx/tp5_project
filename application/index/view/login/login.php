<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>登录页</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/login.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
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
						<form class="bs-example bs-example-form fr-login" role="form" action="user.html" onsubmit="return checkLogin()" >
							<div class="input-group">
								<span class="input-group-addon"><i></i></span>
								<input type="text" class="form-control" placeholder="账号/手机号" id="userid" onblur="checkuser(this.value);"/>
							</div>
							<div class="tips_second">
								<strong id="userid_tip">用户名不能为空</strong>
							</div>
							<div class="input-group pwd">
								<span class="input-group-addon"><i></i></span>
								<input type="password" class="form-control" placeholder="密码" id="pwd" onblur="checkpwd(this.value);"/>
							</div>
							<div class="tips_third">
								<strong id="pwdid_tip">密码不能为空</strong>
							</div>
							<div class="auto_login">
								<ul>
									<li>
										<div class="checkbox checkbox_first">
											<label>
												<input type="checkbox" id="checkbox_first" />记住账号
											</label>
										</div>
									</li>
									<li>
										<div class="checkbox checkbox_second">
											<label>
												<input type="checkbox" id="checkbox_second" />自动登录
											</label>
										</div>
									</li>
								</ul>
							</div>
							<input type="submit" class="submit" value="登录"/>
						</form>
						<p>第三方账户登录</p>
						<div class="share">
							<ul>
								<li><a href="javascript:void(0)"><img src="img/qq.png"/></a></li>
								<li><a href="javascript:void(0)"><img src="img/weixin0.png"/></a></li>
								<li><a href="javascript:void(0)"><img src="img/weibo.png"/></a></li>
							</ul>
						</div>
						<div class="tips">
							<ol>
								<li><a href="javascript:void(0)">忘记密码</a></li>
								<li>/</li>
								<li><a href="register.html">注册账号</a></li>
							</ol>
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
