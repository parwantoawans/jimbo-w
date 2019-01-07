<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo SITE_NAME . " | " . ucfirst($this->uri->segment(1)) ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/homepage.css">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="site-logo">
						<!-- <p>JimboRee</p> -->
						<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-10">
					<!-- <a href="" class="site-btn header-btn">Login</a> -->
					<nav class="main-menu">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>" class="<?php echo ($this->uri->segment(1) == "") ? "active" : "" ; ?>">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>about-us"  class="<?php echo ($this->uri->segment(1) == "about-us") ? "active" : "" ; ?>">About us</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>academic"  class="<?php echo ($this->uri->segment(1) == "academic") ? "active" : "" ; ?>">Academic</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>students"  class="<?php echo ($this->uri->segment(1) == "students") ? "active" : "" ; ?>">Students</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>parents"  class="<?php echo ($this->uri->segment(1) == "") ? "active" : "" ; ?>">Parents</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>contact" class="<?php echo ($this->uri->segment(1) == "") ? "active" : "" ; ?>">Contact us & Staff only</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->