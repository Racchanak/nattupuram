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
			<div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="radio" class="chekout" name="account_option[]" value="Register"> Register Account</label>
					</li>
					<li>
						<label><input type="radio" class="chekout" name="account_option[]" value="Guest"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul> 
			</div><!--/checkout-options--> 
			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			    <input type="hidden" id="gOrderId" value="<?php echo $_COOKIE['Guest_cart']; ?>">
				<input type="hidden" id="add_email" value="">
				<input type="hidden" id="add_name" value="">	
				<div class="col-sm-12">                  
			        <div class="col-sm-6" class="checkout_method" id="Register" style="display: none;">
			            <form id="main-form" onsubmit="return checkoutRegisterLogin();" class="purchase-form row" name="purchase-form">
							<input type="hidden" name="user_id" id="user_id" value="Guest_id">
	                        <input type="text" id="login_email" name="email" placeholder="Email Address" />
	                        <input type="password" id="login_password" name="password" placeholder="Password" />
			                <button type="submit" class="btn btn-fefault cart" >
			                    <i class="fa fa-shopping-cart"></i>
			                    Continue
			                </button>
			            </form>			
			        </div>                     
			        <div class="col-sm-6" class="checkout_method" id="Guest" style="display: none;">
						<p>Guest Details</p>
			            <form id="main-form" onsubmit="return checkoutGuestLogin();" class="purchase-form row" name="purchase-form">
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
			</div> <!--/register-req-->
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

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Order No</td>
							<td class="description">Product Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                            <?php 
                            	$order_id = array(); 
                            	$grand_total = 0; 
                            	foreach ($product_order as $key => $value) { 
                            		$grand_total+= $value['total']; 
                            		$total_value = $grand_total;
                            		array_push($order_id,$value['order_id']);
                            	?>
						<tr>
							<td class="cart_product">
								<p>Web ID: <?php echo $value['order_id']; ?></p>
							</td>
							<td class="cart_description">
								<h4><a href="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></a></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $value['price']; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<p><?php echo $value['quantity']; ?></p>
									<!-- <a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a> -->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $value['total']; ?></p>
							</td>
                            <?php if (!empty($_SESSION['user'])) { ?>  
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							<?php } ?>
						</tr>
						<?php } ?>
						<!-- <tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<input type="hidden" id="grand_total" value="<?php //echo $grand_total; ?>" name="">
										<td><span><?php //echo $grand_total; ?></span></td>
									</tr>
								</table>
							</td>
						</tr> -->
						<tr>
							<td colspan="4">
								<table class="table table-condensed total-result">
									<tr>
										<td><label>Apply Coupon</label></td>
										<td><input type="text" name="apply_coupon" id="aCcoupon"/></td>
									</tr>
									<tr>
										<td><label><input type="radio" class="redeem" name="redeem_option[]" value="WalletCash"> Redeem Wallet Cash</label></td>
										<td id="WalletCash" style="display: none;"><input type="text" name="redeem_Cash" id="redeemCash"/></td>
									</tr>
									<tr>
										<td><label><input type="radio" class="redeem" name="redeem_option[]" value="ReferCode"> Refferrer Code</label></td>
										<td id="ReferCode" style="display: none;"><input type="text" name="refferrer_Code" id="referCode"/></td>
									</tr>
									<tr>
										<td>&nbsp;</td>										
										<td>
											<form id="main-form" onsubmit="return applyDiscounts();" class="purchase-form row" name="purchase-form">
												<button type="submit" class="btn btn-fefault cart" ><i class="fa fa-shopping-cart"></i>Apply</button>
					                    	</form>
					                    </td>								
									</tr>
								</table>
							</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Order Sub Total</td>
										<input type="hidden" id="grand_total" value="<?php echo $grand_total; ?>" name="">
										<td><?php echo $grand_total; ?></td>
									</tr>
									<tr>
										<td>Discount</td>
										<td><span id="discount_value">0</span></td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td><label>Total</label></td>
										<input type="hidden" id="totalValue" value="<?php echo $total_value; ?>">
										<td><span id="total_value"><?php echo $total_value; ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
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