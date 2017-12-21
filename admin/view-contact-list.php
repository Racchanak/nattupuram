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
$sql = "SELECT count(contactus_id) FROM contactus where del_flag='N'";
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


$details = display_all_contactus();
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
        <h3>View Contact Us</h3>
        <div class="table-holder">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="11%">S.No</th>
                            <th width="20%">Name</th>
                            <th width="30%">Email</th>
                            <th width="20%">Subject</th>
                            <th width="41%">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = $start; $i < $end; $i++) {
                            if ($i == $row[0]) {
                                break;
                            }
                            ?>
                            <tr id='<?php echo $details[$i]['distributors_id']; ?>'>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $details[$i]['name']; ?></td>
                                <td><?php echo $details[$i]['emailid']; ?></td>
                                <td><?php echo $details[$i]['subject']; ?></td>
                                <td><?php echo $details[$i]['message']; ?></td>
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