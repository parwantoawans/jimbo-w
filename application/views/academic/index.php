<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/academic/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">Academic</p><br>
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
									<div class="ci-thumb set-bg" data-setbg="' . IMAGE_CONTENT_PATH.$c->image . '"></div>
								</div>
							</div>
						';
					}
				?>
			</div>
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
									<div class="ci-thumb set-bg" data-setbg="' . IMAGE_CONTENT_PATH.$c->image . '"></div>
								</div>
							</div>
						';
					}
				?>
			</div>
		
	</section>
	<!-- classes program end -->

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
										<img class="mr-3" style="width:20%; margin-top:10px" src="'. IMAGE_CONTENT_PATH.$o->image.'" alt="">	
										<div class="media-body">
											<h5 class="mt-0 search-caption">'.$o->title.'</h5>
											<p class="search-caption2">'.$o->desc.'</p>
											<!--<a href="">Read More</a>-->
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
										<img class="mr-3" style="width:20%; margin-top:10px" src="'. IMAGE_CONTENT_PATH.$o->image.'" alt="">	
										<div class="media-body">
											<h5 class="mt-0 search-caption">'.$o->title.'</h5>
											<p class="search-caption2">'.$o->desc.'</p>
											<!--<a href="">Read More</a>-->
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

	<!-- Bell Schedule -->
	<section class="schedule">
		<div class="container">
			<p class="schedule-title">Bell Schedule</p>
			<div class="row">
				<div class="col-lg-3">
					<div class="box-monday">Monday</div>
				</div>
				<?php 
					$index = 1;
					foreach ($schedule as $sh) {
						if(date('l', strtotime($sh->tgl)) == "Monday"){
							if($index==1){
								echo '
									<div class="col-lg-3">
										<div class="box1-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else if($index==2){
								echo '
									<div class="col-lg-3">
										<div class="box2-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else {
								echo '
									<div class="col-lg-3">
										<div class="box3-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							}
							$index++;
						}
					}
				?>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="box-tuesday">Tuesday</div>
				</div>
				<?php 
					$index = 1;
					foreach ($schedule as $sh) {
						if(date('l', strtotime($sh->tgl)) == "Tuesday"){
							if($index==1){
								echo '
									<div class="col-lg-3">
										<div class="box1-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else if($index==2){
								echo '
									<div class="col-lg-3">
										<div class="box2-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else {
								echo '
									<div class="col-lg-3">
										<div class="box3-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							}
							$index++;
						}
					}
				?>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="box-wednesday">Wednesday</div>
				</div>
				<?php 
					$index = 1;
					foreach ($schedule as $sh) {
						if(date('l', strtotime($sh->tgl)) == "Wednesday"){
							if($index==1){
								echo '
									<div class="col-lg-3">
										<div class="box1-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else if($index==2){
								echo '
									<div class="col-lg-3">
										<div class="box2-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else {
								echo '
									<div class="col-lg-3">
										<div class="box3-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							}
							$index++;
						}
					}
				?>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="box-thursday">Thursday</div>
				</div>
				<?php 
					$index = 1;
					foreach ($schedule as $sh) {
						if(date('l', strtotime($sh->tgl)) == "Thursday"){
							if($index==1){
								echo '
									<div class="col-lg-3">
										<div class="box1-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) ." - " .strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else if($index==2){
								echo '
									<div class="col-lg-3">
										<div class="box2-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else {
								echo '
									<div class="col-lg-3">
										<div class="box3-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							}
							$index++;
						}
					}
				?>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="box-friday">Friday</div>
				</div>
				<?php 
					$index = 1;
					foreach ($schedule as $sh) {
						if(date('l', strtotime($sh->tgl)) == "Friday"){
							if($index==1){
								echo '
									<div class="col-lg-3">
										<div class="box1-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else if($index==2){
								echo '
									<div class="col-lg-3">
										<div class="box2-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							} else {
								echo '
									<div class="col-lg-3">
										<div class="box3-schedule">
											<span class="schedule-class">'.$sh->subject.'</span><br>
											<span class="schedule-date">'.strtoupper(date('H:i A', strtotime($sh->jam_mulai))) . " - " . strtoupper(date('H:i A', strtotime($sh->jam_selesai))).'</span><br>
											<span class="schedule-teacher">Teacher <span class="schedule-teacher-name">'.$sh->teacher.'</span></span>
										</div>
									</div>
								';
							}
							$index++;
						}
					}
				?>
			</div>
		</div>
	</section>
	<!-- Bell Schedule End -->

	<!-- Calendar -->
	<section class="calendar">
		<p class="calendar-title">Calendar</p><br><br>
		<div class="row">
			<div class="col-lg-3">
				<p class="calendar-currentmonth">February</p>
				<div class="calendar-redline w3-half"></div>
			</div>
			<?php 
				$index = 1;
				$callBuff = "";
				foreach ($calendar as $clRow) {
					
					if( $index == 1 || $index == 4 )
						$callBuff .= '<div class="col-lg-3">';

					$callBuff .= '<div class="row">
									<div class="col-lg-2">
										<p class="calendar-date">'.date('d', strtotime($clRow->when)).'</p>
									</div>
									<div class="col-lg-10">
										<p class="calendar-event">'.$clRow->desc.'</p>
									</div>
								</div>';

					if( $index == 3 || $index == 6 )
						$callBuff .= '</div>';

					$index++;

				}
				echo $callBuff;
			?>
			<div class="col-lg-3">
				<a href="#" class="calendar-nextmonthyear">March</a><br>
				<div class="calendar-yellowline"></div>
				<a href="" class="calendar-nextmonthyear">2019</a>
			</div>
		</div>
	</section>
	<!-- Calendar end -->
<?php $this->load->view('layouts/footer.php') ?>