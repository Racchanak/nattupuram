<?php
    include('functioncall.php');
$title = 'Coconut Oil';
$menu = 'prod_det';
$submenu = 'prod_det';
$category = 'coconut';
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
                            <img id="product_img" src="images/product-details/coconut.jpg" alt="" />
                            <!--<h3>ZOOM</h3>-->
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">								
                            <!-- Wrapper for slides -->
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive" src="images/product-details/coconut.jpg" alt="">
                            </div>
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive" src="images/product-details/coconut.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> -->
                            <h2>Mara Chekku Coconut Oil - (Wood/Cold Pressed)</h2>
                            <!--<p>ID: MCO-590</p>-->
                            <!--<img src="images/product-details/rating.png" alt="" />-->
                            <span> 
                                <div class="col-sm-6">
                                    <select name="volume" class="vol_qnty">
                                        <option value="onel">1 Liter</option>
                                        <option value="halfl">Half Liter</option>
                                    </select>
                                </div>                           
                                <div class="col-sm-6">
                                    <span class="onel_amt">Rs. 275</span>
                                    <span class="halfl_amt" style="display: none;">Rs. 138</span>
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
                            <span><label>Details: </label> This natural Coconut Oil extracted by traditional Cold Press method using Mara Chekku / Wooden Ghani. Since there is no Heat generation in this process, Oil is dense and keeps all its own flavor, aroma and nutrients intact.</span>
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
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">The exceptional quality of Sun dried raw Coconut are placed to Wooden Ghani / Mara Chekku and pressing produce Oil in bottom.</span></p></li> 
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">We store these unrefined oil in barrels and keep it in sunlight for 4 days. Once the sediments settle, we filter the oil manually and pack it.</span></p></li>
                                    <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">There is no Thermal/Refining process and no additives/chemical/preservatives added.</span></p></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tag" >
                            <table class="nfacts">
                                <thead>
                                    <tr>
                                        <th>Coconut Oil</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Energy</td>
                                        <td>883.83</td>
                                    </tr>
                                    <tr>
                                        <td>Protein</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Cholestrol</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Saturated Fatty Acid</td>
                                        <td>89.86</td>
                                    </tr>
                                    <tr>
                                        <td>Mono Unsaturated</td>
                                        <td>7.98</td>
                                    </tr>
                                    <tr>
                                        <td>Poly Unsaturated</td>
                                        <td>1.99</td>
                                    </tr>
                                    <tr>
                                        <td>Trans Fatty acid</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Oryzanol</td>
                                        <td>BDL* (DL-10.0)</td>
                                    </tr>
                                    <tr>
                                        <td>TBHQ (Antioxidant)</td>
                                        <td>BDL* (DL-10.0)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        

                        <div class="tab-pane fade" id="character" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Cold pressed sesame oil has white color with authentic Coconut flavor and aroma.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">It has low smoking point & unsuitable for deep frying but suit for cooking at lower temp.</span></p></li>
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">For better shelf life, store the oil in cool dark place away from light using clay utensils.</span></p></li>
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="benefit" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Prevent Wrinkles, Sagging Skin, Skin dryness and Flaking.</span></p></li>                                     
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Reduces Protein loss in hair and nourishes the hair.</span></p></li>                                     
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Treats Pancreatitis and Alzheimer's disease.</span></p></li>  
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Prevents and effectively cures Candida.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Improve Bone Health.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Helps in Easy Digestion.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Strengthens Immune System.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Prevents diseases affecting Liver and Kidney.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Effective in Handling damaged tissues and infections.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Rich in Lauric acid (a compound found in human breast milk) that fights against harmful pathogens.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Helps to maintain Blood Sugar and Cholesterol.</span></p></li> 
                                    <li><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;">Best for Kids healthy development.</span></p></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="testimonials" >
                            <div class="blog-post-area">
                                <div class="col-sm-12" style="margin: 0px 36px;padding: 0px 29px;">
                                    <div class="single-blog-post">
                                        <h3>
                                            <span style="margin-left: -33px;margin-right: 47%;">Girls Pink T Shirt arrived in store</span>
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
        if($('.vol_qnty').val()=='halfl'){
            $('.halfl_amt').css('display','block');
            $('.onel_amt').css('display','none');
        } else {
            $('.halfl_amt').css('display','none');  
            $('.onel_amt').css('display','block');
        }
    });
</script>