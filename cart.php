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
	                	$cart_id = array(); 
	                	$grand_total = 0;  
	                	$grand_total = 0;  
	                	$grand_discount = 0; 
	                	$grand_originalAmt = 0;
	                	$grand_gst = 0;
	                	// print_r($product_order);
	                	foreach ($product_cart as $key => $value) { 
                    		$grand_total+= $value['gstAmt']; 
            				$quantyPrice = ($value['originalAmt']*$value['quantity']);
                    		$grand_originalAmt += $quantyPrice;
        					$netPrice = $quantyPrice - ($quantyPrice * $value['offersdiscount']) / 100;  
                    		$discount_value = $quantyPrice-$netPrice;
                    		$grand_discount += $discount_value;
                    		$gst_val = explode('%', $value['gstValue']);
                    		$grand_gst +=$gst_val[0];
	                		array_push($cart_id,$value['cart_id']);
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
							<div class="boxData">
								<p><a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span><?php echo $grand_total; ?></span></li>
						</ul>
						<?php $cart_id = implode(',', $cart_id); ?>
						<form id="main-form" onsubmit="return purchase_order();" class="purchase-form row" name="purchase-form">
                            <input type="hidden" name="category" id="cart_ids" class="form-control" value="<?php echo $cart_id; ?>" >
                            <input type="hidden" name="category" id="orderuser_id" class="form-control" value="<?php echo $_SESSION['user']['register_id']; ?>">
                            <input type="hidden" name="amount" id="orderamount" class="form-control" value="<?php echo $grand_total; ?>">
                            <button type="submit" class="btn btn-fefault cart" >
                                <i class="fa fa-shopping-cart"></i>
                                Check Out
                            </button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

<?php
	include('footer.php');
?>