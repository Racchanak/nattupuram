<?php
    include('functioncall.php');
    $title = 'Offers';
    include('header.php');
?>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">           
            <div class="col-sm-12"> 
                <div class="blog-post-area">
                    <h2 class="title text-center">Referral Offers</h2>
                    <div class="single-blog-post">  
                        <div class="col-sm-4"> 
                            <div class="col-sm-2"> 
                                <img src="assets/images/referral/twoperson.png" alt="" class="img-responsive">
                                <img src="assets/images/referral/shareicon.jpg" alt="" class="img-responsive" style="height: 14px;margin-left: 27px;margin-top: -20px;">
                            </div>
                        </div>
                        <div class="col-sm-4"> 
                            <div class="col-sm-2"> 
                                <img src="assets/images/referral/singleperson.png" alt="" class="img-responsive" style="height: 20px;">
                                <img src="assets/images/referral/cartimge.png" alt="" class="img-responsive" style="margin-left: 16px;margin-top: -18px;height: 18px;">
                            </div>
                        </div>
                        <div class="col-sm-4"> 
                            <div class="col-sm-3">
                                <img src="assets/images/referral/percentperson.jpg" alt="" class="img-responsive" style="height: 30px;">
                            </div>
                        </div> 
                        <div class="col-sm-12"> 
                            <p>Nattupuram, Encourages their customers to bring in their friends and families to experience the real taste of our traditional items.</p>
                            <p>Every referral purchase will earn our customers 50 Rs which can be used on their upcoming purchases.</p>  
                            <p>A simple three step process mentioned below will provide more clarity on the same,</p>
                            <ol>
                                <li>Login to your account at Nattupuram.com, if not registered already please do register so that you can be part of this referal program.</li>
                                <li>Click on the link REFERAL BONUS and send the invitation notice to your friends.</li> 
                                <li>Now your referred friend can register and place order with flat 50Rs discount.</li>  
                                <li>Once your friend completes his order referrer will get flat 50 Rs added to their account which will get deducted during the checkoutAs always we are looking forward for the support from our customers to make this referal program a success.</li>
                            </ol> 
                            <!-- <form id="main-contact-form" onsubmit="return contact_us();" class="contact-form row" name="contact-form"> -->
                            <form id="newsletter-validate-detail" onsubmit="return referral_email();" style="text-align: center" name="newsletter-form">
                                <div class="block-content">
                                    <div class="form-subscribe-header">
                                        <label for="newsletter">BE THE FIRST TO KNOW</label>
                                    </div>
                                    <div class="input-box">
                                       <input type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text validate-email" required="">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit" style="margin-top: -3px;padding: 3px 11px;">
                                    </div>
                                    <span class="newsletterrror"></span>
                                    <!--<div class="actions">
                                        <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span></button>
                                    </div>-->
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>                  
        </div>  
    </div>  
</div><!--/#contact-page-->
<?php
include('footer.php');
?>