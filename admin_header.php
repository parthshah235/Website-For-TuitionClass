<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION['u_id']))
{
            header("Location: http://localhost/TuitionClass/404.php");
}
else 
    {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPanel | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="assets/css/ap-skins/_all-skins.min.css">    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <!--modal PopUp Start-->
    <div class="modal fade" role="dialog" id="successful" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!--                    <div class="modal-header">
                                       <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                                    </div>
                -->                    <div class="modal-body bg-green-gradient">
                    <center><h2><b><p id="result_txt" style="font-size: 28px"> Successful </p></b></h2></center>
                </div>                      
            </div> 
        </div>
    </div>

    <div class="modal fade" role="dialog" id="unsuccessful" >
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!--                    <div class="modal-header">
                                       <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                                    </div>fp_
                -->                    <div class="modal-body bg-red-gradient">
                    <center><h2><b><p id="result_txt" style="font-size: 28px"> Unsuccessful </p></b></h2></center>
                </div>                      
            </div> 
        </div>
    </div>
    <!--modal PopUp End-->

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="admin_header.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>P</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>Panel</span>
                </a>
                <!-- /Logo -->

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Left Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Right Side of header -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!--                <div class="pull-left">
                                                  <a href="#" class="btn btn-linkedin btn-lg">Profile</a>
                                            </div>-->
                            <!--                <div class="pull-right">
                                                  <a href="logic.php?pg=logout" class="btn btn-danger btn-lg" data-toggle="dropdown">Sign out</a>
                                            </div>-->
                            <li>
                            <!--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>-->
                            </li>
                        </ul>
                    </div>
                    <!-- /Right Header -->
                </nav>
            </header>

            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Add Users</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="new_stu.php"><i class="fa fa-circle-o"></i> Students</a></li>
                                <li><a href="new_fac.php"><i class="fa fa-circle-o"></i> Faculty</a></li>
                                <!--<li><a href="view_user.php"><i class="fa fa-circle-o"></i> View Users</a></li>-->
                            </ul>
                        </li>

                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>View Users</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="view_student.php"><i class="fa fa-circle-o"></i> Students</a></li>
                                <li><a href="view_user.php"><i class="fa fa-circle-o"></i> Faculty</a></li>
                            </ul>
                        </li>
                        <!--                <li class="active treeview">
                                          <a href="manage_fee.php">
                                              <i class="fa fa-dashboard"></i> <span>Manage Fee Structure</span> 
                                          </a>
                                        </li>-->
                        
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> Inquiry</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <!--<li><a href="change_pwd.php"><i class="fa fa-circle-o"></i> Change Password</a></li>-->
                                <li><a href="view_inquiry.php"><i class="fa fa-circle-o"></i> View Inquiry</a></li>
                            </ul>
                        </li>
                        
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> Gallery</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <!--<li><a href="change_pwd.php"><i class="fa fa-circle-o"></i> Change Password</a></li>-->
                                <li><a href="gallery.php"><i class="fa fa-circle-o"></i> Upload Photo</a></li>
                            </ul>
                        </li>
                        
                        <li class="active treeview">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span> Admin</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <!--<li><a href="change_pwd.php"><i class="fa fa-circle-o"></i> Change Password</a></li>-->
                                <li><a href="logic.php?pg=logout"><i class="fa fa-circle-o"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>

            <!-- (Right Sidebar Contains)Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <!-- Layout Options & Skins -->
                    <div class="tab-pane" id="control-sidebar-home-tab">  </div>          
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
            <!-- ./Right Sidebar Contain(Control) -->

            <!-- Scripts -->
            <!-- jQuery 2.1.4 -->
            <script src="assets/js/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <!--    <script>
              $.widget.bridge('uibutton', $.ui.button);
            </script>  -->
            <!-- Bootstrap 3.3.5 -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- AdminLTE App -->
            <script src="assets/js/app.min-AP.js"></script>
            <!-- AdminLTE for demo purposes(that contains control content) -->
            <script src="assets/js/demo-AP.js"></script>

            <script>
<?php
if ($_GET['added'] == "true") {
    ?>
                    $(window).load(function () {
                        $('#successful').modal('show');
                    });

                    setTimeout(function () {
                        $('#successful').modal('hide')
                    }, 2000)
    <?php
} elseif ($_GET['added'] == "false") {
    ?>
                    $(window).load(function () {
                        $('#unsuccessful').modal('show');
                    });

                    setTimeout(function () {
                        $('#unsuccessful').modal('hide')
                    }, 2000)
    <?php
}
?>
            </script>
    </body>
</html>
    <?php }?>