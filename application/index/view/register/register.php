{include file="base/header" /}
{include file="base/nav" /}
{js file="__STATIC__/js/cityDate.js"}

<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="input_list">
			<form class="form-horizontal fr_register" role="form" action="login.html" onsubmit="return checkLogin()">
				<div class="form-group">
					<label for="username">会员名</label>
					<input id="username" type="text" onblur="checkuser(this.value);"/>
					<div class="form_alert" id="user_alert">
						<i></i>
						<p>请输入会员名并牢记当前账号</p>
					</div>
				</div>
				<div class="form-group">
					<label for="pwd">密码</label>
					<input id="pwd" type="password" onblur="checkpwd(this.value);"/>
					<div class="form_alert" id="pwd_alert">
						<i></i>
						<p>请输入登录密码并牢记密码</p>
					</div>
				</div>
				<div class="form-group">
					<label for="okpwd">确认密码</label>
					<input id="okpwd" type="password" onblur="checkokpwd(this.value);"/>
					<div class="form_alert" id="ok_alert">
						<i></i>
						<p>请确认密码是否有误</p>
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" type="text" onblur="checkemail(this.value);"/>
					<div class="form_alert" id="email_alert">
						<i></i>
						<p>请输入可用的邮箱账号</p>
					</div>
				</div>
				<div class="form-group">
					<label for="phone">手机号</label>
					<input id="phone" type="text" onblur="checkphone(this.value);"/>
					<div class="form_alert" id="phone_alert">
						<i></i>
						<p>请输入有效的手机号码</p>
					</div>
				</div>
				<div class="form-group">
					<label for="address">所在地</label>
					<select class="form-control" id="address">
						<option>广东省</option>
						<option>广西省</option>
						<option>安徽省</option>
					</select>
					<select class="form-control" id="address">
						<option>广州市</option>
						<option>中山市</option>
						<option>汕头市</option>
					</select>
					<div class="form_alert" id="address_alert">
						<i></i>
						<p>请正确填写所在地</p>
					</div>
				</div>
				<div class="form-group">
					<label for="test">验证码</label>
					<input id="test" type="text" onblur="checktest(this.value);"/>
					<a href="javascript:void(0)"><img src="__STATIC__/img/test.jpg" /></a>
					<div class="form_alert" id="testphone_alert">
						<i></i>
						<p>请输入真确的验证码</p>
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" id="inlineCheckbox1" value="option1"/>同意注册协议
					</label>
				</div>
				<div>
					<input type="submit" value="确认注册" />
				</div>
				<div>
					<p><a href="{:url('login/index')}">已有账号返回登录</a></p>
				</div>	
			</form>
		</div>
	</div>
</div>
<!--banner-->

{include file="base/footer"}
