<!DOCTYPE html>
<html>
<head>
<title>山河商贸</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tillage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="<?php echo base_url('static/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="<?php echo base_url('static/css/style.css'); ?>" type="text/css" media="all" />
<!--// css -->
<script src="<?php echo base_url('static/js/jquery-1.11.1.min.js'); ?>"></script>
<!--fonts-->
<!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'> -->
<!--/fonts-->
<link href="<?php echo base_url('static/css/animate.css'); ?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('static/js/wow.min.js'); ?>"></script>
<script>
	 new WOW().init();
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container" style="background:black;width:100%;height:80px;">
			<div class="header">
				<div class="head-logo" >
					<a href="index.html"><img src="<?php echo base_url('static/images/logo.jpg'); ?>" alt="山河商贸" style='width:100px;' /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="<?php echo base_url('static/images/menu.png'); ?>" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom <?php if ($menu == 'home') { echo 'active'; } ?>"><a href="<?php echo site_url('Home/index'); ?>">首页<i>home</i></a></li>
						<li class="hvr-sweep-to-bottom <?php if ($menu == 'products') { echo 'active'; } ?>"><a href="<?php echo site_url('Products/index'); ?>">产品信息<i>products</i></a></li>
						<li class="hvr-sweep-to-bottom <?php if ($menu == 'news') { echo 'active'; } ?>"><a href="<?php echo site_url('News/index'); ?>">新闻动态<i>news</i></a></li>
						<li class="hvr-sweep-to-bottom <?php if ($menu == 'contact') { echo 'active'; } ?>"><a href="<?php echo site_url('Contact/index'); ?>">客户留言<i>contact us</i></a></li>
						<li class="hvr-sweep-to-bottom <?php if ($menu == 'about') { echo 'active'; } ?>"><a href="<?php echo site_url('About/index'); ?>">关于我们<i>contact us</i></a></li>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
