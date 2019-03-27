<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p style="font-size:5vw; padding-left:50px">Field Trip</p>
				<p style="font-size:2vw">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="detailcontainer">
                        <p class="field-trip-date-title"><?php echo date('F d, Y', strtotime($detail[0]['created_at'])); ?></p>
                        <p class="field-trip-title"><?php echo $detail[0]['title']; ?></p>
                        <img src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['main_image']; ?>" class="detailimage"/>
                        <p class="detailDesc"><?php echo $detail[0]['description']; ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <p class="Photo-of-Activity">Photo of Activity</p>
                    <?php 
                        for($a=1; $a<6; $a++){
                            if(isset($detail[0]['image_'.$a]) && strlen($detail[0]['image_'.$a]) > 0)
                                echo '<img align="right" style="width:320px;" src="../../'.IMAGE_CONTENT_PATH.$detail[0]['image_'.$a].'">';
                        }
                    ?>
                    
                </div>
            </div>
		</div>	
	</section>
    <?php if(isset($otherTrip)){ ?>
	<section>
		<div class="detailcontainer">
			<p class="Other-Articles">Other Trip</p>
		
            <style>
                .carousel-control-prev {
                    opacity: 1;
                    align-content: center;
                    overflow: hidden;
                }

                .carousel-control-next {
                    opacity: 1;
                    align-content: center;
                    overflow: hidden;
                }
                .ci-text a {
                    font-size: 20px;
                    font-weight: 500;
                    color: #4b4b4b;
                    text-align: left;
                    line-height: 25px;
                    text-decoration: underline;
                    text-decoration-color: #f8de10;
                }
            </style>
            
			<div class="container">
	            <div class="row">
                    <div class="col-sm-1">
                        <a class="carousel-control-prev" href="#ProjeCarousel" role="button" data-slide="prev">
                            <img src="../../assets/img/homepage/detail/prev_button.png">
                        </a>
                    </div>
                    <div class="col-sm-10">
                        <div class="slide">
                        
                            <div id="ProjeCarousel" class="carousel slide" data-ride="carousel">
                            
                                <div class="carousel-inner">

                                    <?php 
                                        $headerActive = '<div class="carousel-item active" style="margin-bottom: 15px;">';
                                        $headerNext = '<div class="carousel-item" style="margin-bottom: 15px;">';
                                        $count = 0;
                                        $isFirst = true;
                                        $buff = "";
                                        foreach($otherTrip as $key => $otherRow){
                                            if($count == 0){
                                                if($isFirst)
                                                    $buff .= $headerActive;
                                                else
                                                    $buff .= $headerNext;
                                            }

                                            $buff .= '<div class="col-md-3 float-left">
                                                        <a href="' . base_url('students/fieldtrip/') . $otherRow->id .'">
                                                            <img height="120px" style="min-width:180px" src="../../'. IMAGE_CONTENT_PATH.$otherRow->main_image.'" alt="'.$otherRow->title.'">
                                                        </a>
                                                        <p class="Other-Articles-Desc">'.substr($otherRow->description, 0, 40).'...</p>
                                                    </div>';

                                            $count++;

                                            if($count == 4){
                                                $isFirst = false;
                                                $count = 0;
                                                $buff .= '</div>';
                                            }

                                        }
                                        echo $buff;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    <a class="carousel-control-next" href="#ProjeCarousel" role="button" data-slide="next">
                        <img src="../../assets/img/homepage/detail/next_button.png">
                    </a>
                </div>
	        </div>
        </div>

	</section>
    <?php } ?>
	
<?php $this->load->view('layouts/footer.php') ?>