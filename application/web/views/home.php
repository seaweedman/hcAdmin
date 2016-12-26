<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
		<div class="container">
			<div class="header">
				<div class="head-logo" >
					<a href="index.html"><img src="<?php echo base_url('static/images/logo.jpg'); ?>" alt="圣光爱德" style='width:180px;' /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="<?php echo base_url('static/images/menu.png'); ?>" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom active"><a href="<?php echo site_url('Home/index'); ?>">首页<i>home</i></a></li>
						<!-- <li class="hvr-sweep-to-bottom"><a href="<?php echo site_url('About/index'); ?>">公司概况<i>about us</i></a></li> -->
						<li class="hvr-sweep-to-bottom"><a href="<?php echo site_url('Products/index'); ?>">产品信息<i>products</i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="<?php echo site_url('News/index'); ?>">新闻动态<i>news</i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="<?php echo site_url('Contact/index'); ?>">客户留言<i>contact us</i></a></li>
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
		<!-- //container -->
		<div class="container">
				<script src="<?php echo base_url('static/js/responsiveslides.min.js'); ?>"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
					  </script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<?php foreach($ads AS $val) { ?>
					<li>
						<div class="banner-info">
								<h2><?php echo $val['title']; ?></h2>
								<div class="line"> </div>
								<p><?php echo $val['summary']; ?></p>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
    <!-- <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-7 banner-bottom-grid-text">
					<div class="jumbotron banner-bottom-left wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;	">
					  <h3>圣光爱德-公司简介</h3>
						<h5>责任 荣誉 使命 传承</h5>
						<p><?php echo $company['summary']; ?></p>
						<div class="see-button">
							<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" href="#" role="button">查看详情</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="<?php echo base_url($company['img_url']); ?>" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- specialty -->
	<div class="specialty">
		<!-- container -->
		<div class="container">
			<div class="col-md-5 specialty-info wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
				<h3>我们的产品</h3>
				<h5>工匠精神</h5>
				<p>巴拉巴拉巴拉</p>
				<div class="see-button">
					<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button" href="#" role="button">查看更多</a>
				</div>
			</div>
			<div class="col-md-7 specialty-grids">
				<div class="specialty-grids-top">

					<?php foreach($products AS $val) { ?>
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img style='width:50px;padding-top:20px;' src="<?php echo base_url($val['img_url']); ?>" alt="" />
						</figure>
						<h5><?php echo $val['title']; ?></h5>
						<p><?php echo $val['summary']; ?></p>
					</div>
                    <?php } ?>
				</div>
				<!-- <div class="specialty-grids-top"> -->
				<!-- </div> -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //specialty -->
	<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<div class="testimonial-nfo wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>企业文化</h3>
				<h5>巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉吧</h5>
			</div>
			<div class="testimonial-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<div class="testimonial-grid">
					<p><span>"</span>发达散发的时发生的发达是否大师发达时发生的发达是否发达散发的散发的散发的撒发达散发的撒发达阿凡大师发达是否大师发送<span> "</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>新闻动态</h3>
				<h5>公司最新动态</h5>
			</div>
			<div class="news-grids">
				<?php foreach($news AS $val) { ?>
				<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4><?php echo $val['title'] ?></h4>
					<span><?php echo $val['create_time'] ?></span>
					<img style='width;100px;height:100px;' src="<?php echo base_url($val['img_url']); ?>" alt="" />
					<div class="news-info">
						<p><?php echo $val['summary'] ?></p>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left  wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<ul>
					<li><a href="index.html">首页</a></li>
					<li><a href="about.html">公司概况</a></li>
					<li><a href="products.html">产品信息</a></li>
					<li><a href="404.html">新闻动态</a></li>
					<li><a href="mail.html">客户留言</a></li>
				</ul>
				<form>
					<input type="text" placeholder="seaweedman@163.com" required="" disabled="true">
					<input type="submit" value="留言">
				</form>
			</div>
			<div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>公司地址</h3>
				<div class="address">
					<p>经十东路
						<span>奥体中心</span>
					</p>
				</div>
				<div class="phone">
					<p>0538-5698745</p>
				</div>
			</div>
			<div class="col-md-3 footer-right  wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<a href="#"><img src="<?php echo base_url('static/images/logo.jpg'); ?>" alt="" style='width:160px;'/></a>
				<p>圣光爱德</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
</body>
</html>
