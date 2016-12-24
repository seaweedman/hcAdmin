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
						<li class="hvr-sweep-to-bottom"><a href="<?php echo site_url('About/index'); ?>">公司概况<i>about us</i></a></li>
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
					<li>
						<div class="banner-info">
								<h2>Steady <span>growth</span> for your farm!</h2>
								<div class="line"> </div>
								<p>Ut sodales erat tortor, eget rhoncus nulla rutrum sit amet. Aliquam sit amet lorem dui. Nulla sagittis dolor id mi tincidunt varius. Donec quis suscipit tortor vel pellentesque libero</p>
						</div>
					</li>
					<li>
						<div class="banner-info">
								<h2>Make your <span>garden</span> look like paradise!</h2>
								<div class="line"> </div>
								<p>Eget rhoncus nulla rutrum sit amet. Ut sodales erat tortor Aliquam sit amet lorem dui. Donec quis suscipit tortor vel pellentesque libero Nulla sagittis dolor id mi tincidunt varius</p>
						</div>
					</li>
					<li>
						<div class="banner-info">
								<h2>Steady <span>growth</span> for your farm! </h2>
								<div class="line"> </div>
								<p>Aliquam sit amet lorem dui Ut sodales erat tortor, Nulla sagittis dolor id mi tincidunt varius. Donec quis suscipit tortor vel pellentesque libero eget rhoncus nulla rutrum sit amet</p>
						</div>
					</li>
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
					  <h3>Nullam consectetur tristique fermentum vestibulum</h3>
						<h5>Cras porttitor imperdiet volutpat. Nulla malesuada lectus eros ut convallis felis <span>consectetur ut</span></h5>
						<p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie. Mauris sapien eros, mattis et elit non, tincidunt efficitur nisi augue dui iaculis nulla, a pretium nisl turpis vel augue auctor viverra aliquam .</p>
						<div class="see-button">
							<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" href="#" role="button">See More</a>
						</div>
					</div>
				</div>
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="<?php echo base_url('static/images/2.jpg'); ?>" alt=""/>
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
				<h3>Our Services</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros ut convallis felis consectetur ut </h5>
				<p>Integer vitae ligula sed lectus consectetur pellentesque blandit nec orci. Nulla ultricies nunc et lorem semper, quis accumsan dui aliquam aucibus sagittis placerat.
					<span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi non nibh nec enim sollicitudin interdum.tristique senectus et netus et malesuada fames ac turpis egestas</span>
				</p>
				<div class="see-button">
					<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button" href="#" role="button">See More</a>
				</div>
			</div>
			<div class="col-md-7 specialty-grids">
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="<?php echo base_url('static/images/1.png'); ?>" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="<?php echo base_url('static/images/2.png'); ?>" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="<?php echo base_url('static/images/3.png'); ?>" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="<?php echo base_url('static/images/4.png'); ?>" alt="" />
						</figure>
						<h5>Proin eget ipsum ultrices</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
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
				<h3>Testimonials</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
			</div>
			<div class="testimonial-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<div class="testimonial-grid">
					<p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>News</h3>
				<h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
			</div>
			<div class="news-grids">
				<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4>Integer vitae ligula sed lectus</h4>
					<span>8.00 - 10.00 | JUN 09,2014</span>
					<img src="<?php echo base_url('static/images/img1.jpg'); ?>" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4>Integer vitae ligula sed lectus<h4>
					<span>10.00 - 12.00 | sep 24,2014</span>
					<img src="<?php echo base_url('static/images/img2.jpg'); ?>" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4>Integer vitae ligula sed lectus</h4>
					<span>9.00 - 10.00 | FEB 15,2014</span>
					<img src="<?php echo base_url('static/images/img3.jpg'); ?>" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
				<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h4>Integer vitae ligula sed lectus</h4>
					<span>11.00 - 10.00 | JUN 10,2014</span>
					<img src="<?php echo base_url('static/images/img4.jpg'); ?>" alt="" />
					<div class="news-info">
						<p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele risque auctor volutpat et massa.</p>
					</div>
				</div>
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
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="products.html">Products</a></li>
					<li><a href="404.html">Events</a></li>
					<li><a href="mail.html">Mail Us</a></li>
				</ul>
				<form>
					<input type="text" placeholder="Email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>Address</h3>
				<div class="address">
					<p>756 gt globel Place,
						<span>CD-Road,M 07 435.</span>
					</p>
				</div>
				<div class="phone">
					<p>+1(100)2345-6789</p>
				</div>
			</div>
			<div class="col-md-3 footer-right  wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<a href="#"><img src="<?php echo base_url('static/images/logo.jpg'); ?>" alt="" style='width:160px;'/></a>
				<p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<!-- <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="seaweedman.top" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p> -->
			</div>
			<div class="copyright-right wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<ul>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="twitter facebook"> </a></li>
					<li><a href="#" class="twitter chrome"> </a></li>
					<li><a href="#" class="twitter pinterest"> </a></li>
					<li><a href="#" class="twitter linkedin"> </a></li>
					<li><a href="#" class="twitter dribbble"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
</body>
</html>
