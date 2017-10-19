<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>产品详情页</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/pro_details.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link type="text/css" rel="stylesheet" href="css/common.css" />
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/pro_details.js"></script>
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
					<div class="pro_background">
						<h3>产品中心 /</h3>
						<h3>brand introduction</h3>
						<i></i>
						<p><a href="javascript:void(0)">产品详情</a></p>
						<p><a href="javascript:void(0)">所有产品</a></p>
					</div>
				</div>
				<nav class="navbar navbar-default" role="navigation">
					<div>
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
								产品中心
									<b class="caret"></b>
								</a>	
								<ul class="dropdown-menu">
									<li><a href="javascript:void(0)">产品详情</a></li>
									<li><a href="javascript:void(0)">所有产品</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<div class="scrollbar" id="style-10">
					<div class="force-overflow">
						<div class="container">
							<div class="row">
								<div class="product_pic col-xs-12 col-sm-12 col-md-8 col-lg-8">
									<div>
										<a href="javascript:void(0)"><img src="img/product_pic0.jpg" class="img"/></a>
									</div>
									<div class="small_pic">
										<ul>
											<li>
												<a href="javascript:void(0)"><img src="img/product_pic0.jpg"/></a>
												<div class="active_color"></div>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="img/product_pic.jpg"/></a>
												<div class="active_color"></div>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="img/product_pic3.jpg"/></a>
												<div class="active_color"></div>
											</li>
										</ul>
									</div>
								</div>
								<div class="product_price col-md-4 col-lg-4">
									<h3>产品名称：晶致拉丝系列 三联体晶致拉丝系</h3>
									<h3>产品型号：L009</h3>
									<div>
										<p>价格：      <span>￥99.00</span></p>
										<p>成交记录：999</p>
										<p>促销价：      <span>￥88.00</span></p>
									</div>
									<dl>
										<dt>选择套餐</dt>
										<dd><label><input type="checkbox"/>套餐一</label></dd>
										<dd><label><input type="checkbox"/>套餐二</label></dd>
										<dd><label><input type="checkbox"/>套餐三</label></dd>
									</dl>
									<p>运费   浙江温州至 广州 ∨ 快递: 0.00</p>
									<p>选择购买数量</p>
									<button type="button" class="reduce_num">-</button>
									<input type="text" value="1" class="pro_number" />
									<button type="button" class="add_num">+</button>
									<p>库存：999</p>
									<div>
										<button type="button"><a href="confirm_order.html">立即购买</a></button>
										<button type="button">加入收藏</button>
										<button type="button"><a href="shop_cart.html">加入购物车</a></button>
									</div>
								</div>
							</div>
							<div class="row pro_content">
									<h3>产品介绍</h3>
									<p class="col-md-4 col-lg-4">证书编号：2010010201410351证书状态：有效申请人名称：浙
										江罗贝电器有限公司产品名称：带保护门单相两极双用、两极带接地
										暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 250V～
										品牌: LOBEI/罗贝型号: L001插座类型: 86型同城</p>
									<p class="col-md-4 col-lg-4">申请人名称：浙江罗贝电器有限公司产品名称：带保护门单相两极双用、两极
										带接地暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 25
										0V～品牌: LOBEI/罗贝型号: L001插座类型: 86型同城服务: 同城
										物流送货上门插孔类型: 二三插</p>
									<p class="col-md-4 col-lg-4">产品名称：带保护门单相两极双用、两极001插座类型: 86型同城服务: 同
										城带接地暗装插座3C产品型号：Z223 10A
										 250V～;Z13/16 16A 250V～品牌: LOBE罗贝型号: L001插座
										 类型: 86型同城服务: 同城物流送货上门插孔类型: 二三插</p>
									<p class="col-md-4 col-lg-4">证书编号：2010010201410351证书状态：有效申请人名称：浙
										江罗贝电器有限公司产品名称：带保护门单相两极双用、两极带接地
										暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 250V～
										品牌: LOBEI/罗贝型号: L001插座类型: 86型同城</p>
									<p class="col-md-4 col-lg-4">申请人名称：浙江罗贝电器有限公司产品名称：带保护门单相两极双用、两极
										带接地暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 25
										0V～品牌: LOBEI/罗贝型号: L001插座类型: 86型同城服务: 同城
										物流送货上门插孔类型: 二三插</p>
									<p class="col-md-4 col-lg-4">产品名称：带保护门单相两极双用、两极001插座类型: 86型同城服务: 同
										城带接地暗装插座3C产品型号：Z223 10A
										 250V～;Z13/16 16A 250V～品牌: LOBE罗贝型号: L001插座
										 类型: 86型同城服务: 同城物流送货上门插孔类型: 二三插</p>
										<p class="col-md-4 col-lg-4">证书编号：2010010201410351证书状态：有效申请人名称：浙
										江罗贝电器有限公司产品名称：带保护门单相两极双用、两极带接地
										暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 250V～
										品牌: LOBEI/罗贝型号: L001插座类型: 86型同城</p>
									<p class="col-md-4 col-lg-4">申请人名称：浙江罗贝电器有限公司产品名称：带保护门单相两极双用、两极
										带接地暗装插座3C产品型号：Z223 10A 250V～;Z13/16 16A 25
										0V～品牌: LOBEI/罗贝型号: L001插座类型: 86型同城服务: 同城
										物流送货上门插孔类型: 二三插</p>
									<p class="col-md-4 col-lg-4">产品名称：带保护门单相两极双用、两极001插座类型: 86型同城服务: 同
										城带接地暗装插座3C产品型号：Z223 10A
										 250V～;Z13/16 16A 250V～品牌: LOBE罗贝型号: L001插座
										 类型: 86型同城服务: 同城物流送货上门插孔类型: 二三插</p>			 
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
