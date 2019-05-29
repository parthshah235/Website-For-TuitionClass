<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$u_id= $_SESSION['u_id'];
include './dbCon.php';
if(!isset($_SESSION['u_id']))
{
            header("Location: http://localhost/TuitionClass/404.php");
}
else 
    {
$result = mysqli_query($con,"SELECT * FROM faculty_details where u_id='$u_id'");
$row = mysqli_fetch_array($result);
$f_id= $row['f_id'];
$_SESSION['f_id']= $f_id;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Faculty Panel</title>

        <style>
            #page-wrapper 
            {
                /*--padding: 0 15px;--*/
                min-height: 568px;
                
                background-color: #fff;
            }
        </style>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="assets/css/style-FacultyPanel.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="assets/css/lines-FacultyPanel.css" rel='stylesheet' type='text/css' />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!----webfonts--->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---//webfonts--->    
        <!-- Nav CSS -->
        <link href="assets/css/custom-FacultyPanel.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="assets/js/metisMenu.min-FacultyPanel.js"></script>
        <script src="assets/js/custom-FacultyPanel.js"></script>
        <!-- Graph JavaScript -->
        <!--<script src="js/d3.v3.js"></script>
        <script src="js/rickshaw.js"></script>-->
    </head>
    <body>
        <?php 
//        if(isset($_GET["bcom"]))
//            {
//        if(!isset($_SESSION['usernm']))
//        {
//            header("location:404.php");
//        }
//    else if ($_SESSION['type']=='student' | $_SESSION['type']=='admin')
//        {
//            header("location:accessdenied.php");
//        }
//        else if($_SESSION["fac"]==2)
//                {
//                    header("location:accessdenied.php");
//                }
//    else 
//        {
        ?>

            <div id="wrapper">
                <!-- Navigation -->
                <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="FP_index.php">Faculty Panel</a>
                    </div>
                    <!-- /.navbar-header -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-header text-center">
                                    <strong>Account</strong>
                                </li>
                                <li class="m_2"><a href="FP_profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                <li class="m_2"><a href="logic.php?pg=logout"><i class="fa fa-lock"></i> Logout</a></li>	
                            </ul>
                        </li>
                    </ul>
                    <!--			<form class="navbar-form navbar-right">
                                  <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
                                </form>-->
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="FP_index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="FP_ViewStudent.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Student Detail</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-laptop nav_icon"></i>Uploads<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="notes.php">Notes</a>
                                        </li>
                                        <li>
                                            <a href="samplepaper.php">Question Papers</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-table nav_icon"></i>View Uploads<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="view_materials.php">Notes</a>
                                        </li>
                                        <li>
                                            <a href="view_papers.php">Question Papers</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
<!--                                <li>
                                    <a href="#"><i class="fa fa-indent nav_icon"></i>Reports<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="FP_UploadReport.php?bcom">Add New Report</a>
                                        </li>
                                        <li>
                                            <a href="FP_ViewReport.php?bcom">View Report</a>
                                        </li>
                                    </ul>
                                     /.nav-second-level 
                                </li>-->
                                <li>
                                    <a href="#"><i class="fa fa-indent nav_icon"></i>Portfolio<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="portfolio.php">Add New Record</a>
                                        </li>
                                        <li>
                                            <a href="view_portfolio.php">View Records</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
<!--                                <li>
                                    <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="FP_inbox.php">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="FP_compose.php?bcom">Compose email</a>
                                        </li>
                                    </ul>
                                     /.nav-second-level 
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-table nav_icon"></i>Schedule<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="FP_schedule.php?bcom">Add Schedule Change</a>
                                        </li>
                                        <li>
                                            <a href="view_schedule.php?bcom">View Schedule</a>
                                        </li>
                                    </ul>
                                     /.nav-second-level 
                                </li>

                                <li>
                                     <a href="http://dashboard.tawk.to" target="_blank"><i class="fa fa-sitemap fa-fw nav_icon"></i>Chat <span class="fa arrow"></span> </a>
                                                                <ul class="nav nav-second-level">
                                                                    <li>
                                                                        <a href="media.html">Media</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="login.html">Login</a>
                                                                    </li>
                                                                </ul>
                                                                 /.nav-second-level 
                                </li>-->
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
            </div>

                <!--        <div id="page-wrapper">
                             inner containt shows here 
                       </div>
                         /#page-wrapper 
                    </div>-->
                <!-- /#wrapper     -->
<?php //} ?>
</html>
<?php } ?>