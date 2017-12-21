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
$sql = "SELECT count(register_id) FROM register where del_flag='N'";
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


$details = display_all_register();
?>
<style>
    .pagination-sm li.currentpage a
    {
        color: #fff;
        background-color: #369;
    }
</style>
<div class="col-lg-9 padding-0">
    <div class="right-sec">
        <h3>View Customer List</h3>
        <div class="table-holder">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="11%">S.No</th>
                            <th width="41%">Name</th>
                            <th width="41%">Email</th>
                            <th width="41%">Referal Code</th>
                            <th width="13%">Status</th>
                            <th width="13%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = $start; $i < $end; $i++) {
                            if ($i == $row[0]) {
                                break;
                            }
                            if($details[$i]['status'] == "Y") {
                                $active = "Active";
                            } else {
                                $active = "Deactive";
                            }
                            ?>
                            <tr id='<?php echo $details[$i]['register_id']; ?>'>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $details[$i]['name']; ?></td>
                                <td><?php echo $details[$i]['emailid']; ?></td>
                                <td><?php echo $details[$i]['referal_code']; ?></td>
                                <?php if($active == 'Active'){?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="deactive_register(<?php echo $details[$i]['register_id']; ?>)">Active</a>
                                </td> 
                                <?php }else { ?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="active_register(<?php echo $details[$i]['register_id']; ?>)">DeActive</a>
                                </td> 
                                <?php } ?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="delete_customer(<?php echo $details[$i]['register_id']; ?>)">Delete</a>
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



