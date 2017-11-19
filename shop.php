
<div class="col-sm-8 col-md-8">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Shop Online</h2>                    
        <div class="row">
            <?php foreach ($products as $key => $value) { ?>
            <div class="col-md-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="<?php echo $value['main_img']; ?>" style="height:143px" alt="" class="img-responsive"/>
                            <!-- <h2>Rs. 260</h2> -->
                            <p><?php echo $value['product_name']; ?></p>
                            <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                        </div>
                        <div class="product-overlay">
                            <a href="<?php echo 'shopOnline.php?product_id='.$value['product_id'];?>" ><div class="overlay-content">
                                    <img src="<?php echo $value['main_img']; ?>" alt="" class="img-responsive"/>
                                    <!-- <h2>Rs. 260</h2> -->
                                    <p><?php echo $value['product_name']; ?></p>
                                    <!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
                                </div></a>
                        </div>
                    </div>
                    <!-- <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                        </ul>
                    </div> -->
                </div>
            </div>                            
            <?php } ?>
<!--            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/groundnut.jpg" alt="" class="img-responsive"/>
                             <h2>Rs. 260</h2> 
                            <p>Mara Chekku Ground Nut Oil - (Wood/Cold Pressed)</p>
                             <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                        </div>
                        <div class="product-overlay">
                            <a href="groundnut.php" ><div class="overlay-content">
                                    <img src="images/product-details/groundnut.jpg" alt="" class="img-responsive"/>
                                     <h2>Rs. 260</h2> 
                                    <p>Mara Chekku Ground Nut Oil - (Wood/Cold Pressed)</p>
                                     <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                                </div></a>
                        </div>
                    </div>
                     <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/sesame.jpg" style="height:143px" alt="" class="img-responsive"/>
                             <h2>Rs. 260</h2> 
                            <p>Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)</p>
                             <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                        </div>
                        <div class="product-overlay">
                            <a href="sesame.php" ><div class="overlay-content">
                                    <img src="images/product-details/sesame.jpg" style="height:143px" alt="" class="img-responsive"/>
                                     <h2>Rs. 260</h2> 
                                    <p>Mara Chekku Sesame/Gingelly Oil - (Wood/Cold Pressed)</p>
                                     <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                                </div></a>
                        </div>
                    </div>
                      <div class="choose">
                         <ul class="nav nav-pills nav-justified">
                             <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                             <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                         </ul>
                     </div> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/coconut.jpg" style="height:143px" alt="" class="img-responsive"/>
                             <h2>Rs. 260</h2> 
                            <p>Mara Chekku Coconut Oil - (Wood/Cold Pressed)</p>
                             <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                        </div>
                        <div class="product-overlay">
                            <a href="coconut.php" ><div class="overlay-content">
                                    <img src="images/product-details/coconut.jpg" style="height:143px" alt="" class="img-responsive"/>
                                     <h2>Rs. 260</h2> 
                                    <p>Mara Chekku Coconut Oil - (Wood/Cold Pressed)</p>
                                     <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                                </div></a>
                        </div>
                    </div>
                     <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="images/product-details/ghee.jpg" style="height:143px" alt="" class="img-responsive"/>
                             <h2>Rs. 260</h2> 
                            <p>Natural Homemade Ghee</p>
                             <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                        </div>
                        <div class="product-overlay">
                            <a href="ghee.php" ><div class="overlay-content">
                                    <img src="images/product-details/ghee.jpg" style="height:143px" alt="" class="img-responsive"/>
                                     <h2>Rs. 260</h2> 
                                    <p>Natural Homemade Ghee</p>
                                     <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> 
                                </div></a>
                        </div>
                    </div>
                     <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                        </ul>
                    </div> 
                </div>
            </div>     -->
        </div>                                                         
        <!-- <div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
    <img src="images/home/product1.jpg" alt="" />
    <h2>$56</h2>
    <p>Easy Polo Black Edition</p>
    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
</div>
<div class="product-overlay">
    <a href="#" ><div class="overlay-content">
        <img src="images/home/product1.jpg" alt="" />
        <h2>$56</h2>
        <p>Easy Polo Black Edition</p>
        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    </div></a>
</div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">
    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
</ul>
</div>
</div>
</div> <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="images/home/product3.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <img src="images/home/product3.jpg" alt="" />
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                     <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="images/home/product4.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <img src="images/home/product4.jpg" alt="" />
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                            <img src="images/home/new.png" class="new" alt="" />
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                     <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="images/home/product5.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <img src="images/home/product5.jpg" alt="" />
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                            <img src="images/home/sale.png" class="new" alt="" />
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                     <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="images/home/product6.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <img src="images/home/product6.jpg" alt="" />
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                     <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> 
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>-->

    </div><!--features_items-->

    <!-- <div class="category-tab"> --><!--category-tab--><!-- 
            <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                            <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                            <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                            <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
                            <li><a href="#kids" data-toggle="tab">Kids</a></li>
                            <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
                    </ul>
            </div>
            <div class="tab-content">
                    <div class="tab-pane fade active in" id="tshirt" >
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                    </div>
                    
                    <div class="tab-pane fade" id="blazers" >
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                    </div>
                    
                    <div class="tab-pane fade" id="sunglass" >
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                    </div>
                    
                    <div class="tab-pane fade" id="kids" >
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                    </div>
                    
                    <div class="tab-pane fade" id="poloshirt" >
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery2.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery4.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery3.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                            <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img src="images/home/gallery1.jpg" alt="" />
                                                            <h2>$56</h2>
                                                            <p>Easy Polo Black Edition</p>
                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div>
    </div> --><!--/category-tab-->

    <!-- <div class="recommended_items"> --><!--recommended_items--><!-- 
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
    </div> --><!--/recommended_items-->

</div>