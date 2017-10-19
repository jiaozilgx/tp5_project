{include file="base/header" /}
{include file="base/nav" /}

<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="background">
			<div class="order_background">
				<h3>我的订单 /</h3>
				<h3>my order</h3>
				<i></i>
				<p><a href="javascript:void(0)">订单详情</a></p>
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
		<div class="scrollbar" id="style-10">
			<div class="force-overflow">
				<div class="user_content">
					<div class="container">
						<div class="row">
							<!--左边导航栏-->
							<div class="user_nav col-md-2 col-lg-2">
								<dl>
									<dt><a href="javascript:void(0)">订单中心</a></dt>
									<dd class="active_bg"><a href="{:url('order/index')}" class="active_cl">订单详情</a></dd>
									<dd><a href="{:url('address/index')}">收货地址</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">缺货登记</a></dd>
									<dt><a href="javascript:void(0)">个人中心</a></dt>
									<dd><a href="{:url('user/index')}">用户信息</a></dd>
									<dd><a href="javascript:void(0)">我的收藏</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">浏览历史</a></dd>
									<dt><a href="javascript:void(0)">账号中心</a></dt>
									<dd><a href="javascript:void(0)">我的红包</a></dd>
									<dd><a href="javascript:void(0)">我的余额</a></dd>
									<dd class="last_nav"><a href="javascript:void(0)">我的积分</a></dd>
								</dl>
							</div>
							<!--左边导航栏-->
							<!--右边收货地址-->
							<div class="address col-md-10 col-lg-10">
									<div class="service">
										<ul>
											<li><p>订单号：1310086230</p></li>
											<li><p>下单时间：2016-08-05</p></li>
											<li><p>售后服务电话：800-820-8820</p></li>
										</ul>
									</div>
								<div class="row">
									<div class="order_state col-md-4 col-lg-4">
										<div>
											<p>订单号：1310086230</p>
											<h3>完成</h3>
											<button type="button">评论</button>
											<p>打印订单</p>
										</div>	
									</div>
									<div class="product_state col-md-8 col-lg-8">
										<div>
											<h4>商品状态：商品收货完成</h4>
											<div>
												<ul>
													<li><a href="javascript:void(0)">建议</a><a href="javascript:void(0)">/意见</a></li>
													<li><a href="javascript:void(0)">退货</a><a href="javascript:void(0)">/退款</a></li>
													<li><a href="javascript:void(0)">再次购买</a></li>
												</ul>
											</div>
											<i></i>
											<div>
												<ol>
													<li>
														<span>订单提交</span>
														<p>2016-08-05</p>
														<p>12:33:33</p>
													</li>
													<li><i></i></li>
													<li>
														<span>支付完成</span>
														<p>2016-08-05</p>
														<p>12:33:33</p>
													</li>
													<li><i></i></li>
													<li>
														<span>商品已发货</span>
														<p>2016-08-05</p>
														<p>12:33:33</p>
													</li>
													<li><i></i></li>
													<li>
														<span>收货完成</span>
														<p>2016-08-05</p>
														<p>12:33:33</p>
													</li>
												</ol>
												<p class="user_add">积分：+999</p>
												<p class="user_value">会员成长值：+8888</p>
											</div>
										</div>
									</div>	
								</div>
								<div class="row">
									<div class="person_information col-md-4 col-lg-4">
										<div>
											<b>收货人信息</b>
											<p>张三三</p>
											<p>132*****425</p>
											<b>发票信息</b>
											<p>未开发</p>
											<b>订单备注</b>
											<p>无</p>
											<b>支付信息</b>
											<p>支付方式：支付宝</p>
											<p>运费：￥0.00</p>
											<p>卷卡优惠：￥999.99</p>
											<p>订单总金额：￥10000.00</p>
											<span>实付金额：￥9000.99</span>
										</div>
									</div>
									<div class="shop_infor col-md-8 col-lg-8">
										<div class="scrollbar_second" id="style-10">
											<div class="force-overflow">
												<div>
													<ul>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
															</div>
														</li>
														<li>
															<div class="new_infor">
																<dl>
																	<dd><p>2016-08-05</p></dd>
																	<dd><p>12:30:30</p></dd>
																	<dd><p>欢饮您的购物、祝你生活愉快、欢迎下次光临！</p></dd>
																</dl>
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
	</div>
</div>
<!--banner-->

{include file="base/footer"}
