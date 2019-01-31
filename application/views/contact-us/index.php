<?php $this->load->view('layouts/header.php') ?>

	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">Contact us &<br><span>Staff Only</span></p><br>
				<p class="banner-subtitle">On this page, you can read about all our activity and more.</p>
			</div>
			<!-- <div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form class="intro-newslatter">
						<input type="text" placeholder="Name">
						<input type="text" class="last-s" placeholder="E-mail">
						<button class="site-btn">Sign Up Now</button>
					</form>
				</div>
			</div> -->
		</div>
	</section>
	<!-- Hero section end -->


	<!-- peta section -->
		<section class="peta-section spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6398691574464!2d101.41372441410526!3d0.5419040637909304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab9721474cdd%3A0xe0e1f307148bd748!2sJimboRee+Kinderland!5e0!3m2!1sid!2sid!4v1547022279500" position=" center" width="1200" height="543" frameborder="1" style="border:1" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- peta section end -->

	<!-- contactinfo -->	
	<section class="contactinfo">
		<div class="container">

			<div class="row">

				<div class="col-lg-6">

					<p class="contactinfo-title">Contact Info</p>
					<div class="row">
						<div class="icon">
							<img src="<?php echo base_url('assets/img/contact/info/iconmonstr-location-orange.svg'); ?>" width="30" height="30" alt="">
						</div>
						<p class="contactinfo-subtitle">&nbsp;&nbsp;Address</p>
					</div>
					<div class="col-lg-10">
						<p class="contactinfo-caption2">Jalan Pemuda, Pemuda City Walk, Block B (Education), No. 11, 12, 15, Tampan, Payung Sekaki, Tampan, Payung Sekaki, Pekanbaru City, Riau 28292</p>
					</div>

					
					<div class="row">
						<div class="icon">
							<img src="<?php echo base_url('assets/img/contact/info/iconmonstr-phone-orange.svg'); ?>" width="30" height="30" alt="">
						</div>
						<p class="contactinfo-subtitle">&nbsp;&nbsp;Phone</p>
					</div>
					<div class="col-lg-10">
						<p class="contactinfo-caption2">0821-6976-4578</p>
					</div>	
					
					<div class="row">
						<div class="icon">
							<img src="<?php echo base_url('assets/img/contact/info/iconmonstr-email-orange.svg'); ?>" width="30" height="30" alt="">
						</div>
						<p class="contactinfo-subtitle">&nbsp;&nbsp;Email</p>
					</div>		
					<div class="col-lg-10">	
						<p class="contactinfo-caption2">jimboree_@gmail.com</p>
					</div>

					<div class="row">
						<div class="icon">
							<img src="<?php echo base_url('assets/img/contact/info/Clock.svg'); ?>" width="30" height="30" alt="">
						</div>		
						<p class="contactinfo-subtitle">&nbsp;&nbsp;Opening Hours<br></p>
					</div>	
					<div class="col-lg-10">
						<p class="contactinfo-caption2">Monday - Friday</p>
						<p class="contactinfo-caption2">08.00 AM - 05.00 PM</p>
					</div>

				</div>

				<div class="col-lg-6">
					<p class="contactinfo-title">We would Love To Hear From You!</p>
					<p class="contactinfo-caption">If you have any questions,please call us or fill in the form below and we will get back to you very soon</p>
					<form>
						<div>
							<label for="name"></label>
							<input type="text" class="rectangle" id="name" placeholder="Your Name*">
						</div>
						<div>
							<label for="emailAdress"></label>
							<input type="text" class="rectangle" id="emailAddress" placeholder="E-mail*">
						</div>
						<div>
							<label for="text"></label>
							<input type="text" class="rectangle" id="subject" placeholder="Subject*">
						</div>
						<div>
							<label for="text"></label>
							<input type="textarea" class="rectangle" id="message" placeholder="Message*">
						</div>
						<button type="submit" class="button-rectangle">Send Message</button>
					</form>
				</div>

			</div>
							
		</div>
						
		
					
	</section>
<!-- contactinfo end -->
	
	
<?php $this->load->view('layouts/footer.php') ?>