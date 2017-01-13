<!-- mail -->
<div class="mail">
	<!-- container -->
	<div class="container">
		<div class="mail-grids">
			<div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>联系我们</h3>
				<h5></h5>
				<h4>通信地址</h4>
				<p><?php echo $info['address'] ?>
				</p>
				<h4>联系方式</h4>
				<p>手机号: <?php echo $info['mobile']; ?><br>
				   邮&nbsp;&nbsp;&nbsp;箱: <a href="mailto:info@example.com"><?php echo $info['mail']; ?></a>
				</p>
			</div>
			<div class="col-md-6 contact-form wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<form>
					<input type="text" placeholder="手机号" id='mobile' required="">
					<input type="text" placeholder="邮箱" id='mail' required="">
					<textarea placeholder="留言内容" id='content' required=""></textarea>
					<input type="submit" value="留言" onclick="send_message()">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //container -->
</div>
<!-- //mail -->
