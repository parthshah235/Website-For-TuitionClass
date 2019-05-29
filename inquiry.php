<?php 
include 'navbar.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <hr style="width: 100%; color: black; height: 1px; background-color:gold;">
        <h1><b><center><font face="OpenSans">Inquiry Form</font></center></b></h1>
        <hr style="width: 100%; color: black; height: 1px; background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-11" style="margin: auto; float: none">
                    <!--<h3 class="section-title">Profile</h3>-->

                    <form class="form-light mt-20" action="logic.php?pg=inq" role="form" method="POST">
                        <div class="form-group">
                            <label ><font face="OpenSans" color="black" size="4%">Name</font></label>
                            <input type="text" name="nm" value="" class="form-control" required >
                         </div>
                        
                        <div class="form-group">
                            <label ><font face="OpenSans" color="black" size="4%">Email id</font></label>
                            <input type="email" name="em" value="" class="form-control" required>
                         </div>
                        
                        <div class="form-group">
                            <label><font face="OpenSans" color="black" size="4%">Inquiry for?(personal or group tuitions)</font></label>
                            <input type="text" name="sub" value="" class="form-control" required>
                         </div>
                        
                        <div class="form-group">
                            <label><font face="OpenSans" color="black" size="4%">Inquiry description?</font></label>
                            <input type="text" name="des" value="" class="form-control" required>
                         </div>
                        
                        <div class="form-group">
                            <label><font face="OpenSans" color="black" size="4%">Mobile No.</font></label>
                            <input type="text" name="mob" value="" class="form-control" required>
                         </div>
                        
                        <div class="box-footer clearfix">
                                <div id="result" class="callout callout-danger pull-left" style="display: none; width: 257px; size: 4%; "></div> <button type="submit" class="pull-right btn btn-default" id="submit">Submit <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
                        
        <?php
        // put your code here
        ?>
    </body>
</html>
