<div class="bodymodal"></div>
</body>
	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget-item" style="margin-top: -55px">
							<p class="footer-title"><img src="<?php echo base_url('assets/img/logo.png'); ?>" alt=""></p>
							<p class="footer-content"><?php echo @$this->SchoolModel->get()[0]['motto']; ?></p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget-item">
							<p class="footer-title">Navigation</p>
							<ul>
								<li><a href="about-us">About Us</a></li>
								<li><a href="#">Programs</a></li>
								<li><a href="#">Teachers</a></li>
								<li><a href="#">Schedule</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget-item">
							<p class="footer-title">Contact Information</p>
							<ul>
								<li>
									<div class="row">
										<div class="col-lg-2">
											<span class="icon"><i class="fa fa-map-marker"></i></span>
										</div>
										<div class="col-lg-10">
											<!-- <p class="footer-content">Jalan Pemuda, Pemuda City Walk, Block B (Education), No. 11, 12, 15, Tampan, Payung Sekaki, Tampan, Payung Sekaki, Pekanbaru City, Riau 28292</p> -->
											<p class="footer-content">
												<?php echo @$this->ContactsModel->get()[0]['alamat']; ?>
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2">
											<span class="icon"><i class="fa fa-phone"></i></span>	
										</div>
										<div class="col-lg-10">
											<!-- <p class="footer-contet">0821-6976-4578</p> -->
											<p class="footer-content"><?php echo @$this->ContactsModel->get()[0]['telephone']; ?></p>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2">
											<span class="icon"><i class="fa fa-envelope-o"></i></span>
										</div>
										<div class="col-lg-10">
											<!-- <p class="footer-content">jimboree_@gmail.com</p> -->
											<p class="footer-content"><?php echo @$this->ContactsModel->get()[0]['email']; ?></p>
										</div>
									</div>
								</li>
								<li>
									<span class="icon">
										<a href="https://www.facebook.com/gymboreeindonesia"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="https://twitter.com/gymboree_ind?lang=en"><i class="fa fa-twitter"></i></a>
										<a href="https://www.instagram.com/gymboree_encino/"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget-item">
							<p class="footer-title">We are open</p>
							<ul>
								<li><span class="footer-content">Mon - Thu </span><span class="footer-content">:</span>
								<span class="footer-content"> 09.30 - 21.00</span></li>
								<li><span class="footer-content">Fri</span><span style="margin-left: 60px;">:</span>
								<span class="footer-content"> 06.00 - 21.00</span></li>
								<li><span class="footer-content">Sat</span><span style="margin-left: 53.5px;">:</span>
								<span class="footer-content"> 10.00 - 15.00</span></li>
							</ul>
						</div>
					</div>
					<!-- <div class="widget-item">
						<p class="footer-title">Newsletter</p>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don’t spam</p>
						</form>
					</div> -->
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<div class="copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
					<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/mixitup.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/circle-progress.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	<script>

		$body = $("body");

		$(document).ajaxSend(function(event, request, settings) {
			$('#loading-indicator').show();
			$body.addClass("loading"); 
		});

		$(document).ajaxComplete(function(event, request, settings) {
			$('#loading-indicator').hide();
			$body.removeClass("loading");
		});

		var defaultPreloaderImage = "https://www.digitalcitizen.life/sites/default/files/styles/lst_small/public/featured/2016-08/photo_gallery.jpg";
		$.fn.preload = function (fn) {
			var len = this.length, i = 0;
			return this.each(function () {
				var tmp = new Image, self = this;
				if (fn) tmp.onload = function () {
					fn.call(self, 100 * ++i / len, i === len);
				};
				// check if any error image
				if(fn)tmp.onerror = function(){
					console.log("error load image : " + this);
					tmp.src = defaultPreloaderImage;
				}
				// give placeholder if failed to load image
				if((typeof this.naturalWidth != "undefined" &&
					this.naturalWidth == 0 ) 
					|| this.readyState == 'uninitialized' ) {
					//$(this).attr('src', defaultPreloaderImage);
				}
				//tmp.src = this.src;
			});
		};

		$('img').preload(function(perc, done) {
			//console.log(this, perc, done);
		});
		
		// handling div with unknown image
		$('div .set-bg').each(function() {
			var backgroundImage = $(this).css("background-image");
			var url = backgroundImage.match(/\((.*?)\)/)[1].replace(/('|")/g,'');
			var img = new Image();
			img.onload = function() {
				//console.log(img+" loaded");
			}
			img.src = url;
			if (img.complete){
				img.onload();
			}else{
				var target = this;
				img.addEventListener('error', function() {
					console.log(url + " failed to load");
					//$(target).css("background-image", 'url("'+defaultPreloaderImage+'")');
				})
			}
		});
		
		//$('.textarea').wysihtml5({useLineBreaks: true});
		
	</script>
</html>