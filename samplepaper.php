<!DOCTYPE html>
<?php
// put your code here
include 'FP_header.php';
require 'dbCon.php';
//$fac=$_SESSION["fac"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #option
            {
                width: 45%;
            }

            .form-control
            {
                border: 1px solid #ccc !important; 
                width: 100%;
            }
        </style>

        <script>
<?php
if ($_GET['added'] == "true") {
    ?>
                $(window).load(function () {
                    $('#successful').modal('show');
                });

                setTimeout(function () {
                    $('#successful').modal('hide')
                }, 2000)
    <?php
} elseif ($_GET['added'] == "false") {
    ?>
                $(window).load(function () {
                    $('#unsuccessful').modal('show');
                });

                setTimeout(function () {
                    $('#unsuccessful').modal('hide')
                }, 2000)
    <?php
}
?>
        </script>
    </head>
    <body>
        <!--modal PopUp Start-->        
        <div class="modal fade" role="dialog" id="adSubModal" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <!--                    <div class="modal-header">
                                           <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                                        </div>
                                        <div class="modal-body">
                                            <h4><b> <p id="result_txt"/> </b></h4>
                                        </div>                      -->
                </div> 
            </div>
        </div>

        <div class="modal fade" role="dialog" id="adUntModal" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <!--                    <div class="modal-header">
                                           <abbr><h3 class="modal-title text-center">  </h3></abbr>
                                        </div>-->
                    <!--                    <div class="modal-body">
                                            <center><h2><b><p id="result_txt"> Chapter Added </p></b></h2></center>
                                        </div>                      -->
                </div> 
            </div>
        </div>

        <div class="modal fade" role="dialog" id="adChModal" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <!--                    <div class="modal-header">
                                           <abbr><h3 class="modal-title text-center">  </h3></abbr>
                                        </div>-->
                    <!--                    <div class="modal-body">
                                            <center><h2><b><p id="result_txt"> Chapter Added </p></b></h2></center>
                                        </div>                      -->
                </div> 
            </div>
        </div>

        <div class="modal fade" role="dialog" id="successful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <!--                    <div class="modal-header">
                                           <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                                        </div>
                    -->                    <div class="modal-body bg-green1">
                        <center><h2><b><p id="result_txt" style="font-size: 25px; color: white"> Successful </p></b></h2></center>
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
                    -->                    <div class="modal-body btn-danger">
                        <center><h2><b><p id="result_txt" style="font-size: 25px; color: white"> Unsuccessful </p></b></h2></center>
                    </div>                      
                </div> 
            </div>
        </div>
        <!--modal PopUp End-->

        <?php
//if(isset($_GET["ca"]))
//{
        ?>
       
        

        <div id="page-wrapper">
            <!-- inner containt shows here -->
                <!--<center><h2>Hello Faculty</h2></center>-->
            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Upload Question Paper</h3>
                    <div class="well1 white">
                        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" enctype="multipart/form-data" action='logic.php?pg=lol' method="POST">
                            <fieldset>

                                <div class="form-group">
                                    <label>Standard :</label>
                                    <select id="std" name="std"  class='form-control' required>
                                        <option value="" selected disabled>Select Standard</option>
                                        <option>5th Std</option>
                                        <option>6th Std</option>
                                        <option>7th Std</option>
                                        <option>8th Std</option>
                                        <option>9th Std</option>
                                        <option>10th Std</option>
                                        <option>11th(Science) </option>
                                        <option>12th(Science)</option>
                                        <option>11th(Commerce)</option>
                                        <option>12th(Commerce)</option>        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Subject :</label>
                                    <?php
                                    $result = mysqli_query($con, "SELECT * FROM subjects ");
                                    echo "<select name='sub' class='form-control' required>";
                                    echo '<option>No subject selected !</option>';
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option>" . $row['sub_name'] . "</option>";
                                    }
                                    echo '</select>';
                                    ?>                               
                                </div>

                               <div class="form-group">
                                    <input type="file" name="material" id="material">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--</body>-->
        <?php

        ?>
    </body>
   
</html>
