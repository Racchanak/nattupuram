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

        $title = $_POST['title'];
        $description = $_POST['description'];
        $Offersabove = $_POST['Offersabove'];
        $Offersvalue = $_POST['Offersvalue'];
        $code_text = $_POST['code_text'];
        $coupon_code = $_POST['coupon_code'];
        $coupon_text = $_POST['coupon_text'];
        $category = $_POST['category'];

        if($edit_id == 0){

           $ins_pack = 'INSERT INTO `Offers`(`title`, `description`, `Offersabove`, `Offersvalue`, `code_text`, `coupon_code`, `coupon_text`, `category`) VALUES ("' . $title . '","'. $description . '","' . $Offersabove . '","' . $Offersvalue . '","' . $code_text . '","' . $coupon_code . '","' . $coupon_text . '","' . $category . '")';
            mysqli_query($GLOBALS['link'], $ins_pack);
            $last_id = mysqli_insert_id($GLOBALS['link']);
            $success = "Inserted Successfully";            
        }
        else {
           $query = 'UPDATE `Offers` SET `title`="' . $title . '",`description`="'.$description.'",`Offersabove`="' . $Offersabove . '",`Offersvalue`="' . $Offersvalue . '",`code_text`="'.$code_text.'",`coupon_code`="' . $coupon_code . '",`coupon_text`="'.$coupon_text.'",`category`="' . $category . '" WHERE `offers_id`="' . $edit_id . '"';
            mysqli_query($GLOBALS['link'], $query);
            $last_id = mysqli_insert_id($GLOBALS['link']);
            $success = "Updated Successfully";
            $edit_id = 0;
        }
        
    } 

    if(!empty($_REQUEST['edit_id'])) {
        $edit = $_REQUEST['edit_id'];
        if($edit!=0) {
            $res = select_specific_offer($edit);
            extract($res[0]);
        }
    }
    
?>  
      <div class="col-lg-9 padding-0">
        <div class="right-sec">
            <h3>Add Offer Details</h3>
            <?php    if (isset($success) && !empty($success)) {    echo "<span class='alert alert-custom alert-success'>" . $success . "<a class='alert-success close-alert' onClick='alertClose(this);'>×</a></span>"; } ?>
            <?php    if (isset($failure) && !empty($failure)) {    echo "<span class='alert alert-custom alert-danger'>" . $failure . "<a class='alert-failure close-alert' onClick='alertClose(this);'>×</a></span>"; } ?>
          <form role="form" id="social" name="social" class="form-inline" action="add-offer.php" enctype="multipart/form-data" method="post" onSubmit="return offer_validate()">
            <input type="hidden" class="editid" name="edit_id" value="<?php if(isset($offers_id)) echo $offers_id; else echo 0; ?>" />
             <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Title</h5>
                        <input type="text" placeholder="Title" id="title" name="title" class="form-control checksco" value="<?php if(isset($title)){ echo $title; } else { echo ""; } ?>">
                        <span id="titleError" class="apply"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Offers Above</h5>
                        <input type="text" placeholder="Offers Above" id="Offersabove" name="Offersabove" class="form-control checksco" value="<?php if(isset($Offersabove)){ echo $Offersabove; } else { echo ""; } ?>">
                        <span id="OffersaboveError" class="apply"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Offers Value</h5>
                        <input type="text" placeholder="Offers Value" id="Offersvalue" name="Offersvalue" class="form-control checksco" value="<?php if(isset($Offersvalue)){ echo $Offersvalue; } else { echo ""; } ?>">
                        <span id="OffersvalueError" class="apply"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Description</h5>
                        <textarea class="form-control checkcls" rows="3" id="description" name="description" placeholder="Add Here"><?php if(isset($description)){ echo $description; } else { echo ""; } ?></textarea>
                        <span id="descriptionError" class="apply"></span>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Code Text</h5>
                        <input type="text" placeholder="Code Text" id="code_text" name="code_text" class="form-control checksco" value="<?php if(isset($code_text)){ echo $code_text; } else { echo ""; } ?>">
                        <span id="code_textError" class="apply"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Coupon Code</h5>
                        <input type="text" placeholder="Coupon Code" id="coupon_code" name="coupon_code" class="form-control checksco" value="<?php if(isset($coupon_code)){ echo $coupon_code; } else { echo ""; } ?>">
                        <span id="coupon_codeError" class="apply"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Coupon Text</h5>
                        <input type="text" placeholder="Coupon Text" id="coupon_text" name="coupon_text" class="form-control checksco" value="<?php if(isset($coupon_text)){ echo $coupon_text; } else { echo ""; } ?>">
                        <span id="coupon_textError" class="apply"></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pad-rt-0">
                    <div class="form-group error-msg">
                        <h5>Category</h5>
                        <select class="form-control checksco" id="category" name="category">
                            <option value="">-Select Product Type -</option>
                            <option value="Oil" <?php if($category == "Oil"){ echo "selected"; } ?> >Oil</option>
                            <option value="Welcome" <?php if($category == "Welcome"){ echo "selected"; } ?>>Welcome</option>
                            <option value="Combo 3C" <?php if($category == "Combo 3C"){ echo "selected"; } ?>>Combo 3C</option>
                            <option value="Combo 5C" <?php if($category == "Combo 5C"){ echo "selected"; } ?>>Combo 5C</option>
                            <option value="Ghee" <?php if($category == "Ghee"){ echo "selected"; } ?>>Ghee</option>
                        </select>
                        <span id="categoryError" class="apply"></span>
                    </div>
                </div>
                
            </div>
            <div class="buttons pull-right">
                <a><input class="save-publish" type="submit" name="submit" value="Save" /></a>
                <a href="add-offer.php" class="save-publish">Cancel</a>
            </div>
          </form>
        </div>
      </div>
