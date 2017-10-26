<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">                                
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>M/s,Nexus Agro Enterprises</p>
                            <p>Sangai Nagar</p>
                            <p>Reddichavadi</p>
                            <p>Cuddalore</p>
                            <p>Pincode:607402</p>
                            <p>Mobile: 9585006008</p>
                            <p>Email: care@nattupuram.com<br>salesnattupuram@gmail.com</p>
                        </address>  
                    </div> 
                </div>
                <div class="col-sm-4">                                
                    <div class="single-widget">
                        <h2 class="title text-center">Menus </h2>                        
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="index.php" class="<?= ($menu == 'home') ? 'active' : ''; ?>"> Home</a></li>
                            <li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>"> About Us</a></li>
                            <li><a href="products.php" class="<?= ($menu == 'shop') ? 'active' : ''; ?>"> Products</a></li>
                            <li><a href="distribution.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Distribution</a></li>
                            <li><a href="testimonials.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Testimonials</a></li>
                            <li><a href="contact-us.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>"> Contact Us</a></li>
                            <li><a href=""><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
                        </ul> 
                    </div> 
                </div>
                <div class="col-sm-4">                                                
                    <div class="contact-form">
                        <h2 class="title text-center">Get In Touch</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>old footer
                <!-- <div class="col-sm-7">
                        <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                        <a href="#">
                                                <div class="iframe-img">
                                                        <img src="images/home/iframe1.png" alt="" />
                                                </div>
                                                <div class="overlay-icon">
                                                        <i class="fa fa-play-circle-o"></i>
                                                </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                </div>
                        </div>
                        
                        <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                        <a href="#">
                                                <div class="iframe-img">
                                                        <img src="images/home/iframe2.png" alt="" />
                                                </div>
                                                <div class="overlay-icon">
                                                        <i class="fa fa-play-circle-o"></i>
                                                </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                </div>
                        </div>
                        
                        <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                        <a href="#">
                                                <div class="iframe-img">
                                                        <img src="images/home/iframe3.png" alt="" />
                                                </div>
                                                <div class="overlay-icon">
                                                        <i class="fa fa-play-circle-o"></i>
                                                </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                </div>
                        </div>
                        
                        <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                        <a href="#">
                                                <div class="iframe-img">
                                                        <img src="images/home/iframe4.png" alt="" />
                                                </div>
                                                <div class="overlay-icon">
                                                        <i class="fa fa-play-circle-o"></i>
                                                </div>
                                        </a>
                                        <p>Circle of Hands</p>
                                        <h2>24 DEC 2014</h2>
                                </div>
                        </div>
                </div>
                <div class="col-sm-3">
                        <div class="address">
                                <img src="images/home/map.png" alt="" />
                                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                </div> -->
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">  
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Payment options</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">paytm</a></li>
                            <!-- <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li> -->
                            <!-- <li><a href="#">Billing System</a></li> -->
                            <!-- <li><a href="#">Ticket System</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-3 col-sm-offset-1">   
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li>
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



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>