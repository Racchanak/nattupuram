<div class="col-sm-4 col-md-4">
    <div class="left-sidebar">
        <h2>Gallery</h2>
        <?php // print_r($this->data['products']); exit(); ?>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="assets/images/gallery/1.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/2.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/3.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/4.jpg" alt="" style="height: 350px;"/></div>
                <!-- <div class="item"><img src="assets/images/gallery/5.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/6.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/7.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/8.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/9.jpg" alt="" style="height: 350px;"/></div>
                <div class="item"><img src="assets/images/gallery/10.jpg" alt="" style="height: 350px;"/></div> -->
                <!-- <div class="item"><h4>11</h4></div>
                <div class="item"><h4>12</h4></div> -->
            </div>
            <!-- <?php foreach ($products as $key => $value) { ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title <?php echo (isset($value['product_name']) && $value['product_name'] == 'ground') ? 'active' : ''; ?>"><a href="<?php echo 'shopOnline.php?product_id=' . $value['product_id']; ?>"><?php echo $value['product_name']; ?></a></h4>
                    </div>
                </div>
            <?php } ?> -->
            <!-- <iframe width="300" height="200" src="https://www.youtube.com/embed/aD9cyGgGWLo"  frameborder="0" allowfullscreen></iframe> -->
            <!--            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title <?php echo (isset($category) && $category == 'sesame') ? 'active' : ''; ?>"><a href="sesame.php">Sesame Oil(Cold Press)</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title <?php echo (isset($category) && $category == 'coconut') ? 'active' : ''; ?>"><a href="coconut.php">Coconut Oil(Cold Press)</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title <?php echo (isset($category) && $category == 'ghee') ? 'active' : ''; ?>"><a href="ghee.php">Natural Ghee</a></h4>
                            </div>
                        </div>-->
        </div><!--/category-products-->
        <?php if (isset($menu) && $menu == 'prod_det' || $menu == 'testi') { ?>
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
        <?php } else { ?><!-- 
            <div class="brands_products">
                <h2>Reviews</h2>
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        if (!empty($product_reviews)) {
                            foreach ($product_reviews as $key => $value) {
                                if ($key == 0) {
                                    $classa = 'active';
                                } else {
                                    $classa = '';
                                }
                                ?>                        
                                <li data-target="#slider-carousel" data-slide-to="<?php echo $key; ?>" class="<?php echo $classa; ?>"></li>
                            <?php }
                        }
                        ?>
                    </ol> 
                    <div class="carousel-inner" style="height: 217px;">
                        <?php
                        if (!empty($product_reviews)) {
                            foreach ($product_reviews as $key => $value) {
                                if ($key == 0) {
                                    $classa = 'active';
                                } else {
                                    $classa = '';
                                }
                                ?>
                                <div class="item <?php echo $classa; ?>" style="padding-left: 0px;">
                                    <div class="col-sm-12">
                                         <h2><?php //echo $value['product_name']; ?></h2>
                                        <h4 style="margin-top: 0px;"><?php echo $value['name']; ?>,<?php echo $value['city']; ?></h4>
                                        <p><?php echo $value['message']; ?> ...</p> 
                                    </div>
                                </div>
                            <?php }
                        }
                        ?>
                    </div>
                </div>
            </div> -->
<?php } ?>
        <!-- </div>  brands_products 
        <div class="price-range">  price-range 
            <h2>Price Range</h2>
            <div class="well text-center">
                <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
            </div>
        </div>  -->
        <!-- price-range -->

        <!-- <div class="shipping text-center">--><!--shipping 
        <!--    <img src="images/home/shipping.jpg" alt="" />
        </div> --><!--/shipping-->

    </div>
</div>