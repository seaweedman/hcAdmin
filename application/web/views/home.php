<!-- //container -->
<div class="container" style="width:100%;padding-left:0px;padding-right:0px;">
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

<div id="top" class="callbacks_container">
	<ul class="rslides" id="slider3">
		<?php foreach($ads AS $val) { ?>
		<li style='background:url(<?php echo base_url($val['img_url']); ?>) #eeece9;background-size: 100% 100%; -moz-background-size: 100% 100%; -webkit-background-size: 100% 100%;'>
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

<!-- banner-bottom -->
<div class="banner-bottom">
	<!-- container -->
	<div class="container">
		<div class="banner-bottom-grids">
			<div class="col-md-7 banner-bottom-grid-text">
				<div class="jumbotron banner-bottom-left wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;	">
				  <h3>河山商贸-公司简介</h3>
					<h5>责任 荣誉 使命 传承</h5>
					<p><?php echo $company['summary']; ?></p>
					<div class="see-button">
						<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" href="<?php echo site_url('about/index'); ?>" role="button">查看详情</a>
					</div>
				</div>
			</div>
			<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
				<img src="<?php echo base_url($company['img_url']); ?>" alt=""/>
			</div>
			<div class="clearfix"></div>
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
			<h3>产品信息</h3>
			<h5></h5>
			<p><?php echo $company['products_content']; ?></p>
			<div class="see-button">
				<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button" href="<?php echo site_url('products/index'); ?>" role="button">查看更多</a>
			</div>
		</div>
		<div class="col-md-7 specialty-grids">
			<div class="specialty-grids-top">
				<?php foreach($products AS $val) { ?>
				<div class="col-md-6 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<a href="<?php echo site_url('products/info/'.$val['id']); ?>"><img style='width:50px;padding-top:20px;' src="<?php echo base_url($val['img_url']); ?>" alt="" /></a>
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
<div class="testimonials" style="background: url(<?php echo base_url($center['img_url']) ?>) no-repeat 0px 0px;background-size: cover;">
	<div class="container">
		<div class="testimonial-nfo wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<h3><?php echo $center['title'] ?></h3>
			<h5></h5>
		</div>
		<div class="testimonial-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<div class="testimonial-grid">
				<p><span>" </span><?php echo $center['summary']; ?><span> "</span></p>
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
		    <a href="<?php echo site_url('news/info/'.$val['id']); ?>">
			<div class="col-md-3 news-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h4><?php echo $val['title'] ?></h4>
				<span><?php echo $val['create_time'] ?></span>
				<img style='width;280px;height:200px;' src="<?php echo base_url($val['img_url']); ?>" alt="" />
				<div class="news-info">
					<p style='min-height:152px;'><?php echo $val['summary'] ?></p>
				</div>
			</div>
		    </a>
			<?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //news -->
