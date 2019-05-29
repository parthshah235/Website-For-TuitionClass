<?php
include './navbar.php';
require 'dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 align="center">Notes</h1>
        <?php
        // put your code here
            $sql= "SELECT * FROM students_details where u_id='$usr_id'";
            $res= mysqli_query($con, $sql);
            $row= mysqli_fetch_array($res);
            $studnt_id=$row['s_id'];
            
            $sql= "SELECT * FROM subjects
                   JOIN student_sub_details ON subjects.sub_id=student_sub_details.sub_id
                   JOIN download_material ON student_sub_details.sub_id= download_material.sub_id WHERE student_sub_details.s_id= $studnt_id";
            $res= mysqli_query($con, $sql);
            
            echo ' 
            <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Subject Name</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Type</th>
                      </tr>
                    </thead>';
            while($row= mysqli_fetch_array($res)){
//                echo $row['sub_name'];
                echo '          
                    <tbody id="tabRes">
                        <tr><td>'.$row['sub_name'].'</td>'
                            . '<td>'.$row['m_name'].'</td>'
                            . '<td><a href="uploads/material/'.$row['m_url'].'">'.$row['m_url'].'</a></td>
                            <td>'.$row['m_type'].'</td>'
                        .'</tr>                        
                    </tbody>';
            }
            echo '<table>';
        ?>
    </body>
</html>
