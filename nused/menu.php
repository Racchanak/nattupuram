<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.php" class="<?= ($menu == 'home') ? 'active' : ''; ?>">Home</a></li>
<!--                        <li class="dropdown"><a href="#" class="<?= ($menu == 'menu_act') ? 'active' : ''; ?>">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="shop.php" class="<?= ($submenu == 'prod') ? 'active' : ''; ?>">Products</a></li>
                                <li><a href="product-details.php" class="<?= ($submenu == 'prod_det') ? 'active' : ''; ?>">Product Details</a></li> 
                                <li><a href="blog.php" class="<?= ($menu == 'blog') ? 'active' : ''; ?>">Blog List</a></li>
                                <li><a href="blog-single.php" class="<?= ($menu == 'blog_sig') ? 'active' : ''; ?>">Blog Single</a></li>
                                <li><a href="404.php">404</a></li>
                                 <li><a href="checkout.php" class="active">Checkout</a></li> 
                                <li><a href="cart.php" class="active">Cart</a></li> 
                                <li><a href="login.php" class="active">Login</a></li>  
                            </ul>
                        </li> -->
                        <li><a href="contact-us.php" class="<?= ($menu == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
                        <li><a href="aboutus.php" class="<?= ($menu == 'about') ? 'active' : ''; ?>">About Us</a></li>
                        <!-- <li><a href="contact-us.php">Contact</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-bottom-->
</header><!--/header-->