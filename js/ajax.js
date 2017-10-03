function add_review() {
    var name = $('#rev_name').val();
    var emailid = $('#rev_email').val();
    var city = $('#rev_city').val();
    var msg = $('#rev_msg').val();
    var product = $('#product_name').val();
    var product_img = $('#product_img').attr('src');
    var product_id = $('#product_id').attr('src');
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
                console.log(res);
                if (res > 0) {
                    window.location.href = 'products.php';
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

function purchase() {

    var product_amount = $('#product_amount').val();
    var product_category = $('#product_category').val();
    var product_quantity = $('#product_quantity').val();
    var product_name = $('#product_name').val();
    var product_id = $('#product_id').val();
    console.log(product_quantity);
    console.log(product_category);
    console.log(product_amount);
    console.log(product_name);
    console.log(product_id);
    return false;
}   