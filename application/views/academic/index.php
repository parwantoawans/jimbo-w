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
		<div class="container">
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
									<div class="ci-thumb set-bg" data-setbg="http://localhost/jimboree-cms/'.explode("jimboree-cms/", $c->image)[1].'"></div>
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
									<div class="ci-thumb set-bg" data-setbg="http://localhost/jimboree-cms/'.explode("jimboree-cms/", $c->image)[1].'"></div>
								</div>
							</div>
						';
					}
				?>
			</div>
		</div>
	</section>
	<!-- classes program end -->

	<!-- Other Service -->
	<section class="search-section">
		<div class="other-service-opacity">
			<p class="search-title">Other Services</p><br><br>
			<div class="row">
				<?php 
					foreach ($otherservice as $o) {
						echo '
						
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-2">
										<!-- <div class="icon"><i class="fa fa-apple"></i></div>-->
										<div class="icon">
											<img src="http://'.$_SERVER['HTTP_HOST']."/jimboree-cms/". explode("jimboree-cms/", $o->image)[1].'" alt="">
										</div>
									</div>
									<div class="col-lg-10">
										<p class="search-caption">'.$o->title.'</p>
										<p class="search-caption2">'.$o->desc.'</p>
										<!--<a href="">Read More</a>-->
									</div>
								</div>
							</div>
						';
					}
				?>
			</div>
			<br>
			<div class="row">
				<?php 
					foreach ($otherservice2 as $o) {
						echo '
						
							<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-2">
										<!-- <div class="icon"><i class="fa fa-apple"></i></div>-->
										<div class="icon">
											<img src="http://'.$_SERVER['HTTP_HOST']."/jimboree-cms/". explode("jimboree-cms/", $o->image)[1].'" alt="">
										</div>
									</div>
									<div class="col-lg-10">
										<p class="search-caption">'.$o->title.'</p>
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
				<p class="calendar-currentmonth">Desember</p>
				<div class="calendar-redline"></div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">01</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">05</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">13</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">17</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">20</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="calendar-date">22</p>
					</div>
					<div class="col-lg-10">
						<p class="calendar-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<a href="" class="calendar-nextmonthyear">January</a><br>
				<div class="calendar-yellowline"></div>
				<a href="" class="calendar-nextmonthyear">2019</a>
			</div>
		</div>
	</section>
	<!-- Calendar end -->
<?php $this->load->view('layouts/footer.php') ?>