
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
                    <div class="col-md-3 col-xs-12">
                        <div class="view-product">
                        <div class="discount">
                                <p><?php echo $offers['Welcome'][0]['Offersvalue']; ?>%</p>
                            </div>
                            <img id="product_img" src="<?php echo $product[0]['main_img']; ?>" alt="" />
                        </div>
                        <div id="similar-product" class="carousel slide hidden-xs" data-ride="carousel">                              
                            <!-- Wrapper for slides -->
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive sesam" src="<?php echo $product[0]['image1']; ?>" alt="">
                            </div>
                            <div class="col-sm-6 wit56">
                                <img class="img-responsive sesam" src="<?php echo $product[0]['image2']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="product-information"><!--/product-information-->
                            <img src="assets/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?php echo $product[0]['product_name']; ?></h2>
                            <div class="innerContent">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-md-2 col-xs-4">
                                            <h3>Price:</h3>
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <?php foreach ($product[0]['price'] as $key => $value) { 
                                                if($key==0) { $amount = 'amount'; } else { $amount = ''; }?>
                                            <div class="<?php echo str_replace(' ', '', $product[0]['quantity'][$key]); ?>_amt <?php echo $amount; ?>" style="display: none;"><s>Rs. <?php echo $value; ?></s>
                                            <span class="discountAmt"><?php echo $product[0]['discount'][$key]; ?></span></div>
                                            <?php } ?>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="innerContent">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-md-2 col-xs-4">
                                            <h3>Volume:</h3>
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <select name="volume" class="vol_qnty">
                                                <?php foreach ($product[0]['quantity'] as $key => $value) { 
                                                    if($key==0) { $select = 'selected'; } else { $select = 'notselected'; }?>
                                                    <option value="<?php echo str_replace(' ', '', $value)?>" class="<?php echo $select; ?>"><?php echo $value; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="innerContent">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-md-2 col-xs-4">
                                            <h3>Quantity:</h3>
                                        </div>
                                        <div class="col-md-10 col-xs-8">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number" onclick="myquantity()" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                </span>
                                                <span><input type="text" name="quant[1]" id="proquantity" class="form-control input-number" value="1" min="1" max="5"></span>
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-number" onclick="myquantity()" data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="innerContent">
                                <div class="content">
                                    <p>Free Delivery (Tamilnadu, Pondicherry & Bengaluru)</p>
                                </div>
                            </div>
                            <div class="innerContent">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-md-3 col-xs-6">
                                        <?php if (!empty($_SESSION['user'])) { ?>                              
                                    <div class="">
                                        <form id="main-form" onsubmit="return purchase_cart();" class="purchase-form " name="purchase-form">
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
                                    <div class="">
                                        <form id="main-form" onsubmit="return purchase_cart();" class="purchase-form " name="purchase-form">
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
                                        <!-- <div class="col-md-9 col-xs-6">
                                            <span style="padding: 0px 5px;color:#f9f9f9;font-size: 20px;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#proOffers">Offers</span>
                                        </div>   -->
                                    </div>
                                </div>
                            </div>
                            <span class="error-product"></span>
                            <span><label>Details: </label> <?php echo $product[0]['description']; ?> </span>
                            <div class="offers">
                                <h4>OFFERS :</h4>
                                <div class="offerContent">
                                    <ul>
                                        <?php foreach ($offers['Product Details'] as $key => $value) { ?>                                            
                                            <li>
                                                <h4><?php echo $value['title'];?></h4>
                                                <h5><?php echo $value['description'];?></h5>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#companyprofile" data-toggle="tab">Manufacture method</a></li>
                            <li><a href="#tag" data-toggle="tab">Nutritional Facts</a></li>
                            <li><a href="#character" data-toggle="tab">Characteristics</a></li>
                            <li><a href="#benefit" data-toggle="tab">Major Benefits</a></li>
                            <li><a href="#writeeviews" data-toggle="tab">write Review</a></li>
                            <li><a href="#testimonials" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="companyprofile" >
                            <div class="col-sm-12" style="margin-left: 20px;">
                                <ul style="background: #fff;border-bottom: 1px solid #fff;">
                                    <?php foreach ($product[0]['methods'] as $key => $value) { ?>                                    
                                        <li style="margin-right: 20px;"><p><i class="fa fa-crosshairs"></i><span style="margin-left: 20px;"><?php echo $value; ?></span></p></li> 
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
                                    <div><input class="fom-div" style="height: 40px !important;" name="city" id="rev_city" type="text" placeholder="City" /></div>
                                    <div><textarea class="fom-div" id="rev_msg" name="typeurmsg" placeholder="Type Your Message  " ></textarea></div>
                                    <div><span class="error-review"></span></div>
                                    <div><span class="success-review"></span></div>
                                    <div><button type="button" class="btn btn-default " onclick="add_review();">Submit</button></div>
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
    var sele_amt = $('.amount').find('.discountAmt')[0]['outerText'];
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
        var sele_amt = $('.amount').find('.discountAmt')[0]['outerText'];
        $('.' + val_qunty + '_amt').css('display', 'block');
        $('#product_amount').val(sele_amt);
        $('#product_category').val(val_qunty);
    });
    function myquantity() {
        var x = $('#proquantity').val();
        $('#product_quantity').val(x);
    }        
</script>
<script>
    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    console.log(valueCurrent);
    $('#product_quantity').val(valueCurrent);
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});

</script>