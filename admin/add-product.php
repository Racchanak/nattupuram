<?php
   
    $success=''; $failure=''; $script_ready ='';
    /*
     * Save And Updating The Data
     */
error_reporting(E_ALL);

ini_set("display_errors", 0);
ob_start();
include_once('common/functions-admin.php');
session_start();
if($_SESSION['nattupuram_admin'])
{
$session_check = $_SESSION['nattupuram_admin']['user_name'];
$privilege_type=$_SESSION['nattupuram_admin']['privilege_type'];
}

if(!$session_check)
{
    header('Location:index.php');
    exit();
}
else
{
    if(($privilege_type!=1) &&($privilege_type!=2))
    {
       header('Location:index.php');
       exit();
    }
    else if($privilege_type==2)
    {
        include_once('common/lms_page_header.php');
    }
    else if($privilege_type==1)
    {
        include_once('common/page_header.php');
    } 
}

    if(isset($_POST['submit']))
    {
        extract($_POST);
        extract($_FILES);

        $target_dir = "../assets/images/product-details";
        $img_dir = "assets/images/product-details";
        
        $main_img_file_name = $_FILES["wimg"]["name"];
        if($main_img_file_name){
            $main_img_upload_path = $target_dir."/".$main_img_file_name;
            $main_img_temp_name = $_FILES['wimg']["tmp_name"];
            move_uploaded_file($main_img_temp_name,$main_img_upload_path);
        }
        $image1_file_name = $_FILES["gimg"]["name"];
        if($image1_file_name){            
            $image1_upload_path = $target_dir."/".$image1_file_name;
            $image1_temp_name = $_FILES['gimg']["tmp_name"];
            move_uploaded_file($image1_temp_name,$image1_upload_path);
        }
        $image2_file_name = $_FILES["image2"]["name"];
        if($image2_file_name){
            $image2_upload_path = $target_dir."/".$image2_file_name;
            $image2_temp_name = $_FILES['image2']["tmp_name"];
            move_uploaded_file($image1_temp_name,$image2_upload_path);
        }

        


        
        $main_img_path = $img_dir."/".$main_img_file_name;
        $image1_path = $img_dir."/".$image1_file_name;
        $image2_path = $img_dir ."/".$image2_file_name;

        $product_name = $_POST['product_name'];

        
        $input1_1 = $_POST['container_input1_1'];
        $input1_2 = $_POST['container_input1_2'];
        $input2_1 = $_POST['container_input2_1'];
        $input2_2 = $_POST['container_input2_2'];

        $sub_quantity1_1 = implode(', ', $input1_1);
        $sub_quantity1_2 = implode(', ', $input1_2);
        $sub_quantity2_1 = implode(', ', $input2_1);
        $sub_quantity2_2 = implode(', ', $input2_2);

        $sub_quantity = $sub_quantity1_1 ." # ".$sub_quantity2_1;
        $sub_quantity_price = $sub_quantity1_2 ." # ".$sub_quantity2_2;

        $price_array = array(
            liter1_price => $_POST['liter1_price'],
            ml500_price => $_POST['ml500_price'],
            ml200_price => $_POST['ml200_price'],
            liter3_price => $_POST['liter3_price'],
            liter5_price => $_POST['liter5_price'],
            kg1_price => $_POST['kg1_price'],
            gram500_price => $_POST['gram500_price'],
            gram250_price => $_POST['gram250_price']
        );
        $price_filter = array_filter($price_array);
        if(!empty($sub_quantity_price)){
            $price = $sub_quantity_price;
        } else {
            $price = implode(', ', $price_filter);
        }

        // print_r($price);
        $quantity_array = array(
            liter1 => $_POST['liter1'],
            ml500 => $_POST['ml500'],
            ml200 => $_POST['ml200'],
            liter3 => $_POST['liter3'],
            liter5 => $_POST['liter5'],
            kg1 => $_POST['kg1'],
            gram500 => $_POST['gram500'],
            gram250 => $_POST['gram250']
        );



        $quantity_filter = array_filter($quantity_array);
        if(!empty($sub_quantity)){
            if(empty($input1_1)){
                $quantity = "5 Liter";
            } else if(empty($input2_1)) {
                $quantity = "3 Liter";
            }else {
                $quantity = "3 Liter, 5 Liter";
            }
        } else {
            $quantity = implode(', ', $quantity_filter);
        }

        $product_characteristics_array = $_POST['product_characteristics'];
        $product_characteristics = array_filter($product_characteristics_array);

        $product_benefits_array = $_POST['product_benefits'];
        $product_benefits = array_filter($product_benefits_array);

        $product_methods_array = $_POST['product_methods'];
        $product_methods = array_filter($product_methods_array);

        $product_facts_array = $_POST['product_facts'];
        $product_facts = array_filter($product_facts_array);

        $fact_result_array = $_POST['fact_result'];
        $fact_result = array_filter($fact_result_array);


        $description = $_POST['description'];
        $gst_val = $_POST['gst_val'];

        $offer_array = $_POST['offer'];
        $offer_filter = array_filter($offer_array);
        $offer = implode(', ', $offer_filter);

        $review_count = $_POST['review_count'];
        $pro_type = $_POST['product_type'];

        if($edit_id == 0){

            $ins_pack = 'INSERT INTO `products`(`product_name`, `main_img`, `image1`, `image2`, `quantity`, `sub_quantity`, `price`, `description`, `offers`, `review_count`, `pro_type`, `gst_val`) VALUES ("' . $product_name . '","'. $main_img_path . '","' . $image1_path . '","' . $image2_path . '","' . $quantity . '","' . $sub_quantity . '","' . $price . '","' . $description . '","' . $offer . '","' . $review_count . '","' . $pro_type . '","' . $gst_val . '")';
            mysqli_query($GLOBALS['link'], $ins_pack);
            $last_id = mysqli_insert_id($GLOBALS['link']);
            $success = "Inserted Successfully";

            foreach ($product_characteristics as $product_characteristics_value) {
                $sql = "INSERT INTO product_characteristics (product_id, description) VALUES ('$last_id', '$product_characteristics_value')";
                mysqli_query($GLOBALS['link'], $sql);
            }

            foreach ($product_benefits as $product_benefits_value) {
                $sql = "INSERT INTO product_benefits (product_id, description) VALUES ('$last_id', '$product_benefits_value')";
                mysqli_query($GLOBALS['link'], $sql);
            }

            foreach ($product_methods as $product_methods_value) {
                $sql = "INSERT INTO product_methods (product_id, description) VALUES ('$last_id', '$product_methods_value')";
                mysqli_query($GLOBALS['link'], $sql);
            }

            $i = 0;
            $j = 0;
            foreach($product_facts as $status)
            {
              if($status != '') {
                if($i < sizeof($fact_result))
                {
                  if($j < sizeof($product_facts))
                  {
                      $p_facts = $product_facts[$j];
                      $f_result = $fact_result[$i]; 
                      $sql = "INSERT INTO product_facts (product_id, facts_description, fact_result) VALUES ('$last_id', '$p_facts', '$f_result')";
                      mysqli_query($GLOBALS['link'], $sql);
                      $j++;
                  }
                    $i++;
                  }
                }
            }
            $success = "Inserted Successfully";
            
        }
            
            // mysqli_query($GLOBALS['link'], $inser_key);
            
    } 

     if(!empty($_REQUEST['edit_id'])) {
        $edit = $_REQUEST['edit_id'];
        if($edit!=0) {
            $res = select_specific_products($edit);
            extract($res[0]);
        }
    }
