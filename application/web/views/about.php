	<!-- about -->
	<div class="about-top">
		<!-- container -->
		<div class="container">
			<div class="about-info wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>关于我们</h3>
				<h5>勇于创新 开拓进取</h5>
			</div>
			<div class="banner-bottom-grids a-banner-bottom-grids">
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="<?php echo base_url($info['img_url']); ?>" alt="">
				</div>
				<div class="col-md-7 a-banner-bottom-text">
					<div class="jumbotron banner-bottom-left wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					  <h3></h3>
						<h5></h5>
						<p><?php echo $info['summary']; ?></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //about -->

	<!-- about-bottom -->
    <div class="about-bottom">
        <!-- container -->
        <div class="container">
            <h3 class="wow fadeInRight animated" style="visibility: visible;"></h3>
            <div class="about-bottom-grids">
                <div class="col-md-6 about-bottom-left wow fadeInLeft animated animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
                    <?php echo $info['content']; ?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
