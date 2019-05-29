<?php
include './FP_header.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="page-wrapper">
            <h2 align="center">View Papers</h2>
            <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Subject</th>
                        <th>Link</th>
                        <th>Update</th>
                      </tr>
                    </thead>
        <?php
            $qry4 = mysqli_query($con, "select * from sample_papers");

            if (mysqli_affected_rows($con) > 0) {
                while ($row = mysqli_fetch_array($qry4)) {
                    echo '          
                    <tbody id="tabRes">
                        <tr><td>'.$row['subject'].'</td>'
                            . '<td><a href="uploads/material/'.$row['paper_url'].'">'.$row['paper_url'].'</a></td>'
                            .'<td>'.'<input type=file>'.'<td>
                                
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
