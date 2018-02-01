<?php
	include('functioncall.php');
	$title = 'Checkout';
	include('header.php');
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			<div class="step-one">
				<h2 class="heading">Step - 1</h2>
			</div>
			<?php if (!empty($_SESSION['user'])) { ?>  
				<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user']['register_id'];?>">
				<input type="hidden" id="add_email" value="<?php echo $_SESSION['user']['emailid'];?>">
				<input type="hidden" id="add_name" value="<?php echo $_SESSION['user']['name'];?>">
				<input type="text" placeholder="Email*" id="sess_email" value="<?php echo $_SESSION['user']['emailid'];?>">
				<input type="text" placeholder="Name *" id="sess_name" value="<?php echo $_SESSION['user']['name'];?>">
			<?php } else { ?>
			<div class="registerUserName">
				<div class="row">
					<div class="checkout-options col-md-6">
					<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
					<h3>New User</h3>
					<p>Checkout options</p>
					<ul class="nav">
						<li>
							<label><input type="radio" class="chekout" name="account_option[]" value="Register"> Register Account</label>
						</li>
						<li>
							<label><input type="radio" class="chekout" name="account_option[]" value="Guest"> Guest Checkout</label>
						</li>						
						<!-- <li>
							<a href=""><i class="fa fa-times"></i>Cancel</a>
						</li> -->
					</ul> 
			</div><!--/checkout-options--> 
			<div class="col-md-6">				
			    <input type="hidden" id="gOrderId" value="<?php echo $_COOKIE['Guest_order']; ?>">
				<input type="hidden" id="add_email" value="">
				<input type="hidden" id="add_name" value="">	
				<div>                  
			        <div class="registerAccount" class="checkout_method" id="Register" style="display: none;">
			            <form id="main-form" onsubmit="return checkoutRegisterLogin();" class="purchase-form" name="purchase-form">
							<input type="hidden" name="user_id" id="user_id" value="Guest_id">
	                        <input type="text" id="login_email" name="email" placeholder="Email Address" />
	                        <input type="password" id="login_password" name="password" placeholder="Password" />
	                        <div><span class="error-review"></span></div>
	                        <div><span class="success-review"></span></div>
			                <button type="submit" class="btn btn-fefault cart" >
			                    <i class="fa fa-shopping-cart"></i>
			                    Continue
			                </button>
			            </form>			
			        </div>                     
			        <div class="guestAccount" class="checkout_method" id="Guest" style="display: none;">
						<p>Guest Details</p>
			            <form id="main-form" onsubmit="return checkoutGuestLogin();" class="purchase-form " name="purchase-form">
							<input type="hidden" name="user_id" id="user_id" value="Guest_id">
							<input type="text" placeholder="Name *" id="guestname" value="">	
							<input type="text" placeholder="Email*" id="guestemail" value="">
			                <input type="hidden" id="gRegister" value="Guest">
			                <label><input type="radio" class="regisCheck" name="guestRegister[]" value="GRegister"> Do You want to Register?</label></br>
			                <span id="regisCheck" style="display: none;"><label>Password :</label><input type="password" name="password" id="guestresPassword" class="form-control"></span>
			                <button type="submit" class="btn btn-fefault cart" >
			                    <i class="fa fa-shopping-cart"></i>
			                    Continue
			                </button>
			            </form>
			        </div>
		        </div>
			</div>
				</div>
			</div>
			 <!--/register-req-->
			<?php } ?>	
			<div class="step-one">
				<h2 class="heading">Step - 2</h2>
			</div>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Address</p>
							<div class="form-one">
								<form>
									<input type="text" placeholder="Address 1 *" id="address1">
									<input type="text" placeholder="Address 2" id="address2">
								</form>
							</div>
							<div class="form-two">
								<form>
									<select name="city" id="city">
										<option value="">-- City --</option>
										<option value="Bengaluru">Bengaluru</option>
										<option value="Coimbatore">Coimbatore</option>
										<option value="Pondicherry">Pondicherry</option>
									</select>
									<input type="text" name="zipcode" id="zipcode" placeholder="Zip / Postal Code *" >
									<select name="state" id="state">
										<option value="">-- State / Province / Region --</option>
										<option value="Karnataka">Karnataka</option>
										<option value="Tamilnadu">Tamilnadu</option>
										<option value="Pondicherry">Pondicherry</option>
									</select>
									<select name="country" id="country">
										<option value="">-- Country --</option>
										<option value="India">India</option>
									</select>
									<!-- <input type="text" placeholder="Phone *"> -->
									<input type="text" id="mobile" name="mobile" placeholder="Mobile Phone">
									<!-- <input type="text" placeholder="Fax"> -->
								</form>
							</div>
							<span class="error-checkout"></span>
						</div>
					</div>
					<!-- <div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Order</p>
							<textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							<label><input type="checkbox"> Shipping to bill address</label>
						</div>	
					</div>	 -->				
				</div>
			</div>
			<div class="step-one">
				<h2 class="heading">Step - 3</h2>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
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
				<div id="before_discount">
					<?php 
	                	$order_id = array(); 
	                	$grand_total = 0;  
	                	$grand_discount = 0; 
	                	$grand_originalAmt = 0;
	                	$grand_gst = 0;
	                	// print_r($product_order);
	                	foreach ($product_order as $key => $value) { 
	        				$quantyPrice = ($value['originalAmt']*$value['quantity']);
	    					$netPrice = $quantyPrice - ($quantyPrice * $value['offersdiscount']) / 100;  
	                		$gstAmt = $quantyPrice + ($quantyPrice * $value['gstValue']) / 100;
	                		$discount_value = 0;
	                		$gst_val = explode('%', $value['gstValue']);
	                		$grand_originalAmt += $quantyPrice;
	                		$grand_total+= $gstAmt; 
	                		$grand_discount += $discount_value;
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
							<!-- <div class="input-group">
		                        <span class="input-group-btn">
									<button type="button" class="btn btn-default btn-number" onclick="myquantity()" disabled="disabled" data-type="minus" data-field="quant[1]">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
		                    	</span>
		                        	<span><input type="text" name="quant[1]" id="proquantity" class="form-control input-number" value="1" min="1" max="5"></span>
		                            <span class="input-group-btn">
		                                <button type="button" class="btn btn-default btn-number" onclick="myquantity()" data-type="plus" data-field="quant[1]">
		                                    <span class="glyphicon glyphicon-plus"></span>
		                                </button>
		                            </span>
		                    </div> -->
								<p><?php echo $value['quantity']; ?></p>
							</div>
							<div class="boxData">
								<p><?php echo $quantyPrice; ?></p>
							</div>
							<div class="boxData">
								<p><?php echo $value['gstValue']; ?></p>
							</div>
							<div class="boxData">
								<p><?php echo $gstAmt; ?></p>
							</div>
							<div class="boxDatadele">
								<p><a class="order_quantity_delete" onClick="deleteOrder(<?php echo $value['order_id']; ?>)" href="javascript:;"><i class="fa fa-times"></i></a></p>
							</div>
						</div>
					<?php } ?>
					<input type="hidden" class="grand_originalAmt" value="<?php echo $grand_originalAmt; ?>">
					<input type="hidden" class="grand_total" value="<?php echo $grand_total; ?>">
					<input type="hidden" class="grand_discount" value="<?php echo $grand_discount; ?>" >
					<input type="hidden" class="grand_gst" value="<?php echo $grand_gst; ?>">
				</div>
				<div id="after_discount">
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
							<!-- <div class="input-group">
		                        <span class="input-group-btn">
									<button type="button" class="btn btn-default btn-number" onclick="myquantity()" disabled="disabled" data-type="minus" data-field="quant[1]">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
		                    	</span>
		                        	<span><input type="text" name="quant[1]" id="proquantity" class="form-control input-number" value="1" min="1" max="5"></span>
		                            <span class="input-group-btn">
		                                <button type="button" class="btn btn-default btn-number" onclick="myquantity()" data-type="plus" data-field="quant[1]">
		                                    <span class="glyphicon glyphicon-plus"></span>
		                                </button>
		                            </span>
		                    </div> -->
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
							<div class="boxDatadele">
								<p><a class="order_quantity_delete" onClick="deleteOrder(<?php echo $value['order_id']; ?>)" href="javascript:;"><i class="fa fa-times"></i></a></p>
							</div>
						</div>
					<?php } ?>
					<input type="hidden" class="grand_originalAmt" value="<?php echo $grand_originalAmt; ?>">
					<input type="hidden" class="grand_total" value="<?php echo $grand_total; ?>">
					<input type="hidden" class="grand_discount" value="<?php echo $grand_discount; ?>" >
					<input type="hidden" class="grand_gst" value="<?php echo $grand_gst; ?>">
				</div>
			</div>
			<div class="reviewBox borderTop">
				<div class="dataBox">
					<div class="boxBottomnew">
						<div id="refereal">
							<input type="text" name="refferrer_Code" placeholder="Refferrer Code" id="referCode"/>
							<form id="main-form" onsubmit="return applyDiscounts();" class="purchase-form " name="purchase-form">
								<button type="submit" class="btn btn-fefault applyBtn" ><i class="fa fa-check" aria-hidden="true"></i>Apply</button>
						    </form>
						</div>
					</div>
					<div class="boxBottom ">
						<div class="total">
							<p>Value of Product</p>
							<input type="hidden" id="grand_originalAmt" value="">
							<h6 class="rev_grand_originalAmt"></h6>		
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
							<input type="hidden" id="grand_discount" value="" name="">
							<h6 class="rev_grand_discount"></h6>							
						</div>
					</div>
					<div class="boxBottom ">
						<div class="total">
							<p>GST</p>
							<input type="hidden" id="grand_gst" value="" name="">
							<h6 class="rev_grand_gst"></h6>							
						</div>
					</div>
					<div class="boxBottom ">
						<div class="total">
							<p>Grand Total</p>
							<input type="hidden" id="grand_total" value="" name="">
							<h6 class="rev_grand_total"></h6>							
						</div>
					</div>
					<div class="boxBottom ">
						<div class="payment-options">
							<?php $order_ids = implode(',', $order_id); ?>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							<form id="main-form" onsubmit="return purchase_transact();" class="purchase-form row" name="purchase-form">
			                    <input type="hidden" name="order_ids" id="order_ids" class="form-control" value="<?php echo $order_ids; ?>" >
			                    <button type="submit" class="btn btn-fefault cart" >
			                        <i class="fa fa-shopping-cart"></i>
			                        Check Out
			                    </button>
			                </form>
						</div>
					</div>	
				</div>
			</div>			
		</div>
	</section> <!--/#cart_items-->