?>  
      <div class="col-lg-9 padding-0">
        <div class="right-sec">
            <h3>Add Product Details</h3>
            <?php    if (isset($success) && !empty($success)) {    echo "<span class='alert alert-custom alert-success'>" . $success . "<a class='alert-success close-alert' onClick='alertClose(this);'>×</a></span>"; } ?>
            <?php    if (isset($failure) && !empty($failure)) {    echo "<span class='alert alert-custom alert-danger'>" . $failure . "<a class='alert-failure close-alert' onClick='alertClose(this);'>×</a></span>"; } ?>
          <form role="form" id="social" name="social" class="form-inline" action="add-product.php" enctype="multipart/form-data" method="post" onSubmit="return product_validate()">
             <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>product Name</h5>
                        <input type="text" placeholder="Product Name" id="product_name" name="product_name" class="form-control checksco" value="">
                        <span id="product_nameError" class="apply"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>GST Value</h5>
                        <input type="text" placeholder="GST Value" id="gst_val" name="gst_val" class="form-control checksco" value="">
                        <span id="gst_valError" class="apply"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Review Count</h5>
                        <input type="text" placeholder="Review Count" id="review_count" name="review_count" class="form-control checksco" value="" onkeypress="return isNumberKey(event);">
                        <span id="review_countError" class="apply"></span>
                    </div>
                </div>
            </div>
            <div class="row">
               <h5>Description</h5>
                <textarea class="form-control checkcls" rows="3" id="description" name="description" placeholder="Add Here"></textarea>
                <span id="descriptionError" class="apply"></span>
            </div>
            
            <div class="row">
                <div class="col-lg-6 padding-0">
                    <div class="browse error-msg">
                        <h5>Main Image</h5>
                        <a>
                            <input type='file' id='file_browse1' name="wimg" class="form-control wimg" onchange="readURL(this);">
                            <span>Browse</span></a> <img id="w_img" src="<?php
                        if (isset($main_img)) {
                            echo $main_img;
                        } else if (isset($main_img)){
                            echo $main_img;
                        }else {
                            echo 'img/brose-doc-img.png';
                        }
                        ?>"> </div>
                    <span id="main_imgError" class="apply"></span>
                </div>
                <div class="col-lg-6 padding-0">
                    <div class="browse error-msg">
                        <h5>Image 1</h5>
                        <a>
                            <input type='file' id='file_browse2' name="gimg" class="form-control gimg" onchange="readURL(this);">
                            <span>Browse</span></a> <img id="g_img" src=" <?php
                        if (isset($image1)) {
                            echo $image1;
                        }else if (isset($image1)){
                            echo $image1;
                        } else {
                            echo 'img/brose-doc-img.png';
                        }
                        ?>">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 padding-0">
                    <div class="browse error-msg">
                        <h5>Image 2</h5>
                        <a>
                            <input type='file' id='file_browse3' name="image2" class="form-control image2" onchange="readURL(this);">
                            <span>Browse</span></a> <img id="img2" src="<?php
                        if (isset($image2)) {
                            echo $image2;
                        } else if (isset($image2)){
                            echo $image2;
                        }else {
                            echo 'img/brose-doc-img.png';
                        }
                        ?>"> </div>
                    <span class="error-msg" id="sub_cex_er"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Product Type</h5>
                        <select class="form-control checksco" id="product_type" name="product_type" onchange="show_product_details()">
                            <option value="">-Select Product Type -</option>
                            <option value="oil">Oil</option>
                            <option value="ghee">Ghee</option>
                        </select>
                        <span id="product_typeError" class="apply"></span>
                    </div>
                </div>
                
            </div>
            <div class="row oil_class">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="liter1" id="liter1" value="1 Liter">&nbsp;&nbsp;1 Liter
                          <input placeholder="1 Liter Price" class="form-control" id="liter1_price" name="liter1_price" onkeypress="return isNumberKey(event);">
                          <span id="liter1_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="ml500" id="ml500" value="500ML">&nbsp;&nbsp;500ML
                          <input placeholder="500 ML Price" class="form-control" id="ml500_price" name="ml500_price" onkeypress="return isNumberKey(event);">
                          <span id="ml500_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row oil_class">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="ml200" id="ml200" value="200ML">&nbsp;&nbsp;200ML
                          <input placeholder="200 ML Price" class="form-control" id="ml200_price" name="ml200_price" onkeypress="return isNumberKey(event);">
                          <span id="ml200_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="liter3" id="liter3" value="3 Liter">&nbsp;&nbsp;3 Liter
                          <input placeholder="3 Liter Price" class="form-control" id="liter3_price" name="liter3_price" onkeypress="return isNumberKey(event);">
                          <span id="liter3_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row oil_class">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="liter5" id="liter5" value="5 Liter">&nbsp;&nbsp;5 Liter
                          <input placeholder="5 Liter Price" class="form-control" id="liter5_price" name="liter5_price" onkeypress="return isNumberKey(event);">
                          <span id="liter5_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row ghee_class">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="kg1" id="kg1" value="1 KG">&nbsp;&nbsp;1 KG
                          <input placeholder="1 KG Price" class="form-control" id="kg1_price" name="kg1_price" style="display: inline-block;" onkeypress="return isNumberKey(event);">
                          <span id="kg1_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="gram500" id="gram500" value="500 Gram">&nbsp;&nbsp;500 Gram
                          <input placeholder="500 Gram Price" class="form-control" id="gram500_price" name="gram500_price" onkeypress="return isNumberKey(event);">
                          <span id="gram500_priceError" class="apply"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row ghee_class">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" name="gram250" id="gram250" value="250 Gram">&nbsp;&nbsp;250 Gram
                          <input placeholder="250 Gram Price" class="form-control" id="gram250_price" name="gram250_price" onkeypress="return isNumberKey(event);">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row oil_class">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>3 Liter Sub Quantity</h5>
                            <div id="container1"></div>
                            <input class="btn btn-default" type="button" id="addButton1" type="button" value="+"/>                             
                    </div>
                </div>
            </div>
            <div class="row oil_class">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>5 Liter Sub Quantity</h5>
                            <div id="container2"></div>
                            <input class="btn btn-default" type="button" id="addButton2" type="button" value="+"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>Add Product Characteristics</h5>
                           <div id="product_characteristics_container"></div>
                           <input class="btn btn-default" type="button" id="product_characteristics_button" type="button" value="+"/>
                             
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>Add Product Benefits</h5>
                           <div id="product_benefits_container"></div>
                           <input class="btn btn-default" type="button" id="product_benefits_button" type="button" value="+"/>
                             
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>Add Product Methods</h5>
                           <div id="product_methods_container"></div>
                           <input class="btn btn-default" type="button" id="product_methods_button" type="button" value="+"/>
                             
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>Add Product Facts</h5>
                           <div id="product_facts_container"></div>
                           <input class="btn btn-default" type="button" id="product_facts_button" type="button" value="+"/>
                             
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pad-lft-0 key-highlight">
                    <div class="form-group error-msg">
                        <h5>Offers</h5>
                            <div id="addoffercontainer"></div>
                            <input class="btn btn-default" type="button" id="addoffer" type="button" value="+"/>
                    </div>
                </div>
            </div>
            <div class="buttons pull-right">
                <a><input class="save-publish" type="submit" name="submit" value="Save" /></a>
                <a href="add-product.php" class="save-publish">Cancel</a>
            </div>
          </form>
        </div>
      </div>
