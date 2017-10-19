{include file="base/header"}
{include file="base/nav"}
<script>
	var about_img = '{$about.about_img}';
	var about_content = "{php}echo $about['about_content'];{/php}";
	var glory_img = '{$about.glory_img}';
	var glory_content = "{php}echo $about['glory_content'];{/php}";
</script>
<!--banner-->
<div class="banner">
	<div class="banner_content">
		<div class="background">
			<div class="background_title">
				<h3>品牌介绍 /</h3>
				<h3>{$about.EN}</h3>
				<i></i>
				<p><a id="glory" href="javascript:void(0)">{$about.glory}</a></p>
				<p><a id="about" href="javascript:void(0)">{$about.about}</a></p>
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div>
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
									品牌介绍
								<b class="caret"></b>
							</a>	
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)">{$about.glory}</a></li>
								<li><a href="javascript:void(0)">{$about.about}</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="scrollbar" id="style-10">
			<div class="force-overflow">
				<div>
					<a href="javascript:void(0)"><img id="img" src="__STATIC__/img/{$about.about_img}" /></a>
					<p id="content">{$about.about_content}</p>	
				</div>
			</div>
		</div>
	</div>
</div>
<!--banner-->

{include file="base/footer"}
