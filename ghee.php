<?php
    include('functioncall.php');
$title = 'Natural Ghee';
$menu = 'prod_det';
$submenu = 'prod_det';
$category = 'ghee';
include('header.php');
?>
<section>
    <div class="container">
        <div class="row">
            <?php
            include('category.php');
            ?>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img id="product_img" src="images/product-details/ghee.jpg" alt="" />
                            <!--<h3>ZOOM</h3>-->
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">								
                            <!-- Wrapper for slides -->
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive" src="images/product-details/ghee.jpg" alt="">
                            </div>
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive" src="images/product-details/ghee.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information" style="padding-bottom: 12px;padding-left: 25px;padding-top: 29px;"><!--/product-information-->
                            <!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> -->
                            <h2>Natural Homemade Ghee</h2>
                            <!--<p>ID: MCO-590</p>-->
                            <!--<img src="images/product-details/rating.png" alt="" />-->
                            <span>
                                <div class="col-sm-6">
                                    <select name="volume" class="vol_qnty">
                                        <option value="onel">1 Liter</option>
                                        <option value="twofyml">250 ML</option>
                                    </select>
                                </div>                           
                                <div class="col-sm-6">
                                    <span class="onel_amt">Rs. 850</span>
                                    <span class="twofyml_amt" style="display: none;">Rs. 250</span>
                                </div>
                                <div class="col-sm-6">
                                    <label>Quantity:</label>
                                    <input type="text" name="quantity" />
                                </div>                                
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </div>
                            </span>
                            <span><label>Details: </label> 100% Natural Homemade cow ghee. The milk used for ghee preparation taken from our own free range dairy farm - Healthy Cows. We Used traditional hand churned method. Zero Chemicals & preservatives added. Above all these makes our ghee to have great aroma, texture and flavor. The taste and quality of the ghee is comparable to our own Grandmother's preparation. Made in small batches every week.</span>
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
                            <li class="active"><a href="#companyprofile" data-toggle="tab">Features</a></li>
                            <li><a href="#tag" data-toggle="tab">Nutritional Facts</a></li>
                            <li><a href="#character" data-toggle="tab">Characteristics</a></li>
                            <li><a href="#benefit" data-toggle="tab">Major Benefits</a></li>
                            <!--<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>-->
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
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Good for Health.</span></p></li> 
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Hygienically processed.</span></p></li>
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Mouth Watering taste.</span></p></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tag" >
                            <table class="nfacts">
                                <thead>
                                    <tr>
                                        <th>Ghee</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fat Content</td>
                                        <td>98.9%</td>
                                    </tr>
                                    <tr>
                                        <td>Energy</td>
                                        <td>920.7kcal</td>
                                    </tr>
                                    <tr>
                                        <td>Protein</td>
                                        <td>0.15g</td>
                                    </tr>
                                    <tr>
                                        <td>Moisture</td>
                                        <td>Less than 0.2g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        

                        <div class="tab-pane fade" id="character" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Don't refigerate and shelf life is 3 months from manufacturing dae..</span></p></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="benefit" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Taking out impurities from our body.</span></p></li>                                     
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Stimulates muscle movements, strenghthen the sense organ.</span></p></li>                                     
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Rich source of Vitamin A, D and E.</span></p></li>  
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Lactose Free & contains no salt.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Better Digestion & helps in Hair growth also.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Ideal for Cooking, Garnishing and Making Sweets.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Good source of energy and used in many diet styles especially in Paleo Diet.</span></p></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="testimonials" >
                            <div class="blog-post-area">
                                <div class="col-sm-12" style="margin: 0px 36px;padding: 0px 29px;">
                                    <div class="single-blog-post">
                                        <h3>
                                            <span style="margin-left: -33px;margin-right: 47%;">Girls Pink T Shirt arrived in store</span>
                                                <!-- <span style="float: right;color: #FE980F;padding-right: 35px;">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span> -->
                                        </h3>
                                        <div class="col-sm-2">
                                            <a href="javascript:;">
                                                <img src="images/blog/blog-one.jpg" alt="" width="100">
                                            </a>
                                        </div>                              
                                        <div class="col-sm-10">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin: 0px 36px;padding: 0px 29px;">
                                    <div class="single-blog-post">
                                        <h3>
                                            <span style="margin-left: -33px;margin-right: 47%;">Girls Pink T Shirt arrived in store</span>
                                                <!-- <span style="float: right;color: #FE980F;padding-right: 35px;">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span> -->
                                        </h3>
                                        <div class="col-sm-2">
                                            <a href="javascript:;">
                                                <img src="images/blog/blog-one.jpg" alt="">
                                            </a>
                                        </div>                              
                                        <div class="col-sm-10">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="margin: 0px 36px;padding: 0px 29px;">
                                    <div class="single-blog-post">
                                        <h3>
                                            <span style="margin-left: -33px;margin-right: 47%;">Girls Pink T Shirt arrived in store</span>
                                                <!-- <span style="float: right;color: #FE980F;padding-right: 35px;">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span> -->
                                        </h3>
                                        <div class="col-sm-2">
                                            <a href="javascript:;">
                                                <img src="images/blog/blog-one.jpg" alt="">
                                            </a>
                                        </div>                              
                                        <div class="col-sm-10">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        </div>
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

            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>
<script type="text/javascript">
    $('.vol_qnty').change(function(){
        if($('.vol_qnty').val()=='twofyml'){
            $('.twofyml_amt').css('display','block');
            $('.onel_amt').css('display','none');
        } else {
            $('.twofyml_amt').css('display','none');  
            $('.onel_amt').css('display','block');
        }
    });
</script>