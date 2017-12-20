<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
// session_start();
// $session_check = $_SESSION['current_admin']['user_name'];
// $privilege_type=$_SESSION['current_admin']['privilege'];
// if (isset($session_check)&&(isset($privilege_type))) {
//     header('Location:welcome-admin.php');
//     exit();
// }
// else
// {
//     header('Location:index.php');
//     exit();
// }
 include_once('common/functions-admin.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/master.css" rel="stylesheet" type="text/css">
        <link href="css/developer.css" rel="stylesheet" type="text/css">
        <title>Nattupuram Admin</title>
    </head>

    <body>
        <header role="banner" id="top" class="custom-head navbar navbar-static-top bs-docs-nav">
            <div class="container">
                <div class="navbar-header"> <a class="navbar-brand" href="#"><img src="img/logo.png"></a> </div>

                <span id="span"></span>
                
                <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <h4>Welcome Admin</h4>
                        </li>
                        <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#"><b class="caret"></b></a>
                            <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="logout.php" tabindex="-1" role="menuitem">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 padding-0">
                        <aside>
                            <ul>
                                <div id="toggle">
                                    <li class="ul-list centre"><a href="javascript:;" class="toggle-list"><span class="sprite pulse"></span><span class="text-holder">Product</span></a>
                                        <ul class="sub-list">
                                            <li><a href="add-product.php">Add Product</a></li>
                                            <li><a href="view-product.php">View Product</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list announce"><a href="javascript:;" class="toggle-list"><span class="sprite announcements"></span><span class="text-holder">Offers</span></a>
                                        <ul class="sub-list">
                                            <li><a href="add-offer.php">Add Offer</a></li>
                                            <li><a href="view-offer.php">View Offer</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list sub_ex"><a href="javascript:;" class="toggle-list"><span class="sprite1 sub-ex"></span><span class="text-holder">Customer List</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-customer-list.php">View Customer List</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list subs_ex"><a href="javascript:;" class="toggle-list"><span class="sprite1 sub-ex"></span><span class="text-holder">Review List</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-review-list.php">View Review List</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list subv_ex"><a href="javascript:;" class="toggle-list"><span class="sprite1 sub-ex"></span><span class="text-holder">Enquiry List</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-enquiry-list.php">View Enquiry List</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list doctor"><a href="javascript:;" class="toggle-list"><span class="sprite doctor"></span><span class="text-holder">Distributors List</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-distributors-list.php">View Distributors List</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list social"><a href="javascript:;" class="toggle-list"><span class="sprite welfare"></span><span class="text-holder">Contact Us</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-contact-list.php">View Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="ul-list social"><a href="javascript:;" class="toggle-list"><span class="sprite welfare"></span><span class="text-holder">Order List</span></a>
                                        <ul class="sub-list">
                                            <li><a href="view-order-list.php">View Order List</a></li>
                                        </ul>
                                    </li>
                                    
                                </div>
                            </ul>
                        </aside>
                    </div>
