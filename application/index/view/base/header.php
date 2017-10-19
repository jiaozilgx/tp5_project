<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{$title}</title>
		{css file="__STATIC__/css/bootstrap.css"}
		{css file="__STATIC__/css/style.css"}
		<link rel="stylesheet" href="__STATIC__/css/{$pageName}.css" />
		{css file="__STATIC__/css/common.css"}
		{js file="__STATIC__/js/jquery-1.11.0.js"}
		{js file="__STATIC__/js/bootstrap.js"}
		{js file="__STATIC__/js/jquery.touchSwipe.min.js"}
		<script src="__STATIC__/js/{$pageName}.js"></script>
		{js file="__STATIC__/js/common.js"}
		<script>var static_path = '__STATIC__';</script>
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
						<a href="{:url('user/index')}">会员中心</a>
						<a href="{:url('login/index')}">登录</a>
						<a href="{:url('register/index')}">注册</a>
						<a href="{:url('shop_cart/index')}">购物车</a>
					</div>
				</div>
			</div>
		</div>
		<!--header-->