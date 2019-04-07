<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/academic/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">Parents</p><br>
				<p class="banner-subtitle">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero End -->

	<!-- Registration -->
	<section class="registration">
		<div class="container">
			<p class="registration-title">Registration</p>
			<p class="registration-caption">Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
			<i class="fa fa-sign-in" style="font-size: 120px; color: white;"></i><br><br>
			<button class="btn btn-info" data-toggle="modal" data-target="#parentRegistrationModal" >Register</button><br><br>
			<p class="registration-caption">Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea.</p>
		</div>
	</section>
	<!-- Registration end -->

	<!-- parentstudent -->
	<section class="parentstudent">
		<div class="row">
			<div class="col-lg-6">
				<p class="parentstudent-title">Parent & Student<br>Handbook</p>
				<p class="parentstudent-subtitle">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico.</p><br>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">01</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">02</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">03</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">04</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('assets/img/parents/2.jpg'); ?>" alt="" style="width: 100%"><br><br>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">06</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">07</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="parentstudent-date">08</p>
					</div>
					<div class="col-lg-10">
						<p class="parentstudent-event">Lorem ipsum dolor sit amet, ex falli congue postea pri, id per rebum congue iudico, regione mentitum adipiscing ut pri. Luptatum corrumpit disputando sit et.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- parentstudent -->

	<!-- testing-calendar -->
	<?php 
		//print_r($test_cal);
		$buffTestCal = "";
		if(is_array($test_cal) && count($test_cal)>0){
			$split = ceil(count($test_cal)/2);
			$intSplitCount = 1;
			foreach($test_cal as $k => $v){

				if($intSplitCount == 1 || ($split + 1) == $intSplitCount)// column header
					$buffTestCal .= '<div class="col-lg-6">';

				$buffTestCal .= '<div class="row">
						<div class="col-lg-3">
							<p class="testing-calendar-month">'.date('M d', strtotime($v->start_date)).'-'.date('d', strtotime($v->end_date)).'</p>
						</div>
						<div class="col-lg-9">
							<p class="testing-calendar-caption">'.$v->description.'</p>
						</div>
					</div>';

				if($intSplitCount == $split)
					$buffTestCal .= '</div>';

				$intSplitCount++;
			}
			$buffTestCal .= '</div>';
		}
	?>
	<section class="testing-calendar">
		<p class="testing-calendar-title">Testing Calendar</p>
		<div class="testing-calendar-year">
			<p class="testing-calendar-currentmonth"><?php echo date('Y'); ?></p>
			<div class="testing-calendar-redline"></div>
		</div><br><br>
		<div class="row">
			<?php echo $buffTestCal; 
				if($buffTestCal!=""){
			?>
			
			<a href="<?php echo base_url('parents/testCalPdf') ?>" class="btn btn-info">Download pdf</a>
				<?php } ?>
			<br><br>
		</div>
	</section>
	<!-- testing-calendar -->

	<!-- news-letter -->
	<section class="news-letter">
		<p class="news-letter-title">News Letter</p><br><br>
		<div class="row">
			<div class="col-lg-8">
				<div class="news">
					<br>
					<p class="news-letter-date">Desember 9, 2018</p>
					<p class="news-letter-newstitle">The most common mistakes when managing personal finances</p>
					<img src="<?php echo base_url('assets/img/parents/news-letter/1.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at. Eu quo fastidii mediocritatem, eos erant bonorum nominati at, sed at summo perfecto. Alienum lobortis indoctum ad mel, justo tation evertitur ex nam, vix quodsi recteque posidonium an. Ut accusata reformidans est. Clita quaerendum pri ad, cetero torquatos qui ei.</p>
					<div>
						<a href="" class="news-letter-read-more">Read More</a>
						<div class="news-letter-yellow-line"></div>
					</div>
				</div>
				<div class="news">
					<br>
					<p class="news-letter-date">Desember 9, 2018</p>
					<p class="news-letter-newstitle">Methods of the recruitment</p>
					<img src="<?php echo base_url('assets/img/parents/news-letter/1.png'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at. Eu quo fastidii mediocritatem, eos erant bonorum nominati at, sed at summo perfecto. Alienum lobortis indoctum ad mel, justo tation evertitur ex nam, vix quodsi recteque posidonium an. Ut accusata reformidans est. Clita quaerendum pri ad, cetero torquatos qui ei.</p>
					<div>
						<a href="" class="news-letter-read-more">Read More</a>
						<div class="news-letter-yellow-line"></div>
					</div>
				</div>
				<div class="news">
					<br>
					<p class="news-letter-date">Desember 9, 2018</p>
					<p class="news-letter-newstitle">Overalls with logo as a method of advertising</p>
					<img src="<?php echo base_url('assets/img/parents/news-letter/7.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at. Eu quo fastidii mediocritatem, eos erant bonorum nominati at, sed at summo perfecto. Alienum lobortis indoctum ad mel, justo tation evertitur ex nam, vix quodsi recteque posidonium an. Ut accusata reformidans est. Clita quaerendum pri ad, cetero torquatos qui ei.</p>
					<div>
						<a href="" class="news-letter-read-more">Read More</a>
						<div class="news-letter-yellow-line"></div>
					</div>
				</div><br>
				<ul class="news-letter-page">
					<li><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><img src="<?php echo base_url('assets/icon/Symbol 34 – 1.svg'); ?>" alt="" width="17.4" height="20.4"></li>
					<li><img src="<?php echo base_url('assets/icon/Symbol 33 – 1.svg'); ?>" alt="" width="17.4" height="29.4"></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<p class="news-letter-recent-news">Recent News</p>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/3.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div><br>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/9.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/5.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div><br>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/1.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div><br>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/6.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div><br>
				<div class="recent-news">
					<img src="<?php echo base_url('assets/img/parents/news-letter/8.jpg'); ?>" alt="">
					<p class="news-letter-caption"><br>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="parentRegistrationModal" tabindex="-1" role="dialog" aria-labelledby="parentRegistrationModalLabel" aria-hidden="true">
		<div class="modal-dialog  modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="parentRegisterModalLabel">Parent Registration</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
					<div class="form-group">
						<label for="user-name" class="col-form-label">Username:</label>
						<input type="text" class="form-control" id="user-name" placeholder="Input Username here..."/>
					</div>
					<div class="form-group">
						<label for="user-fullname" class="col-form-label">Fullname:</label>
						<input type="text" class="form-control" id="user-fullname" placeholder="Input Fullname here...">
					</div>
					<div class="form-group">
						<label for="user-email" class="col-form-label">Email:</label>
						<input type="text" class="form-control" id="user-email" placeholder="Input Email here...">
					</div>
					<div class="form-group">
						<label for="user-phone" class="col-form-label">Phone Number:</label>
						<input type="text" class="form-control" id="user-phone" placeholder="Input Phone Number here...">
					</div>
					<div class="form-group">
						<label for="user-password" class="col-form-label">Password:</label>
						<input type="password" class="form-control" id="user-password" placeholder="Input Password here...">
					</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="register-button" type="button" class="btn btn-primary">Register</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Registration Success</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Your data is saved as parent, and the email will be sent, please verify
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
		</div>
	</div>
	<script>

		document.getElementById("user-name").addEventListener("keypress", userNameValidator);
		function userNameValidator() {
			$('#user-name').keyup(function() {
				$('#user-name').val($('#user-name').val().toLowerCase().replace(/\s/g, ''));
			});
		}
		document.getElementById("user-email").addEventListener("keypress", userMailValidator);
		function userMailValidator() {
			$('#user-email').keyup(function() {
				$('#user-email').val(this.value.toLowerCase().replace(/\s/g, ''));
			});
		}
		document.getElementById("user-email").addEventListener("focusout", mailValidator);
		function mailValidator() {
			$('#user-email').focusout(function() {
				$('#user-email').val(this.value.toLowerCase().replace(/\s/g, ''));
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  				var validate = emailReg.test( $('#user-email').val() );
				if( !validate) { 
					$('#user-email').focus();
				 }
			});
		}
		document.getElementById("user-phone").maxLength = "12";
		document.getElementById("user-phone").addEventListener("keypress", numberValidator);
		function numberValidator(){
			$('#user-phone').keyup(function() {
				$('#user-phone').val(this.value.replace(/[^0-9.]/g, ''));
				
			});
		}
		document.getElementById("user-phone").addEventListener("focusout", phoneNumberLenghtValidator);
		function phoneNumberLenghtValidator(){
			if($('#user-phone').val().length < 10){
				alert('Input valid number length!');
				$('#user-phone').focus();
			}
		}
		document.getElementById("user-password").maxLength = "15";
		document.getElementById("user-password").addEventListener("focusout", passwordLenghtValidator);
		function passwordLenghtValidator(){
			if($('#user-password').val().length < 6){
				alert('Minimum Password length is 6!');
				$('#user-password').focus();
			}
		}

		document.getElementById("register-button").addEventListener("click", parentRegister);
		function parentRegister(){
			
			var userName 		= $('#user-name').val();
			var userFullName 	= $('#user-fullname').val();
			var userEmail 		= $('#user-email').val();
			var userPhone 		= $('#user-phone').val();
			var userPassword 	= $('#user-password').val();

			if(userName.length < 8){
				alert("please insert username with minimum lenght 8");
				$('#user-name').focus();
				return;
			}

			if(userFullName.length == 0 ){
				alert("please insert your Fullname");
				$('#user-fullname').focus();
				return;
			}

			if(userEmail.length == 0 ){
				alert("please insert your email");
				$('#user-email').focus();
				return;
			}

			if(userPhone.length == 0 ){
				alert("please insert your phone number");
				$('#user-phone').focus();
				return;
			}

			if(userPassword.length < 6 ){
				alert("Minimum Password length is 6!");
				$('#user-password').focus();
				return;
			}

			$.post("<?php echo base_url(); ?>parents/register", 
				{
					username:userName,
					fullname:userFullName,
					email:userEmail,
					phone:userPhone,
					password:userPassword
				}
			)
			.done(
				function(data){
					var json = $.parseJSON(data);
					console.log(json.status);
					if(json.status){
						$('#parentRegistrationModal').modal('hide');
						$('#exampleModalCenter').modal('show');
					}else{
						alert('Failed to register, '+json.data);
					}
				})
			.fail(function(err){
				alert(err.statusText);
			}); 
		}
		
	</script>
	<!-- news-letter -->
<?php $this->load->view('layouts/footer.php') ?>