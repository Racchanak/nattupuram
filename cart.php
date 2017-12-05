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
					</tbody>
				</table>
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