<?php
include_once('common/page_footer.php');     
?>
    <script type="text/javascript">

    function offer_validate() {
        var title = $('#title').val();
        // var Offersabove = $('#Offersabove').val();
        var Offersvalue = $('#Offersvalue').val();
        var description = $('#description').val();        
        var code_text = $('#code_text').val();
        var coupon_code = $('#coupon_code').val();
        var coupon_text = $('#coupon_text').val();
        var category = document.getElementById("category");
        var category_val  = category.options[category.selectedIndex].value;
        var valid = 0;

        if (title == '') {
            $('#titleError').text('Please enter title');
            $('#title').css('border-color', 'red');
            $("#title").focus();
            return false;
        } else {
            $('#title').css('border-color', 'green');
            $('#titleError').text('');
            valid++;
        }
        // if (Offersabove == '') {
        //     $('#OffersaboveError').text('Please enter Offers above');
        //     $('#Offersabove').css('border-color', 'red');
        //     $("#Offersabove").focus();
        //     return false;
        // } else {
        //     $('#Offersabove').css('border-color', 'green');
        //     $('#OffersaboveError').text('');
        //     valid++;
        // }
        if (Offersvalue == '') {
            $('#OffersvalueError').text('Please enter Offers value');
            $('#Offersvalue').css('border-color', 'red');
            $("#Offersvalue").focus();
            return false;
        } else {
            $('#Offersvalue').css('border-color', 'green');
            $('#OffersvalueError').text('');
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
        // if (code_text == '') {
        //     $('#code_textError').text('Please enter code text');
        //     $('#code_text').css('border-color', 'red');
        //     $("#code_text").focus();
        //     return false;
        // } else {
        //     $('#code_text').css('border-color', 'green');
        //     $('#code_textError').text('');
        //     valid++;
        // }
        // if(coupon_code == '') {
        //     $('#coupon_codeError').text('Please enter coupon code');
        //     $('#coupon_code').css('border-color', 'red');
        //     $("#coupon_code").focus();
        //     return false;
        // } else {
        //     $('#coupon_code').css('border-color', 'green');
        //     $('#coupon_codeError').text('');
        //     valid++;
        // }
        // if(coupon_text == '') {
        //     $('#coupon_textError').text('Please enter coupon text');
        //     $('#coupon_text').css('border-color', 'red');
        //     $("#coupon_text").focus();
        //     return false;
        // } else {
        //     $('#coupon_text').css('border-color', 'green');
        //     $('#coupon_textError').text('');
        //     valid++;
        // }
        if(category_val == '') {
            $('#categoryError').text('Please enter category');
            $('#category').css('border-color', 'red');
            $("#category").focus();
            return false;
        } else {
            $('#category').css('border-color', 'green');
            $('#categoryError').text('');
            valid++;
        }
        if(valid >= 4){
            return true;
        } else {
            return false;
        }
    }
    // $(document).ready(function() {
    //     $('textarea#description').ckeditor();
        
    // });
    $('.welfare').children("ul").slideToggle();
        $('.welfare').find('a.toggle-list').addClass('active');
        $('.welfare').find('a.toggle-list').append('<span class="sprite right-arrow"></span>');

    var con_res = '<?php echo $success; ?>';
    if (con_res)
    {
        window.location = 'view-offer.php';
    }
</script>