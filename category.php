<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Products</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title <?php echo ($category=='ground')?'active':'';?>"><a href="groundnut.php">Groundnut Oil(Cold Press)</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title <?php echo ($category=='sesame')?'active':'';?>"><a href="sesame.php">Sesame Oil</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title <?php echo ($category=='coconut')?'active':'';?>"><a href="coconut.php">Coconut Oil</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title <?php echo ($category=='sesame')?'active':'';?>"><a href="sesame.php">Natural Ghee</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title <?php echo ($category=='sesame')?'active':'';?>"><a href="sesame.php">Cashewnut</a></h4>
                </div>
            </div>
        </div><!--/category-products-->
        <?php if($menu != 'testi') { if($menu != 'prod_det') { ?>
            <div class="brands_products"><!--brands_products-->
                <h2>Reviews</h2>
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php for($i=0;$i<len($reviews);$i++) {?>
                        <div class="item active" style="padding-left: 0px;">
                            <div class="col-sm-12">
                                <h1 style="margin-top: 0px;"><?php echo $name; ?></h1> <!-- User name -->
                                <h2><?php echo $city; ?></h2><!-- Product name -->
                                <p><?php echo $message; ?></p> <!-- 6 lines testimonials 15 words accepting-->
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="item" style="padding-left: 0px;">
                            <div class="col-sm-12">
                                <h1 style="margin-top: 0px;">NATTUPURAM</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="brands_products user_info"><!--brands_products-->
                <h2 class="reh2">Write Your Review</h2>
                <form id="reviews">
                    <h1 style="margin-top: 0px;font-size: 17px;font-weight: 700;">Product : <?= $title; ?></h1>
                    <div><input class="fom-div" style="height: 40px !important;" name="name" id="rev_name" type="text" placeholder="Name" /></div>
                    <div><input class="fom-div" style="height: 40px !important;" name="email-id" id="rev_email" type="text" placeholder="Email Id" /></div>
                    <!-- <div><input class="fom-div" style="height: 40px !important;" name="mobile-no" id="rev_mobile" type="text" placeholder="Mobile No" /></div> -->
                    <div><input class="fom-div" style="height: 40px !important;" name="city" id="rev_city" type="text" placeholder="City" /></div>
                    <div><textarea class="fom-div" id="rev_msg" name="typeurmsg" placeholder="Type Your Message  " ></textarea></div>
                    <div><span class="error-review"></span></div>
                    <div><button type="button" class="btn btn-default pull-right" onclick="add_review();">Submit</button></div>
                </form>
            </div>
        <?php } } ?>
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
        <!-- 	<img src="images/home/shipping.jpg" alt="" />
        </div> --><!--/shipping-->

    </div>
</div>