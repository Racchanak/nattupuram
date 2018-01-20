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
$sql = "SELECT count(review_id) FROM review where del_flag='N'";
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
    
if(isset($_GET['page'])){
    // display pagination
        $page = intval($_GET['page']);
        $tpages = $total_pages;
        if ($page <= 0)
            $page = 1;

    } else {
    // display pagination
        $page = intval(0);
        $tpages = $total_pages;
        if ($page <= 0)
            $page = 1;

    }


$details = display_all_review();
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
        <h3>View Review List</h3>
        <div class="table-holder">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="11%">S.No</th>
                            <th width="41%">Name</th>
                            <th width="41%">City</th>
                            <th width="13%">Home Preview</th>
                            <th width="13%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = $start; $i < $end; $i++) {
                            if ($i == $row[0]) {
                                break;
                            }
                            if($details[$i]['homePreview'] == "Y") {
                                $active = "Yes";
                            } else {
                                $active = "No";
                            }
                            ?>
                            <tr id='<?php echo $details[$i]['review_id']; ?>'>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $details[$i]['name']; ?></td>
                                <td><?php echo $details[$i]['city']; ?></td>
                                <?php if($active == 'Yes'){?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="review_home_yes(<?php echo $details[$i]['review_id']; ?>)">Yes</a>
                                </td> 
                                <?php }else { ?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="review_home_no(<?php echo $details[$i]['review_id']; ?>)">No</a>
                                </td> 
                                <?php } ?>
                                <td class="button-holder">
                                    <a  href="javascript:void(0);" onclick="delete_review(<?php echo $details[$i]['review_id']; ?>)">Delete</a>
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



