function add_review() {
	var name= $('#rev_name').val();
	var emailid = $('#rev_email').val();
	var city = $('#rev_city').val();
	var msg = $('#rev_msg').val();
	var valid = 0;
	if(name==''){
		$('.error-review').html('Please enter your name');
		return false;
	} else {
		valid++;
	}
	if(emailid==''){
		$('.error-review').html('Please enter your email id');
		return false;
	} else {
		valid++;
	}
	if(city==''){
		$('.error-review').html('Please enter your city');
		return false;
	} else {
		valid++;
	}
	if(msg==''){
		$('.error-review').html('Please enter your message');
		return false;
	} else {
		valid++;
	}
	var rev_data = {'name':name,'emailid':emailid,'city':city,'msg':msg};
	if(valid==4) {
		$.ajax({
			url:'function.php?action=reviews',
			type:'POST',
			data:rev_data,
			success: function(res){
				console.log(res);
			}
		});
	}
	return false;
}