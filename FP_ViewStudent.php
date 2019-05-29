<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
include 'FP_header.php';
    require 'dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #page-wrapper 
            {
                /*--padding: 0 15px;--*/
                min-height: 568px;
       
                background-color: #fff;
            }
            
            .form-control
            {
                border: 1px solid #ccc !important; 
                width: 100%;
            }
        </style>
    </head>
    <body>
        <!--modal PopUp Start-->        
        <div class="modal fade" role="dialog" id="edit" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                </div> 
            </div>
        </div>
        
        <div class="modal fade" role="dialog" id="successful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
<!--                    <div class="modal-header">
                       <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                    </div>
-->                    <div class="modal-body">
                        <center><h2><b><p id="result_txt"> Successful </p></b></h2></center>
                    </div>                      
                </div> 
            </div>
        </div>
        
        <div class="modal fade" role="dialog" id="unsuccessful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
<!--                    <div class="modal-header">
                       <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                    </div>
-->                    <div class="modal-body">
                        <center><h2><b><p id="result_txt"> Unsuccessful </p></b></h2></center>
                    </div>                      
                </div> 
            </div>
        </div>
         <!--modal PopUp End-->

    
            <!-- Main content -->
            <div id="page-wrapper">
<div class="graphs">
    <div class="xs">
        <section class="content">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Student Detail</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Standard :</label>
                    <select id="std" name="std" class="form-control" onclick="showTbl()">
                        <option disabled="true" selected>No Standard selected</option>
                      <option >5th Std</option>
                      <option >6th Std</option>                          
                      <option >7th Std</option>
                      <option >8th Std</option>
                      <option >9th Std</option>
                      <option >10th Std</option>
                      <option >11th(Commerce)</option>
                      <option >12th(Commerce)</option>
                      <option >11th(Science)</option>
                      <option >12th(Science)</option>
                    </select>
                   </div>
                    <div id="tabdiv" class="box-body" style="display : none">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Standard</th>
                        <th>Board</th>
                        
                      </tr>
                    </thead>          
                    <tbody id="tabRes">              
                    </tbody>
                  </table>
                        <!--<a onclick="genrtExl()" class="btn btn-success"> Download in Excel </a>-->
                    </div>
                </div><!-- /.box-body -->
              </div>

            </section><!-- /.Left col--> 
            </div>
    </div></div>

            <script>
                function showTbl()
                {
//                    alert("1");
                    var cors= document.getElementById("std").value;
                    var xmlhttp;
                    if(window.XMLHttpRequest)
                    {
                        xmlhttp= new XMLHttpRequest();
                    }

                    else
                    {
                        xmlhttp= new ActiveXObject("Microsoft.XMLHttp");
                    }

                    xmlhttp.open("POST","select1.php?stu",true);
                    xmlhttp.onreadystatechange=function()
                    {
                        if(xmlhttp.readyState==4 && xmlhttp.status==200)
                        {   
    //                        alert(xmlhttp.responseText);
                            document.getElementById("tabRes").innerHTML=xmlhttp.responseText;        
                            document.getElementById("tabdiv").style="display : true";
                        }
                    }

                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send("std="+cors);                    
                }
                
                function genrtExl()
                {
                    var cors= document.getElementById("semester").value;
                    location.href="abc.php?cors="+cors;
                }
            </script>
  </body>
</html>
        