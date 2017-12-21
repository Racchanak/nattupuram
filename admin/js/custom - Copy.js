
function Checkfiles(file)
{
    var imgbytes = file.files[0].size;
    var imgkbytes = Math.round(parseInt(imgbytes) / 1024);
    var fileName = file.value;
    var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
    console.log(imgbytes);
    if (imgkbytes > 20000) {
        return false;
    }
    if (ext == "jpg" || ext == "jpeg" || ext == "JPEG" || ext == "png" || ext == "PNG" || ext == "gif" || ext == "GIF")
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validate_add_speciality() {

    data = new Array("Speciality", "Image1", "Image2", "Service", "Procedure", "Technology", "Priority");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();
    var check = 7;
    var temp = $('#hspl_id').val();
    if (temp > 0) {
        check = 5;
    }
    $('form').find('.display-error').remove();

    $('form.form-inline').find('.form-control').each(function(i, ele)
    {
        temp_val = $.trim($(this).val());
        console.log(ele);
        if (temp_val == '' || temp_val == null)
        {
            focus_arr[k++] = $(this);
            $(this).parents(".error-msg").after('<span class="display-error">' + data[i] + ' is required. </span>');
            console.log(focus_arr);
        } else if (i == 1) {
            if (!Checkfiles(this)) {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');
            } else {
                $(this).after('<span class="display-error"></span>');
                isValid++;
            }
        } else if (i == 2) {
            if (!Checkfiles(this)) {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');
            } else {
                $(this).after('<span class="display-error"></span>');
                isValid++;
            }
        }
        else
        {
            isValid++;
        }
    });
    if (isValid == check)
    {
        return true;
    }
    else
    {
        $(focus_arr[0]).focus();
        return false;
    }
}

$('#speciality_type').keydown(function() {
    $('#spl_type_er').fadeOut();
});


function cancel_add_spl() {
    $('#add_specilaity')[0].reset();

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}

function cancel_add_excel() {

    $('#add_centre-ex')[0].reset();
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}

function cancel_add_sub() {

    $('#add_sub')[0].reset();
    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}

function validate_add_excellence() {

    var cex_name = $('#cex_name').val();
    var hcex_id = $('#hcex_id').val();
    var cex_subcenter = $('#cex_subcenter').val();
    var cex_serv = $('#cex_serv').val();
    var cex_proc = $('#cex_proc').val();
    var cex_tech = $('#cex_tech').val();


    if (cex_name == '' || cex_name == null) {
        $('#cex_type_er').html("<div id='display-error'>*Please enter Excellence Name.</div>");
        $("input[name='cex_name']").focus();
        return false;

    } else {
        $('#cex_type_er').html("");
    }

    var file_browse1 = document.getElementById('file_browse1').value;
    var file_browse2 = document.getElementById('file_browse2').value;
    console.log(hcex_id);
    if ((file_browse1 != null || file_browse2 != null) && (hcex_id == 0))
    {
        var valid_extensions = /(.jpg|.jpeg|.gif|.png)$/i;
        if (valid_extensions.test(file_browse1))
        {
            $('#cex_img_er').html("");
        }
        else
        {
            $('#cex_img_er').html("<div class='display-error'>*Please Upload White Image.</div>");
            return false;
        }
        if (valid_extensions.test(file_browse2))
        {
            $('#cex_img_er').html("");
        }
        else
        {
            $('#cex_img_er').html("<div class='display-error'>*Please Upload Green images.</div>");
            return false;
        }
    }


    if ($("#select").is(":checked")) {
        if (cex_subcenter == '' || cex_subcenter == null) {
            $('#cex_subcenter_er').html("<div class='display-error'>*Please enter sub Speciality.</div>");
            $("#cex_subcenter").focus();
            return false;
        } else {
            $('#cex_subcenter_er').html("");
        }
    } else {
        if (cex_serv == '' || cex_serv == null) {
            $('#cex_serv_er').html("<div class='display-error'>*Please enter Speciality Service.</div>");
            $("#display-error").focus();
            return false;
        } else {
            $('#cex_serv_er').html("");
        }
        if (cex_proc == '' || cex_proc == null) {
            $('#cex_proc_er').html("<div class='display-error'>*Please enter Speciality Procedure.</div>");
            $("#display-error").focus();
            return false;
        } else {
            $('#spl_proc_er').html("");
        }
        if (cex_tech == '' || cex_tech == null) {
            $('#cex_tech_er').html("<div class='display-error'>*Please enter Speciality Technology.</div>");
            $("#display-error").focus();
            return false;
        } else {
            $('#cex_tech_er').html("");
        }
    }



}

$("#select").click(function(e) {
    if (this.checked) {
        $("#group1").show();
        $("#group2").hide();  // checked
    }
    else {
        $("#group2").show();
        $("#group1").hide();
    }
});


function validate_add_sub()
{

    data = new Array("Excellence", "Speciality", "Image1", "Image2", "Service", "Procedure", "Technology", "Priority");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();
    $('form').find('.display-error').remove();
    var check = 8;
    var temp = $('#hsubcex_id').val();
    if (temp > 0) {
        check = 6;
    }

    $('form.form-inline').find('.form-control').each(function(i, ele)
    {
        temp_val = $.trim($(this).val());
//        console.log(ele);
        if (temp_val == '' || temp_val == null)
        {
            focus_arr[k++] = $(this);
            $(this).parents(".error-msg").after('<span class="display-error">' + data[i] + ' is required. </span>');
//            console.log(focus_arr);
        } else if (i == 2) {
            if (!Checkfiles(this)) {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');
            } else {
                $(this).after('<span class="display-error"></span>');
                isValid++;
            }
        } else if (i == 3) {
            if (!Checkfiles(this)) {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');
            } else {
                $(this).after('<span class="display-error"></span>');
                isValid++;
            }
        }
        else
        {
            isValid++;
        }
    });
    console.log(check);
    if (isValid == check)
    {
        return true;
    }
    else
    {
        $(focus_arr[0]).focus();
        return false;
    }
}

function readURL(input) {
    var cls = $(input).attr("name");
    console.log(cls);
    if (cls == 'wimg') {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#w_img')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
            };
        }
    }
    if (cls == 'gimg') {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#g_img')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
            };
        }
    }

    reader.readAsDataURL(input.files[0]);
}

