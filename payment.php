<?php
	include('functioncall.php');
	$title = 'Checkout';
	include('header.php');	
	$transaction_id = (isset($_REQUEST['transaction_id'])) ? $_REQUEST['transaction_id'] : '';
	$transaction = transaction_data($transaction_id);
?>
<section>
		<div class="container">
			<div class="row">				
				<?php //include('category.php'); ?>
				<div class="col-sm-12">
					<div class="blog-post-area">
						<h2 class="title text-center">Orders Payment</h2>
					</div><!--/Repaly Box-->
				</div>	
			</div>	
	        <div class="row">  	
	            <div class="col-sm-12">
	                <div class="contact-form">
	                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="pgRedirect.php">
	                            <input id="ORDER_ID" type="hidden" class="form-control" required="required" placeholder="Name" name="ORDER_ID" value="<?php echo $transaction['transaction_id'];?>">
	                            <input id="CUST_ID" type="hidden" name="CUST_ID" value="<?php echo $transaction['user_id']['register_id'];?>">
	                            <input id="INDUSTRY_TYPE_ID" type="hidden" name="INDUSTRY_TYPE_ID" value="Retail">
	                            <input id="CHANNEL_ID" type="hidden" name="CHANNEL_ID" value="WEB">
	                        <div class="form-group col-md-6">
	                            <input title="TXN_AMOUNT" name="TXN_AMOUNT" value="<?php echo $transaction['total_amt'];?>">
	                            <input type="submit" name="submit" id="bulkorder" class="btn btn-primary pull-right" value="Submit">
	                        </div>
	                    </form>
	                </div>
	            </div>			
	        </div>  
		</div>
	</section>
<?php
	include('footer.php');
?>