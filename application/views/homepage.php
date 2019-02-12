<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">We are a<br><span>Future-Ready</span><br>School</p><br>
				<a href="contact-us" class="site-btn">Contact us</a>
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


	<!-- categories section -->
	<section class="categories-section spad">
		<div class="container">
			<div class="section-title">
				<p>We are JimboRee based Primary School<br>focused on excellence. </p>
			</div>
			<div class="row">
				<?php 
					foreach ($articlesType as $a) {
						echo
						'<div class="col-lg-4">
							<div class="categorie-item">
								<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$a->image.'"></div>
								<div class="ci-text">
									<h5>' . $a->articles_type .'</h5>
									<p>' . $a->desc . '</p>
									<!--<a href="' . base_url('master-data/articles/articles-by-type/') . $a->articles_type_id .'">Learn more</a>-->
								</div>
							</div>
						</div>';
					}
				?>
			</div>
		</div>
	</section>
	<!-- categories section end -->

	<!-- search section -->
	<section class="search-section">
		<div class="container">
			<p class="search-title">More than 70 Years of Experience</p><br>
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
	</section>
	<!-- search section end -->

	<!-- classes program -->
	<section class="classes-program-section">
		<p class="classes-program-title">Classes Program</p><br>
		<div class="row">
			<?php 
				foreach ($classesprogram as $c) {
					if ($c->program == "Grammar Programs") {
						$class = "grammar-opacity";
					} elseif ($c->program == "Art Programs"){
						$class = "art-opacity";
					} elseif ($c->program == "Social Programs"){
						$class = "social-opacity";
					} else {
						$class = "afterschool-opacity";
					}
					echo '
						<div class="col-lg-6">
							<div class="categorie-item">
								<div class="'.$class.'">
									<p class="grammar-opacity-title">'.explode(" ", $c->program)[0].'<br>'.explode(" ", $c->program)[1].'</p>
									<p class="grammar-opacity-caption">'.$c->desc.'</p>
								</div>
								<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$c->image.'"></div>
							</div>
						</div>
					';
				}
			?>
		</div>
		<br>
		<div class="row">
			<?php 
				foreach ($classesprogram2 as $c) {
					if ($c->program == "Grammar Programs") {
						$class = "grammar-opacity";
					} elseif ($c->program == "Art Programs"){
						$class = "art-opacity";
					} elseif ($c->program == "Social Programs"){
						$class = "social-opacity";
					} else {
						$class = "afterschool-opacity";
					}
					echo '
						<div class="col-lg-6">
							<div class="categorie-item">
								<div class="'.$class.'">
									<p class="grammar-opacity-title">'.explode(" ", $c->program)[0].'<br>'.explode(" ", $c->program)[1].'</p>
									<p class="grammar-opacity-caption">'.$c->desc.'</p>
								</div>
								<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$c->image.'"></div>
							</div>
						</div>
					';
				}
			?>
		</div>
	</section>
	<!-- classes program end -->
	
	<!-- gallery section -->
	<section class="gallery-section">
		
			<?php 
				$count = 1;
				$buffGallery = "";
				foreach($gallery as $gallRow){
					if($count < 9){

						if( $count == 1 || $count == 5 )
							$buffGallery .= '<div class="row">';

						$buffGallery .= '<div class="col-lg-4">
								<div class="categorie-item">
									<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$gallRow->image.'"></div>
								</div>
							</div>';

						if( $count == 4 || $count == 8 )
							$buffGallery .= '</div>';

					}else{

						if($count == 9)
							$buffGallery .= '<div class="row">';

						$buffGallery .= '<div class="col-lg-6">
								<div class="categorie-item">
									<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$gallRow->image.'"></div>
								</div>
							</div>';

						if($count == 10)
							$buffGallery .= '</div>';
					}

					$count++;
				}
				echo $buffGallery;
			?>
	</section>
	<!-- gallery section end -->

	<!-- testimoni section -->
		<section class="testimoni">
			<div class="container">
				<p class="testimoni-title">Parents Testimonials</p>
				<p class="testimoni-subtitle">Student and Parents Club</p><br>
				<div class="row">
					<?php 
						foreach ($testimoni as $t) {
							if ($t->role_parents==1) {
								$roleParents = "Father";
							} else{
								$roleParents = "Mother";
							}

							echo '
								<div class="col-lg-4">
									<div class="box-testimoni">
										<div class="yellow-line"></div>
										<p class="testimoni-caption">'.$t->testimoni.'</p>
										<div class="row">
											<div class="col-lg-2">
												<div class="ca-pic set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$t->image.'"></div>
											</div>
											<div class="col-lg">
												<div class="testimoni-parents-name">'.$t->nama.'</div>
												<div class="testimoni-parents-subname">'.$roleParents.'</div>
											</div>
										</div>
									</div>
								</div>
							';	
						}
					?>
				</div>
			</div>
		</section>
	<!-- testimoni section end -->

	<!-- teachers section -->
	<section class="teacher-section">
		<div class="container">
			<p class="teacher-title">Meet Our Qualified Teachers</p>
			<p class="teacher-subtitle">Your child will be as safe the JamboRee school.</p><br>
			<div class="row">
				<?php 
					foreach ($teachers as $t) {
						echo "
							<div class='col-lg-3'>
								<div class='ca-pic set-bg' data-setbg='".IMAGE_CONTENT_PATH.$t->image."'>
								</div><br>
								<p class='teacher-name'>".$t->nama_depan." ".$t->nama_tengah." ".$t->nama_belakang."<br><span class='teacher-job'>". $t->jabatan ."</span></p>
								<div class='icon'>
									<a href='".$t->facebook."' target='_blank'><img src='". base_url('assets/img/homepage/socmed/Facebook.svg') ."' width='15' height='20' alt=''></a>
									<a href='".$t->twitter."' target='_blank'><img src='". base_url('assets/img/homepage/socmed/Twitter.svg') . "' width='25' height='20' alt=''></a>
									<a href='".$t->instagram."' target='_blank'><img src='". base_url('assets/img/homepage/socmed/Instagram.svg') . "' width='25' height='20' alt=''></a>
								</div>
							</div>
						";
					}
				?>
			</div>
		</div>
	</section>
	<!-- teachers section end -->

	<!-- latest news section -->
	<section class="latest-news-section">
		<div class="container">
			<p class="latest-news-title">Latest News</p><br><br>
			<div class="row">
			<?php 
				$newsBuff = "";
				foreach ($newsData as $n) {
					$newsBuff .= '<div class="col-lg-4">
						<div class="categorie-item">
							<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$n->image.'"></div>
							<div class="ci-text">
								<span class="latest-news-date">December 9, 2018 </span>
								<p class="latest-news-title-caption">'.$n->title.'</p>
								<span class="latest-news-caption">'.$n->desc.'</span>
							</div>
						</div>
					</div>';
				}
				echo $newsBuff;
			?>
				<!--<div class="col-lg-4">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/latest-news/1.jpg"></div>
						<div class="ci-text">
							<span class="latest-news-date">December 9, 2018 </span>
							<p class="latest-news-title-caption">News Schedule</p>
							<span class="latest-news-caption">Dear parents, please, consider that our timetable will be changed in several months.</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/latest-news/2.jpg"></div>
						<div class="ci-text">
							<span class="latest-news-date">December 9, 2018 </span>
							<p class="latest-news-title-caption">Top Students This Month</p>
							<span class="latest-news-caption">We would like to introduce the students who showed amazing progress for the last 30 days.</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/latest-news/3.jpg"></div>
						<div class="ci-text">
							<span class="latest-news-date">December 9, 2018 </span>
							<p class="latest-news-title-caption">Gap Analysis</p>
							<span class="latest-news-caption">Are you sure your child do everything well? Read this article to find this out.</span>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</section>
	<!-- latest news end -->

	<!-- banner section -->
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<p>Learn More About Our <br>Curriculum and School Activities!</p>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p> -->
			</div>
			<div class="text-center pt-5">
				<!-- <a href="#" class="site-btn">Register Now</a> -->
				<center>
				<form class="footer-newslatter" action="<?php echo base_url('email-subscribe'); ?>" method="post">
					<input type="email" placeholder="E-mail address*" name="email"><br><br><br><br>
					<input type="submit" class="site-btn" value="Subscribe">
				</form>
				</center>
			</div>
		</div>
	</section>
	<!-- banner section end -->
<?php $this->load->view('layouts/footer.php') ?>