function imgPrev(prev)
{
    if (prev.files && prev.files[0])
    {
        var reader = new FileReader();
        reader.onload = function(e)
        {
            $('#img').attr('src', e.target.result).width(150).height(150);
        };
    }
    reader.readAsDataURL(prev.files[0]);
}

function validate_doctors()
{
    data = new Array("Name", "Education", "Department", "Experience", "Availability", "Image", "Description");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();
    $('form').find('.display-error').remove();
    var check = 7;
    var temp = $('#doc_id').val();

    $('form.form-inline').find('.checkcls').each(function(i, ele)
    {
        if (temp > 0 && i == 5) {
            if (!(Checkfiles(this))) {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');

            }
//         $('#file_browse').removeClass('checkcls');
        }
        temp_val = $.trim($(this).val());
        console.log(ele);
        if (temp_val == '' || temp_val == null)
        {
            focus_arr[k++] = $(this);
            $(this).parents(".error-msg").append('<br><span class="display-error">' + data[i] + ' is required. </span>');
            console.log(focus_arr);
        }
        else if (i == 5)
        {
            if (!(Checkfiles(this)))
            {
                focus_arr[k++] = $(this);
                $(this).after('<span class="display-error"> ' + data[i] + ' is invalid.</span>');

            } else {
                isValid++;
            }

        }
        else
        {
            isValid++;
        }
    });
    if (isValid == 7)
    {
        return true;
    }
    else
    {
        $(focus_arr[0]).focus();
        return false;
    }
}

function alertClose(input)
{
    $(input).parent().remove();
}

$("li").click(function() {
    $(this).children("ul").slideToggle();

});

function delete_speciality(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=delete_spl',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == 'true') {
                $('#' + val).remove();
                $("tr").each(function(index) {
                    if (index != 0) {
                        $(this).find("td:first").html(index + "");
                    }
                });
                var ele = $(this_ele).parents('section').siblings().find('#span');
                $('html, body').animate({scrollTop: 0}, 'slow');
                $(ele).addClass('alert alert-custom alert-success').text('Deleted Sucessfully');
            }
        }
    });
}

function view_specilaity(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=view_spl',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            var mobj = JSON.parse(res);
            $('#vspl_name').text(mobj[0].spl_name);
        }
    });
}

