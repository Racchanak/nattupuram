<?php
    include('functioncall.php');
$title = 'Forget Password';
$menu = 'Forget';
include('header.php');
?>
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2 class="title text-center">Forget Password</h2>
                    <form id="forget" onsubmit="return forget_email();">            
                        <div class="col-md-8">  
                            <input type="text" id="forgetemail" name="email" placeholder="Email Address" />
                            <h6 class="error-forget"></h6>
                            <h6 class="success-forget"></h6>
                        </div>
                        <button type="submit" id="sendMail" class="btn btn-default">Send</button>
                    </form>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
<?php

include('footer.php');
?>