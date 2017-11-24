<?php
    include('functioncall.php');
$title = 'Contact Us';
include('header.php');
?>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">    		
            <div class="col-sm-12"> 
                <div class="col-sm-6">    			   			
                    <div class="contact-form">
                        <h2 class="title text-center">Contact <strong>Us</strong></h2>
                        <div class="contact-us status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" onsubmit="return contact_us();" class="contact-form row" name="contact-form">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" id="cont_name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" id="cont_emailid" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" id="cont_subject" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="cont_message" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>
                            <div class="form-group col-md-12"><span class="contact-userror-review"></span>
                                <span class="contact-ussuccess-review"></span></div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>               
                <div class="col-sm-6">
                    <div class="contact-info">
                        <h2 class="title text-center">Contact Info</h2>
                        <address>
                            <p>Redibro Enterprises</p>
                            <p>No:7/26, Reddiyar Street</p>
                            <p>Reddichavadi</p>
                            <p>Cuddalore</p>
                            <p>Pincode:607402</p>
                            <p>Tamil Nadu, India.</p>
                            <p>Mobile: 8884442552</p>
                            <p>Email: care@nattupuram.com<br>salesnattupuram@gmail.com</p>
                        </address>
                    </div>   
                </div>          
            </div>			 		
        </div>    	
        <!--        <div class="row">  	
                    <div class="col-sm-8">
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
                    </div>-->
        <!-- <div class="col-sm-6">
            <div class="social-networks">
                <h2 class="title text-center">Social Networking</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div> -->
    </div>  
</div>	
</div><!--/#contact-page-->

<?php
include('footer.php');
?>