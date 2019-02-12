<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo SITE_NAME . ($this->uri->segment(1) != null ? ucfirst(" | " . $this->uri->segment(1)) : "")  ?></title>
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
	<link rel="stylesheet" href="<?php echo ($this->uri->segment(1) == "" ? base_url() . "assets/css/custom/homepage.css" : ($this->uri->segment(1) == "about-us" ? base_url() . "assets/css/custom/aboutus.css" : ($this->uri->segment(1) == "academic" ? base_url() . "assets/css/custom/academic.css" : ($this->uri->segment(1) == "students" ? base_url() . "assets/css/custom/students.css" : ($this->uri->segment(1) == "parents" ? base_url() . "assets/css/custom/parents.css" : ($this->uri->segment(1) == "contact-us" ? base_url() . "assets/css/custom/contact-us.css" : '' )))))); ?>">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/responsive.css">
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
								<a href="<?php echo base_url(); ?>Aboutus"  class="<?php echo ($this->uri->segment(1) == "Aboutus") ? "active" : "" ; ?>">About us</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>academic"  class="<?php echo ($this->uri->segment(1) == "academic") ? "active" : "" ; ?>">Academic</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>students"  class="<?php echo ($this->uri->segment(1) == "students") ? "active" : "" ; ?>">Students</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>parents"  class="<?php echo ($this->uri->segment(1) == "parents") ? "active" : "" ; ?>">Parents</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>Contactus" class="<?php echo ($this->uri->segment(1) == "Contactus") ? "active" : "" ; ?>">Contact us & Staff only</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->