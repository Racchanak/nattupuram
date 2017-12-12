
<?php
    include('functioncall.php');
$title = $product[0]['product_name'];
$menu = 'prod_det';
$submenu = 'prod_det';
$category = 'groundnut';
include('header.php');
?>
<section>
    <div class="container">
	    <div class="bg">
	        <div class="row">    		
	            <div class="col-sm-12">    			   			
	                <h2 class="title text-center">Gallery</h2> 
	            </div>			 		
	        </div>    	
	        <div class="row"> 
		        <div class="product-details"><!--product-details-->
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/1.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/2.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/3.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/4.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/5.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/6.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/7.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/8.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/9.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        	<div class="col-md-3 col-sm-3">
		        		<img src="assets/images/gallery/10.jpg" alt="" style="height: 350px;padding-bottom: 28px"/>
		        	</div>
		        </div>
		    </div>
		</div>
    </div>
</section>
<?php
include('footer.php');
?>