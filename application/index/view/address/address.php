{include file="base/header"}
{include file="base nav"}

<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="background">
			<div>
				<h3>收货地址 /</h3>
				<h3>Shipping address</h3>
				<i></i>
				<p><a href="javascript:void(0)">收货地址</a></p>
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
									<dd><a href="{:url('order/index')}">订单详情</a></dd>
									<dd class="active_bg"><a href="{:url('address/index')}" class="active_cl">收货地址</a></dd>
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
								<div>
									<h6>收货地址</h6>
									<p>当前已保存3个、还可以保存17个</p>
									<i></i>
									<div>
										<div class="address_details">
											<ul class="row">
												<li class="col-md-4 col-lg-4">
													<div>
														<p>收货人：张三</p>
														<a href="javascript:void(0)" class="clear">/删除</a>
														<a href="javascript:void(0)">编辑</a>
														<p>手机号码：13100861000</p>
														<p>地址：    广东省广州市天河区石牌桥天俊阁2010号</p>
														<button type="submit">设为默认</button>
													</div>
												</li>
												<li class="col-md-4 col-lg-4">
													<div>
														<p>收货人：张三</p>
														<a href="javascript:void(0)" class="clear">/删除</a>
														<a href="javascript:void(0)">编辑</a>
														<p>手机号码：13100861000</p>
														<p>地址：    广东省广州市天河区石牌桥天俊阁2010号</p>
														<button type="submit">设为默认</button>
													</div>
												</li>
												<li class="col-md-4 col-lg-4">
													<div>
														<p>收货人：张三</p>
														<a href="javascript:void(0)" class="clear">/删除</a>
														<a href="javascript:void(0)">编辑</a>
														<p>手机号码：13100861000</p>
														<p>地址：    广东省广州市天河区石牌桥天俊阁2010号</p>
														<button type="submit">设为默认</button>
													</div>
												</li>
												<li><button type="button" class="add_address">添加地址</button></li>
											</ul>
										</div>
									</div>
									<div class="page">
										<ul class="pagination">
											<li><a href="javascript(0)">上一页</a></li>
											<li><a href="javascript(0)">下一页</a></li>
											<li><a href="javascript(0)">1</a></li>
											<li><a href="javascript(0)">2</a></li>
											<li><a><img src="__STATIC__/img/page.png"/></a></li>
											<li><a href="javascript(0)">8</a></li>
											<li><a href="javascript(0)">尾页</a></li>
										</ul>
									</div>
								</div>
								<div class="new_place">
									<h6>新增地址</h6>
									<i></i>
									<div class="news_address">
										<form class="form-horizontal form_check" role="form" action="{:url('index/index')}" onsubmit="return checkLogin()" >
											<div class="form-group">
												<label for="user" class="control-label col-md-1 col-lg-1 person">收货人</label>
												<div class="input_content col-md-10 col-lg-10">
													<input type="text" id="user" class="form-control" placeholder="收货人" onblur="checkuser(this.value);"/>
													<div id="usertip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="address" class="place">所在地</label>
												<select class="city form-control">
													<option>广州市</option>
													<option>中山市</option>
													<option>杭州市</option>
												</select>
												<select class="province form-control">
													<option>广东省</option>
													<option>广西省</option>
													<option>福建省</option>
												</select>
											</div>
											<div class="form-group">
												<label for="detail_add" class="control-label col-md-1 col-lg-1 detail_add">详细地址</label>
												<div class="input_content col-md-10 col-lg-10">
													<input type="text" id="detail_add" class="form-control" placeholder="详细地址" onblur="checkaddress(this.value);"/>
													<div id="addresstip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="phonen_number" class="control-label col-md-1 col-lg-1 phonen_number">手机号</label>
												<div class="input_content col-md-10 col-lg-10">
													<input type="text" id="phonen_number" class="form-control"  placeholder="手机号" onblur="checkphone(this.value);"/>
													<div id="phonetip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
												</div>
											</div>
											<div class="form-group">
												<label for="fix_phone" class="control-label col-md-1 col-lg-1 fix_phone">固定电话</label>
												<div class="input_content col-md-10 col-lg-10">
													<input type="text" id="fix_phone" class="form-control"  placeholder="固定电话" onblur="checkfixphone(this.value);"/>
													<div id="fixphonetip" title="温馨提示" data-container="body" data-toggle="popover" data-placement="top" data-content="格式不正确"></div>
												</div>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"  name="optionsRadios" id="optionsRadios2" value="option2"/>
													设为默认地址
												</label>
											</div>
											<input type="submit" value="保存地址" class="button" placeholder="设为默认地址"/>
										</form>
									</div>
								</div>
							</div>
							<!--右边收货地址-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!--banner-->

{include file="base/footer"}
