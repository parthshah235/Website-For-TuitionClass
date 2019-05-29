<?php

require 'dbCon.php';
//error_reporting(E_ERROR | E_PARSE);
//include 'FP_header.php';
//$con = $_SESSION["con"];
if (isset($_GET["pg"])) {
    if ($_GET['pg'] == 'login') {
        session_start();
        $un = $_POST['uname'];
        $pa = $_POST['pwd'];

        //$_SESSION['usernm']=$un;

        $sql = "SELECT * FROM user_details where u_email= '$un'  ";
        $res = mysqli_query($con, $sql);
        $res = mysqli_fetch_array($res);
        $uid=$res['u_id'];
        $_SESSION['u_id'] = $res['u_id'];
        //$row = mysqli_fetch_array($sql);
        if($res['u_email']==$un && $res['u_password']==$pa && $res['u_type']=='faculty')
        {
            echo $rTxt = $res['u_type'];
            $_SESSION['u_id'] = $res['u_id'];
        }
        else if($res['u_email']==$un && $res['u_password']==$pa && $res['u_type']=='student')
        {
            $uid= $_SESSION['u_id'];
            $sq="SELECT * FROM students_details where u_id='$uid'";
            $re = mysqli_query($con, $sq);
            $row = mysqli_fetch_array($re);
            //session_start();
            $_SESSION['s_firstname']=$row['s_firstname'];
            //echo $_SESSION['s_firstname'];
            echo $rTxt = $res['u_type'];
        }
       else if($res['u_email']==$un && $res['u_password']==$pa )
        {
            echo $rTxt = $res['u_type'];
            $_SESSION['u_id'] = $res['u_id'];
        }
        //$_SESSION['u_id'] = $res['u_id'];
//            {
//                session_start();
//                header("Location: http://localhost/TuitionClass/admin_header.php");
//            }
    } else if ($_GET['pg'] == 'logout') {
        session_start();
        session_unset();
        session_destroy();
        header("Location: http://localhost/TuitionClass/index.php");
    } else if ($_GET['pg'] == 'updtprofile') {
        session_start();
        //$fac = $_SESSION["fac"];
        //$lid = $_SESSION["lid"];
        //if ($fac == 1) {
//        $facProPic = $_POST['facProPic'];
        
        $uid=$_SESSION['u_id'];        
        echo $uid;
        $fnm = $_POST["fnm"];
        echo $fnm;
//        $fml=$_POST['fml'];
        $fph = $_POST["fph"];
        $fad = $_POST["fad"];
        $fqu = $_POST["fqu"];
        $fex = $_POST["fex"];
        $f_id = $_SESSION['f_id'];
        echo $f_id;
        
        $facProPic = rand(1000,100000)."-".$_FILES['facProPic']['name'];
        $facProPic_loc = $_FILES['facProPic']['tmp_name'];
	$facProPic_size = $_FILES['facProPic']['size'];
	$facProPic_type = $_FILES['facProPic']['type'];
	$folder="uploads/";
//	 echo $jsq, $jse,$jsa,$jsp,$jsm,$jsc. $jspt;
//	 new file size in KB
	$new_size = $facProPic_size/1024;
	// new file size in KB

	// make file name in lower case
	$new_file_name = strtolower($facProPic);
	// make file name in lower case

	echo $final_file=str_replace(' ','-',$new_file_name);

	if(move_uploaded_file($facProPic_loc,$folder.$final_file))
	{
            //$sql="UPDATE faculty_details SET f_photo='$final_file' where f_id='$f_id'";
            $sql="INSERT INTO faculty_details (`f_name`, `f_mobile`, `f_address`, `f_photo`, `f_qualification`, `f_experience`, `u_id`) values ('$fnm','$fph','$fad','$final_file','$fqu','$fex','$uid')";
            if (!mysqli_query($con,$sql))
            {
            die('Error: ' .mysqli_error($con));
//            header("location:FP_UploadReport.php?ca&added=false");
            }
            else
            {
              //echo "done";
//            header("location:FP_UploadReport.php?ca&added=true");
                header("location:FP_profile.php?added=true");
            }
        }
        
//        return;
        
//        $fpw=$_POST['fpw'];
//        $md5_fpw= md5($fpw);
//        $sql="UPDATE faculty_registration set f_name='$fnm',f_phone='$fph',f_email='$fml',f_address='$fad',f_qualification='$fqu',f_experience='$fex' where f_id='$fac'";
//        $sql = "UPDATE faculty_details set f_name='$fnm',f_mobile='$fph',f_address='$fad',f_qualification='$fqu',f_experience='$fex' where f_id='$f_id'";
//        if (!mysqli_query($con, $sql)) {
//            die('Error: ' . mysqli_error($con));
//            header("location:FP_profile.php?added=false");
//        } else if (mysqli_query($con, $sql)) {
////        $sq="UPDATE login set login_uname='$fml',login_pwd='$md5_fpw' where login_id='$lid'";
////
////            if (!mysqli_query($con,$sq))
////            {
////            die('Error: ' . mysqli_error($con));
////            header ("location:FP_profile.php?bcom&added=false");
////            }
////            else if (mysqli_query($con,$sq))
////            {
//            echo "out";
////            header("location:FP_profile.php?added=true");
////            }
//        }
        //}
    }

    if ($_GET['pg'] == 'newfac') {
        //include 'class.phpmailer.php';
        //include 'class.smtp.php';

        $fn = $_POST['facname'];
        $fp = $_POST['facpwd'];
        //$md5_fp=$_POST['fp'];
        //$sql="INSERT INTO faculty_registration (f_name,f_phone,f_email,f_address,f_qualification,f_experience,status) VALUES ('','','$fn','','','','valid')";
        $sq = "INSERT INTO user_details (u_email,u_password,u_type) VALUES ('$fn','$fp','faculty')";
        if (!mysqli_query($con, $sq)) {
            echo('Error: ' . mysqli_error($con));
            header("refresh:5; url=new_fac.php?added=false");
        } else {
            header("location:admin_index.php?added=true");
        }
    } else if ($_GET['pg'] == 'newstu') {

        $em = $_POST['email'];
        $sp = $_POST['stupwd'];
        $rn = $_POST['rollno'];
        $fnm = $_POST['fname'];
        $lnm = $_POST['lname'];
        $bd = $_POST['bday'];
        $std = $_POST['std'];
        $scl = $_POST['school'];
        $brd = $_POST['brd'];
        $subnm = $_POST['sub'];
//        $sub=  implode(',','$subnm');
        $mob = $_POST['mob'];
        $pnm = $_POST['pname'];
        $pmob = $_POST['p_mob'];
        $pline = $_POST['p_line'];
        $add = $_POST['add'];
        $occ = $_POST['occ'];
        $q1 = "INSERT INTO user_details (u_email,u_password,u_type) VALUES ('$em','$sp','student')";
        if (!mysqli_query($con, $q1)) 
                {
            echo('Error: ' . mysqli_error($con));
            header("refresh:5; url=new_fac.php?added=false");
        } 
        else 
            {
            $res= mysqli_query($con, "SELECT * FROM user_details WHERE u_email='$em'");
            $row= mysqli_fetch_array($res);
            $u_id= $row['u_id'];
            $q2 = "INSERT INTO students_details (s_rollno,s_firstname,s_lastname,s_bday,s_std,s_school,s_board,s_mobile,u_id) VALUES ('$rn','$fnm','$lnm','$bd','$std','$scl','$brd','$mob','$u_id')";
            if (!mysqli_query($con, $q2)) 
              {
                echo('Error: ' . mysqli_error($con));
                header("refresh:5; url=new_stu.php?added=false");
              } 
            else 
                {
                $res= mysqli_query($con, "SELECT * FROM user_details WHERE u_email='$em'");
                $row= mysqli_fetch_array($res);
                $u_id= $row['u_id'];
                $q3 = "INSERT INTO parents_details (p_name,p_mobile,p_landline,p_address,p_occupation,u_id) VALUES ('$pnm','$pmob','$pline','$add','$occ','$u_id')";
                if (!mysqli_query($con, $q3)) 
                        {
                    echo('Error: ' . mysqli_error($con));
                    header("refresh:5; url=new_stu.php?added=false");
                } 
                else 
                {
//                    header("location:admin_index.php?added=true");
                    $res= mysqli_query($con, "SELECT * FROM students_details WHERE u_id='$u_id'");
                    $row= mysqli_fetch_array($res);
                    $s_id= $row['s_id'];
                    
//                    return;
                        foreach ($_POST['subject'] as $subject) {
                            $q1 = "INSERT INTO student_sub_details VALUES ('$s_id', '$subject')";
                            if (!mysqli_query($con, $q1)) 
                            {
                                echo('Error: ' . mysqli_error($con));
            //                    header("refresh:5; url=new_fac.php?added=false");
                            } 

                            else{
//                                echo "done";
                            }  
//                            echo '<br>';
                        }
                }
                header("location:admin_index.php?added=true");                
            }
        }   
    }
    
    else if ($_GET['pg'] == 'uploadMaterial') {
        session_start();
        $topic = $_POST['topic'];
        $std=$_POST['std'];
//        $fml=$_POST['fml'];
        $type = $_POST['type'];
        
        $subject = $_POST['subject'];        
        $f_id = $_SESSION['f_id'];
        
        $material = rand(1000,100000)."-".$_FILES['material']['name'];
        $material_loc = $_FILES['material']['tmp_name'];
	$material_size = $_FILES['material']['size'];
	$material_type = $_FILES['material']['type'];
	$folder="uploads/material/";
//	 echo $jsq, $jse,$jsa,$jsp,$jsm,$jsc. $jspt;
//	 new file size in KB
	$new_size = $material_size/1024;
	// new file size in KB

	// make file name in lower case
	$material_newName = strtolower($material);
	// make file name in lower case

	echo $final_file=str_replace(' ','-',$material_newName);

	if(move_uploaded_file($material_loc,$folder.$final_file))
	{
            $sql="INSERT INTO download_material(`m_name`,`std`, `m_url`, `m_type`, `sub_id`) VALUES ('$topic','$std', '$final_file', '$type', '$subject')";
            
            if (!mysqli_query($con,$sql))
            {
            die('Error: ' .mysqli_error($con));
//            header("location:FP_UploadReport.php?ca&added=false");
            }
            else
            {
//                echo "done";
                header("location:notes.php?added=true");
            }
        }        
//        return;
            
        }
        //}
        else if ($_GET['pg'] == 'portfolio') {
        //session_start();
        //echo 'Welcome';
        $std = $_POST['std'];
        //echo $std;
//        $fml=$_POST['fml'];
        $brd = $_POST['brd'];
        //echo $brd;
        //$subject = $_POST['subject'];  
        $fname=$_POST['fname'];
        //echo $fname;
        $marks=$_POST['marks'];
        //$f_id = $_SESSION['f_id'];
        
        $material = rand(1000,100000)."-".$_FILES['portfolio']['name'];
        $material_loc = $_FILES['portfolio']['tmp_name'];
	$material_size = $_FILES['portfolio']['size'];
	$material_type = $_FILES['portfolio']['type'];
	$folder="uploads/student/";
//	 echo $jsq, $jse,$jsa,$jsp,$jsm,$jsc. $jspt;
//	 new file size in KB
	$new_size = $material_size/1024;
	// new file size in KB

	// make file name in lower case
	$material_newName = strtolower($material);
	// make file name in lower case

	echo $final_file=str_replace(' ','-',$material_newName);

	if(move_uploaded_file($material_loc,$folder.$final_file))
	{
            $sql="INSERT INTO portfolio(`std`, `board`, `name`, `percentage`,`photo`) VALUES ('$std','$brd','$fname','$marks','$final_file')";
            
            if (!mysqli_query($con,$sql))
            {
            die('Error: ' .mysqli_error($con));
//            header("location:FP_UploadReport.php?ca&added=false");
            }
            else
            {
//                echo "done";
                header("location:portfolio.php?added=true");
            }
        }        
//        return;
            
        }
        
        else if ($_GET['pg'] == 'lol') {
        session_start();
        $std = $_POST['std'];

        $sub = $_POST['sub'];      
        $f_id = $_SESSION['f_id'];
        
        $sql1=mysqli_query($con,"Select * from subjects where sub_name='$sub'");
        $row = mysqli_fetch_array($sql1);
               //echo $sql1;
                 $sub_id=$row['sub_id'];
                 //echo $sub_id;
               
        
        $material = rand(1000,100000)."-".$_FILES['material']['name'];
        $material_loc = $_FILES['material']['tmp_name'];
	$material_size = $_FILES['material']['size'];
	$material_type = $_FILES['material']['type'];
	$folder="uploads/material/";
//	 echo $jsq, $jse,$jsa,$jsp,$jsm,$jsc. $jspt;
//	 new file size in KB
	$new_size = $material_size/1024;
	// new file size in KB

	// make file name in lower case
	$material_newName = strtolower($material);
	// make file name in lower case

	echo $final_file=str_replace(' ','-',$material_newName);

	if(move_uploaded_file($material_loc,$folder.$final_file))
	{
            $sql="INSERT INTO sample_papers(`std`,`subject`, `paper_url`,`sub_id`) VALUES ('$std','$sub','$final_file','$sub_id')";
            
            if (!mysqli_query($con,$sql))
            {
            die('Error: ' .mysqli_error($con));
//            header("location:FP_UploadReport.php?ca&added=false");
            }
            else
            {
//                echo "done";
                header("location:samplepaper.php?added=true");
            }
        }        
//        return;
            
        }
        
        else if ($_GET['pg'] == 'inq') {
            $nm=$_POST['nm'];
            $em=$_POST['em'];
            $sub=$_POST['sub'];
            $des=$_POST['des'];
            $mobile=$_POST['mob'];
            echo $mobile;
            $q4="INSERT INTO inquiry(name,inq_email,inq_subject,inq_description,inq_mobile)VALUES('$nm','$em','$sub','$des',$mobile)";
            if (!mysqli_query($con,$q4))
            {
            die('Error: ' .mysqli_error($con));

            }
            else
            {
              //echo "done";
            header("location:index.php?added=true");
            }
            
        }
        
        else if($_GET['pg'] == 'gallery')
    {
        $material = rand(1000,100000)."-".$_FILES['material']['name'];
        $material_loc = $_FILES['material']['tmp_name'];
	$material_size = $_FILES['material']['size'];
	$material_type = $_FILES['material']['type'];
	$folder="uploads/gallery/";
//	 echo $jsq, $jse,$jsa,$jsp,$jsm,$jsc. $jspt;
//	 new file size in KB
	$new_size = $material_size/1024;
	// new file size in KB

	// make file name in lower case
	$material_newName = strtolower($material);
	// make file name in lower case

	echo $final_file=str_replace(' ','-',$material_newName);

	if(move_uploaded_file($material_loc,$folder.$final_file))
	{
            $sql="INSERT INTO gallery(`photo`) VALUES ('$final_file')";
            
            if (!mysqli_query($con,$sql))
            {
              die('Error: ' .mysqli_error($con));
//            header("location:FP_UploadReport.php?ca&added=false");
            }
            else
            {
//                echo "done";
                header("location:gallery.php?added=true");
            }
        }
    }
}    