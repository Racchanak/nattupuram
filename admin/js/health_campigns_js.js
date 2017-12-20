$(document).ready(function(){
$('#toggle').click(function() {
    console.log($('.sub-list').slideToggle());

});
});


function validate(){
	for ( instance in CKEDITOR.instances )
	CKEDITOR.instances[instance].updateElement();
	data = new Array("Title","Image","Home Page Content","Desription"); var k=0; var isValid=0;
	focus_arr=new Array();
	
	var tmp_id = $('.editid').val();	var toCheck =4; 
	
	if(tmp_id>0) { toCheck = 3; } 
	
	$('form').find('.error').remove();
	
	$('form.form-inline').find('.form-control').each(function(i, ele) {
       
	   temp_val=$.trim($(this).val());
	   
	   if(tmp_id>0 && i==1){ if(temp_val==null) {tmp_val = 0;}}
	   
	   if(temp_val == '' || temp_val == null)
		   {

				focus_arr[k++] = $(this);
				$(this).parents('.toselect').before('<span class="error">'+data[i]+' is required. </span>');
				console.log(focus_arr);
		   }
	   else
	   		{	isValid++;  }
    });
	console.log(isValid);
	
	if(isValid>=toCheck)
		{		return true;	}
	else
		{
			$(focus_arr[0]).focus();	
			return false;	
		}
	
}

function CKupdate()
{
	$("#image").attr('src','');
	for ( instance in CKEDITOR.instances )
	CKEDITOR.instances[instance].updateElement();
	CKEDITOR.instances[instance].setData('');
	$('#exampleInputEmail2').focus();
}

function CKgetdata()
{
	for ( instance in CKEDITOR.instances )
	CKEDITOR.instances[instance].updateElement();
	return(CKEDITOR.instances[instance].getData());
}

function spanClose(input)
{
	$(input).parent().remove();
}

 function saveImage(image) {
        if (image.files && image.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#image')
						.attr('src', e.target.result)
						.width(130)
						.height(130);
			};	
		}
		 reader.readAsDataURL(image.files[0]);
  }
  

function reset_form()
{
	$("#exampleInputEmail2").val('');
	$('#exampleInputEmail4').val('');
	CKupdate();
}

