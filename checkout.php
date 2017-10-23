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
				<h2 class="heading">Step1</h2>
			</div>
			<!-- <div class="checkout-options">
				<h3>New User</h3>
				<p>Checkout options</p>
				<ul class="nav">
					<li>
						<label><input type="checkbox"> Register Account</label>
					</li>
					<li>
						<label><input type="checkbox"> Guest Checkout</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Cancel</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<!--<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div> --><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<!-- <div class="col-sm-3">
						<div class="shopper-info">
							<p>Shopper Information</p>
							<form>
								<input type="text" placeholder="Display Name">
								<input type="text" placeholder="User Name">
								<input type="password" placeholder="Password">
								<input type="password" placeholder="Confirm password">
							</form>
							<a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a>
						</div>
					</div> -->
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Address</p>
							<div class="form-one">
								<form>
                                <?php if (!empty($_SESSION['user'])) { ?>  
									<input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user']['register_id'];?>">
									<input type="text" placeholder="Email*" id="add_email" value="<?php echo $_SESSION['user']['emailid'];?>">
									<input type="text" placeholder="Name *" id="add_name" value="<?php echo $_SESSION['user']['name'];?>">
								<?php } else { ?>
									<input type="hidden" name="user_id" id="user_id" value="Guest_id">
									<input type="text" placeholder="Email*" id="add_email">
									<input type="text" placeholder="Name *" id="add_name">							
								<?php } ?>
									<!-- <input type="text" placeholder="Middle Name">
									<input type="text" placeholder="Last Name *"> -->
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
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr> -->
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<!-- <tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr> -->
									<tr>
										<td>Total</td>
										<input type="hidden" id="grand_total" value="<?php echo $grand_total; ?>" name="">
										<td><span><?php echo $grand_total; ?></span></td>
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