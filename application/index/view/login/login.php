{include file="base/header" /}
{include file="base/nav" /}

<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="input_list">
			<form class="bs-example bs-example-form fr-login" role="form" action="{:url('user/index')}" onsubmit="return checkLogin()" >
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
					<li><a href="javascript:void(0)"><img src="__STATIC__/img/qq.png"/></a></li>
					<li><a href="javascript:void(0)"><img src="__STATIC__/img/weixin0.png"/></a></li>
					<li><a href="javascript:void(0)"><img src="__STATIC__/img/weibo.png"/></a></li>
				</ul>
			</div>
			<div class="tips">
				<ol>
					<li><a href="javascript:void(0)">忘记密码</a></li>
					<li>/</li>
					<li><a href="{:url('register/index')}">注册账号</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!--banner-->

{include file="base/footer"}
