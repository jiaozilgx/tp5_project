<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>我的订单页</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/order.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/order.js"></script>
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
						<h3>我的订单 /</h3>
						<h3>my order</h3>
						<i></i>
						<p><a href="javascript:void(0)">我的订单</a></p>
					</div>
				</div>
				<nav class="navbar navbar-default" role="navigation">
					<div>
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
								会员中心
									<b class="caret"></b>
								</a>	
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0)">订单中心</a></li>
									<li><a href="order.html">订单详情</a></li>
									<li><a href="address.html">收货地址</a></li>
									<li><a href="javascript:void(0)">缺货登记</a></li>
									<li><a href="javascript:void(0)">个人中心</a></li>
									<li><a href="user.html">用户信息</a></li>
									<li><a href="javascript:void(0)">我的收藏</a></li>
									<li><a href="javascript:void(0)">浏览历史</a></li>
									<li><a href="javascript:void(0)">账号中心</a></li>
									<li><a href="javascript:void(0)">我的红包</a></li>
									<li><a href="javascript:void(0)">关于佳普</a></li>
									<li><a href="javascript:void(0)">我的余额</a></li>
									<li><a href="javascript:void(0)">我的积分</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<div class="user_content">
					<div class="container">
						<div class="row row_all">
							<!--左边导航栏-->
							<div class="user_nav col-md-2 col-lg-2">
								<dl>
									<dt><a href="javascript:void(0)">订单中心</a></dt>
									<dd class="active_bg"><a href="order.html" class="active_cl">订单详情</a></dd>
									<dd><a href="address.html">收货地址</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">缺货登记</a></dd>
									<dt><a href="javascript:void(0)">个人中心</a></dt>
									<dd><a href="user.html">用户信息</a></dd>
									<dd><a href="javascript:void(0)">我的收藏</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">浏览历史</a></dd>
									<dt><a href="javascript:void(0)">账号中心</a></dt>
									<dd><a href="javascript:void(0)">我的红包</a></dd>
									<dd><a href="javascript:void(0)">我的余额</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">我的积分</a></dd>
								</dl>
							</div>
							<div class="my_order col-md-10 col-lg-10">
								<ul class="row all_product">
									<li class="col-md-2 col-lg-2"><a href="javascript:void(0)"><b>全部</b>（99）</a></li>
									<li class="col-md-2 col-lg-2"><a href="javascript:void(0)"><b>已完成</b>（50）</a></li>
									<li class="col-md-2 col-lg-2"><a href="javascript:void(0)"><b>待付款</b>（20）</a></li>
									<li class="col-md-2 col-lg-2"><a href="javascript:void(0)"><b>待评价</b>（29）</a></li>
									<li class="col-md-4 col-lg-4">
										<div class ="input-group">
											<input type="text" class="form-control">
											<span class="input-group-addon">订单查询</span>
										</div>
									</li>
									<i></i>
								</ul>
								<div class="table-responsive table-res_first">
									<table class="table">
										<thead>
											<tr>
												<th><p>订单商品</p></th>
												<th><p>收货人</p></th>
												<th><p>支付金额</p></th>
												<th><p>订单状况</p></th>
												<th><p>操作</p></th>
											</tr>
										</thead>
									</table>
								</div>
								<span class="line"></span>
								<div class="scrollbar" id="style-10">
									<div class="force-overflow">
										<div class="table-responsive table-res_second">
											<table class="table table-seond">
												<tbody>
													<tr>
														<td>
															<a href="pro_details.html"><img src="img/order_pic.jpg"/></a>
															<ul>
																<li><p>单号：1008610086</p></li>
																<li><p><a href="pro_details.html">晶致拉丝系列、三联体</a></p></li>
																<li><p>L009</p></li>
															</ul>
														</td>
														<td>
															<p>张先生</p>
														</td>
														<td>
															<b>99.99元</b>
														</td>
														<td>
															<a href="javascript:void(0)">已完成</a>
															<br />
															<a href="order_details.html">查看详情</a>
															<br />
															<a href="javascript:void(0)">物流信息</a>
															<a href="pro_details.html">查看</a>
														</td>
														<td class="delete">
															<a href="javascript:void(0)">删除</a>
															<br />
															<a href="javascript:void(0)">再次购买</a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="pro_details.html"><img src="img/order_pic.jpg" class="img-responsive"/></a>
															<ul>
																<li><p>单号：1008610086</p></li>
																<li><p><a href="pro_details.html">晶致拉丝系列、三联体</a></p></li>
																<li><p>L009</p></li>
															</ul>
														</td>
														<td>
															<p>张先生</p>
														</td>
														<td>
															<b>99.99元</b>
														</td>
														<td>
															<a href="javascript:void(0)">已完成</a>
															<br />
															<a href="order_details.html">查看详情</a>
															<br />
															<a href="javascript:void(0)">物流信息</a>
															<a href="pro_details.html">查看</a>
														</td>
														<td class="delete">
															<a href="javascript:void(0)">删除</a>
															<br />
															<a href="javascript:void(0)">再次购买</a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="pro_details.html"><img src="img/order_pic.jpg"/></a>
															<ul>
																<li><p>单号：1008610086</p></li>
																<li><p><a href="pro_details.html">晶致拉丝系列、三联体</a></p></li>
																<li><p>L009</p></li>
															</ul>
														</td>
														<td>
															<p>张先生</p>
														</td>
														<td>
															<b>99.99元</b>
														</td>
														<td>
															<a href="javascript:void(0)">已完成</a>
															<br />
															<a href="order_details.html">查看详情</a>
															<br />
															<a href="javascript:void(0)">物流信息</a>
															<a href="pro_details.html">查看</a>
														</td>
														<td class="delete">
															<a href="javascript:void(0)">删除</a>
															<br />
															<a href="javascript:void(0)">再次购买</a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="pro_details.html"><img src="img/order_pic.jpg"/></a>
															<ul>
																<li><p>单号：1008610086</p></li>
																<li><p><a href="pro_details.html">晶致拉丝系列、三联体</a></p></li>
																<li><p>L009</p></li>
															</ul>
														</td>
														<td>
															<p>张先生</p>
														</td>
														<td>
															<b>99.99元</b>
														</td>
														<td>
															<a href="javascript:void(0)">已完成</a>
															<br />
															<a href="order_details.html">查看详情</a>
															<br />
															<a href="javascript:void(0)">物流信息</a>
															<a href="pro_details.html">查看</a>
														</td>
														<td class="delete">
															<a href="javascript:void(0)">删除</a>
															<br />
															<a href="javascript:void(0)">再次购买</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="page">
									<ul class="pagination">
										<li><a href="javascript(0)">上一页</a></li>
										<li><a href="javascript(0)">下一页</a></li>
										<li><a href="javascript(0)">1</a></li>
										<li><a href="javascript(0)">2</a></li>
										<li><a><img src="img/page.png"/></a></li>
										<li><a href="javascript(0)">99</a></li>
										<li><a href="javascript(0)">尾页</a></li>
									</ul>
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
