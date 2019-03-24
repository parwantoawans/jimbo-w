<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/academic/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="banner-title">Students</p><br>
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
	
	<!-- Students Links section -->

	<section class="students-links">

		<div class="container">

			<p class="students-links-title">Students Links</p>

			<?php 

				$finalBuff = "";
				
				$indexRow = 1;
				$indexColsRow = 1;
				$videoIndex = 0;
				
				foreach($gallery as $gallRow){

					switch($indexColsRow){

						case 1:
							$finalBuff .= '<div class="row">';
							if( $indexRow%2 == 0 ) // image
								$finalBuff .= '<div class="col-sm-4"><img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive"></div>';
							else if ( $indexRow%3 == 0 ){ // video
								$finalBuff .= '<div class="col-sm-8">
								<div class="embed-responsive embed-responsive-16by9">
												<video width="100%" height="100%" controls="controls" preload="metadata">
													<source src="'.IMAGE_CONTENT_PATH.$videos[$videoIndex]->video.'" type="video/mp4">
												</video>
										</div>
									</div>';
									$videoIndex++;
							}else{ // image
								$finalBuff .= '<div class="col-sm-4"><img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive">';
							}
							break;

						case 2:
							if( $indexRow%2 == 0 ) // image
								$finalBuff .= '<div class="col-sm-4"><img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive"></div>';
							else if ( $indexRow%3 == 0 )
								$finalBuff .= '';
							else{ // image
								$finalBuff .= '<img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive"></div>';
							}
							break;

						case 3:
							if( $indexRow%2 == 0 ) // image
								$finalBuff .= '<div class="col-sm-4"><img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive"></div>';
							else if ( $indexRow%3 == 0 ) // image
								$finalBuff .= '<div class="col-sm-4"><img src="'.IMAGE_CONTENT_PATH.$gallRow->image.'" class="img-responsive"></div>';
							else{ // video
								$finalBuff .= '<div class="col-sm-8">
										<div class="embed-responsive embed-responsive-16by9">
											<video width="100%" height="100%" controls="controls" preload="metadata">
												<source src="'.IMAGE_CONTENT_PATH.$videos[$videoIndex]->video.'" type="video/mp4">
											</video>
									</div>
								</div>';
								$videoIndex++;
							}
							$finalBuff .= '</div>';
							break;
					}
					if( $indexColsRow == 3 ){
						$indexRow++;
						$indexColsRow = 0;
					}
					$indexColsRow++;
				}
				echo $finalBuff;
			?>	
		</div>
	</section>
	<!-- Students Links end -->
	<!-- Food Menu -->
	<section class="Food-menu">
		<section class="food-menu-section">
		<div class="container">
		<p class="food-menu-title">Food Menu</p><br>
			<?php 
				$buffMenu = '';
				for($a = 0; $a < 4; $a++){
					if( $a == 0 || $a == 2 )
						$buffMenu .= '<div class="row">';

					$style = 'Autumn-opacity';
					$titleStyle = 'Autumn-opacity-title';
					$captionStyle = 'Autumn-opacity-caption';	
					switch($a){
						case 0:
							$style = 'Autumn-opacity';
							$titleStyle = $style.'-title';
							$captionStyle = $style.'-caption';	
							break;
						case 1:
							$style = 'Summer-opacity';
							$titleStyle = $style.'-title';
							$captionStyle = $style.'-caption';		
							break;
						case 2:
							$style = 'Healthy-opacity';
							$titleStyle = $style.'-title';
							$captionStyle = $style.'-caption';		
							break;
						case 3:
							$style = 'Revised-opacity';
							$titleStyle = $style.'-title';
							$captionStyle = $style.'-caption';		
							break;
					}

					$buffMenu .= '<div class="col-lg-6">
							<div class="categorie-item">
								<div class="'.$style.'">
									<p class="'.$titleStyle.'"><br>'.$menus[$a]->jenis_makanan.'</p>
									<p class="'.$captionStyle.'">'.$menus[$a]->description.'</p>
									<a href="" class="btn btn-info">Learn more</a>
								</div>
								<div class="ci-thumb set-bg" data-setbg="'.IMAGE_CONTENT_PATH.$menus[$a]->image.'"></div>
							</div>
						</div>';

					if( $a == 1 || $a == 3 )
						$buffMenu .= '</div>';
				}
				echo $buffMenu;
			?>
		</div>
	</section>
	<!-- Food menu end -->

	<!-- Extra curricular -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<section class="search-section">
		<div class="Extra-Curricular-opacity">
			<p class="search-title">Extra Curricular</p><br>
			<?php 
				$extraHead = '<div class="row">';
				$extraFoot = '</div><br/>';
				$count = 0;
				$buff = '';
				foreach($extraData as $key => $values){

					if($count == 0 || $count%3 == 0)
						$buff .= $extraHead;

					$buff .= '<div class="col-lg-4">
								<div class="row">
									<div class="col-lg-2">
										<div class="icon"><img width="50px" height="50px" src="'.IMAGE_CONTENT_PATH.$values->icon.'"/></div>	
									</div>
									<div class="col-lg-10">
										<p class="search-caption">'.$values->jenis_extracuricullar.'</p>
										<p class="search-caption2"> '.substr($values->description, 0,100).'...</p>
										<a href="#'.$values->jenis_extracuricullar.'" data-toggle="modal" data-target="#extraModal" data-title="'.$values->jenis_extracuricullar.'" data-desc="'.$values->description.'"  data-icon="'.IMAGE_CONTENT_PATH.$values->icon.'">Read More</a>
									</div>
								</div>
							</div>';
					if($count == 2 || ($count-2)%3 == 0)
						$buff .= $extraFoot;
					$count++;
				}
				echo $buff;
			?>
		</div>
	</section>
		<div class="modal fade" id="extraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="extraModalLabel">New message</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<center><img width="50%" id="extraImage"></center>
						<label for="recipient-name" class="col-form-label">Recipient:</label>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>
		<script>
			$('#extraModal').on('show.bs.modal', function (event) {
				var href = $(event.relatedTarget) // Button that triggered the modal
				var title = href.data('title') // Extract info from data-* attributes
				var desc = href.data('desc')
				var icon = href.data('icon')
				console.log(title);
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text(title)
				modal.find('.col-form-label').text(desc)
				modal.find('#extraImage').attr('src', icon);
			})
		</script>
    <!-- Extra curicullar end -->

	<!-- Field Trip section -->
	<section class="categories-section spad">
		<div class="container">
			<p class="fieldtrip-title"><center><p><h3>Field Trip</h3></center></p>
			
            		<div class="row">
				<!-- categorie -->
				<div class="col-lg-7">
				<div class="ci-text">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/trip/1.png"></div>
						
						<p class="field-trip-date">Desember 9, 2018</p>
						<span class="field-trip-title">Lorem Ipsum</span>
							<p>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at. Eu quo fastidii mediocritatem, eos erant bonorum nominati at, sed at summo perfecto. Alienum lobortis indoctum ad mel, justo tation evertitur ex nam, vix quodsi recteque posidonium an. Ut accusata reformidans est. Clita quaerendum pri ad, cetero torquatos qui ei. Nusquam detracto oportere eu eam. <br><br> pro movet nullam voluptua, duo at facete molestiae prodesset. An ius quidam suscipit definitionem. An sit ornatus facilisi. Stet viris mea ne, errem altera accusata his id.</p>
						</div>
					</div>
                </div>
                <!-- categorie -->
				<div class="col-lg-5">
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/trip/2.jpg"></div>
						
							<p> Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
						
					<div class="categorie-item">
						<div class="ci-thumb set-bg" data-setbg="<?php echo base_url(); ?>assets/img/trip/3.jpg"></div>
							<p>Lorem ipsum dolor sit amet, periculis expetendis usu no, choro commodo docendi ad sea. Et facilisis argumentum elaboraret sit, alia mucius putant quo cu, ex saperet labores ius. Cu nam putant virtute, duo malis labores omittam at.</p>
						</div>
					</div>
				</div>
	</section>
	<!-- Field Trip end -->
	
<?php $this->load->view('layouts/footer.php') ?>