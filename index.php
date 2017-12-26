<?php
    include('functioncall.php');
$title = 'Home';
$menu = 'home';
include('header.php');
// include('menu.php');
?>  
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                        <li data-target="#slider-carousel" data-slide-to="3"></li>
                        <li data-target="#slider-carousel" data-slide-to="4"></li>
                        <li data-target="#slider-carousel" data-slide-to="5"></li>
                    </ol> -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-12">
                                <img src="assets/images/nattupuram.jpg" class="img img-responsive" alt="" />
                                <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                           </div>
                        </div> 
                        <!-- <div class="item">
                            <div class="col-sm-6">
                                <h1>NATTUPURAM</h1>
                                <h2>Free E-Commerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/homeslider/image1.jpg" class="girl img-responsive" alt="" />
                         -->        <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                        <!--     </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>NATTUPURAM</h1>
                                <h2>100% Responsive Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/homeslider/image2.jpg" class="girl img-responsive" alt="" />
                         -->        <!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
                       <!--      </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>NATTUPURAM</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/homeslider/image3.jpg" class="girl img-responsive" alt="" />
                        -->         <!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                       <!--      </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>NATTUPURAM</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/homeslider/image4.jpg" class="girl img-responsive" alt="" />
                        -->         <!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                       <!--      </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1>NATTUPURAM</h1>
                                <h2>Free Ecommerce Template</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/homeslider/image6.jpg" class="girl img-responsive" alt="" />
                        -->         <!-- <img src="images/home/pricing.png" class="pricing" alt="" /> -->
                       <!--      </div>
                        </div> -->
                    </div>
<!--                     <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
 -->                </div>
            </div>
        </div>
    </div>
</section> <!--/slider-->    
<section>
    <div class="container">
        <div class="row">
            <?php
            include('category.php');
            include('shop.php');
            ?>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="brands_products">
                    <h2>Reviews</h2>
                    <div class="owl-carousel owl-theme">
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
                                        <!-- <h2><?php //echo $value['product_name']; ?></h2> -->
                                        <h2 style="margin-top: 0px;color: #73736b"><?php echo $value['name']; ?>, <?php echo $value['city']; ?></h2>
                                        <p style="padding: 0px 20px;"><?php echo $value['message']; ?> ...</p> 
                                    </div>
                                </div>

                            <?php }
                        }
                        ?>
                    </div>
                    <div class="arrow">
                        <div class="left-arrow" style="position: absolute;top: 70px;left: 0;">
                            <img src="assets/images/left-arrow.png">
                        </div>
                        <div class="right-arrow" style="position: absolute;top: 70px;right: 0;">
                            <img src="assets/images/right-arrow.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="nattuinfo">
                    <h2>Nattupuram</h2>
                    <p>We young energetic farmers from an agricultural family introducing 'NATTUPURAM - an Online Store' for healthy and natural food products, produced in a traditional way with rich soil fragrance of our own village. Our core vision is to reinvent the healthy life style of our ancestors and transferring the same into modern young generation.</p>
                    <p>We setup a manufacturing unit at Reddichavadi, Cuddalore district and our first product is NATTU MARACHEKKU OIL / chekku oil / marachekku ennai / marachekku oil / Wooden ghani oil / cold pressed oil / wood pressed oil using traditional extraction methods. We also offers pure 'COW GHEE' prepared by using our own Free Range Dairy Farm's desi cow milk. We are delivering the product to all over Tamilnadu, Pondicherry and Bangalore through online shopping for more convenient way in your busy life style.</p>
                    <p>NATTUPURAM with all its innocence, No adulteration, Purity with Virginity, Welcome everyone to create a Healthy World !</p>
                </div>
            </div>
        </div>
    </div>
</section>  
<?php
include('footer.php');
?>
<script type="text/javascript">
    $('#welOffers').modal('toggle');
</script>
