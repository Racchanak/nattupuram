<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="companyinfo natu-info">
                    <h3 style="text-align: center;">Get NATTUPURAM !</br>Stay Hale & Healthy Forever !!!</h3>
                    <address>
                        <p>Don't wait for a foreigner's approval to say, What We have already in our culture is the best.</p>
                        <p>NATTUPURAM with all its innocence, No adulteration, Purity with Virginity welcome everyone to create Healthy India !</p>
                        <p><strong>"Healthy Products</strong> from a <strong>Heathy Farm</strong> to make <strong>Healthy India"</strong></p>
                        <p>"à®®à®£à¯à®µà®¾à®šà®®à¯ ; à®ªà®¾à®°à®®à¯à®ªà®°à®¿à®¯à®®à¯</p>
                        <p>à®®à®£à®•à¯à®•à¯à®®à¯ à®ªà®¤à®¾à®°à¯à®¤à¯à®¤à®®à¯"</p>
                        <p>- à®¨à®¾à®Ÿà¯à®Ÿà¯à®ªà¯à®ªà¯à®±à®®à¯</p>
                    </address>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="companyinfo">
                    <img src="assets/images/fssai.jpg" alt="" class="img-responsive"/>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="companyinfo pay-info">
                    <h3>Payment Option</h3>
                    <address>
                        <p>UPI</p>
                        <p>Cards</p>
                        <p>EMI</p>
                        <p>Netbanking</p>
                        <p>Wallets</p>
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div id="welOffers" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $offers['Welcome'][0]['title']; ?></h4>
      </div>
      <div class="modal-body">
        <h2><?php echo $offers['Welcome'][0]['description']; ?></h2>
        <h4><?php echo $offers['Welcome'][0]['coupon_code']; ?></h4>
        <p><?php echo $offers['Welcome'][0]['coupon_text']; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="proOffers" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">OFFERS</h4>
      </div>
      <div class="modal-body">
        <?php foreach ($offers['Product'] as $key => $value) { ?>
            <h3><?php echo $value['title']; ?></h3>
            <h4><?php echo $value['description']; ?></h4 >
            <h5><?php echo $value['coupon_code']; ?></h5>
        <?php } ?>
        <!-- <h3>2. REFERRAL OFFER</h3>
        <h4>Refer and Earn Flat 5% Cash back on Referal's first order.</h4>
        <h5>Use Coupon : REFER05</h5> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4">                        
                        <div class="contact-info">
                            <h2 class="title">Contact Info</h2>
                            <address>
                                <p>Redibro Enterprises</p>
                                <p>No:7/26, Reddiyar Street</p>
                                <p>Reddichavadi</p>
                                <p>Cuddalore</p>
                                <p>Pincode:607402</p>
                                <p>Tamil Nadu, India.</p>
                                <p>Mobile: 9585006008</p>
                                <p>Email: care@nattupuram.com<br>salesnattupuram@gmail.com</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2 class="title">Menu</h2>
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
                    <div class="col-sm-6">                    
                        <div class="contact-form">
                            <h2 class="title text-center">Enquiry</h2>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" onsubmit="return enquiry();" class="contact-form row" name="contact-form">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" id="enq_name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" id="enq_emailid" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="subject" id="enq_subject" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="message" id="enq_message" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                                </div>
                                <div class="form-group col-md-12"><span class="error-review"></span>
                                    <span class="success-review"></span></div>                        
                                <div class="form-group col-md-12">
                                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom" style="background: none repeat scroll 0 0 rgba(29, 111, 24, 0.88);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">   
                    <div class="nav-pills navfooter">
                        <ul class="nav navbar-nav">
                            <li><a href="testimonials.php" class="<?= ($menu == 'feedback') ? 'active' : ''; ?>"> Feedback</a></li>
                            <!-- <li><a href="team.php" class="<?= ($menu == 'team') ? 'active' : ''; ?>"> Nattupuram Team</a></li> -->
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
                <p class="pull-left">Copyright Â© 2017 Nattupuram Inc. All rights reserved.</p>
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