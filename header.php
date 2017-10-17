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
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>	
								<li><a href="#" mail="care@nattupuram.com"><i class="fa fa-envelope"></i></a></li>
								<li><a href="#"><i class="fa fa-phone"></i> +91 9994739036</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills contact-pills pull-right">			
								<li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li><li><a href="testimonials.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Testimonials</a></li>	
								<li><a href=""><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<!-- <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li> -->
								<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="logo pull-right">
							<a href="index.php"><img src="assets/images/nattupuram.jpg" alt=""/></a>
						</div>
						<!-- <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Dollar
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-sm-9">
						<div class="header-menu">
							<ul class="nav navbar-nav"><!-- 
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="index.php" class="<?= ($menu == 'home') ? 'active' : ''; ?>"> Home</a></li>
								<!-- <li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li> -->
								<li><a href="products.php" class="<?= ($menu == 'shop') ? 'active' : ''; ?>"> Shop Online</a></li>
								<li><a href="distribution.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Distribution</a></li>
								<!-- <li><a href="testimonials.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Testimonials</a></li> -->
								<li><a href="contact-us.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Contact Us</a></li>
								<li><?php if (!empty($_SESSION['user'])) { ?>
                                        <a onclick="logout();" href="javascript:;"><i class="fa fa-unlock"></i><?php echo $_SESSION['user']['name']; ?></a> 
                                    <?php } else { ?>
                                        <a href="login.php"><i class="fa fa-lock"></i> Login/Register </a> <?php } ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->