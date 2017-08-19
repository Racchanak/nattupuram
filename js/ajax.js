function add_review() {
	var name= $('#rev_name').val();
	var emailid = $('#rev_email').val();
	var city = $('#rev_city').val();
	var msg = $('#rev_msg').val();
	var product = $('#product_name').val();
	var product_img = $('#product_img').attr('src');
	var valid = 0;
	if(product==''){
		$('.error-review').html('Please Select the Product');
		return false;
	} else {
		$('.error-review').html('');
		valid++;		
	}
	if(name==''){
		$('.error-review').html('Please enter your name');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	if(emailid==''){
		$('.error-review').html('Please enter your email id');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	if(city==''){
		$('.error-review').html('Please enter your city');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	if(msg==''){
		$('.error-review').html('Please enter your message');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	var rev_data = {'name':name,'emailid':emailid,'city':city,'msg':msg,'product':product,'product_img':product_img};
	if(valid==5) {
		$.ajax({
			url:'function.php?action=reviews',
			type:'POST',
			data:rev_data,
			success: function(res){
				if(res>0) {
					$('.error-review').html('');
					$('#rev_name').val('');
					$('#rev_email').val('');
					$('#rev_city').val('');
					$('#rev_msg').val('');
					$('.success-review').html('Thanks for Your Review');
					setTimeout(function(){ $('.success-review').html(''); }, 1000);
				}
			}
		});
	}
	return false;
}

$('#option').change(function(){
	$('#product_name').val($('#option').val());
	if($('#option').val()=='Groundnut Oil'){
		product_img = 'images/product-details/groundnut.jpg';
	} else if($('#option').val()=='Sesame Oil'){
		product_img = 'images/product-details/sesame.jpg';
	} else if($('#option').val()=='Coconut Oil'){
		product_img = 'images/product-details/coconut.jpg';
	} else if($('#option').val()=='Natural Ghee'){
		product_img = 'images/product-details/ghee.jpg';
	}
	$("#product_img").attr("src", product_img);
});

$('#product_filter').change(function(){
	var product = $('#product_filter').val();
	$.ajax({
			url:'function.php?action=product&product='+product,
			type:'GET',
			success: function(res){
			}
		});
});

function add_register(){
	var name= $('#reg_name').val();
	var emailid = $('#reg_email').val();
	var password = $('#reg_password').val();
	var valid = 0;
	if(name==''){
		$('.error-review').html('Please enter your name');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	if(emailid==''){
		$('.error-review').html('Please enter your email id');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	if(password==''){
		$('.error-review').html('Please enter your password');
		return false;
	} else {
		$('.error-review').html('');
		valid++;
	}
	var reg_data = {'name':name,'emailid':emailid,'password':password};
	if(valid==3){
		$.ajax({
			url:'function.php?action=register',
			type:'POST',
			data:reg_data,
			success: function(res){
				if(res>0) {
					$('.error-review').html('');
					$('#reg_name').val('');
					$('#reg_email').val('');
					$('#reg_password').val('');
					$('.success-review').html('Thanks for Your Registration');
					setTimeout(function(){ $('.success-review').html(''); }, 1000);
				}
			}
		});
	}
	return false;
}