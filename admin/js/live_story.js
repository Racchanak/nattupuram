/*
*Image Preview Function
*/
function imgPrev(prev) 
{
    if(prev.files[0].size >= 15000)
    { 
        if (prev.files && prev.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {
                $('#img').attr('src', e.target.result).width('25%').height('10%');
            };
        }
        reader.readAsDataURL(prev.files[0]);
    }
    else
    {
        alert('File Size Must Be Above 15KB!!!');
    }
}
/*
* Live Story Form Validation
*/
function validateform()
{
	for ( instance in CKEDITOR.instances )
	CKEDITOR.instances[instance].updateElement();
	data = new Array("Title","Image","Desription"); var k=0; var isValid=0;
	focus_arr=new Array();
	
	var tmp_id = $('.editid').val();	var toCheck =3; 
	if(tmp_id>0) { toCheck = 2; } 
	
	$('form').find('.error-msg').remove();
	
	$('form.form-inline').find('.value').each(function(i, ele) 
	{
	   temp_val=$.trim($(this).val());
	   if(tmp_id>0 && i==1){ if(temp_val == null) { tmp_val = 0;} }
	   if(temp_val == '' || temp_val == null)
	   {
		   focus_arr[k++] = $(this);
		   $(this).parents('.toselect').after('<span class="error-msg">'+data[i]+' is required. </span>');
	   }
	   else
	   {	
	  	   isValid++;  
	   }
	});
	if(isValid>=toCheck)
	{		
		return true;	
	}
	else
	{
		$(focus_arr[0]).focus();	
		return false;	
	}	
}
/*
* Important Announcement Form Validation
*/
function eventform()
{
	for ( instance in CKEDITOR.instances )
	CKEDITOR.instances[instance].updateElement();
	data = new Array("Title","Image","Home-Content","Desription"); var k=0; var isValid=0;
	focus_arr=new Array();
	
        var tmp_id = $('.editid').val();console.log(tmp_id);	var toCheck =4; 
	if(tmp_id>0) { toCheck = 3; } 
	
	$('form').find('.error-msg').remove();
	$('form.form-inline').find('.value').each(function(i, ele) 
	{
	   temp_val=$.trim($(this).val());
           if(tmp_id>0 && i==1){ if(temp_val == null) { tmp_val = 0;} }
	   if(temp_val == '' || temp_val == null)
	   {
		   focus_arr[k++] = $(this);
		   $(this).parents('.toselect').after('<span class="error-msg">'+data[i]+' is required. </span>');
	   }
	   else
	   {	
	  	   isValid++;  
	   }
	});
	if(isValid>=toCheck)
	{		
            return true;	
	}
	else
	{
            $(focus_arr[0]).focus();	
            return false;	
	}
}

function CKcancel(form_name) 
{
    document.forms[form_name].reset();
    $('#img').attr('src','img/brose-doc-img.png');
    for (instance in CKEDITOR.instances) 
    {
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}

function alertClose(input)
{
    $(input).parent().remove();
    //window.location.href="live-stories.php";
}