{include file="base/header"}
{include file="base/nav"}

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
								<form action="{:url('index/index')}" onsubmit="return checkLogin()">
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

{include file="base/footer"}
			
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
{js file="__STATIC__/js/map.js"}