function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#prd_img')
                    .attr('src', e.target.result);
            console.log(input.files[0]);
            //alert(appendChild(e.target.result));
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function del_prd(obj)
{
    var id = $("#prd_id_hide").val();
    var act = obj.text;//alert(act);
    if (act == "YES")
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "logic.php?page=del_prd", true);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var response = (xmlhttp.responseText).trim();//alert(response);
                if (response == "0")
                {
                    Materialize.toast("Error While Deleting Product !!", 1000);
                    //window.location.href = "./update_product.php";
                    parent.$('#div').html("<object data='./update_product.php' style='width: 100%;height: 100%;' />");
                } else if (response == "1")
                {
                    Materialize.toast("Product Successfully Deleted !!", 1000);
                    //window.location.href = "./update_product.php";
                    parent.$('#div').html("<object data='./update_product.php' style='width: 100%;height: 100%;' />");
                } else if (response != "0" || response != "1")
                {
                    Materialize.toast("Error!!", 1000);
                }
            }
        }
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + id);
    } else if (act == "No")
    {

    }
}

function del_cat(obj)
{
    var id = $("#cat_id_hide").val();//alert(id);
    var act = obj.text;//alert(act);
    if (act == "YES")
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "logic.php?page=del_cat", true);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var response = (xmlhttp.responseText).trim();//alert(response);
                if (response == "0")
                {
                    Materialize.toast("Error While Deleting Category !!", 1000);
                    //window.location.href = "./update_product.php";
                    parent.$('#div').html("<object data='./update_category.php' style='width: 100%;height: 100%;' />");
                } else if (response == "1")
                {
                    Materialize.toast("Category Successfully Deleted !!", 1000);
                    //window.location.href = "./update_product.php";
                    parent.$('#div').html("<object data='./update_category.php' style='width: 100%;height: 100%;' />");
                } else
                    (response != "0" || response != "1")
                {
//                    Materialize.toast("Error!!", 1000);
                }
            }
        }
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id=" + id);
    } else if (act == "No")
    {

    }
}

var cat_arr = [];

$(document).ready(function () {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "logic.php?page=get_cat", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var response = xmlhttp.responseText;//alert(response);
            cat_arr = JSON.parse(response);
        }
    }
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
});

var curr_prd = [];

function set_id()
{
    var id = $('#prd_id_hide').val();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "logic.php?page=get_prd_dtl", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var response = xmlhttp.responseText;//alert(response);
            var myArr = JSON.parse(response);
            curr_prd = JSON.parse(response);
            var jsonResponse = "";
            for (var i = 0; i <= myArr.length - 1; i++)
            {
                jsonResponse += "<div class='col s12 m12 l6'>\
                        <div class='input-field col s12'>\
                            <input id='prd_name' name='prd_name' type='text' class='validate' value='" + myArr[i].prd_name + "'>\
                            <label for='prd_name' class='active'>Product Name</label>\
                        </div>\
                        <div class='input-field col s12 cat_disp'>\
                        </div>\
                        <div class='input-field col s12'>\
                            <input id='prd_desc' name='prd_desc' type='text' class='validate' value='" + myArr[i].prd_about + "'>\
                            <label for='prd_desc' class='active'>Product Description</label>\
                        </div>\
                        <div class='input-field col s12'>\
                            <input id='prd_mrp' name='prd_mrp' type='number' class='validate' value='" + myArr[i].prd_mrp + "'>\
                            <label for='prd_mrp' class='active'>Product Mrp</label>\
                        </div>\
                        <div class='input-field col s12'>\
                            <input id='prd_qty' name='prd_qty' type='text' class='validate' value='" + myArr[i].prd_quantity + "'>\
                            <label for='prd_qty' class='active'>Product Quantity</label>\
                        </div>\
                    </div>\
                    <div class='col s12 m12 l6 center'>\
                         <form enctype='multipart/form-data' method='POST' id='img_new_src' action=''>\
                         <div class='row center container'>\
                                <img name='prd_img' id='prd_img' data-caption='" + myArr[i].prd_name + "' class='materialboxed responsive-img' src='" + myArr[i].prd_image + "' />\
                         </div>\
                         <div class='row file-field'>\
                            <input type='file' id='new_src' class='waves-effect waves-light btn' onchange='readURL(this),set_url(this)'>Change Image</input>\
                         </div>\n\
                         </form>\
                    </div>";
            }
        }
        $(".upd_prd").html(jsonResponse);
        $('select').material_select();
        window.parent.$('.materialboxed').materialbox();
        set_cat();
    }
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + id);
}
var data = "";
function set_url(obj)
{
    var val = obj.value;
    //alert(val);
    var n = val.lastIndexOf("\\");
    data = val.substring(n + 1);
    //alert(data);
}

function change_prd_img()
{
    var name = $("#prd_name").val();
    var src = curr_prd[0].prd_image;
    var file_data = $('#new_src').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);//alert(form_data);
    $.ajax({
        url: 'logic.php?page=upd_prd_img&name=' + name + '&src=' + src + "&pic=" + data, // point to server-side PHP script 
        dataType: 'text', // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (php_script_response) {
            //alert(php_script_response); // display response from the PHP script, if any
            if (php_script_response == "1")
            {
                Materialize.toast("Product Image Updated !!", 1000);
            }
        }
    });
}

