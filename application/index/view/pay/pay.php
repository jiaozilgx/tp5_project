{include file="base/header" /}
{include file="base/nav" /}
{css file="__STATIC__/css/red.css"}
{js file="__STATIC__/js/icheck.js"}

<div class="banner">
	<div class="banner_content">
		<div class="background">
			<div>
				<h3>确认支付 /</h3>
				<h3>confirm pament</h3>
				<i></i>
				<p><a href="javascript:void(0)">支付</a></p>
				<b></b>
				<p><a href="javascript:void(0)">确认订单</a></p>
				<b></b>
				<p><a href="javascript:void(0)">购物车</a></p>
			</div>
		</div>
		<div class="scrollbar" id="style-10">
			<div class="force-overflow">
				<div class="pay">
					<div class="pay_ways common_title">
						<h3>支付方式</h3>
						<i></i>
						<div class="container">
							<ul class="row">
								<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 on_color">
									<div class="radio radio_first">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"/>货到付款
										</label>
									</div>
									<div class="radio radio_second">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>在线支付
										</label>
									</div>
									<div class="radio radio_third">
										<label>
											<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"/>公司转账
										</label>
									</div>
								</li>
								<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 on_color1">
									<p>送货上门后在收款，支持现金、POS机刷卡</p>
									<p>即使到账，支持支付宝、各行储蓄银行卡支付</p>
									<p>通过公司转账后1~3个工作日后到账</p>
								</li>
								<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3 on_color2">
									<a href="javascript:void(0)">查看运费及配送范围</a>
									<a href="javascript:void(0)">查看运费及配送范围</a>
									<a href="javascript:void(0)">查看运费及配送范围</a>
								</li>
								<li class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<p>请在24小时内完成支付</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="address common_title">
						<h3>收货地址</h3>
						<i></i>
						<div class="container">
							<ul class="row">
								<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div>
										<p>收货人：张三</p>
										<a href="javascript:void(0)" class="clear">/删除</a>
										<a href="javascript:void(0)">编辑</a>
										<p>手机号码：13100861000</p>
										<p>地址：  广东省广州市天河区石牌桥 天俊阁2010号</p>
										<button>设为默认</button>
									</div>
								</li>
								<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div>
										<p>收货人：张三</p>
										<a href="javascript:void(0)" class="clear">/删除</a>
										<a href="javascript:void(0)">编辑</a>
										<p>手机号码：13100861000</p>
										<p>地址：  广东省广州市天河区石牌桥 天俊阁2010号</p>
										<button>设为默认</button>
									</div>
								</li>
								<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<div>
										<p>收货人：张三</p>
										<a href="javascript:void(0)" class="clear">/删除</a>
										<a href="javascript:void(0)">编辑</a>
										<p>手机号码：13100861000</p>
										<p>地址：  广东省广州市天河区石牌桥 天俊阁2010号</p>
										<button>设为默认</button>
									</div>
								</li>
								<li class="col-xs-6 col-sm-6 col-md-3 col-lg-3 add">
									<a href="{:url('address/index')}"><img src="__STATIC__/img/pay.png"/></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="information common_title">
						<h3>发票信息</h3>
						<i></i>
						<div class="container">
							<div class="row">
								<div class="infor_details">
									<div>
										<ul>
											<li class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
												<div class="radio radio_fourth">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4"/>需要发票
													</label>
												</div>
												<div class="radio radio_fifth">
													<label>
														<input type="radio" name="optionsRadios" id="optionsRadios5" value="option5"/>不需要发票
													</label>
												</div>
											</li>
											<li class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
												<p>【发票制度】</p>
											</li>
										</ul>
									</div>
									<span></span>
									<div class="type">
										<p>发票类型：</p>
										<div class="checkbox checkbox_sixth">
											<label>
												<input type="checkbox" id="checkbox6"/>普通发票
											</label>
										</div>
									</div>
									<div>
										<p>抬头类型：</p>
										<div class="radio radio_seventh">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios7" value="option7"/>个人
											</label>
										</div>
										<div class="radio radio_eight">
											<label>
												<input type="radio" name="optionsRadios" id="optionsRadios8" value="option8"/>单位
											</label>
										</div>
									</div>
									<div>
										<p>填写抬头：</p>
										<input type="text" placeholder="张三" />
										<p>请勿填写“个人字样”，建议使用真实姓名</p>
									</div>
									<button type="button">保留发票信息</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="pay_money">
			<div class="container">
				<div class="row">
					<ul>
						<li class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><p>优惠：<b>-999.99</b></p></li>
						<li class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><p>总价：<b>9999.99</b></p></li>
						<li class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><button type="button"><a href="{:url('order/index')}">支付</a></button></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	

{include file="base/footer"}
