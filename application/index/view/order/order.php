{include file="base/header" /}
{include file="base/nav" /}
{css file="__STATIC__/css/order.css"}
{js file="__STATIC__/js/order.js"}

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
		<div class="user_content">
			<div class="container">
				<div class="row row_all">
					<!--左边导航栏-->
					<div class="user_nav col-md-2 col-lg-2">
						<dl>
							<dt><a href="javascript:void(0)">订单中心</a></dt>
							<dd class="active_bg"><a href="{:url('order/index')}" class="active_cl">订单详情</a></dd>
							<dd><a href="address.html">收货地址</a></dd>
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
													<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/order_pic.jpg"/></a>
													<ul>
														<li><p>单号：1008610086</p></li>
														<li><p><a href="{:url('pro_details/index')}">晶致拉丝系列、三联体</a></p></li>
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
													<a href="{:url('order_details/index')}">查看详情</a>
													<br />
													<a href="javascript:void(0)">物流信息</a>
													<a href="{:url('pro_detials/index')}">查看</a>
												</td>
												<td class="delete">
													<a href="javascript:void(0)">删除</a>
													<br />
													<a href="javascript:void(0)">再次购买</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/order_pic.jpg" class="img-responsive"/></a>
													<ul>
														<li><p>单号：1008610086</p></li>
														<li><p><a href="{:url('pro_details/index')}">晶致拉丝系列、三联体</a></p></li>
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
													<a href="{:url('order_details/index')}">查看详情</a>
													<br />
													<a href="javascript:void(0)">物流信息</a>
													<a href="{:url('pro_details/index')}">查看</a>
												</td>
												<td class="delete">
													<a href="javascript:void(0)">删除</a>
													<br />
													<a href="javascript:void(0)">再次购买</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/order_pic.jpg"/></a>
													<ul>
														<li><p>单号：1008610086</p></li>
														<li><p><a href="{:url('pro_details/index')}">晶致拉丝系列、三联体</a></p></li>
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
													<a href="{:url('order_details/index')}">查看详情</a>
													<br />
													<a href="javascript:void(0)">物流信息</a>
													<a href="{:url('pro_details/index')}">查看</a>
												</td>
												<td class="delete">
													<a href="javascript:void(0)">删除</a>
													<br />
													<a href="javascript:void(0)">再次购买</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="{:url('pro_details/index')}"><img src="__STATIC__/img/order_pic.jpg"/></a>
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
													<a href="{:url('order_details/index')}">查看详情</a>
													<br />
													<a href="javascript:void(0)">物流信息</a>
													<a href="{:url('pro_details/index')}">查看</a>
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
								<li><a><img src="__STATIC__/img/page.png"/></a></li>
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

{include file="base/footer"}
