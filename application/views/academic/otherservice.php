<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/academic/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">Other  Services</p><br>
				<p class="banner-subtitle">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<section>
		<div class="detailcontainer">
			<p class="After-School-Caregiving"><?php echo $detail[0]['title']; ?></p>
			<img class="detailimage" style="width:100%; max-width:1000px; align-content:center;" src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['image']; ?>" alt="">
			<div class="detailDesc"><?php echo $detail[0]['desc']; ?></div>
		</div>
	</section>

	<!-- Other Service -->
	
	<section class="search-section">
			<div class="other-service-opacity">
				
					<p class="search-title">Other Services</p><br>
					<div class="row">
						<?php 
							foreach ($otherservice as $o) {
								echo '
								<div class="col-lg-4">
									<div class="media">
										<img class="mr-3" style="width:20%; margin-top:10px" src="../../'. IMAGE_CONTENT_PATH.$o->thumb.'" alt="">	
										<div class="media-body">
											<h5 class="mt-0 search-caption">'.$o->title.'</h5>
											<p class="search-caption2">'.substr($o->desc, 0, 160).'...</p>
											<a href="'.base_url('academic/otherservice/').$o->id.'">Read More</a><br/><br/><br/>
										</div>
									</div>
								</div>
								';
							}
						?>
					</div>
					<div class="row">
						<?php 
							foreach ($otherservice2 as $o) {
								echo '
									<div class="col-lg-4">
									<div class="media">
										<img class="mr-3" style="width:20%; margin-top:10px" src="../../'. IMAGE_CONTENT_PATH.$o->thumb.'" alt="">	
										<div class="media-body">
											<h5 class="mt-0 search-caption">'.$o->title.'</h5>
											<p class="search-caption2">'.substr($o->desc, 0, 160).'...</p>
											<a href="'.base_url('academic/otherservice/').$o->id.'">Read More</a><br/><br/><br/>
										</div>
									</div>
								</div>
								';
							}
						?>
					</div>
				
			</div>
		
	</section>
	<!-- Other Service end -->
<?php $this->load->view('layouts/footer.php') ?>