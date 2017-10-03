function add_review() {
    var name = $('#rev_name').val();
    var emailid = $('#rev_email').val();
    var city = $('#rev_city').val();
    var msg = $('#rev_msg').val();
    var product = $('#product_name').val();
    var product_img = $('#product_img').attr('src');
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
    var rev_data = {'name': name, 'emailid': emailid, 'city': city, 'msg': msg, 'product': product, 'product_img': product_img};
    if (valid == 5) {
        $.ajax({
            url: baseUrl+'reviews',
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
    $('#product_name').val($('#option').val());
    if ($('#option').val() == 'Groundnut Oil') {
        product_img = baseUrl+'assets/images/product-details/groundnut.jpg';
    } else if ($('#option').val() == 'Sesame Oil') {
        product_img = baseUrl+'assets/images/product-details/sesame.jpg';
    } else if ($('#option').val() == 'Coconut Oil') {
        product_img = baseUrl+'assets/images/product-details/coconut.jpg';
    } else if ($('#option').val() == 'Natural Ghee') {
        product_img = baseUrl+'assets/images/product-details/ghee.jpg';
    }
    $("#product_img").attr("src", product_img);
});

$('#product_filter').change(function () {
    var product = $('#product_filter').val();
    $.ajax({
        url: baseUrl+'product/' + product,
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
            url: baseUrl+'register',
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
            url: baseUrl+'userlogin',
            type: 'POST',
            data: reg_data,
            success: function (res) {
                console.log(res);
                if (res > 0) {
                    window.location.href = baseUrl+'products';
                }
            }
        });
    }
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
            url: baseUrl+'enquiry',
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

function add_distributors() {
    var name = $('#dist_name').val();
    var email = $('#dist_email').val();
    var phone = $('#dist_phone').val();
    var city = $('#dist_city').val();
    var address = $('#dist_address').val();
    var product = $('#dist_product').val();
    var msg = $('#message').val();
    var reg_data = {'name': name, 'email': email, 'phone': phone, 'city':city, 'address': address, 'product':product, 'msg': msg};
//    if (valid == 4) {
        $.ajax({
            url: baseUrl+'distributor',
            type: 'POST',
            data: reg_data,
            success: function (res) {
                if (res > 0) {
                    $('.error-distr').html('');
                    $('#dist_name').val('');
                    $('#dist_email').val('');
                    $('#dist_phone').val('');
                    $('#dist_city').val('');
                    $('#dist_address').val('');
                    $('#dist_product').val('');
                    $('#message').val('');
                    $('.success-distr').html('Thanks');
                    setTimeout(function () {
                        $('.success-distr').html('');
                    }, 1000);
                }
            }
        });
//    }
    return false;
}

function logout() {
    $.ajax({
        url:  baseUrl+'userlogout',
        type: 'POST',
        success: function (res) {
            if (res > 0) {
                window.location.href = 'logout';
            }
        }
    });
    return false;
}