{include file="base/header" /}
{include file="base/nav" /}

<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="background">
			<div class="user_background">
				<h3>会员中心 /</h3>
				<h3>member cente</h3>
				<i></i>
				<p><a href="javascript:void(0)">会员中心</a></p>
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
								<li><a href="{:url('order/index')}">订单详情</a></li>
								<li><a href="{:url('address/index')}">收货地址</a></li>
								<li><a href="javascript:void(0)">缺货登记</a></li>
								<li><a href="javascript:void(0)">个人中心</a></li>
								<li><a href="{:url('user/index')}">用户信息</a></li>
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
		</div>
		<div class="user_content">
			<div class="container">
				<div class="row">
					<!--左边导航栏-->
					<div class="user_nav col-md-2 col-lg-2">
						<dl>
							<dt><a href="javascript:void(0)">订单中心</a></dt>
							<dd><a href="{:url('order/index')}">订单详情</a></dd>
							<dd><a href="{:url('address/index')}">收货地址</a></dd>
							<dd class="last_nav"><a href="javascript:void(0)">缺货登记</a></dd>
							<dt><a href="javascript:void(0)">个人中心</a></dt>
							<dd class="active_bg"><a href="{:url('user/index')}" class="active_cl">用户信息</a></dd>
							<dd><a href="javascript:void(0)">我的收藏</a></dd>
							<dd class="last_nav"><a href="javascript:void(0)">浏览历史</a></dd>
							<dt><a href="javascript:void(0)">账号中心</a></dt>
							<dd><a href="javascript:void(0)">我的红包</a></dd>
							<dd><a href="javascript:void(0)">我的余额</a></dd>
							<dd class="last_nav"><a href="javascript:void(0)">我的积分</a></dd>
						</dl>
					</div>	
					<!--左边导航栏-->
					<!--用户资料-->
					<div class="user_information col-xs-12 col-sm-12 col-md-10 col-lg-10">
						<div class="scrollbar" id="style-10">
							<div class="force-overflow">
								<div class="user_details">
									<div class="user">
										<a href="javascript:void(0)"><img src="__STATIC__/img/user.png" /></a>
										<div>
											<h6>柳暗花明又一村（ID:3888883）</h6>
											<ul>
												<li>会员等级：<span>VIP99</span></li>
												<li>我的收货地址</li>
												<li>我的积分：<span>999</span></li>
												<li><a href="javascript:void(0)">我的优惠卷</a></li>
											</ul>
										</div>
									</div>
									<div class="common_title">
										<h6>最近浏览</h6>
										<i></i>
										<div class="recent">
											<ul class="row">
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="common_title">
										<h6>产品推荐</h6>
										<i></i>
										<div class="suggest">
											<ul class="row">
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
												<li class="col-xs-12 col-sm-6 col-md-4  col-lg-4">
													<div>
														<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/user_product2.jpg"/></a>
														<div class="tips">
															<p><a href="{:url('pro_details/index')}">晶致拉斯系列、三联体</a></p>
															<p>L009</p>
														</div>
													</div>
												</li>
											</ul>
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	
<!--banner-->
		
{include file="base/footer"}