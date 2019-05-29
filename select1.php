<?php
include './dbCon.php';
if (isset($_GET['stu']))
    {

        $std = $_POST['std'];
        $result = mysqli_query($con,"SELECT * FROM students_details WHERE s_std='$std'");
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr> <td>";
            echo $row['s_firstname'] ." ".$row['s_lastname']. "</td> <td> " . $row['s_std'] . "</td><td> " . $row['s_board'] . "</td>";
            echo"</tr>";
        }
    }
    
    ?>