function add_review() {
    var name = $('#rev_name').val();
    var emailid = $('#rev_email').val();
    var city = $('#rev_city').val();
    var msg = $('#rev_msg').val();
    var product = $('#product_name').val();
    var product_img = $('#product_img').attr('src');
    var product_id = $('#product_id').val();
    var valid = 0;
    if (product == '') {
        $('.error-review').html('Please Select the Product');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (name == '') {
        $('.error-review').html('Please enter your name');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (emailid == '') {
        $('.error-review').html('Please enter your email id');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (city == '') {
        $('.error-review').html('Please enter your city');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (msg == '') {
        $('.error-review').html('Please enter your message');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    var rev_data = {'name': name, 'emailid': emailid, 'city': city, 'msg': msg, 'product': product, 'product_img': product_img, 'product_id':product_id};
    if (valid == 5) {
        $.ajax({
            url: 'function.php?action=reviews',
            type: 'POST',
            data: rev_data,
            success: function (res) {
                if (res > 0) {
                    $('.error-review').html('');
                    $('#rev_name').val('');
                    $('#rev_email').val('');
                    $('#rev_city').val('');
                    $('#rev_msg').val('');
                    $('.success-review').html('Thanks for Your Review');
                    setTimeout(function () {
                        $('.success-review').html('');
                    }, 1000);
                }
            }
        });
    }
    return false;
}

$('#option').change(function () {
    $('#product_id').val($('#option').val());
    if ($('#option').val() == '1') {
        product_img = 'images/product-details/groundnut.jpg';
    } else if ($('#option').val() == 'Sesame Oil') {
        product_img = 'images/product-details/sesame.jpg';
    } else if ($('#option').val() == 'Coconut Oil') {
        product_img = 'images/product-details/coconut.jpg';
    } else if ($('#option').val() == 'Natural Ghee') {
        product_img = 'images/product-details/ghee.jpg';
    }
    $("#product_img").attr("src", product_img);
});

$('#product_filter').change(function () {
    var product = $('#product_filter').val();
    $.ajax({
        url: 'function.php?action=product&product=' + product,
        type: 'GET',
        success: function (res) {
            var reviews = JSON.parse(res);
            var _html = '';
            $('#product_list').html(_html);
            if (reviews) {
                for (var i = 0; i < reviews.length; i++) {
                    if (i == 0) {
                        classa = 'active';
                    } else {
                        classa = '';
                    }
                    _html += '<div class="col-sm-12">'
                            + '<div class="single-blog-post">'
                            + '<h3>' + reviews[i]["name"] + ' - ' + reviews[i]["city"] + '</h3>'
                            + '<div class="col-sm-3">'
                            + '<a href="javascript:;">'
                            + '<img src="' + reviews[i]['product_img'] + '" alt="">'
                            + '</a>'
                            //<div class="post-meta">
                            // 	<span style="float: left;">
                            // 		<i class="fa fa-star"></i>
                            // 		<i class="fa fa-star"></i>
                            // 		<i class="fa fa-star"></i>
                            // 		<i class="fa fa-star"></i>
                            // 		<i class="fa fa-star-half-o"></i>
                            // 	</span>
                            // </div> 
                            + '</div>'
                            + '<div class="col-sm-9">'
                            + '<p>' + reviews[i]['product_name'] + '</p>'
                            + '<p>' + reviews[i]['message'] + '</p>'
                            + '</div>'
                            + '</div>'
                            + '</div>';
                }
            }
            $('#product_list').html(_html);
        }
    });
});
if()
$("input[name='account_option[]']:checked");
function add_register() {
    var name = $('#reg_name').val();
    var emailid = $('#reg_email').val();
    var password = $('#reg_password').val();
    var valid = 0;
    if (name == '') {
        $('.error-review').html('Please enter your name');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (emailid == '') {
        $('.error-review').html('Please enter your email id');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (password == '') {
        $('.error-review').html('Please enter your password');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    var reg_data = {'name': name, 'emailid': emailid, 'password': password};
    if (valid == 3) {
        $.ajax({
            url: 'function.php?action=register',
            type: 'POST',
            data: reg_data,
            success: function (res) {
                if (res > 0) {
                    $('.error-review').html('');
                    $('#reg_name').val('');
                    $('#reg_email').val('');
                    $('#reg_password').val('');
                    $('.success-review').html('Thanks for Your Registration');
                    setTimeout(function () {
                        $('.success-review').html('');
                    }, 1000);
                }
            }
        });
    }
    return false;
}

function login_check() {
    var emailid = $('#login_email').val();
    var password = $('#login_password').val();
    var valid = 0;
    if (emailid == '') {
        $('.error-review').html('Please enter your email id');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (password == '') {
        $('.error-review').html('Please enter your password');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    var reg_data = {'emailid': emailid, 'password': password};
    if (valid == 2) {
        $.ajax({
            url: 'function.php?action=userlogin',
            type: 'POST',
            data: reg_data,
            success: function (res) {
                if (res > 0) {
                    window.location.href = 'products.php';
                } else if (res == 0) {
                    $('.error-review').html('Please enter valid username and password');
                }
            }
        });
    }
    return false;
}

function logout() {
    $.ajax({
        url:  'function.php?action=userlogout',
        type: 'POST',
        success: function (res) {
            if (res > 0) {
                window.location.href = 'logout.php';
            }
        }
    });
    return false;
}
function enquiry() {
    var name = $('#enq_name').val();
    var email = $('#enq_emailid').val();
    var subject = $('#enq_subject').val();
    var msg = $('#enq_message').val();
    var valid = 0;
    if (name == '') {
        $('.error-review').html('Please enter your name');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (email == '') {
        $('.error-review').html('Please enter your email id');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (subject == '') {
        $('.error-review').html('Please enter the subject');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    if (msg == '') {
        $('.error-review').html('Please enter your message');
        return false;
    } else {
        $('.error-review').html('');
        valid++;
    }
    var reg_data = {'name': name, 'email': email, 'subject': subject, 'msg': msg};
    if (valid == 4) {
        $.ajax({
            url: 'function.php?action=enquiry',
            type: 'POST',
            data: reg_data,
            success: function (res) {
                if (res > 0) {
                    $('.error-review').html('');
                    $('#enq_name').val('');
                    $('#enq_emailid').val('');
                    $('#enq_subject').val('');
                    $('#enq_message').val('');
                    $('.success-review').html('Thanks for Your Opinion');
                    setTimeout(function () {
                        $('.success-review').html('');
                    }, 1000);
                }
            }
        });
    }
    return false;
}

function purchase_cart() {

    var product_amount = $('#product_amount').val();
    var product_category = $('#product_category').val();
    var product_quantity = $('#product_quantity').val();
    var product_name = $('#product_name').val();
    var product_id = $('#product_id').val();
    var product_user_id = $('#product_user_id').val();
    if (product_quantity == '') {
        $('.error-product').html('Please enter your message');
        return false;
    } else {
        $('.error-review').html('');   
        if(product_user_id!='Guest_id') {        
            var product_data = {'product_user_id':product_user_id, 'product_amount': product_amount, 'product_category': product_category, 'product_quantity': product_quantity, 'product_name': product_name, 'product_id':product_id};
            $.ajax({
                url: 'function.php?action=product_cart',
                type: 'POST',
                data: product_data,
                success: function (res) {
                    if (res > 0) {
                        window.location.href = 'cart.php';
                    }
                }
            });
            return false;
        } else {   
            var product_data = {'product_amount': product_amount, 'product_category': product_category, 'product_quantity': product_quantity, 'product_name': product_name, 'product_id':product_id};
            $.ajax({
                url: 'function.php?action=guest_order',
                type: 'POST',
                data: product_data,
                success: function (res) {
                    if (res > 0) {
                        console.log(res);
                        res = Number(res);
                        console.log(res);
                        document.cookie = 'Guest_cart=' + res;
                        setTimeout(function () {
                            window.location.href = 'checkout.php';
                        }, 1000);
                    }
                }
            });
            return false;      
        }  
    }
    return false;
}   

function purchase_order() {

    var amount = $('#orderamount').val();
    var user_id = $('#orderuser_id').val();
    var cart_ids = $('#cart_ids').val();      
    var order_data = {'cart_ids':cart_ids, 'user_id': user_id, 'amount': amount};
    console.log(order_data);
    $.ajax({
        url: 'function.php?action=product_order',
        type: 'POST',
        data: order_data,
        success: function (res) {
            if (res > 0) {
                window.location.href = 'checkout.php';
            }
        }
    });
    return false;
}

function purchase_transact() {
    var user_id = $('#user_id').val();
    var add_email = $('#add_email').val();  
    var add_name = $('#add_name').val();  
    var add_email = $('#add_email').val();  
    var address1 = $('#address1').val();  
    var address2 = $('#address2').val();  
    var city = $('#city').val();  
    var zipcode = $('#zipcode').val();  
    var state = $('#state').val();  
    var country = $('#country').val();  
    var mobile = $('#mobile').val();  
    var grand_total = $('#grand_total').val();  
    var order_ids = $('#order_ids').val();
    var valid = 0;
    if (add_email == '') {
        $('.error-checkout').html('Please enter your email id');
        $('#add_email').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (add_name == '') {
        $('.error-checkout').html('Please enter your name');
        $('#add_name').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (address1 == '') {
        $('.error-checkout').html('Please enter the address');
        $('#address1').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (city == '') {
        $('.error-checkout').html('Please select the city');
        $('#city').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (zipcode == '') {
        $('.error-checkout').html('Please enter the pincode');
        $('#zipcode').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (state == '') {
        $('.error-checkout').html('Please select the state');
        $('#state').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    if (country == '') {
        $('.error-checkout').html('Please select the state');
        $('#country').focus();
        return false;
    } else {
        $('.error-checkout').html('');
        valid++;
    }
    //address for user id
    var address_data = { 'user_id':user_id, 'phone':mobile,'address1': address1, 'address2': address2, 'city': city, 'state':state, 'country':country,'zipcode':zipcode, 'name':add_name };
    console.log(address_data);
    if(valid==7) {
        $.ajax({
            url: 'function.php?action=user_address',
            type: 'POST',
            data: address_data,
            success: function (add_id) {
                console.log(add_id);
                if(add_id > 0) {
                    var trans_data = { 'billing_addid':parseInt($.trim(add_id)), 'user_id':user_id, 'total_amt':grand_total,'order_ids':order_ids};
                    console.log(trans_data);
                    $.ajax({
                        url: 'function.php?action=product_transaction',
                        type: 'POST',
                        data: trans_data,
                        success: function (transact_id) {
                            var options = {
                                "key": "rzp_test_vKA7gqOvxPudTU",
                                "amount": parseInt(grand_total) * 100, // 2000 paise = INR 20
                                "name": "Nattupuram",
                                "description": "Transaction ID :" + transact_id,
                                "image": "assets/images/nattupuram.jpg",
                                "handler": function (response){
                                    console.log(response);
                                    if(response != '') {
                                        console.log(response.razorpay_payment_id);
                                        var payment_data = {'status':'Success','transact_id':parseInt($.trim(transact_id)),'payment_id':response.razorpay_payment_id}
                                    } else {
                                        var payment_data = {'status':'Failure','transact_id':parseInt($.trim(transact_id)),'payment_id':0}
                                    }
                                    $.ajax({
                                        url: 'function.php?action=transact_payment',
                                        type: 'POST',
                                        data: payment_data,
                                        success: function (res) {
                                            console.log(res);
                                            if(response != '') {
                                                if(res > 0) {
                                                    window.location.href = 'orderThank.php';
                                                }
                                            }
                                            //redirect to Thank You Page.
                                        }
                                    });
                                },
                                "prefill": {
                                    "name": add_name,
                                    "email": add_email
                                },
                                "theme": {
                                    "color": "#F37254"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                                rzp1.open();
                        }
                    });
                }
            }
        });
        return false;
    } 
    return false;
}
