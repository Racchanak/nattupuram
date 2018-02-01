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
					<div class="reviewBox">
						<div class="orangeBox">
							<div class="boxData">
								<p>Order No</p>
							</div>
							<div class="boxDatanew">
								<p>Product Name</p>
							</div>	
							<div class="boxData">
								<p>Price</p>
							</div>
							<div class="boxData">
								<p>Quantity</p>
							</div>
							<div class="boxData">
								<p>Net Price</p>
							</div>
							<div class="boxData">
								<p>GST</p>
							</div>
							<div class="boxData">
								<p>Total</p>
							</div>
							<div class="boxDatadele">
								<p></p>
							</div>
						</div>
		                <?php 
		                	$order_id = array(); 
		                	$grand_total = 0;  
		                	$grand_discount = 0; 
		                	$grand_originalAmt = 0;
		                	$grand_gst = 0;
		                	// print_r($product_order);
		                	foreach ($product_order as $key => $value) { 
		                		$grand_total+= $value['gstAmt']; 
		        				$quantyPrice = ($value['originalAmt']*$value['quantity']);
		                		$grand_originalAmt += $quantyPrice;
		    					$netPrice = $quantyPrice - ($quantyPrice * $value['offersdiscount']) / 100;  
		                		$discount_value = $quantyPrice-$netPrice;
		                		$grand_discount += $discount_value;
		                		$gst_val = explode('%', $value['gstValue']);
		                		$grand_gst +=$gst_val[0];
		                		array_push($order_id,$value['order_id']);
		                	?>
			            	<div class="dataBox">
								<div class="boxData">
									<p>Web ID: <?php echo $value['order_id']; ?></p>
								</div>
								<div class="boxDatanew">
									<p><a href="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></a></p>
								</div>
								<div class="boxData">
									<p><?php echo $value['originalAmt']; ?></p>
								</div>
								<div class="boxData">
									<p><?php echo $value['quantity']; ?></p>
								</div>
								<div class="boxData">
									<p class="greyContent"><s><?php echo $quantyPrice; ?></s></p>
									<p><?php echo $netPrice; ?></p>
									<p class="redContent"><?php echo $value['offersdiscount']; ?> OFF</p>
									 <p class="greyContent">Discount <?php echo $discount_value; ?></p>
								</div>
								<div class="boxData">
									<p><?php echo $value['gstValue']; ?></p>
								</div>
								<div class="boxData">
									<p><?php echo $value['gstAmt']; ?></p>
								</div>
							</div>
						<?php } ?>
						<div class="reviewBox borderTop">
							<div class="dataBox">
								<div class="boxBottomnew">
									<div id="refereal">
									</div>
								</div>
								<div class="boxBottom ">
									<div class="total">
										<p>Value of Product</p>
										<input type="hidden" id="grand_originalAmt" value="<?php echo $grand_originalAmt; ?>">
										<h6 class="rev_grand_originalAmt"><?php echo $grand_originalAmt; ?></h6>		
									</div>
								</div>
								<div class="boxBottom ">
									<div class="total">
										<p>Shipping cost</p>
										<h6> Free</h6>							
									</div>
								</div>					
								<div class="boxBottom ">
									<div class="total">
										<p>Discount</p>
										<input type="hidden" id="grand_discount" value="<?php echo $grand_discount; ?>" name="">
										<h6 class="rev_grand_discount"><?php echo $grand_discount; ?></h6>							
									</div>
								</div>
								<div class="boxBottom ">
									<div class="total">
										<p>GST</p>
										<input type="hidden" id="grand_gst" value="<?php echo $grand_gst; ?>" name="">
										<h6 class="rev_grand_gst"><?php echo $grand_gst; ?></h6>							
									</div>
								</div>
								<div class="boxBottom ">
									<div class="total">
										<p>Grand Total</p>
										<input type="hidden" id="grand_total" value="<?php echo $grand_total; ?>" name="">
										<h6 class="rev_grand_total"><?php echo $grand_total; ?></h6>							
									</div>
								</div>
								<div class="boxBottom ">
									<div class="payment-options">
										<?php $order_ids = implode(',', $order_id); ?>
										<!-- <a class="btn btn-default update" href="">Update</a> -->
										<!-- <form id="main-form" onsubmit="return purchase_transact();" class="purchase-form row" name="purchase-form">
						                    <input type="hidden" name="order_ids" id="order_ids" class="form-control" value="<?php echo $order_ids; ?>" >
						                    <button type="submit" class="btn btn-fefault cart" >
						                        <i class="fa fa-shopping-cart"></i>
						                        Check Out
						                    </button>
						                </form> -->
									</div>
								</div>	
							</div>
						</div>	
					</div>
						
	                <div class="contact-form">
	                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="pgRedirect.php">
	                            <input id="ORDER_ID" type="hidden" class="form-control" required="required" placeholder="Name" name="ORDER_ID" value="<?php echo $transaction['transaction_id'];?>">
	                            <input id="CUST_ID" type="hidden" name="CUST_ID" value="<?php echo $transaction['user_id']['register_id'];?>">
	                            <input id="INDUSTRY_TYPE_ID" type="hidden" name="INDUSTRY_TYPE_ID" value="Retail109">
	                            <input id="CHANNEL_ID" type="hidden" name="CHANNEL_ID" value="WEB">
	                        <div class="form-group col-md-6">

	                        	<!-- // i change this to hidden-->
	                            <input title="TXN_AMOUNT" type="hidden"  name="TXN_AMOUNT" value="<?php echo $transaction['total_amt'];?>">
	                            <input type="submit" name="submit" id="bulkorder" class="btn btn-primary pull-right" value="Proceed Payment">
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