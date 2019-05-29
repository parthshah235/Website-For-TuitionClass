<?php

// put your code here
//    $con=  mysqli_connect("mysql.hostinger.in", "u141059847_sarth", "sarthiacademy", "u141059847_sarth");
// $con= mysqli_connect("localhost", "root", "", "sarathi");
$con = mysqli_connect("localhost", "root", "", "tuition_classes");
if (!$con) {
    die("DB is not Connected :" . mysqli_connect_error());
    return;
}
//    $_SESSION["con"]=$con;
//session_start();
//$u_id = $_SESSION['u_id'];
//$result = mysqli_query($con, "SELECT * FROM faculty_details where u_id='$u_id'");
//$row = mysqli_fetch_array($result);
//$f_id = $row['f_id'];
?>
