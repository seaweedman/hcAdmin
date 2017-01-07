<!-- //container -->
<div class="container" style="width:100%;min-height:500px;padding-left:0px;padding-right:0px;">
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
		<li style='background:url(<?php echo base_url($val['img_url']); ?>) no-repeat 0px 0px #eeece9; width:100%;height:500px;'>
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
				  <h3>山河商贸-公司简介</h3>
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
			<h3>产品信息</h3>
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
