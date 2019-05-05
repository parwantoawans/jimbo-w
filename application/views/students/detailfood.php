<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="Food-Menu">Food Menu</p>
				<p class="Food-Menu-Subtitle">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<section>
		<div class="detailcontainer">
			<p class="Grammar-Programs"><?php echo $detail[0]['jenis_makanan']; ?></p>
            <p class="Detail-Food-Detail-Title"><?php echo $detail[0]['jenis_minuman']; ?></p>
			<img src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['image']; ?>" class="detailimage"/>
            <p class="Detail-Food-Detail-Title"><?php echo $detail[0]['jenis_buah']; ?></p>
			<p class="detailDesc"><?php echo $detail[0]['description']; ?></p>
		</div>	
	</section>
    <?php if(isset($otherMenus)){ ?>
	<section>
		<div class="detailcontainer">
		
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
            </style>
            
			<div class="container">
	            <div class="row">
                    <?php if(count($otherMenus)>2){ ?>
                    <div class="col-lg-1">
                        <a class="carousel-control-prev" href="#ProjeCarousel" role="button" data-slide="prev">
                            <img src="../../assets/img/homepage/detail/prev_button.png">
                        </a>
                    </div>
                    <?php } ?>
                    <div class="col-lg-10">
                        <div class="slide">
                        
                            <div id="ProjeCarousel" class="carousel slide" data-ride="carousel">
                            
                                <div class="carousel-inner">

                                    <?php 
                                        $headerActive = '<div class="carousel-item active" style="margin-bottom: 15px;"><div class="row">';
                                        $headerNext = '<div class="carousel-item" style="margin-bottom: 15px;"><div class="row">';
                                        $count = 0;
                                        $isFirst = true;
                                        $buff = "";
                                        foreach($otherMenus as $key => $otherRow){
                                            if($count == 0){
                                                if($isFirst)
                                                    $buff .= $headerActive;
                                                else
                                                    $buff .= $headerNext;
                                            }

                                            if ($count == 0) {
                                                $class = 'Autumn-opacity';
                                            } elseif ($count == 1){
                                                $class = 'Summer-opacity';
                                            } elseif ($count == 2){
                                                $class = 'Healthy-opacity';
                                            } else {
                                                $class = 'Revised-opacity';
                                            }

                                            $buff .= '<div class="col-lg-6">
                                                        <div class="categorie-item">
                                                            <div class="'.$class.'">
                                                                <p class="Autumn-opacity-title">'.explode(" ", $otherRow->jenis_makanan)[0].'</p>
                                                                <p class="Summer-opacity-caption">' . substr($otherRow->description, 0, 30) . '...</p>
                                                                <a href="' . base_url('students/food/') . $otherRow->fid .'">
                                                                    <img src="../../assets/img/students/view_more.png" class="learn-more">
                                                                </a>
                                                            </div>
                                                            <div class="ci-thumb set-bg" data-setbg="../../'.IMAGE_CONTENT_PATH.$otherRow->image.'"></div>
                                                        </div>
                                                    </div>';

                                            /*$buff .= '<div class="col-md-3 float-left">
                                                        <img height="120px" style="min-width:180px" src="../../'. IMAGE_CONTENT_PATH.$otherRow->image.'" alt="'.$otherRow->program.'">
                                                        <p class="Other-Articles-Title">'.$otherRow->program.'</p>
                                                        <p class="Other-Articles-Desc">'.substr($otherRow->desc, 0, 40).'...</p>
                                                        <div class="ci-text">
                                                            <a href="' . base_url('homepage/classes/') . $otherRow->id .'">Learn more</a>
                                                        </div>
                                                        <br/><br/><br/> 
                                                    </div>';*/

                                            $count++;

                                            if($count == 2){
                                                $isFirst = false;
                                                $count = 0;
                                                $buff .= '</div></div>';
                                            }

                                        }
                                        echo $buff;
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(count($otherMenus)>2){ ?>
                    <div class="col-lg-1">
                        <a class="carousel-control-next" href="#ProjeCarousel" role="button" data-slide="next">
                            <img src="../../assets/img/homepage/detail/next_button.png">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                
	        </div>
        </div>

	</section>
    <?php } ?>
	
<?php $this->load->view('layouts/footer.php') ?>