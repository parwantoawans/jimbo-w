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
		<?php if(isset($title) && isset($title2) && isset($title3) && isset($desc) && isset($desc2)){ ?>
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
						<div class="ci-thumb set-bg" data-setbg="<?php echo IMAGE_CONTENT_PATH.$image; ?>"></div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
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
					<p class="missionvission-subtitle"><?php echo $misi_subtitle; ?></p>

					<p class="missionvission-caption"><?php echo $misi; ?></p>
				</div>
				<div class="col-lg-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg='<?php echo IMAGE_CONTENT_PATH.$misi_image; ?>'></div>
					</div>
				</div>
			</div>
			<p class="missionvission-caption"><?php echo $misi_2; ?></p>
		</div>
	</section>
	<!-- missionvission end -->
	<!-- missionvission section -->
	<section class="missionvission" style="padding-top: 0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg='<?php echo IMAGE_CONTENT_PATH.$visi_image; ?>'></div>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="missionvission-title">Our Vission</p>
					<p class="missionvission-subtitle"><?php echo $visi_subtitle; ?></p>
					<p class="missionvission-caption"><?php echo $visi; ?><br><br> <?php echo $visi_2; ?></p>
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
								<a href=\"" . base_url('homepage/newses/') . $n->id ."\">
									<div class='ci-thumb set-bg' data-setbg='" . IMAGE_CONTENT_PATH.$n->image ."'></div>
								</a>
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
		<?php 
				$count = 1;
				$buffGallery = "";
				foreach($gallery as $gallRow){
					if($count < 9){

						if( $count == 1 || $count == 5 )
							$buffGallery .= '<div class="row">';

						$buffGallery .= '<div class="col-lg-3">
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

				$count = 1;
				$buffVideo = '<div class="row">';
				foreach($videos as $vidRow){
					$buffVideo .= '<div class="col-lg-6">
									<div class="categorie-item">
											<video width="100%" height="100%" controls="controls" preload="metadata">
												<source src="'.IMAGE_CONTENT_PATH.$vidRow->video.'" type="video/mp4">
											</video>
									</div>
								</div>';
					$count++;
				}
				$buffVideo .= '</div>';
				echo $buffVideo;
			?>
		
	</section>
	<!-- foto section end -->

	<!-- schoolimprovement -->
	<section class="schoolimprovement">
		<p class="schoolimprovement-title">School & Improvement</p><br>
		<?php if(isset($sImprovementDesc) && isset($sImprovementDesc2) && isset($sImprovementImg)){ ?>
		<div class="row">
			<div class="col-lg-6">
				<p class="schoolimprovement-caption">
					<?php echo $sImprovementDesc; ?>
				</p>
				<p class="schoolimprovement-caption">
					<?php echo $sImprovementDesc2; ?>
				</p>
			</div>
			<div class="col-lg-6">
				<a href="<?php echo base_url('Aboutus/schoolimprove');?>"><img src="<?php echo IMAGE_CONTENT_PATH.$sImprovementImg; ?>" alt=""></a>
			</div>
		</div>
		<?php } ?>
	</section>
	<!-- schoolimprovement -->
<?php $this->load->view('layouts/footer.php') ?>