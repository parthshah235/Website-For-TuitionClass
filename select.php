<?php
// put your code here
    include './dbCon.php';

    if(isset($_GET['semester']))
    {
        $sem = $_POST['slctVlu'];
    //            echo $sem;
        $res = mysqli_query($con, "SELECT * FROM subject_detail WHERE course_id=$sem");
        while ($row = mysqli_fetch_array($res))
        {
            $sub = $row['subject'];
            $s_id = $row['s_id'];
    //        echo $sub;
            echo "<option value='$s_id'>".$sub."<option>";
        }
    }

    elseif (isset($_GET['subject']))
    {
        $sub = $_POST['slctVlu'];
    //            echo $sem;
        $res = mysqli_query($con, "SELECT * FROM unit_detail WHERE s_id=$sub");
        while ($row = mysqli_fetch_array($res))
        {
            $unit = $row['unit'];
            $u_id = $row['u_id'];
    //        echo $sub;
            echo "<option value='$u_id'>".$unit;
        }
    }

    elseif (isset($_GET['unit']))
    {
        $unit = $_POST['slctVlu'];
    //            echo $sem;
        $res = mysqli_query($con, "SELECT * FROM chapter_detail WHERE u_id=$unit");
        while ($row = mysqli_fetch_array($res))
        {
            $chapter = $row['chapter'];
            $c_id = $row['c_id'];
    //        echo $sub;
            echo "<option value='$c_id'>".$chapter;
        }
    }

    elseif (isset($_GET['chapter']))
    {
        $cors = $_POST['cors'];
        $ch_id = $_POST['slctVlu'];
        $result = mysqli_query($con,"SELECT * FROM mcq_detail WHERE course_id='$cors' && chapter_id='$ch_id'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr> <td>";
            echo $row['question']."</td> <td>".$row['A']."</td> <td>".$row['B']."</td> <td>".$row['C']."</td> <td>".$row['D']."</td> <td>".$row['answer']."</td> <td>".$row['solution']."</td> <td><a class='btn glyphicon glyphicon-edit' href='FP_editMCQ_gui.php?qu_no=".$row['qu_no']."' data-toggle='modal' data-target='#edit'/> <a class='btn glyphicon glyphicon-trash' href='del_mcq.php?qu_no=".$row['qu_no']."'/></td>";
            echo "</tr>";
        }
    }

    elseif (isset($_GET['CQP']))
    {
        $cors = $_POST['cors'];
        $ch_id = $_POST['slctVlu'];
        $result = mysqli_query($con,"SELECT * FROM q_paper WHERE course_id='$cors' && chapter_id='$ch_id'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr> <td>";
            echo $row['chapter_test']."</td><td>".$row['chapter_note']." </td> <td><a class='btn glyphicon glyphicon-edit' href='FP_editCQP_gui.php?test_no=".$row['qpaper_no']."' data-toggle='modal' data-target='#edit' /> <a class='btn glyphicon glyphicon-trash' href='del_cqp.php?qpaper_no=".$row['qpaper_no']."'/></td>";
            echo "</tr>";
        }
    }

    elseif (isset($_GET['Rpot']))
    {
        $cors = $_POST['cors'];
        $result = mysqli_query($con,"SELECT * FROM report WHERE course_id='$cors'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$row['test']."</td>";
            ?>
                <td><a href="uploads/<?php echo $row['report'] ?>" target="_blank">view file</a></td>
            <?php
                 echo "<td><a class='btn fa fa-edit' href='FP_editRpot_gui.php?rid=".$row['report_id']."' data-toggle='modal' data-target='#edit'></a> &nbsp; &nbsp;<a class='btn fa fa-trash-o' href='del_rep.php?rid=".$row['report_id']."'></a></td> </tr>";
            ?>
        <?php
        }
    }

     elseif (isset($_GET['Rnk']))
    {
        $cors = $_POST['cors'];
        $result = mysqli_query($con,"SELECT * FROM record WHERE course_id='$cors'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>".$row['name']."</td>";
            ?>
                <td><a href="uploads/<?php echo $row['photo'] ?>" target="_blank">view file</a></td>
            <?php
                 echo "<td>".$row['subject']."</td><td>".$row['marks']."</td><td><a class='btn fa fa-trash-o' href='del_rnk.php?ph=".$row['photo']."'></a></td> </tr>";
        }
    }


    elseif (isset($_GET['Schdul']))
    {
        $cors = $_POST['cors'];
        $result = mysqli_query($con,"SELECT * FROM schedule WHERE course_id='$cors'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr> <td>";
            echo $row['event_name'] . "</td> <td> " . $row['event_detail'] . "</td> <td> " . $row['event_date'] . "</td> <td><a class='btn fa fa-edit' data-toggle='modal' data-target='#result' href='schedule_updt.php?eid=".$row['event_id']."&corsId=".$row['course_id']."'></a> &nbsp; &nbsp;<a class='btn fa fa-trash-o' href='del_sch.php?eid=".$row['event_id']."'></a></td>";
            echo"</tr>";
        }
    }

    elseif (isset($_GET['stu']))
    {
        $std = $_POST['std'];
        $result = mysqli_query($con,"SELECT * FROM students_details WHERE s_std='$std'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr> <td>";
            echo $row['stu_name'] . "</td> <td> " . $row['stu_phone'] . "</td> <td> " . $row['stu_email'] . "</td> <td>" . $row['stu_address'] . "</td>";
            echo"</tr>";
        }
    }

    if(isset($_GET["nm"]))
        {
            $lid=$_GET['nm'];
             $result = mysqli_query($con,"SELECT * FROM user_details where u_id ='$lid'");
                $row = mysqli_fetch_array($result);
                if($row['status']=='valid.png')
                {
                    $sql="UPDATE login set status='invalid.png' where login_id='$lid' ";
                    if (!mysqli_query($con,$sql))
                    {
                        die('Error: ' . mysqli_error($con));
                        header("location:view_user.php?added=false");
                    }
                    else
                    {
                        header("location:view_user.php?added=true");
                    }
                }
                else if($row['status']=='invalid.png')
                {
                    $sql="UPDATE login set status='valid.png' where login_id='$lid' ";
                    if (!mysqli_query($con,$sql))
                    {
                        die('Error: ' . mysqli_error($con));
                        header("location:view_user.php?added=false");
                    }
                    else
                    {
                        header("location:view_user.php?added=true");
                    }
                }
        }

?>
