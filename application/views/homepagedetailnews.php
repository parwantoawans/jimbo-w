<?php $this->load->view('layouts/header.php') ?>
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?php echo base_url(); ?>assets/img/homepage/banner/1.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<p style="font-size:5vw; padding-left:50px">Latest News</p>
				<p style="font-size:2vw">On this page, you can read about all our activity and more.</p>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="detailcontainer">
                        <p class="News-Detail-Date"><?php echo  date('F d, Y', strtotime($detail[0]['created_at'])); ?></p>
                        <p class="New-Schedule"><?php echo $detail[0]['title']; ?></p>
                        <img src="../../<?php echo IMAGE_CONTENT_PATH.$detail[0]['image']; ?>" class="detailimage"/>
                        <p class="detailDesc"><?php echo $detail[0]['desc']; ?></p>
                    </div>
                </div>
                <?php if(isset($otherNews)){ ?>
                <div class="col-sm-4">
                    <p class="Recent-News">Recent News</p>
                    <?php 
                        $buff = "";
                        foreach($otherNews as $key => $otherRow){

                            $buff .= '<div class="Recent-News-Container">
                                        <a href="' . base_url('homepage/newses/') . $otherRow->id .'">
                                            <img align:center;" src="../../'.IMAGE_CONTENT_PATH.$otherRow->image.'">
                                        </a><br/>
                                            <p class="Recent-News-More-Title">'.$otherRow->title.'</p>
                                    </div>';

                        }
                        echo $buff;
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
	
<?php $this->load->view('layouts/footer.php') ?>