function speciality_publish(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=spl_status',
        type: 'POST',
        data: 'st_spl_id=' + val,
        success: function(res) {
            if (res == '1') {
                $('#sts_' + val).text('Publish');
                $('#sts_' + val).removeClass('unpub');
            } else if (res == '0') {
                $('#sts_' + val).text('UnPublish');
                $('#sts_' + val).addClass('unpub');
            }
        }
    });
}
function delete_centerexc(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=delete_cex',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == 'true') {
                $('#' + val).remove();
                var ele = $(this_ele).parents('section').siblings().find('#span');
                $('html, body').animate({scrollTop: 0}, 'slow');
                $(ele).addClass('alert alert-custom alert-success').text('Deleted Sucessfully');

            }
        }
    });
}
function view_centerexc(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=view_cex',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            var mobj = JSON.parse(res);
            $('#vspl_name').text(mobj[0].spl_name);
        }
    });
}
function centerexc_status(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=cex_status',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == '1') {
                $('#sts_' + val).text('Publish');
                $('#sts_' + val).removeClass('unpub');
            } else if (res == '0') {
                $('#sts_' + val).text('UnPublish');
                $('#sts_' + val).addClass('unpub');
            }
        }
    });
}
function delete_speciality_excell(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=delete_subex',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == 'true') {
                $('#' + val).remove();
                $("tr").each(function(index) {
                    if (index != 0) {
                        $(this).find("td:first").html(index + "");
                    }
                });
                $('html, body').animate({scrollTop: 0}, 'slow');
                $('#span').addClass('alert alert-custom alert-success').text('Deleted Sucessfully');
            }
        }
    });
}
function view_specilaity_excell(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=view_subex',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            var mobj = JSON.parse(res);
            $('#vspl_name').html(mobj[0].sub_name);
            $('.vsub_serv').html(mobj[0].sub_serv);
            $('.vsub_proc').html(mobj[0].sub_proc);
            $('.vsub_tech').html(mobj[0].sub_tech);
            $('#vimg1').html('<img width=100% src=' + mobj[0].sub_wimg + '>');
            $('#vimg2').html('<img width=100% src=' + mobj[0].sub_gimg + '>');
        }
    });
}
function speciality_status_excell(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=subex_status',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == '1') {
                $('#sts_' + val).text('Publish');
                $('#sts_' + val).removeClass('unpub');
            } else if (res == '0') {
                $('#sts_' + val).text('UnPublish');
                $('#sts_' + val).addClass('unpub');
            }
        }
    });
}
function delete_doctor(val) {
    $.ajax({
        url: 'common/functions-admin.php?action=delete_doc',
        type: 'POST',
        data: 'data=' + val,
        success: function(res) {
            if (res == 'true') {
                $('#' + val).remove();
                var ele = $(this_ele).parents('section').siblings().find('#span');
                $('html, body').animate({scrollTop: 0}, 'slow');
                $(ele).addClass('alert alert-custom alert-success').text('Deleted Sucessfully');
            }
        }
    });
}
/*Start of Racchana functions*/

/*
 * Live Story Form Validation
 */

$('#file_browse').on('change', function()
{
    var fileCk = Checkfiles(this);
    if (!fileCk)
    {
        $(this).parents('.toselect').after('<span class="error-msg"> ' + 'Image' + ' is invalid.</span>');
    }
});

function validateform()
{
    for (instance in CKEDITOR.instances)
        CKEDITOR.instances[instance].updateElement();
    data = new Array("Title", "Image", "Desription");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();

    var tmp_id = $('.editid').val();
    var toCheck = 3;
    if (tmp_id > 0)
    {
        toCheck = 2;
    }

    $('form').find('.error-msg').remove();

    $('form.form-inline').find('.value').each(function(i, ele)
    {
        temp_val = $.trim($(this).val());
        if (tmp_id > 0 && i == 1)
        {
            if (temp_val == null)
            {
                temp_val = 0;
            }
        }
        if (temp_val == '' || temp_val == null)
        {
            if (i == 1)
            {
                console.log(this);
            }
            else
            {
                console.log(this);
                focus_arr[k++] = $(this);
                $(this).parents('.toselect').after('<span class="error-msg">' + data[i] + ' is required. </span>');
            }
        } else
            console.log('here too ');
        focus_arr[k++] = $(this);
        $(this).parents('.toselect').after('<span class="error-msg">' + data[i] + ' is required. </span>');

        // else if(tmp_id==0 && i==1)
        // {
        //     console.log('here');
        //     if (!Checkfiles(this)) 
        //     {
        //         focus_arr[k++] = $(this);
        //         $(this).parents('.toselect').after('<span class="error-msg"> ' + data[i] + ' is invalid.</span>');
        //     } 
        //     else 
        //     {
        //         $(this).after('<span class="error-msg"></span>');
        //         isValid++;
        //     }


        {
            isValid++;
        }

        console.log(isValid);
        console.log(toCheck);
        if (isValid >= toCheck)
        {
            return true;
        }
        else
        {
            $(focus_arr[0]).focus();
            return false;
        }

    });
}
/*
 * Important Announcement and Upcoming Events Form Validation
 */