<?php
	include('footer.php');
?>
<script type="text/javascript">
	function before_discount() {
		$('#after_discount').css('display','none');
		$('#refereal').css('display','none');
		$('#before_discount').css('display','block');
		var grand_originalAmt = $('#before_discount').find('.grand_originalAmt').val();
		$('#grand_originalAmt').val(grand_originalAmt);
		$('#grand_originalAmt').next('h6')[0]['innerHTML'] = grand_originalAmt;
		var grand_total = $('#before_discount').find('.grand_total').val();
		$('#grand_total').val(grand_total);
		$('#grand_total').next('h6')[0]['innerHTML'] = grand_total;
		var grand_discount = $('#before_discount').find('.grand_discount').val();
		$('#grand_discount').val(grand_discount);
		$('#grand_discount').next('h6')[0]['innerHTML'] = grand_discount;
		var grand_gst = $('#before_discount').find('.grand_gst').val();
		$('#grand_gst').val(grand_gst+'%');
		$('#grand_gst').next('h6')[0]['innerHTML']  = grand_gst+'%';
	}
	function after_discount() {
		$('#after_discount').css('display','block');
		$('#before_discount').css('display','none');
		$('#refereal').css('display','block');
		var grand_originalAmt = $('#after_discount').find('.grand_originalAmt').val();
		$('#grand_originalAmt').val(grand_originalAmt);
		$('#grand_originalAmt').next('h6')[0]['innerHTML'] = grand_originalAmt;
		var grand_total = $('#after_discount').find('.grand_total').val();
		$('#grand_total').val(grand_total);
		$('#grand_total').next('h6')[0]['innerHTML'] = grand_total;
		var grand_discount = $('#after_discount').find('.grand_discount').val();
		$('#grand_discount').val(grand_discount);
		$('#grand_discount').next('h6')[0]['innerHTML'] = grand_discount;
		var grand_gst = $('#after_discount').find('.grand_gst').val();
		$('#grand_gst').val(grand_gst+'%');
		$('#grand_gst').next('h6')[0]['innerHTML']  = grand_gst+'%';
	}
	console.log($('#user_id').val());
	if($('#user_id').val()!='Guest_id') {
		after_discount();
	} else {
		before_discount();		
	}
</script>
