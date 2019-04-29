<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p style="font-size:4vw; padding-left:50px">School &  Improvement</p>
				<p style="font-size:2vw">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
    <!-- Hero section end -->
    
    <p class="School">School</p>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['image']; ?>" class="detailimage"/>
                            </div>
                            <div class="col-sm-6">
                                <p class="detailDesc"><?php echo $detail[0]['desc']; ?></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <p class="School">Improvement</p>
	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                                <p class="detailDesc"><?php echo $detail[0]['desc2']; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('layouts/footer.php') ?>