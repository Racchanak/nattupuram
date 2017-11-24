<?php
    include('functioncall.php');
$title = 'Logout';
$menu = 'logout';
include('header.php');
?>
<body>
	<div class="container text-center">
        <?php include('category.php'); ?>
		<!-- <div class="logo-404">
			<a href="index.php"><img src="images/nattupuram.jpg" alt=""/></a>
		</div> -->
		<div class="content-logout">
			<h1>Visit Again</h1>
			<p>Thank you for using nattupuram.com. You have successsfully logged out.</p>
			<h2><a href="login.php">click here to login again</a></h2>
		</div>
	</div>
    <footer id="footer"><!--Footer-->
        <div class="footer-bottom" style="background: none repeat scroll 0 0 rgba(29, 111, 24, 0.88);">
            <div class="container" style="width: 850px;">
                <div class="row">
                    <div class="col-sm-12">   
                        <div class="nav-pills navfooter">
                            <ul class="nav navbar-nav">
                                <li><a href="testimonials.<?php  ?>" class="<?= ($menu == 'feedback') ? 'active' : ''; ?>"> Feedback</a></li>
                                <li><a href="team.php" class="<?= ($menu == 'team') ? 'active' : ''; ?>"> Nattupuram Team</a></li>
                                <li><a href="privacypolicy.php" class="<?= ($menu == 'policy') ? 'active' : ''; ?>"> Privacy Policy</a></li>
                                <li><a href="shippingrefund.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Shipping and Delivery Policy</a></li>
                                <li><a href="termscondi.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Terms and Condition</a></li>
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>  -->
                                <!-- <li><a href="#"><i class="fa fa-envelope"></i> care@nattupuram.com</a></li> -->
                                <!-- <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 Nattupuram Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">nattupuram</a></span></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>