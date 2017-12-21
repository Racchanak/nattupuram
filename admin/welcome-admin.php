<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
//include ('conn.php');
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
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/master.css" rel="stylesheet" type="text/css">
<title>Nattupuram Admin</title>
</head>

<body>
<header role="banner" id="top" class="custom-head navbar navbar-static-top bs-docs-nav">
  <div class="container">
    <div class="navbar-header"> <a class="navbar-brand" href="#"><img src="img/logo.png"></a> </div>
    <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <h4>Welcome Admin</h4>
        </li>
        <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#"><b class="caret"></b></a>
          <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
            <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Settings</a></li>
            <li role="presentation"><a href="logout.php" tabindex="-1" role="menuitem">Logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>
<section>
  <div class="container">
    <div  class="welcome-holder">
    <h3>Welcome Admin</h3>
    <ul class="choose">
         <li><a  class="sub-ex" href="add-product.php"><span class="sprite"></span>Add Product</a></li>
         <li><a  class="sub-ex" href="add-product.php"><span class="sprite"></span>Add Offer</a></li>
         <li><a  class="sub-ex" href="view-customer-list.php"><span class="sprite"></span>Customer List</a></li>
         <li><a  class="sub-ex" href="view-review-list.php"><span class="sprite"></span>Review List</a></li>
         <li><a  class="sub-ex" href="view-enquiry-list.php"><span class="sprite"></span>Enquiry List</a></li>
         <li><a  class="sub-ex" href="view-distributors-list.php"><span class="sprite"></span>Distributors List</a></li>
         <li><a  class="sub-ex" href="view-contact-list.php"><span class="sprite"></span>Contact Us</a></li>
         <li><a  class="sub-ex" href="view-order-list.php"><span class="sprite"></span>Order List</a></li>
    </ul>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>

