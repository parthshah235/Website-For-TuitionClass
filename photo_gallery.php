<?php
include './navbar.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .img-bordered
            {
                border: 3px solid rgb(218, 218, 218); 
                width: 150px;
            }                
        </style>
    </head>
    <body>
        <hr style="width: 100%; color: black; height: 1px; background-color:black;   " >
        <?php
        $result = mysqli_query($con,"SELECT * FROM portfolio where std ='10th Std' ");
        ?>
        
            <h1 style="text-align:center;"><b><font face="OpenSans">Toppers of 10th Standard</font></b></h1>
           
            <div class="row" style="text-align:center;">
                <hr style="width: 50%; color: black; height: 1px; align:center; background-color:gold; border-style: dashed;" >
                     <?php
                        while($row = mysqli_fetch_array($result))
            {
                            echo "<div class='col-md-2 col-sm-4 col-xs-6'>
                    <img src='./uploads/student/".$row['photo']."' class='img-circle width='304' height='236'/> 
                        <h4>".$row['name']."</h4>
                    <div>".$row['std']." : ".$row['percentage']."</div></div>";

 } ?>
            </div>
            
            <?php
        $result = mysqli_query($con,"SELECT * FROM portfolio where std ='12th(Science)' ");
        ?>
        <center>
            <h1><b><font face="OpenSans">Toppers of 12th(Science) Standard</font></b></h1>
            <div class="row">
                <hr style="width: 50%; color: black; height: 1px; align:center; background-color:gold; border-style: dashed;" >
                     <?php
                        while($row = mysqli_fetch_array($result))
            {
                            echo "<div class='col-md-2 col-sm-4 col-xs-6'>
                    <img src='./uploads/student/".$row['photo']."' class='img-circle width='304' height='236' /> 
                        <h4>".$row['name']."</h4>
                    <div>".$row['std']." : ".$row['percentage']."</div></div>";

 } ?>
            </div>
     <?php
        $result = mysqli_query($con,"SELECT * FROM portfolio where std ='12th(Commerce)' ");
        ?>
        <center>
            <h1><b><font face="OpenSans">Toppers of 12th(Commerce) Standard</font></b></h1>
            <div class="row">
                <hr style="width: 50%; color: black; height: 1px; align:center; background-color:gold; border-style: dashed;" >
                     <?php
                        while($row = mysqli_fetch_array($result))
            {
                            echo "<div class='col-md-2 col-sm-4 col-xs-6'>
                    <img src='./uploads/student/".$row['photo']."' class='img-circle width='304' height='236' ' /> 
                        <h4>".$row['name']."</h4>
                    <div>".$row['std']." : ".$row['percentage']."</div></div>";

 } ?>
            </div>
    </body>
</html>
