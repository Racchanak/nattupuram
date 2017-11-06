<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$title; ?> | Nattupuram</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<div class="topHeader">
	<div class="container">
		<div class="row mar0">
			<div class="col-md-6 col-xs-2 pad0">
			<a class="navbar-brand hidden-lg hidden-md" href="index.php"><img src="assets/images/logo.png" alt=""/></a>
				<a class="brand  hidden-xs hidden-sm" href="index.php"><img src="assets/images/nattu.png" alt=""/></a>	
			</div>
			<div class="col-md-6 col-xs-10">
				<div class="topHeaderContent">
					<ul>
						<li><a href="distribution.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Become a distributor</a></li>
						<li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li>
						<li><a href="contact-us.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Contact Us</a></li>
						<li><?php if (!empty($_SESSION['user'])) { ?>
						<a onclick="logout();" href="javascript:;"><i class="fa fa-unlock"></i><?php echo $_SESSION['user']['name']; ?></a>
						<?php } else { ?>
						<a href="login.php"><i class="fa fa-lock"></i> Login/Register </a> <?php } ?>
						</li>							
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-xs-4">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>	
								<li><a href="#" mail="care@nattupuram.com"><i class="fa fa-envelope"></i></a></li>
								<li><a href="#"><i class="fa fa-phone" data-toggle="tooltip" data-placement="top" title="9994739036"></i> </a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-xs-8">
						<div class="contactinfo">
							<ul class="nav nav-pills contact-pills pull-right">			
								<li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li><li><a href="testimonials.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Testimonials</a></li>	
								<li><a href=""><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
								<!-- <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							<!-- </ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="headMiddle">
			<div class="midContent">
				<img src="assets/images/free_delivery-gray.png" alt="" data-toggle="tooltip" data-placement="top" title="Free Delivery">
				<h3 class="hidden-xs hidden-sm">Free Delivery</h3>
			</div>
			<div class="midContent">
				<img src="assets/images/secure-payment-gray.png" alt="" data-toggle="tooltip" data-placement="top" title="100% Secure Payment">
				<h3 class="hidden-xs hidden-sm">100% Secure Payment</h3>
			</div>
			<div class="midContent">
				<img src="assets/images/guarantee-gray.png" alt="" data-toggle="tooltip" data-placement="top" title="100% Moneyback guarantee"> 
				<h3 class="hidden-xs hidden-sm">100% Moneyback guarantee</h3>
			</div>
			<div class="midContent">
				<img src="assets/images/phone-gray.png" alt="" data-toggle="tooltip" data-placement="top" title="Order On Phone">
				<h3 class="hidden-xs hidden-sm">Order On Phone</h3>
			</div>
			<div class="midContent">
				<img src="assets/images/medal.png" alt="" data-toggle="tooltip" data-placement="top" title="Quality guaranteed">
				<h3 class="hidden-xs hidden-sm">Quality guaranteed</h3>
			</div>
		</div>
	<header id="header"><!--header-->
		<nav class="navbar navbar-default">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand hidden-sm hidden-xs" href="index.php"><img src="assets/images/logo.png" alt=""/></a>
	  <a class="brand hidden-lg hidden-md" href="index.php"><img src="assets/images/nattu.png" alt=""/></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav headBottom" style="margin-left: -95px;">
		<!-- <li><a href="index.php" class="<?= ($menu == 'home') ? 'active' : ''; ?>"> Home</a></li> -->
   <!-- <li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li> -->
		<li><a href="products.php" class="<?= ($menu == 'shop') ? 'active' : ''; ?>"> Shop Online</a></li>
		<li><a href="shopOnline.php?product_id=1" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Mara Chekku Ground Nut Oil</a></li>
		<li><a href="shopOnline.php?product_id=2" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Mara Chekku Sesame/Gingelly Oil</a></li>
		<li><a href="shopOnline.php?product_id=3" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Mara Chekku Coconut Oil</a></li>
		<li><a href="shopOnline.php?product_id=4" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Cow Ghee</a></li>
		<li><a href="combopack.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Combo Pack</a></li>
		<li><a href="bulkorder.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Bulk Order</a></li>
		<li><a href="offers.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Offers </a></li>										
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
