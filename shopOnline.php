
<?php
    include('functioncall.php');
$title = $product[0]['product_name'];
$menu = 'prod_det';
$submenu = 'prod_det';
$category = 'groundnut';
include('header.php');
?>
<section>
    <div class="container">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                        <div class="discount">
                                <p>10%</p>
                            </div>
                            <img id="product_img" src="<?php echo $product[0]['main_img']; ?>" alt="" />
                            
                            <!--<h3>ZOOM</h3>-->
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">                              
                            <!-- Wrapper for slides -->
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive sesam" src="<?php echo $product[0]['image1']; ?>" alt="">
                            </div>
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive sesam" src="<?php echo $product[0]['image2']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="assets/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?php echo $product[0]['product_name']; ?></h2>
                            <!--<p>ID: MCO-590</p>-->
                            <!--<img src="images/product-details/rating.png" alt="" />-->
                            <span>                            
                                <div class="col-sm-12">
                                    <div class="col-sm-2">
                                        <label>Price:</label>
                                    </div>
                                    <div class="col-sm-8" style="font-size: 25px;font-weight: 700;margin-right: 9px;margin-top: -12px;">
                                        <?php foreach ($product[0]['price'] as $key => $value) { 
                                                if($key==0) { $amount = 'amount'; } else { $amount = ''; }?>
                                            <s class="<?php echo str_replace(' ', '', $product[0]['quantity'][$key]); ?>_amt <?php echo $amount; ?>" style="display: none;"><?php echo $value; ?></s>
                                            <span>Rs. 145</span>
                                        <?php } ?> <h5>(inclusive of all taxes)</h5>
                                    </div>
                                </div>                              
                                <div class="col-sm-12">
                                    <div class="col-sm-2">
                                        <label>Volume:</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="volume" class="vol_qnty">
                                            <?php foreach ($product[0]['quantity'] as $key => $value) { 
                                                if($key==0) { $select = 'selected'; } else { $select = 'notselected'; }?>
                                                <option value="<?php echo str_replace(' ', '', $value)?>" class="<?php echo $select; ?>"><?php echo $value; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>            
                                <div class="col-sm-12">
                                    <div class="col-sm-6">
                                        <label>Quantity:</label>
                                        <input type="text" name="quantity" id="proquantity" onkeyup="myquantity()"/>
                                    </div>  
                                </div> 
                                <div class="col-sm-12">
                                    <label>Free Delivery (Tamilnadu, Pondicherry & Bengaluru)</label>
                                </div>
                                <div class="col-sm-12">                                    
                                    <span style="padding: 0px 5px;color:#f9f9f9;font-size: 20px;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#proOffers">Offers</span>
                                    <?php if (!empty($_SESSION['user'])) { ?>                              
                                    <div class="col-sm-6">
                                        <form id="main-form" onsubmit="return purchase_cart();" class="purchase-form row" name="purchase-form">
                                            <input type="hidden" name="category" id="product_category" class="form-control">
                                            <input type="hidden" name="category" id="product_user_id" class="form-control" value="<?php echo $_SESSION['user']['register_id']; ?>">
                                            <input type="hidden" name="category" id="product_name" class="form-control" value="<?php echo $product[0]['product_name']; ?>">
                                            <input type="hidden" name="quantity" id="product_id" class="form-control" value="<?php echo $product[0]['product_id']; ?>">
                                            <input type="hidden" name="quantity" id="product_quantity" class="form-control">
                                            <input type="hidden" name="amount" id="product_amount" class="form-control">                                        
                                            <button type="submit" class="btn btn-fefault cart" >
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                        </form>
                                    </div>
                                    <?php } else { ?>                        
                                    <div class="col-sm-6">
                                        <form id="main-form" onsubmit="return purchase_cart();" class="purchase-form row" name="purchase-form">
                                            <input type="hidden" name="category" id="product_category" class="form-control">
                                            <input type="hidden" name="category" id="product_user_id" class="form-control" value="Guest_id">
                                            <input type="hidden" name="category" id="product_name" class="form-control" value="<?php echo $product[0]['product_name']; ?>">
                                            <input type="hidden" name="quantity" id="product_id" class="form-control" value="<?php echo $product[0]['product_id']; ?>">
                                            <input type="hidden" name="quantity" id="product_quantity" class="form-control">
                                            <input type="hidden" name="amount" id="product_amount" class="form-control">                                        
                                            <button type="submit" class="btn btn-fefault cart" >
                                                <i class="fa fa-shopping-cart"></i>
                                                Buy Now
                                            </button>
                                        </form>
                                    </div>                                
                                    <?php } ?>                                
                                </div>
                            </span>
                                    <span class="error-product"></span>
                            <span><label>Details: </label> <?php echo $product[0]['description']; ?> </span>
                        <!--<p><b>Availability:</b> In Stock</p>-->
                        <!--<p><b>Condition:</b> New</p>-->
                        <!--<p><b>Brand:</b> E-SHOPPER</p>-->
                        <!--<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>-->
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->
               
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <!--<li><a href="#details" data-toggle="tab">Details</a></li>-->
                            <li class="active"><a href="#companyprofile" data-toggle="tab">Manufacture method</a></li>
                            <li><a href="#tag" data-toggle="tab">Nutritional Facts</a></li>
                            <li><a href="#character" data-toggle="tab">Characteristics</a></li>
                            <li><a href="#benefit" data-toggle="tab">Major Benefits</a></li>
                            <li><a href="#writeeviews" data-toggle="tab">write Review</a></li>
                            <li><a href="#testimonials" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <!--                        <div class="tab-pane fade" id="details" >                            
                                                    <div class="col-sm-12" style="margin-left: 20px;">
                                                        <p>This natural Coconut Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.</p>
                                                    </div>
                                                </div>-->

                        <div class="tab-pane fade active in" id="companyprofile" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <?php foreach ($product[0]['methods'] as $key => $value) { ?>                                    
                                        <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;"><?php echo $value; ?></span></p></li> 
<!--                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.</span></p></li>
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">There is no Thermal/Refining process and no additives/chemical/preservatives added.</span></p></li>-->
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tag" >
                            <table class="nfacts">
                                <thead>
                                    <tr>
                                        <th><?php echo $product[0]['product_name']; ?></th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product[0]['facts'] as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $value['facts_description']; ?></td>
                                        <td><?php echo $value['fact_result']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>                        

                        <div class="tab-pane fade" id="character" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <?php foreach ($product[0]['charater'] as $key => $value) { ?>
                                        <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;"><?php echo $value; ?></span></p></li> 
                                    <!--<li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">It has high smoking point. So it is ideal for Indian style of cooking and deep frying.</span></p></li>-->
                                    <!--<li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">For better shelf life, store the oil in cool dark place away from light using clay utensils.</span></p></li>-->
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="benefit" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <?php foreach ($product[0]['benefit'] as $key => $value) { ?>
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;"><?php echo $value; ?></span></p></li>                                     
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="writeeviews">
                            <div class="brands_products user_info"><!--brands_products-->
                                <h2 class="reh2">Write Your Review</h2>
                                <form id="reviews">
                                    <?php if (isset($menu) && $menu == 'prod_det') { ?>
                                        <h1 style="margin-top: 0px;font-size: 17px;font-weight: 700;">Product : <?php echo $product[0]['product_name']; ?></h1>
                                        <input type="hidden" id="product_name" name="product_name" value="<?php echo $product[0]['product_name']; ?>"/>
                                        <input type="hidden" id="product_id" name="product_id" value="<?= (isset($_REQUEST['product_id'])) ? $_REQUEST['product_id'] : ''; ?>"/>
                                    <?php } else if (isset($menu) && $menu == 'testi') { ?>
                                        <select id="option" name="option">
                                            <option value="">Product</option>
                                            <?php foreach ($products as $key => $value) { ?>
                                                <option value="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></option>
                                            <?php } ?>
                                            <!--                            <option value="Groundnut Oil">Groundnut Oil(Cold Press)</option>
                                                                        <option value="Sesame Oil">Sesame Oil(Cold Press)</option>
                                                                        <option value="Coconut Oil">Coconut Oil(Cold Press)</option>
                                                                        <option value="Natural Ghee">Natural Ghee</option>-->
                                        </select>
                                        <input type="hidden" id="product_name" name="product_name" value=""/>
                                        <img id="product_img" src="" alt="" style="display: none;" />
                                    <?php } ?>
                                    <div><input class="fom-div" style="height: 40px !important;" name="name" id="rev_name" type="text" placeholder="Name" /></div>
                                    <div><input class="fom-div" style="height: 40px !important;" name="email-id" id="rev_email" type="text" placeholder="Email Id" /></div>
                                    <!-- <div><input class="fom-div" style="height: 40px !important;" name="mobile-no" id="rev_mobile" type="text" placeholder="Mobile No" /></div> -->
                                    <div><input class="fom-div" style="height: 40px !important;" name="city" id="rev_city" type="text" placeholder="City" /></div>
                                    <div><textarea class="fom-div" id="rev_msg" name="typeurmsg" placeholder="Type Your Message  " ></textarea></div>
                                    <div><span class="error-review"></span></div>
                                    <div><span class="success-review"></span></div>
                                    <div><button type="button" class="btn btn-default pull-right" onclick="add_review();">Submit</button></div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="testimonials" >
                            <div class="blog-post-area">                                
                                <?php
                                if (!empty($product[0]['reviews'])) {
                                    foreach ($product[0]['reviews'] as $key => $value) {
                                        ?>
                                        <div class="col-sm-12" style="margin: 0px 36px;padding: 0px 29px;">
                                            <div class="single-blog-post">
                                                <h3>
                                                    <span style="margin-left: -33px;margin-right: 47%;"><?php echo $value['name']; ?> - <?php echo $value['city']; ?></span>
                                                       <!--  <span style="float: right;color: #FE980F;padding-right: 35px;">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </span> -->
                                                </h3>
                                                <div class="col-sm-2">
                                                    <a href="javascript:;">
                                                        <img src="<?php echo $value['product_img']; ?>" alt="" width="100">
                                                    </a>
                                                </div>                              
                                                <div class="col-sm-10">
                                                    <p><?php echo $value['message']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/category-tab-->
            <!--
                            <div class="recommended_items">recommended_items
                                <h2 class="title text-center">recommended items</h2>
            
                                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item active">   
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">  
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="images/home/recommend3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>            
                                </div>
                            </div>/recommended_items-->
                            <div class="brands_products user_info"><!--brands_products-->
                <h2 class="reh2">Write Your Review</h2>
                <form id="reviews">
                    <?php if (isset($menu) && $menu == 'prod_det') { ?>
                        <h1 style="margin-top: 0px;font-size: 17px;font-weight: 700;">Product : <?php echo $product[0]['product_name']; ?></h1>
                        <input type="hidden" id="product_name" name="product_name" value="<?php echo $product[0]['product_name']; ?>"/>
                        <input type="hidden" id="product_id" name="product_id" value="<?= (isset($_REQUEST['product_id'])) ? $_REQUEST['product_id'] : ''; ?>"/>
                    <?php } else if (isset($menu) && $menu == 'testi') { ?>
                        <select id="option" name="option">
                            <option value="">Product</option>
                            <?php foreach ($products as $key => $value) { ?>
                                <option value="<?php echo $value['product_id']; ?>"><?php echo $value['product_name']; ?></option>
                            <?php } ?>
                            <!--                            <option value="Groundnut Oil">Groundnut Oil(Cold Press)</option>
                                                        <option value="Sesame Oil">Sesame Oil(Cold Press)</option>
                                                        <option value="Coconut Oil">Coconut Oil(Cold Press)</option>
                                                        <option value="Natural Ghee">Natural Ghee</option>-->
                        </select>
                        <input type="hidden" id="product_name" name="product_name" value=""/>
                        <img id="product_img" src="" alt="" style="display: none;" />
                    <?php } ?>
                    <div><input class="fom-div" style="height: 40px !important;" name="name" id="rev_name" type="text" placeholder="Name" /></div>
                    <div><input class="fom-div" style="height: 40px !important;" name="email-id" id="rev_email" type="text" placeholder="Email Id" /></div>
                    <!-- <div><input class="fom-div" style="height: 40px !important;" name="mobile-no" id="rev_mobile" type="text" placeholder="Mobile No" /></div> -->
                    <div><input class="fom-div" style="height: 40px !important;" name="city" id="rev_city" type="text" placeholder="City" /></div>
                    <div><textarea class="fom-div" id="rev_msg" name="typeurmsg" placeholder="Type Your Message  " ></textarea></div>
                    <div><span class="error-review"></span></div>
                    <div><span class="success-review"></span></div>
                    <div><button type="button" class="btn btn-default " onclick="add_review();">Submit</button></div>
                </form>
            </div>

</div>
</section>

<?php
            // include('category.php');
            ?>
<?php
include('footer.php');
?>
<script type="text/javascript">
    $('.amount').css('display', 'block');
    var val_qunty = $('.vol_qnty').val();
    var sele_amt = $('.amount')[0]['outerText'];
    $('#product_amount').val(sele_amt);
    $('#product_category').val(val_qunty);
    $('.vol_qnty').change(function () {
        var val_qunty = $('.vol_qnty').val();
        $('.notselected').addClass('selected');
        $('.selected').removeClass('selected');
        $('.selected').addClass('notselected');
        $('.amount').css('display', 'none');
        $('.amount').removeClass('amount');        
        $('.' + val_qunty + '_amt').addClass('amount');
        var sele_amt = $('.amount')[0]['outerText'];
        $('.' + val_qunty + '_amt').css('display', 'block');
        $('#product_amount').val(sele_amt);
        $('#product_category').val(val_qunty);
    });
    function myquantity() {
        var x = $('#proquantity').val();
        $('#product_quantity').val(x);
    }        
</script>