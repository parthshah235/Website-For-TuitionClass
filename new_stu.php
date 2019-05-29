<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
include 'admin_header.php';
include './dbCon.php';
?>
<html>    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPanel | Dashboard</title>
        <link rel="stylesheet" href="css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
    </head>
    <body>   
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <!--<i class="fa fa-envelope"></i>-->
                        <h3 align="center"><i class="fa fa-envelope"></i> Add New Student</h3> 
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!--<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
                        </div><!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="logic.php?pg=newstu" method="post">
                        <!--<form action="newEmptyPHPWebPage.php" method="post">-->
                            <h4>Student Details</h4>
                            <div class="form-group">
                                <input type="text" class="form-control" name="rollno" placeholder="Roll No." oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" oninput="chk(this)" >
                            </div>
                            
                            <div class="form-group">
                                <input type="date" class="form-control" name="bday" placeholder="Birth Date" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                     <div class='row'>
                                    <div>
                                        <select name="std">
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
                                        <!--<label>Select Standard <span class="red-text">*</span></label>-->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="school" placeholder="School Name" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                     <div class='row'>
                                    <div>
                                        <select name="brd">
                                            <option value="" selected disabled>Select Board</option>
                                            <option>GSEB</option>
                                            <option>CBSE</option>
                                            <option>ICSE</option>
                                        </select>
                                        <!--<label>Select Standard <span class="red-text">*</span></label>-->
                                    </div>
                                </div>
                            </div>

                            <div >
                                <div class='row'>
                                    <div>
                                        <?php
                                    $result = mysqli_query($con, "SELECT * FROM subjects ");
                                    echo '<select name="subject[]" multiple>';
                                    echo '<option selected disabled>No subject selected !</option>';
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value=" . $row['sub_id'] . ">" . $row['sub_name'] . "</option>";
                                    }
                                    echo '</select>';
                                    ?> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="mob" placeholder="Mobile No." oninput="chk(this)" >
                            </div>

                            <h4>Parents Details</h4>

                            <div class="form-group">
                                <input type="text" class="form-control" name="pname" placeholder="Name" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="p_mob" placeholder="Mobile No." oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="p_line" placeholder="Landline No." oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="add" placeholder="Address" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="occ" placeholder="Occupation" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" oninput="chk(this)" >
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="stupwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" >
                            </div>
                            <div>

                            </div>

                            <div class="box-footer clearfix">
                                <div id="result" class="callout callout-danger pull-left" style="display: none; width: 257px"></div> <button type="submit" class="pull-right btn btn-default" id="submit">Submit <i class="fa fa-arrow-circle-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

            </section><!-- /.Left col -->

            <script>
                
            </script>
    </body>
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
</html>
