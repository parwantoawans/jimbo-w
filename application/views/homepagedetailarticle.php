<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p class="Latest-News">Article</p>
				<p class="Latest-News-Subtitle">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<section>
		<div class="detailcontainer">
			<p class="detailTitle"><?php echo $detail[0]['articles_type']; ?></p>
			<img src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['image']; ?>" class="detailimage"/>
			<p class="detailDesc"><?php echo $detail[0]['desc']; ?></p>
		</div>	
	</section>
    <?php if(isset($otherArticle)){ ?>
	<section>
		<div class="detailcontainer">
			<p class="Other-Articles">Other Articles</p>
		
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
                                        foreach($otherArticle as $key => $otherRow){
                                            if($count == 0){
                                                if($isFirst)
                                                    $buff .= $headerActive;
                                                else
                                                    $buff .= $headerNext;
                                            }

                                            $buff .= '<div class="col-md-3 float-left">
                                                        <img height="120px" style="min-width:180px" src="../../'. IMAGE_CONTENT_PATH.$otherRow->image.'" alt="'.$otherRow->articles_type.'">
                                                        <p class="Other-Articles-Title">'.$otherRow->articles_type.'</p>
                                                        <p class="Other-Articles-Desc">'.substr($otherRow->desc, 0, 40).'...</p>
                                                        <div class="ci-text">
                                                            <a href="' . base_url('homepage/article/') . $otherRow->articles_type_id .'">Learn more</a>
                                                        </div>
                                                        <br/><br/><br/> 
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