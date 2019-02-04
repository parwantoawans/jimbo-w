<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/academic/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">About us</p><br>
				<p class="banner-subtitle">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- section2 -->
	<section class="section2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="section2-title">
						<?php echo $title; ?> <br><?php echo $title2; ?><br><?php echo $title3; ?>
					</p>
					<p class="section2-caption"><?php echo $desc; ?></p>
					<p class="section2-caption"><?php echo $desc2; ?></p>
				</div>
				<div class="col-lg-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url() . explode("jimboree-web/", $image)[1]; ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section2 end -->
	
	<!-- whyjimboree -->
	<section class="whyjimboree">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<br><span class="whyjimboree-title">Parents choise us</span><br>
					<p class="whyjimboree-subtitle">Why JimboRee?</p>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-3">
							<div class="icon"><i class="fa fa-bullseye"></i></div>
							<p class="search-caption"><?php echo $passing_universities . "%"; ?></p>
							<p class="search-caption2">Passing to Universities</p>
						</div>
						<div class="col-lg-3">
							<div class="icon"><i class="fa fa-users"></i></div>
							<p class="search-caption"><?php echo $people_working; ?></p>
							<p class="search-caption2">People Working</p>
						</div>
						<div class="col-lg-3">
							<div class="icon"><i class="fa fa-briefcase"></i></div>
							<p class="search-caption"><?php echo $student_enrolled; ?></p>
							<p class="search-caption2">Student Enrolled</p>
						</div>
						<div class="col-lg-3">
							<div class="icon"><i class="fa fa-user"></i></div>
							<p class="search-caption"><?php echo $happy_smiles; ?></p>
							<p class="search-caption2">Happy Smiles</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- whyjimboree end -->

	<!-- missionvission section -->
	<section class="missionvission">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="missionvission-title">Our Mission</p>
					<p class="missionvission-subtitle">The primary school is the most important <br>begining point.</p>

					<p class="missionvission-caption">JimboRee Education exists to provide international standard education to our young students <br>through a commitment to English language Fluency, Technological expertise and inquiry<br> based teaching &amp; learning, we deliver an internationally recognized program that integrates <br>global concepts with respect for our Indonesian national culture and identity</p>
				</div>
				<div class="col-lg-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/9a.jpg"></div>
					</div>
				</div>
			</div>
			<p class="missionvission-caption">(JimboRee education hadir dalam rangka memberikan pendidikan bersekala internasional kepada para pelajar muda, melalui komitmen terhadap penggunaan Bahasa inggris secara lancar, keterampilan teknologi, pembelajaran, berbasis tanya jawab, kami menyebarkan program yang telah dikenal secara internasional yang menyatukan konsep global yang menghormati budaya serta identitas Indonesia).</p>
		</div>
	</section>
	<!-- missionvission end -->
	<!-- missionvission section -->
	<section class="missionvission" style="padding-top: 0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/5.jpg"></div>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="missionvission-title">Our Vission</p>
					<p class="missionvission-subtitle">Primary education is for everyone.</p>
					<p class="missionvission-caption">To be leading international standard educational facility providing high quality tutoring to <br>young students to excel throughout their lives in rapidly changing world.<br><br> (Menjadi panutan dalam pendidikan bersekala internasional yang memberikan fasilitas<br> pengajaran berkualitas kepada pelajar muda sehingga mereka dapat memberi pengaruh yangmerubah dunia ).</p>
				</div>
			</div>
		</div>
	</section>
	<!-- missionvission end -->
	<!-- newsandannouncement section -->
	<section class="newsandannouncement-section">
		<div class="container">
			<p class="newsandannouncement-title">News & Announcement</p><br><br>
			<div class="row">
				<?php
					foreach ($news as $n) {
						echo "
						<div class='col-lg-4'>
							<div class='categorie-item'>
								<div class='ci-thumb set-bg' data-setbg='". "http://localhost/jimboree-cms/" . explode('jimboree-cms/', $n->image)[1] ."'></div>
								<div class='ci-text'>
									<span class='newsandannouncement-date'>". date('F d, Y', strtotime($n->created_at)) ." </span>
									<p class='newsandannouncement-title-caption'>". $n->title ."</p>
									<span class='newsandannouncement-caption'>". str_replace(array('<p>', '</p>', '<br>'), array('', '', ''), $n->desc) ."</span>
								</div>
							</div>
						</div>
						";
					}
				?>
			</div>
		</div>
	</section>
	<!-- newsandannouncement end -->
	<!-- foto section -->
	<section class="foto-section">
		<div class="row">
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/about-us/foto/1.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/about-us/foto/2.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/about-us/foto/3.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/about-us/foto/4.png"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/5.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/6.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/7.jpg"></div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="categorie-item">
					<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/gallery/8.jpg"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="categorie-item">
						<video width="100%" height="100%" controls>
  							<source src="assets/videos/1.mp4" type="video/mp4">
						</video>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="categorie-item">
					<video width="100%" height="100%" controls>
  						<source src="assets/videos/2.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</section>
	<!-- foto section end -->

	<!-- schoolimprovement -->
	<section class="schoolimprovement">
		<p class="schoolimprovement-title">School & Improvement</p><br>
		<div class="row">
			<div class="col-lg-6">
				<p class="schoolimprovement-caption">
					Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et. Qui ut meis nihil legere. Eu vix cibo tritani, dicant patrioque interesset te vim. Ne ludus vitae electram per, vim cu option veritus blandit. Ex delectus deseruisse nam, his ex erat debitis omittantur. Ne eros dissentiet qui.
				</p>
				<p class="schoolimprovement-caption">
					His partiendo deseruisse instructior et. Commune principes ullamcorper sea in, ea detracto consulatu comprehensam mei, ei pro diam legimus complectitur. Mel ne paulo commune molestie, sint iudico accusamus at pri, ferri detracto tincidunt nec ei. Dolorem offendit his in, eum putent insolens corrumpit id, erat facer elitr eum ad. Eum ex paulo doctus, vim in sonet libris.
				</p>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('assets/img/about-us/school/1.PNG'); ?>" alt="">
			</div>
		</div>
	</section>
	<!-- schoolimprovement -->
<?php $this->load->view('layouts/footer.php') ?>