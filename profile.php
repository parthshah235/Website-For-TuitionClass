<?php
error_reporting(E_ERROR | E_PARSE);

session_start();
$uid = $_SESSION['u_id'];
if(!isset($_SESSION['u_id']))
{
            header("Location: http://localhost/TuitionClass/404.php");
}
else 
    { 
//echo $uid;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        //echo $uid;
        include './navbar.php';
        include './dbCon.php';
        $prof = mysqli_query($con, "SELECT * FROM students_details where u_id='$uid'");
        $row = mysqli_fetch_array($prof);
        $rollno = $row['s_rollno'];
        $fname = $row['s_firstname'];
        $lname = $row['s_lastname'];
        $bday = $row['s_bday'];
        $std = $row['s_std'];
        $school = $row['s_school'];
        $board = $row['s_board'];
        $mobile = $row['s_mobile'];
        //echo $rollno;
        
        ?>
        <div class="container">
            <h1 align="center">My Profile</h1>
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-11" style="margin: auto; float: none">
                    <!--<h3 class="section-title">Profile</h3>-->

                    <form class="form-light mt-20" role="form" method="POST">
                        <div class="form-group">
                            <label>RollNo</label>
                            <input type="text"  value="<?php echo $rollno; ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text"  value="<?php echo $fname." ".$lname; ?>" class="form-control" disabled>
                        </div>
<!--                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text"  value="<?php //echo $lname; ?>" class="form-control" disabled>
                        </div>-->
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel"  value="<?php echo $mobile; ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>B'day</label>
                            <input type="email"  value="<?php echo $bday; ?>" class="form-control"   disabled >
                        </div>
                        <div class="form-group">
                            <label>STD</label>
                            <input type="email"  value="<?php echo $std; ?>" class="form-control"  disabled >
                        </div>
                        <div class="form-group">
                            <label>School</label>
                            <input type="email"  value="<?php echo $school; ?>" class="form-control" disabled >
                        </div>
                        <div class="form-group">
                            <label>BOARD</label>
                            <input type="email"  value="<?php echo $board; ?>" class="form-control" disabled>
                        </div>
                    </form>
                </div>        <!--</div>-->
            </div>
        </div>
    </body>
</html>
 <?php
    }?>