<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
    include 'admin_header.php';
    require 'dbCon.php';
?>
<html>    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPanel | Dashboard</title>
  </head>
  <body>
   
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
<!--        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>-->

        <!-- Main content -->
        <section class="content">
        <div class="box">
                <div class="box-header">
                  <h3 align="center">Students Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>User ID</th>
                        <th>Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
        $result = mysqli_query($con,"SELECT * FROM user_details where u_type = 'student'");
        ?>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($result))
        {
        echo "<tr> <td>";
       // $_SESSION["ln"]=$row['login_name'];
//        echo $row['login_uname'] . "</td> <td> " . $row['login_pwd'] . "</td> <td> " . $row['login_type'] . "</td><td><a href='updt.php?nm=".$row['login_uname']."'><img src='images/icn_edit.png'/></a> &nbsp; &nbsp;<a href='del_user.php?nm=".$row['login_uname']."'><img src='images/icn_trash.png'/></a></td>";
//        echo $row['login_uname'] . "</td> <td> " . $row['login_pwd'] . "</td> <td> " . $row['login_type'] . "</td><td><a href='updt.php?nm=".$row['login_uname']."' class='btn glyphicon glyphicon-pencil'></a> &nbsp;&nbsp;&nbsp;<a class='btn glyphicon glyphicon-trash' href='del_user.php?nm=".$row['login_uname']."'></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a id='$row[login_id]dsble' name='$row[login_id]' class='btn bg-red-gradient glyphicon glyphicon-off' onclick='clkDsabl(this)'></a><a id='$row[login_id]' class='btn bg-green-gradient glyphicon glyphicon-ok-sign' style='display: none' onclick='clkEnbl(this)'></a> </td>";
echo $row['u_email'] . "</td> <td> " . $row['u_type'] . "</td><td><a class='btn glyphicon glyphicon-trash' href='del_user.php?nm=".$row['u_email']."'></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='select.php?nm=".$row['u_id']."'></a></td>";
        echo"</tr>";
        }
        
        ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div>

            </section><!-- /.Left col--> 
            
            <script>
                function clkDsabl(obj)
                {
//                    alert(obj.id);
                    obj.style= "display: none";
                    document.getElementById(obj.name).style= "display: true";
                }

                function clkEnbl(obj)
                {
                    obj.style= "display: none";
                    var a= obj.id;
                    var b= "dsble";
//                    alert(a+b);
                    document.getElementById(a+b).style= "display: true";
                }
            </script>
  </body>
</html>
        <?php // } 
        
?>
