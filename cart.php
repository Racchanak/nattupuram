<?php
	include('functioncall.php');
	$title = 'Cart';
	$menu = 'cart';
	include('header.php');
?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<!-- <td class="image">Item</td> -->
							<td class="description">Item</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                            <?php 
                            	$cart_id = array(); 
                            	$grand_total = 0; 
                            	foreach ($product_cart as $key => $value) { 
                            		$grand_total+= $value['total']; 
                            		array_push($cart_id,$value['cart_id']);
                            	?>
						<tr>
							<!-- <td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td> -->
							<td class="cart_description">
								<h4><a href="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></a></h4>
								<p>Web ID: <?php echo $value['cart_id']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $value['price']; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<p><?php echo $value['quantity']; ?></p>
									<!-- <a class="cart_quantity_up" href=""> + </a> -->
									<!-- <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2"> -->
									<!-- <a class="cart_quantity_down" href=""> - </a> -->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $value['total']; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
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
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<!-- <h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p> -->
			</div>
			<div class="row">
				<!-- <div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div> -->
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<!-- <li>Cart Sub Total <span>$59</span></li> -->
							<!-- <li>Eco Tax <span>$2</span></li> -->
							<!-- <li>Shipping Cost <span>Free</span></li> -->
							<li>Total <span><?php echo $grand_total; ?></span></li>
						</ul>
						<?php $cart_id = implode(',', $cart_id); ?>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							<form id="main-form" onsubmit="return purchase_order();" class="purchase-form row" name="purchase-form">
                                <input type="hidden" name="category" id="cart_ids" class="form-control" value="<?php echo $cart_id; ?>" >
                                <input type="hidden" name="category" id="orderuser_id" class="form-control" value="<?php echo $_SESSION['user']['register_id']; ?>">
                                <input type="hidden" name="amount" id="orderamount" class="form-control" value="<?php echo $grand_total; ?>">
                                <button type="submit" class="btn btn-fefault cart" >
                                    <i class="fa fa-shopping-cart"></i>
                                    Check Out
                                </button>
                            </form>
							<!-- <a class="btn btn-default check_out" href=""></a> -->
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>