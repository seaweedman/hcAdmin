<!-- team -->
<div class="team">
	<!-- container -->
	<div class="container">
		<div class="team-info">
			<h3 class="wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">产品列表</h3>
			<div class="team-grids">
			  <?php foreach($list as $val) { ?>
				<a href="<?php echo site_url('products/info/'.$val['id']); ?>">
				<div class="col-md-3 team-grid wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<img src="<?php echo base_url($val['img_url']); ?>" alt="">
					<h6><?php echo $val['title']; ?></h6>
					<p><?php echo $val['summary']; ?></p>
				</div>
			    </a>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //container -->
</div>
<!-- //team -->
