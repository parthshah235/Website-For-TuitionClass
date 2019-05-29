function changeorderstatus (str,str1)
{
    var a=str1;
    var b=str;
    var xmlhttp;
    if(window.XMLHttpRequest)
    {
        xmlhttp= new XMLHttpRequest();
    }
    else
    {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            if(xmlhttp.responseText=="0")
            {
                Materialize.toast("Order Has Been Cancelled Cannot Change Status",1000);
            }
            else
            {
            Materialize.toast(xmlhttp.responseText,4000);
            window.location="vieworder.php";
            }
        }

    };
               xmlhttp.open("POST","../logic.php?page=changeorderstatus",true);
               xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
               xmlhttp.send("status="+a+"&or_id="+b);
             
}