function set_id2()
{
    var id = $('#cat_id_hide').val();
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "logic.php?page=get_cat_dtl", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var response = xmlhttp.responseText;//alert(response);
            var myArr = JSON.parse(response);
            var jsonResponse = "";
            for (var i = 0; i <= myArr.length - 1; i++)
            {
                jsonResponse += "<div class='input-field col s12 m12 l12 center'>\
                                    <input id='cat_name' name='cat_name' type='text' onkeyup=\"var a = this.value;if (isNaN(a.substr(-1))){}else{this.value = a.slice(0,-1); Materialize.toast('Characters Only Acceptable !!',2000);}\" class='validate' onblur=\"var a = this.value;if (isNaN(a.substr(-1))){}else{this.value = a.slice(0,-1); Materialize.toast('Characters Only Acceptable !!',2000);}\" value='" + myArr[i].cat_name + "'>\
                                    <label for='cat_name' class='active'>Category Name</label>\
                                </div>";
            }
        }
        $(".upd_cat").html(jsonResponse);
        $('select').material_select();
        window.parent.$('.materialboxed').materialbox();
    }
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + id);
}

function set_cat()
{
    var jsonResponse = "<select id='prd_cat' name='prd_cat'>\
      <option value='' disabled>Choose Category</option>";
    for (var j = 0; j <= cat_arr.length - 1; j++) {
        if (curr_prd[0].cat_id == cat_arr[j].cat_id) {
            jsonResponse += "<option value='" + cat_arr[j].cat_name + "' selected>" + cat_arr[j].cat_name + "</option>";
        } else {
            jsonResponse += "<option value='" + cat_arr[j].cat_name + "'>" + cat_arr[j].cat_name + "</option>";
        }
    }
    jsonResponse += "</select>\
    <label>Select Category</label>";
    $(".cat_disp").html(jsonResponse);
    $('select').material_select();
}

function upd_prd()
{
    var id = $('#prd_id_hide').val();
    var name = $("#prd_name").val();//alert(name);
    var cat = $("#prd_cat").val();//alert(cat);
    var desc = $("#prd_desc").val();//alert(desc);
    var mrp = $("#prd_mrp").val();//alert(mrp);
    var qty = $("#prd_qty").val();//alert(qty);
    var img = $("#prd_img").attr("src");//alert(img);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "logic.php?page=upd_prd", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var response = xmlhttp.responseText;//alert(response);
            if (response == "0")
            {
                Materialize.toast("Error While Updating Product Details !!", 1000);
            } else if (response == "1")
            {
                parent.$('#div').html("<object data='./update_product.php' style='width: 100%;height: 100%;' />");
                Materialize.toast("Product Details Succesfully Updated !!", 1000);
            } else {
                Materialize.toast("Product Image Updated !!", 1000);
                parent.$('#div').html("<object data='./update_product.php' style='width: 100%;height: 100%;' />");
            }
        }
        //change_prd_img();
    }
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + id + "&name=" + name + "&cat=" + cat + "&desc=" + encodeURIComponent(desc) + "&mrp=" + mrp + "&qty=" + qty + "&img=" + encodeURIComponent(img));
}

function upd_cat()
{
    var id = $('#cat_id_hide').val();
    var name = $("#cat_name").val();//alert(name);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "logic.php?page=upd_cat", true);
    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            var response = xmlhttp.responseText;//alert(response);
            if (response == "0")
            {
                Materialize.toast("Error While Updating Category !!", 1000);
            } else if (response == "1")
            {
                $("#cat_name").removeClass("invalid");
                $("#upd_cat").closeModal();
                parent.$('#div').html("<object data='./update_category.php' style='width: 100%;height: 100%;' />");
                parent.Materialize.toast("Category Succesfully Updated !!", 1000);
            } else if (response == "3")
            {
                $("#cat_name").addClass("invalid");
                $("#cat_name").focus();
                parent.Materialize.toast("Category With " + name + " Already There !!", 1000);
            }
        }
    }
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("id=" + id + "&name=" + encodeURIComponent(name));
}

function validate(obj)
{
    var id = obj.id;//alert(id);
    var val = obj.value;
    if (id == "name_cat" || obj == "add_cat_btn")
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "logic.php?page=valid_cat_name", true);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var response = xmlhttp.responseText;//alert(response);
                if (response == "1")
                {
                    parent.Materialize.toast(val + " Category Already There !!", 1000);
                    $("#name_cat").addClass("invalid");
                    $("#name_cat").focus();
                    $("#add_cat_btn").attr("disabled", true);
                } else if (response == "0")
                {
                    $("#name_cat").removeClass("invalid");
                    $("#add_cat_btn").attr("disabled", false);
                }
            }
        }
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("name=" + val);
    }
}

function add_cat()
{
    var cat = $("#name_cat").val();
    if (cat == "" || null)
    {
        parent.Materialize.toast("Null Or Blank Field Not Acceptable !!", 1000);
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "logic.php?page=add_cat&cat=" + cat, true);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var response = xmlhttp.responseText;//alert(response);
                if (response == "0")
                {
                    parent.Materialize.toast("Error While Adding Category !!", 1000);
                    parent.$('#div').html("<object data='./add_category.php' style='width: 100%;height: 100%;' />");
                } else if (response == "1")
                {
                    parent.Materialize.toast("Category Added!!", 1000);
                    parent.$('#div').html("<object data='./add_category.php' style='width: 100%;height: 100%;' />");
                }
            }
        }
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send();
    }
}