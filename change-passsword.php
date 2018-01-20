<?php
    include('functioncall.php');
$title = 'Change Passsword';
$menu = 'changepass';
include('header.php');
?>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2 class="title text-center">Change Password</h2>                   
                    <form id="change_password" onsubmit="return change_password();">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user']['register_id'];?>">
                        <input type="password" id="old_password" placeholder="Old Password" name="old_password" />
                        <input type="password" id="password" placeholder="New Password" name="password" />
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"/>
                        <div><span class="error-pass"></span></div>
                        <div><span class="success-pass"></span></div>
                        <button type="submit" id="register" class="btn btn-default" >Signup</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
<?php

include('footer.php');
?>