<?php
include_once('common/page_footer.php');     
?>
    <script type="text/javascript">

        function show_product_details(){
            var product_type = document.getElementById("product_type");
            var prod_type  = product_type.options[product_type.selectedIndex].value;
            if(prod_type == "oil") {
                $(".oil_class").css("display","block");
                $(".ghee_class").css("display","none");
            } else{
                $(".ghee_class").css("display","block");
                $(".oil_class").css("display","none");
            }
        }

    $(function () {
        $("#product_characteristics_button").bind("click", function () {

            var div = "<div />";
            var row = product_characteristics("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#product_characteristics_container").append(div);
            
        });
    });
    function product_characteristics(value) {
        var txtlength = $("#product_characteristics_container").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<br><input  placeholder="Product Characteristics" name="product_characteristics[]" type="text" class="form-control custom-ht"/>';
    }
    $(function () {
        $("#product_benefits_button").bind("click", function () {

            var div = "<div />";
            var row = product_benefits("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#product_benefits_container").append(div);
            
        });
    });
    function product_benefits(value) {
        var txtlength = $("#product_benefits_container").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<br><input  placeholder="Product Benefits" name="product_benefits[]" type="text" class="form-control custom-ht"/>';
    }
    $(function () {
        $("#product_methods_button").bind("click", function () {

            var div = "<div />";
            var row = product_methods("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#product_methods_container").append(div);
            
        });
    });
    function product_methods(value) {
        var txtlength = $("#product_methods_container").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<br><input  placeholder="Product methods" name="product_methods[]" type="text" class="form-control custom-ht"/>';
    }
    $(function () {
        $("#product_facts_button").bind("click", function () {

            var div = "<div />";
            var row = product_facts("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#product_facts_container").append(div);
            
        });
    });
    function product_facts(value) {
        var txtlength = $("#product_facts_container").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<br><input  placeholder="Product facts" name="product_facts[]" type="text" class="form-control custom-ht"/><br/><input  placeholder="Fact Result" name="fact_result[]" type="text" class="form-control custom-ht"/>';
    }
    $(function () {
        $("#addoffer").bind("click", function () {

            var div = "<div />";
            var row = get_offers("");
            div +=row;
            $("#addoffercontainer").append(div);
            
        });
    });
    function get_offers(value) {
        var txtlength = $("#addoffercontainer").find('input').length;
        return '<div class="form-group"><input  placeholder="Add Offer" name="offer[]" type="text" class="form-control custom-ht"/></div>';
    }
    function product_validate() {
        var product_name = $('#product_name').val();
        var gst_val = $('#gst_val').val();
        var main_img = $('#file_browse1').val();
        var description = $('#description').val();
        
        var review_count = $('#review_count').val();
        var liter1 = $('#liter1:checked').val();
        var liter1_price = $('#liter1_price').val();
        var ml500 = $('#ml500:checked').val();
        var ml500_price = $('#ml500_price').val();
        var ml200 = $('#ml200:checked').val();
        var ml200_price = $('#ml200_price').val();
        var liter3 = $('#liter3:checked').val();
        var liter3_price = $('#liter3_price').val();
        var liter5 = $('#liter5:checked').val();
        var liter5_price = $('#liter5_price').val();
        var kg1 = $('#kg1:checked').val();
        var kg1_price = $('#kg1_price').val();
        var gram500 = $('#gram500:checked').val();
        var gram500_price = $('#gram500_price').val();
        var gram250 = $('#gram250:checked').val();
        var gram250_price = $('#gram250_price').val();
        var product_type = document.getElementById("product_type");
        var prod_type  = product_type.options[product_type.selectedIndex].value;
        var valid = 0;

        if (product_name == '') {
            $('#product_nameError').text('Please enter product name');
            $('#product_name').css('border-color', 'red');
            $("#product_name").focus();
            return false;
        } else {
            $('#product_name').css('border-color', 'green');
            $('#product_nameError').text('');
            valid++;
        }
         if (gst_val == '') {
            $('#gst_valError').text('Please enter product gst value');
            $('#gst_val').css('border-color', 'red');
            $("#gst_val").focus();
            return false;
        } else {
            $('#gst_val').css('border-color', 'green');
            $('#gst_valError').text('');
            valid++;
        }
        if (review_count == '') {
            $('#review_countError').text('Please enter review count');
            $('#review_count').css('border-color', 'red');
            $("#review_count").focus();
            return false;
        } else {
            $('#review_count').css('border-color', 'green');
            $('#review_countError').text('');
            valid++;
        }
        if (description == '') {
            $('#descriptionError').text('Please enter product description');
            $('#description').css('border-color', 'red');
            $("#description").focus();
            return false;
        } else {
            $('#description').css('border-color', 'green');
            $('#descriptionError').text('');
            valid++;
        }
        if (main_img == '') {
            $('#main_imgError').text('Please enter main image');
            $('#main_img').css('border-color', 'red');
            $("#main_img").focus();
            return false;
        } else {
            $('#main_img').css('border-color', 'green');
            $('#main_imgError').text('');
            valid++;
        }
        if(prod_type == '') {
            $('#product_typeError').text('Please select product type');
            $('#product_type').css('border-color', 'red');
            $("#product_type").focus();
            return false;
        } else {
            $('#product_type').css('border-color', 'green');
            $('#product_typeError').text('');
            valid++;
        }
        if(liter1 != "1 Liter" && ml500 !="500ML" && ml200 != "200ML" && liter3!="3 Liter" && liter5 != "5 Liter" && kg1 != "1 KG" && gram500 != "500 Gram" && gram250 != "250 Gram"){
            $('#product_typeError').text('Please select product Quantity');
            return false;
        } else {
            $('#product_typeError').text('');
            valid++;
        }
        if (liter1 == '1 Liter'){
            if(liter1_price == '') {
                $('#liter1_priceError').text('Please enter 1 Liter Price');
                $('#liter1_price').css('border-color', 'red');
                $("#liter1_price").focus();
                return false;
            } else {
                $('#liter1_price').css('border-color', 'green');
                $('#liter1_priceError').text('');
            }
        }
        if (ml500 == '500ML'){
            if(ml500_price == '') {
                $('#ml500_priceError').text('Please enter 500 ml Price');
                $('#ml500_price').css('border-color', 'red');
                $("#ml500_price").focus();
                return false;
            } else {
                $('#ml500_price').css('border-color', 'green');
                $('#ml500_priceError').text('');
            }
        }
        if (ml200 == '200ML'){
            if(ml200_price == '') {
                $('#ml200_priceError').text('Please enter 200 ml Price');
                $('#ml200_price').css('border-color', 'red');
                $("#ml200_price").focus();
                return false;
            } else {
                $('#ml200_price').css('border-color', 'green');
                $('#ml200_priceError').text('');
            }
        }
        if (liter3 == '3 Liter'){
            if(liter3_price == '') {
                $('#liter3_priceError').text('Please enter 3 Liter Price');
                $('#liter3_price').css('border-color', 'red');
                $("#liter3_price").focus();
                return false;
            } else {
                $('#liter3_price').css('border-color', 'green');
                $('#liter3_priceError').text('');
            }
        }
        if (liter5 == '5 Liter'){
            if(liter5_price == '') {
                $('#liter5_priceError').text('Please enter 5 Liter Price');
                $('#liter5_price').css('border-color', 'red');
                $("#liter5_price").focus();
                return false;
            } else {
                $('#liter5_price').css('border-color', 'green');
                $('#liter5_priceError').text('');
            }
        }
        if (kg1 == '1 KG'){
            if(kg1_price == '') {
                $('#kg1_priceError').text('Please enter 1 KG Price');
                $('#kg1_price').css('border-color', 'red');
                $("#kg1_price").focus();
                return false;
            } else {
                $('#kg1_price').css('border-color', 'green');
                $('#kg1_priceError').text('');
            }
        }
        if (gram500 == '500 Gram'){
            if(gram500_price == '') {
                $('#gram500_priceError').text('Please enter 500 Gram Price');
                $('#gram500_price').css('border-color', 'red');
                $("#gram500_price").focus();
                return false;
            } else {
                $('#gram500_price').css('border-color', 'green');
                $('#gram500_priceError').text('');
            }
        }
        if (gram250 == '250 Gram'){
            if(gram250_price == '') {
                $('#gram250_priceError').text('Please enter 250 Gram Price');
                $('#gram250_price').css('border-color', 'red');
                $("#gram250_price").focus();
                return false;
            } else {
                $('#gram250_price').css('border-color', 'green');
                $('#gram250_priceError').text('');
            }
        }
        
       
        if (description == '') {
            $('#descriptionError').text('Please enter product description');
            $('#description').css('border-color', 'red');
            $("#description").focus();
            return false;
        } else {
            $('#description').css('border-color', 'green');
            $('#descriptionError').text('');
            valid++;
        }
        if(valid >= 8){
            return true;
        } else {
            return false;
        }
    }
    // $(document).ready(function() {
    //     $('textarea#description').ckeditor();
        
    // });
    
    $(document).ready(function() {
        $('#cex-multiple').multiselect({numberDisplayed: 2});
        
    });
    $('.welfare').children("ul").slideToggle();
        $('.welfare').find('a.toggle-list').addClass('active');
        $('.welfare').find('a.toggle-list').append('<span class="sprite right-arrow"></span>');
 