function eventform()
{
    for (instance in CKEDITOR.instances)
        CKEDITOR.instances[instance].updateElement();
    data = new Array("Title", "Image", "Home-Content", "Desription");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();

    var tmp_id = $('.editid').val();
    console.log(tmp_id);
    var toCheck = 4;
    if (tmp_id > 0)
    {
        toCheck = 3;
    }

    $('form').find('.error-msg').remove();

    $('form.form-inline').find('.value').each(function(i, ele)
    {
        temp_val = $.trim($(this).val());
        if (tmp_id > 0 && i == 1)
        {
            if (temp_val == null)
            {
                tmp_val = 0;
            }
        }
        if (temp_val == '' || temp_val == null)
        {
            console.log(ele);
            focus_arr[k++] = $(this);
            $(this).parents('.toselect').after('<span class="error-msg">' + data[i] + ' is required. </span>');
        }
        else if (i == 1)
        {
            console.log('inside');

            if (!Checkfiles(this))
            {
                focus_arr[k++] = $(this);
                $(this).parents('.toselect').after('<span class="error-msg"> ' + data[i] + ' is invalid.</span>');
            }
            else
            {
                $(this).after('<span class="error-msg"></span>');
                isValid++;
            }
        }
        else
        {

            isValid++;
        }

        if (isValid == 4)
        {
            return true;
        }
        else
        {
            $(focus_arr[0]).focus();
            return false;
        }

    });
}

function CKcancel(form_name)
{
    document.forms[form_name].reset();
    $('#img').attr('src', 'img/brose-doc-img.png');
    for (instance in CKEDITOR.instances)
    {
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}

$('.publish_health').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=pub_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Published";
            $(this_ele).removeClass('unpub');
        }
        else
        {
            var stat_txt = "Unpublished";
            $(this_ele).addClass('unpub');
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);
    }

});

$('.delete_health').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=del_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
            $("#val_" + status_id).remove();
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Deleted Successfully";
        }
        else
        {
            var stat_txt = "Sorry Not Deleted";
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);
    }

});

/*
 * Updating The Status
 */
$('.pub_class_story').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?status=live_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            $(this_ele).text('Unpublish');
            $(this_ele).addClass('unpub');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Unpublished' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
        else
        {
            $(this_ele).text('Publish');
            $(this_ele).removeClass('unpub');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Published' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
    }
});
/*
 * Deleting The Data
 */
$('.del_class_story').on('click', function()
{
    var delete_id = (this.id);
    var ret;
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?delete=live_story',
        data: {value: delete_id},
        success: function(response)
        {
            //after_sucess(response);
            ret = response;
            $('html, body').animate({scrollTop: 0}, 'slow');
            $('#row_' + delete_id).remove();
            $("tr").each(function(index)
            {
                if (index != 0)
                {
                    $(this).find("td:first").html(index + ""); // set the index number in the first 'td' of the row
                }
            });
        },
        error: function()
        {
        },
        complete: function()
        {
            if (ret == 'true')
            {
                $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Deleted Sucessfully' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
            }
            else
            {
                $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Failed To Delete' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
            }
        }
    });
});

/*
 * Updating The Status
 */
$('.pub_class_events').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?status=event_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            $(this_ele).text('Unpublish');
            $(this_ele).addClass('unpub');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Unpublished' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
        else
        {
            $(this_ele).text('Publish');
            $(this_ele).removeClass('unpub');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Published' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
    }
});
/*
 * Deleting The Data
 */
$('.del_class_events').on('click', function()
{
    var delete_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?delete=upcome_event',
        data: {value: delete_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
            $('#row_' + delete_id).remove();
            $("tr").each(function(index)
            { // traverse through all the rows
                if (index != 0)
                { // if the row is not the heading one
                    $(this).find("td:first").html(index + ""); // set the index number in the first 'td' of the row
                }
            });
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Deleted Sucessfully' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
        else
        {
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Failed To Delete' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
    }
});

/*
 * Updating The Status
 */
$('.publish').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?status=announcement_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            $(this_ele).text('Unpublish');
            $(this_ele).addClass('unpub');
            $('#span').addClass('alert alert-custom alert-success').text('Unpublished');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Unpublished' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
        else
        {
            $(this_ele).text('Publish');
            $(this_ele).removeClass('unpub');
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Published' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
    }
});
/*
 * Deleting The Data
 */
