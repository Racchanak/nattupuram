<?php
    include('functioncall.php');
$title = 'Login';
$menu = 'login';
include('header.php');
?>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form id="login" onsubmit="return login_check();">
                        <input type="text" id="login_email" name="email" placeholder="Email Address" />
                        <input type="password" id="login_password" name="password" placeholder="Password" />
                        <!-- <span>
                                <input type="checkbox" class="checkbox"> 
                                Keep me signed in
                        </span> -->
                        <button type="submit" id="login" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form id="register" onsubmit="return add_register();">
                        <input type="text" id="reg_name" name="name" placeholder="Name"/>
                        <input type="email" id="reg_email" placeholder="Email Address" name="email" />
                        <input type="password" id="reg_password" name="password" placeholder="Password"/>
                        <div><span class="error-review"></span></div>
                        <div><span class="success-review"></span></div>
                        <button type="submit" id="register" class="btn btn-default" >Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
<?php

include('footer.php');
?>