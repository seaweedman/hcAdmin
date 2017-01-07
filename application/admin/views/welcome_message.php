<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/html5.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/respond.min.js'); ?>"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/static/h-ui/css/H-ui.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/static/h-ui.admin/css/H-ui.admin.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/lib/Hui-iconfont/1.0.7/iconfont.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/lib/icheck/icheck.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/static/h-ui.admin/skin/default/skin.css'); ?>" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('static/hui/static/h-ui.admin/css/style.css'); ?>" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>山河商贸</title>
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">山河商贸</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="<?php echo site_url('Login/logout'); ?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 公司概况<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo site_url('Company/index'); ?>" data-title="公司概况" href="javascript:void(0)">公司概况</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 新闻动态<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo site_url('News/index'); ?>" data-title="新闻动态" href="javascript:void(0)">新闻动态</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo site_url('Product/index'); ?>" data-title="产品管理" href="javascript:void(0)">产品管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 客户留言<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo site_url('Contact/index'); ?>" data-title="客户留言" href="javascript:void(0)">客户留言</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="<?php echo site_url('System/index'); ?>" data-title="系统设置" href="javascript:void(0)">系统设置</a></li>
				</ul>
				<ul>
					<li><a data-href="<?php echo site_url('Ad/index'); ?>" data-title="公告管理" href="javascript:void(0)">公告管理</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="<?php echo site_url('Welcome/helo'); ?>">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo site_url('Welcome/helo'); ?>"></iframe>
		</div>
	</div>
</section>

<div class="contextMenu" id="myMenu1">
	<ul>
		<li id="open">Open </li>
		<li id="email">email </li>
		<li id="save">save </li>
		<li id="delete">delete </li>
	</ul>
</div>

<script type="text/javascript" src="<?php echo base_url('static/hui/lib/jquery/1.9.1/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/layer/2.1/layer.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/lib/jquery.contextmenu/jquery.contextmenu.r2.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/static/h-ui/js/H-ui.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('static/hui/static/h-ui.admin/js/H-ui.admin.js'); ?>"></script>
<script type="text/javascript">
// $(function(){
// 	$(".Hui-tabNav-wp").contextMenu('myMenu1', {
// 		bindings: {
// 			'open': function(t) {
// 				alert('Trigger was '+t.id+'\nAction was Open');
// 			},
// 			'email': function(t) {
// 				alert('Trigger was '+t.id+'\nAction was Email');
// 			},
// 			'save': function(t) {
// 				alert('Trigger was '+t.id+'\nAction was Save');
// 			},
// 			'delete': function(t) {
// 				alert('Trigger was '+t.id+'\nAction was Delete')
// 			}
// 		}
// 	});
// });
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script>
</body>
</html>