$('.del_class').on('click', function()
{
    var delete_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?delete=announcement',
        data: {value: delete_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
            $('#row_' + delete_id).remove();
            $("tr").each(function(index)
            { // traverse through all the rows
                if (index != 0)
                { // if the row is not the heading one
                    $(this).find("td:first").html(index + ""); // set the index number in the first 'td' of the row
                }
            });
        },
        error: function()
        {
        }
    });

    function after_sucess(response)
    {
        if (response === "true")
        {
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Deleted Sucessfully' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
        else
        {
            $('#span').append('<span class="alert alert-custom alert-success "> ' + 'Failed To Delete' + '<span> <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span> </span>');
        }
    }
});


/*End of Racchana functions*/

/*Start of Saranya functions*/
function validate() {
    for (instance in CKEDITOR.instances)
        CKEDITOR.instances[instance].updateElement();
    data = new Array("Title", "Image", "Home Page Content", "Desription");
    var k = 0;
    var isValid = 0;
    focus_arr = new Array();

    var tmp_id = $('.editid').val();
    var toCheck = 4;

    if (tmp_id > 0) {
        toCheck = 3;
    }

    $('form').find('.error').remove();

    $('form.form-inline').find('.form-control').each(function(i, ele) {

        temp_val = $.trim($(this).val());

        if (tmp_id > 0 && i == 1) {
            if (temp_val == null) {
                tmp_val = 0;
            }
        }

        if (temp_val == '' || temp_val == null)
        {

            focus_arr[k++] = $(this);
            $(this).parents('.toselect').before('<span class="error">' + data[i] + ' is required. </span>');
            console.log(focus_arr);
        }
        else
        {
            isValid++;
        }
    });
    console.log(isValid);

    if (isValid >= toCheck)
    {
        return true;
    }
    else
    {
        $(focus_arr[0]).focus();
        return false;
    }

}

function CKupdate()
{
    $("#image").attr('src', '');
    for (instance in CKEDITOR.instances)
        CKEDITOR.instances[instance].updateElement();
    CKEDITOR.instances[instance].setData('');
    $('#exampleInputEmail2').focus();
}

function CKgetdata()
{
    for (instance in CKEDITOR.instances)
        CKEDITOR.instances[instance].updateElement();
    return(CKEDITOR.instances[instance].getData());
}

function spanClose(input)
{
    $(input).parents('span').children().remove();
}

function saveImage(image) {
    if (image.files && image.files[0])
    {
        var reader = new FileReader();
        reader.onload = function(e)
        {
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

$('.publish_social').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=social_status',
        data: {value: status_id},
        success: function(response)
        {

            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Published";
            $(this_ele).removeClass('unpub');
        }
        else
        {
            var stat_txt = "Unpublished";
            $(this_ele).addClass('unpub');
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);
    }

});

$('.delete_social').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=welfare_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
            $("#val_" + status_id).remove();
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Deleted Successfully";
        }
        else
        {
            var stat_txt = "Sorry Not Deleted";
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);
    }

});

$('.publish_conference').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=cme_status',
        data: {value: status_id},
        success: function(response)
        {

            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');

        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Published";
            $(this_ele).removeClass('unpub');
        }
        else
        {
            var stat_txt = "Unpublished";
            $(this_ele).addClass('unpub');
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);

    }

});

$('.delete_conference').on('click', function()
{
    var status_id = (this.id);
    var this_ele = $(this);
    $.ajax({
        type: "GET",
        async: true,
        url: 'common/functions-admin.php?action=conf_status',
        data: {value: status_id},
        success: function(response)
        {
            after_sucess(response);
            $('html, body').animate({scrollTop: 0}, 'slow');
            $("#val_" + status_id).remove();
        },
        error: function()
        {
        }
    });
    function after_sucess(response)
    {
        if (response === "true")
        {
            var stat_txt = "Deleted Successfully";
        }
        else
        {
            var stat_txt = "Sorry Not Deleted";
        }

        $(this_ele).text(stat_txt);

        $('.alert-here').before('<span class="alert alert-custom alert-success"> ' + stat_txt + ' <a class=\'alert-success close-alert\' onClick=\'spanClose(this);\'>×</a> </span>');

        setTimeout(function() {
            $('.container').find('.alert').fadeOut('slow').remove();
        }, 1500);

    }

});

/*End of Saranya functions*/