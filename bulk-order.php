<?php
    include('functioncall.php');
$title = 'Bulk Order';
$menu = 'bulkorer';
include('header.php');
?>
<div id="contact-page" class="container">
    <div class="bg">
        <div class="row">    		
            <div class="col-sm-12">    			   			
                <h2 class="title text-center">For Bulk Orders</h2> 
            </div>			 		
        </div>    	
        <div class="row">  	
            <div class="col-sm-12">
                <div class="contact-form">
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="phoneno" class="form-control" required="required" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="city" class="form-control" required="required" placeholder="City">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="address" class="form-control" required="required" placeholder="Your Address">
                        </div>
                        <div class="form-group col-md-12">
                            <select name="product" class="form-control" required="required">
                                <option value="oil">Oil</option>
                                <option value="ghee">Ghee</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                        </div>                        
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" id="bulkorder" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                </div>
            </div>			
        </div>  
    </div>	
</div><!--/#contact-page-->
<?php
include('footer.php');
?>