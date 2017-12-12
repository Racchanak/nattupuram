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
			    <input type="hidden" id="gOrderId" value="<?php echo $_COOKIE['Guest_cart']; ?>">
				<input type="hidden" id="add_email" value="">
				<input type="hidden" id="add_name" value="">	
				<div>                  
			        <div class="registerAccount" class="checkout_method" id="Register" style="display: none;">
			            <form id="main-form" onsubmit="return checkoutRegisterLogin();" class="purchase-form" name="purchase-form">
							<input type="hidden" name="user_id" id="user_id" value="Guest_id">
	                        <input type="text" id="login_email" name="email" placeholder="Email Address" />
	                        <input type="password" id="login_password" name="password" placeholder="Password" />
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
			                <span id="regisCheck" style="display: none;"><label>Password :</label><input type="password" name="password" id="guestresPassword" class="form-control">
			                <button type="submit" class="btn btn-fefault cart" >
			                    <i class="fa fa-shopping-cart"></i>
			                    Continue
			                </button></span>
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
				<div class="boxDatanew">
					<p>Product Name</p>
				</div>	
					<div class="boxData">
						<p>Shipping</p>
					</div>
					<div class="boxData">
						<p>Price</p>
					</div>
					<div class="boxData">
						<p>Quantity</p>
					</div>
					<div class="boxData">
						<p>Total</p>
					</div>
				</div>
                            <?php 
                            	$order_id = array(); 
                            	$grand_total = 0; 
                            	foreach ($product_order as $key => $value) { 
                            		$grand_total+= $value['total']; 
                            		$total_value = $grand_total;
                            		array_push($order_id,$value['order_id']);
                            	?>
				<div class="dataBox">
					<div class="boxDatanew">
						<p><a href="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></a></p>
					</div>
					<div class="boxData">
						<p><?php echo $value['price']; ?></p>
					</div>
					<div class="boxData">
						<p><?php echo $value['price']; ?></p>
					</div>
					<div class="boxData">
						<p><?php echo $value['quantity']; ?></p>
					</div>
					<div class="boxData">
						<p><?php echo $value['total']; ?></p>
					</div>
				</div>
						<?php } ?>
						</div>
						<div class="reviewBox borderTop">
				<div class="dataBox1 dataBox">
					<div class="boxBottom padLeft">
						<p>Refferrer Code</p>
					</div>
					<div class="boxBottom">
						<!-- <input type="text" name="apply_coupon" id="aCcoupon"/> -->
						<input type="text" name="refferrer_Code" id="referCode"/>
						<form id="main-form" onsubmit="return applyDiscounts();" class="purchase-form " name="purchase-form">
							<button type="submit" class="btn btn-fefault applyBtn" ><i class="fa fa-shopping-cart"></i>Apply</button>
					    </form>
					</div>
					<div class="boxBottom ">
						<div class="total">
							<p>Order Sub Total</p>
							<p>Discount</p>
							<p>Shipping Cost</p>							
						</div>
					</div>
					<div class="boxBottom ">
						<div class="total">
							<input type="hidden" id="grand_total" value="<?php echo $grand_total; ?>" name="">
										<p><?php echo $grand_total; ?></p>
							<p id="discount_value">0</p>
							<p> Free</p>
						</div>
					</div>					
				</div>
				</div>
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
				<!-- <span>
					<label><input type="checkbox"> Direct Bank Transfer</label>
				</span>
				<span>
					<label><input type="checkbox"> Check Payment</label>
				</span>
				<span>
					<label><input type="checkbox"> Paypal</label>
				</span> -->
			</div>
		</div>
	</section> <!--/#cart_items-->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<?php
	include('footer.php');
?>	