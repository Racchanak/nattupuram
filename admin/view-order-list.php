<?php
error_reporting(E_ALL);

ini_set("display_errors", 0);
ob_start();
include_once('common/functions-admin.php');
// include_once('js/custom.js');
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
$per_page = 10;
$sql = "SELECT count(order_id) FROM product_order where del_flag='N'";
$retval = mysqli_query( $GLOBALS['link'], $sql );
$row = mysqli_fetch_array($retval);
$page = 0;
    $total_pages = ceil(($row[0]) / ($per_page)); //total pages we going to have
    //-------------if page is setcheck------------------//
    if (isset($_GET['page'])) 
    {
        $show_page = $_GET['page']; //current page
        if ($show_page > 0 && $show_page <= $total_pages) 
        {
            $start = ($show_page - 1) * $per_page;
            $end = $start + $per_page;
        } 
        else 
        {
    // error - show first set of results
            $start = 0;
            $end = $per_page;
        }
    } 
    else 
    {
    // if page isn't set, show first set of results
        $start = 0;
        $end = $per_page;
        $show_page=1;
    }
    // display pagination
    $page = intval($_GET['page']);
    $tpages = $total_pages;
    if ($page <= 0)
        $page = 1;


$details = display_all_order();
?>
<style>
    .pagination-sm li.currentpage a
    {
        color: #fff;
        background-color: #369;
    }
    .right-sec {
         width: 150% !important ; 
    }
</style>
<div class="col-lg-9 padding-0">
    <div class="right-sec">
        <h3>View Order List</h3>
        <div class="table-holder">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="11%">S.No</th>
                            <th width="40%">Transaction ID</th>
                            <th width="40%">User ID</th>
                            <th width="40%">Cart ID</th>
                            <th width="40%">Total</th>
                            <th width="40%">Delivery Status</th>
                            <th width="40%">Sub Total</th>
                            <th width="40%">Product ID</th>
                            <th width="40%">Shipping Cost</th>
                            <th width="40%">Ship To</th>
                            <th width="40%">Order Status</th>
                            <th width="40%">Payment Status</th>
                            <th width="40%">Product Name</th>
                            <th width="40%">Original Amount</th>
                            <th width="40%">GST Amount</th>
                            <th width="40%">Category</th>
                            <th width="40%">Quantity</th>
                            <th width="40%">Price</th>
                            <th width="40%">Update Status</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = $start; $i < $end; $i++) {
                            if ($i == $row[0]) {
                                break;
                            }
                            ?>
                            <tr id='<?php echo $details[$i]['order_id']; ?>'>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $details[$i]['transaction_id']; ?></td>
                                <td><?php echo $details[$i]['user_id']; ?></td>
                                <td><?php echo $details[$i]['cart_id']; ?></td>
                                <td><?php echo $details[$i]['total']; ?></td>
                                <td><?php echo $details[$i]['delivery_status']; ?></td>
                                <td><?php echo $details[$i]['sub_total']; ?></td>
                                <td><?php echo $details[$i]['product_id']; ?></td>
                                <td><?php echo $details[$i]['shipping_cost']; ?></td>
                                <td><?php echo $details[$i]['ship_to']; ?></td>
                                <td><?php echo $details[$i]['order_status']; ?></td>
                                <td><?php echo $details[$i]['payment_status']; ?></td>
                                <td><?php echo $details[$i]['product_name']; ?></td>
                                <td><?php echo $details[$i]['originalAmt']; ?></td>
                                <td><?php echo $details[$i]['gstAmt']; ?></td>
                                <td><?php echo $details[$i]['category']; ?></td>
                                <td><?php echo $details[$i]['quantity']; ?></td>
                                <td><?php echo $details[$i]['price']; ?></td>
                                <td class="button-holder">
                                    <select class="button-holder" id="order_status" name="order_status" onChange="order_status_call(<?php echo $details[$i]['order_id']; ?>)">
                                        <option value="Pending" <?php if($details[$i]['order_status'] == "Pending"){ echo "selected";  } ?> >Pending</option>
                                        <option value="Shipped" <?php if($details[$i]['order_status'] == "Shipped"){ echo "selected";  } ?>>Shipped</option>
                                        <option value="Completed" <?php if($details[$i]['order_status'] == "Completed"){ echo "selected";  } ?>>Completed</option>
                                    </select>
                                </td>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="delete_order(<?php echo $details[$i]['order_id']; ?>)">Delete</a>
                                </td>
                                
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
                <?php
                 $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                     $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div style="float:right;">
                            <ul class="pagination pagination-sm">';
                                if ($total_pages >= 0) 
                                {
                                    echo paginate($reload, $show_page, $total_pages);
                                }
                        echo "</ul>
                    </div>";
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include_once('common/page_footer.php');
?>
<script>
$(document).ready(function() {
        $('.welfare').children("ul").slideToggle();
        $('.welfare').find('a.toggle-list').addClass('active');
        $('.welfare').find('a.toggle-list').append('<span class="sprite right-arrow"></span>');
    
    });
</script>
<script type="text/javascript">

    function order_status_call(id){
        var e = document.getElementById("order_status");
        var val = e.options[e.selectedIndex].value;
        if (confirm('Are You Sure?')){
           $.ajax({
                url: 'common/functions-admin.php?action=update_status_order',
                type: 'POST',
                data: 'data=' + val + '&id=' + id,
                success: function(res) {
                    if (res == 'true') {
                        $('html, body').animate({scrollTop: 0}, 'slow');
                        $('#span').addClass('alert alert-custom alert-success').text('Deleted Sucessfully');
                        window.setTimeout(function(){location.reload()},1000);
                    }
                }
            });
        }else{
           window.setTimeout(function(){location.reload()},1000)
        }
    }
</script>