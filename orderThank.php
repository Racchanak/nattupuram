<?php
    include('functioncall.php');
$title = 'Order Confirmation';
$menu = 'confirmorder';
include('header.php');
?>
<body>
    <!-- <div class="container text-center">
        <div class="content-logout">
            <h1>Visit Again</h1>
            <p>Thank you for using nattupuram.com. You have ordered successsfully.</p>
        </div>
    </div> -->
    <section id="cart_items">
        <div class="container text-center">
            <?php //include('category.php'); ?>
    		<!-- <div class="logo-404">
    			<a href="index.php"><img src="images/nattupuram.jpg" alt=""/></a>
    		</div> -->
                <div class="review-payment">
                    <h1>Order Confirmation</h1>
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
                                <td colspan="4"><p>Thank you for using nattupuram.com. You have ordered successsfully.</p></td>
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
            </div>
    </section>
    <footer id="footer"><!--Footer-->
        <div class="footer-bottom" style="background: none repeat scroll 0 0 rgba(29, 111, 24, 0.88);">
            <div class="container" style="width: 850px;">
                <div class="row">
                    <div class="col-sm-12">   
                        <div class="nav-pills navfooter">
                            <ul class="nav navbar-nav">
                                <li><a href="testimonials.<?php  ?>" class="<?= ($menu == 'feedback') ? 'active' : ''; ?>"> Feedback</a></li>
                                <li><a href="team.php" class="<?= ($menu == 'team') ? 'active' : ''; ?>"> Nattupuram Team</a></li>
                                <li><a href="privacypolicy.php" class="<?= ($menu == 'policy') ? 'active' : ''; ?>"> Privacy Policy</a></li>
                                <li><a href="shippingrefund.php" class="<?= ($menu == 'distribute') ? 'active' : ''; ?>"> Shipping and Delivery Policy</a></li>
                                <li><a href="termscondi.php" class="<?= ($menu == 'testi') ? 'active' : ''; ?>"> Terms and Condition</a></li>
                                <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>  -->
                                <!-- <li><a href="#"><i class="fa fa-envelope"></i> care@nattupuram.com</a></li> -->
                                <!-- <li><a href="#">Get Your Order<i class="fa fa-phone"></i> +91 9994739036</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 Nattupuram Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">nattupuram</a></span></p>
                </div>
            </div>
        </div>
    </footer><!--/Footer-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/ajax.js"></script>
    <script type="text/javascript">
        document.cookie = 'Guest_cart=0';
    </script>
</body>
</html>