// var con_res = '<?php echo $success; ?>';
//     if (con_res)
//     {
// // $('.success').html('<span class="display-success">Contact Registered <span>');
//         window.location = 'view-product.php';
//     }

</script>

<script>
    $(document).ready(function () {
        $("#file_browse1").on('change', function () {
            var countFiles = $(this)[0].files.length;
            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();
            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if (typeof (FileReader) != "undefined") {
                    for (var i = 0; i < countFiles; i++) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                "class": "thumb-image"
                            }).appendTo(image_holder);
                        }
                        image_holder.show();
                        reader.readAsDataURL($(this)[0].files[i]);
                    }
                } else {
                    alert("This browser does not support FileReader.");
                }
            } else {
                alert("Pls select only images");
                $('#file_browse1').val('');
            }
        });
        $("#file_browse2").on('change', function () {
            var countFiles = $(this)[0].files.length;
            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();
            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if (typeof (FileReader) != "undefined") {
                    for (var i = 0; i < countFiles; i++) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                "class": "thumb-image"
                            }).appendTo(image_holder);
                        }
                        image_holder.show();
                        reader.readAsDataURL($(this)[0].files[i]);
                    }
                } else {
                    alert("This browser does not support FileReader.");
                }
            } else {
                alert("Pls select only images");
                $('#file_browse2').val('');
            }
        });

        $("#file_browse3").on('change', function () {
            var countFiles = $(this)[0].files.length;
            var imgPath = $(this)[0].value;
            var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            var image_holder = $("#image-holder");
            image_holder.empty();
            if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
                if (typeof (FileReader) != "undefined") {
                    for (var i = 0; i < countFiles; i++) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $("<img />", {
                                "src": e.target.result,
                                "class": "thumb-image"
                            }).appendTo(image_holder);
                        }
                        image_holder.show();
                        reader.readAsDataURL($(this)[0].files[i]);
                    }
                } else {
                    alert("This browser does not support FileReader.");
                }
            } else {
                alert("Pls select only images");
                $('#file_browse3').val('');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $("#addButton1").bind("click", function () {

            var div = "<div />";
            var row = get_values1("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#container1").append(div);
            
        });
    });
    function get_values1(value) {
        var txtlength = $("#container1").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<input placeholder="example( 1LCoconut-1LGroundnut-1LSesame )"  name="container_input1_1[]" type="text" class="form-control custom-ht" required/><br/><br/><input placeholder="Total Price" name="container_input1_2[]" type="text" class="form-control custom-ht" required/><br/><br/>';
    }
    $(function () {
        $("#addButton2").bind("click", function () {

            var div = "<div />";
            var row = get_values2("");
            div +=row;
            // div.html(GetDynamicTextBox(""));
            $("#container2").append(div);
            
        });
    });
    function get_values2(value) {
        var txtlength = $("#container2").find('input').length;
        // console.log($("#TextBoxContainer").find('input').length);
        return '<input placeholder="example( 1LCoconut-2LSesame-2LGroundnut )" name="container_input2_1[]" type="text" class="form-control custom-ht" required/><br/><br/><input placeholder="Total Price"  name="container_input2_2[]" type="text" class="form-control custom-ht" required /><br/><br/>';
    }
</script>