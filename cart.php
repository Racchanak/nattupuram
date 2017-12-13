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
							<p>Total</p>
						</div>
					</div>
	                <?php 
	                	$cart_id = array(); 
	                	$grand_total = 0; 
	                	foreach ($product_cart as $key => $value) { 
	                		$grand_total+= $value['total']; 
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
								<p><?php echo $value['price']; ?></p>
							</div>
							<div class="boxData">
								<p><?php echo $value['quantity']; ?></p>
							</div>
							<div class="boxData">
								<p class="cart_total_price"><?php echo $value['total']; ?></p>
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