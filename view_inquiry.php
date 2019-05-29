<?php
include './admin_header.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="content-wrapper">
            <h2 align="center">View Inquiry</h2>
            <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject/Reason</th>
                        <th>Mobile</th>
                      </tr>
                    </thead>
        <?php
            $qry4 = mysqli_query($con, "select * from inquiry");

            if (mysqli_affected_rows($con) > 0) {
                while ($row = mysqli_fetch_array($qry4)) {
                    echo '          
                    <tbody id="tabRes">
                        <tr><td>'.$row['name'].'</td>'
                            . '<td>'.$row['inq_email'].'</td>'
                            . '<td>'.$row['inq_subject'].'</td>'
                            .'<td>'.$row['inq_mobile'].'<td>
                                
                        </tr>                        
                    </tbody>';
            }
            echo '<table>';
                    ?>
            
<!--                <tbody id="tabRes">
                    <tr><td><?php echo $row['m_name']; ?></td>
                    <td><a href="uploads/material/<?php $row['m_url'] ?>" ><?php echo $row['m_url'];?></a></td>
                    </tr>
                </tbody>
                </table>
            -->
                    <?php
                }
             else {
                header("Location: ./FP_index.php");
            }
        ?>
        </div>
    </body>
</html>
