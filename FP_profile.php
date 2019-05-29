<?php
// put your code here
session_start();
error_reporting(E_ERROR | E_PARSE);
include 'dbCon.php';
include 'FP_header.php';
//    $fac=$_SESSION["fac"];   

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>        
    </head>
    <body>
        <!--modal PopUp Start-->                                
        <div class="modal fade" role="dialog" id="successful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body bg-green1">
                        <center><h4><b><p id="result_txt" style="font-size: 25px; color: white"> Successful </p></b></h4></center>
                    </div>                      
                </div> 
            </div>
        </div>

        <div class="modal fade" role="dialog" id="unsuccessful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body btn-danger">
                        <center><h4><b><p id="result_txt" style="font-size: 25px; color: white"> Unsuccessful </p></b></h4></center>
                    </div>                      
                </div> 
            </div>
        </div>
        <!--modal PopUp End-->

        <div id="page-wrapper">
            <!-- inner containt shows here -->
                <!--<center><h2>Hello Faculty</h2></center>-->
            <div class="col-md-12 graphs">
                <?php
                
                $result = mysqli_query($con, "SELECT * FROM `faculty_details` where u_id='$u_id'");
                if(!mysqli_query($con,$result))
                {
                    //echo 'error';
                }
                $row = mysqli_fetch_array($result);
                //echo $u_id;
                $fnm = $row['f_name'];
                //echo $fnm;
                //$fml=$row['f_email'];
                $fph = $row['f_mobile'];
                $fad = $row['f_address'];
                $fqu = $row['f_qualification'];
                $fex = $row['f_experience'];
                $fphoto = $row['f_photo'];
                
                
                         
                ?>
                <div class="xs">
                    <h3>Profile</h3>
                    <div class="well1 white">
                        <form class="form-floating" action="logic.php?pg=updtprofile" enctype="multipart/form-data" method="POST">
                            <center><input type="button" class="btn btn-primary" id="edit" value="Edit" onclick="edt()" /> (Request Profile Update)<input type="hidden" class="btn btn-primary" id="disable" value="Disable" onclick="disabl()" /></center>
                            <fieldset>                
                                <div class="form-group">                                    
                                    <img src="./uploads/<?php echo $fphoto; ?>" class="img-rounded" style="max-width: 20%" alt="profileimage">
                                    <br/><br/><input type="file" name="facProPic" id="facProPic" disabled>
                                </div>      
                                <div class="form-group">
                                    <label class="control-label">Name:</label>
                                    <input type="text" name="fnm" id="fnm" value="<?php echo $fnm; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" disabled required="">
                                </div>      
                                <div class="form-group">
                                    <label class="control-label">Ph. Number</label>
                                    <input type="text" name="fph" id="fph" value="<?php echo $fph; ?>" pattern="[0-9]{10}" maxlength="10" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" disabled required="">
                                    <p class="help-block hint-block">Numeric values from 0-***</p>
                                </div>  
                                <div class="form-group">
                                    <label class="control-label hidden">Email</label>
                                    <input type="email" disable hidden name="fml" id="fml" value="<?php //echo $email ; ?>" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" disabled required="">
                                </div>
                                <!--                <div class="form-group">
                                                  <label class="control-label">Password</label>
                                                  <input type="password" name="fpw" id="fpw" value="<?php // echo $fpw ; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.password" placeholder="eg. X8df!90EO" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,20}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" disabled required="">
                                                </div>-->
                                <div class="form-group">
                                    <label class="control-label">Address :</label>
                                    <textarea type="text" name="fad" id="fad" class="form-control-feedback ng-invalid ng-invalid-required ng-touched" ng-model="model.name" ng-model="model.name" style="height: 100px; width: 350px" disabled required=""><?php echo $fad; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Qualification :</label>
                                    <input type="text" name="fqu" id="fqu" value="<?php echo $fqu; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" disabled required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Experience :</label>
                                    <input type="text" name="fex" id="fex" value="<?php echo $fex; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" disabled required="">
                                </div>  
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-primary" disabled>Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function edt()
            {
                document.getElementById("facProPic").disabled = false;
                document.getElementById("fnm").disabled = false;
                document.getElementById("fph").disabled = false;
//                document.getElementById("fml").disabled= false;
//                document.getElementById("fpw").disabled= false;
                document.getElementById("fad").disabled = false;
                document.getElementById("fqu").disabled = false;
                document.getElementById("fex").disabled = false;
                document.getElementById("submit").disabled = false;
                document.getElementById("edit").type = "hidden";
                document.getElementById("disable").type = "button";
            }

            function disabl()
            {
                document.getElementById("facProPic").disabled = true;
                document.getElementById("fnm").disabled = true;
                document.getElementById("fph").disabled = true;
//                document.getElementById("fml").disabled= true;
//                document.getElementById("fpw").disabled= true;
                document.getElementById("fad").disabled = true;
                document.getElementById("fqu").disabled = true;
                document.getElementById("fex").disabled = true;
                document.getElementById("submit").disabled = true;
                document.getElementById("disable").type = "hidden";
                document.getElementById("edit").type = "button";
            }
        </script>
        <script>
<?php
if ($_GET['added'] == "true") {
    ?>
                $(window).load(function () {
                    $('#successful').modal('show');
                });

                setTimeout(function () {
                    $('#successful').modal('hide')
                }, 1200)
    <?php
} elseif ($_GET['added'] == "false") {
    ?>
                $(window).load(function () {
                    $('#unsuccessful').modal('show');
                });

                setTimeout(function () {
                    $('#unsuccessful').modal('hide')
                }, 1200)
    <?php
}
?>
        </script>
    </body>
</html>
