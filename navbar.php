<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$usr_id= $_SESSION['u_id'];
$_SESSION['s_firstname'];
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/AdminLTE.min.css" />

        <style>
            #header_lnk
            {
                font-size: 19px;
            }

            /* xs < 450 */
            @media screen and (max-width: 450px) {
                #logo_bhavin {
                    width: 100px;
                }

                #logo_sarthi {
                    width: 180px;
                }
            }

            /* xs < 400 */
            @media screen and (max-width: 400px) {
                #logo_bhavin {
                    width: 90px;
                }

                #logo_sarthi {
                    width: 170px;
                }

                .navbar-inverse {
                    margin-bottom: -13px;
                }
            }

            /* xs < 380 */
            @media screen and (max-width: 380px) {
                #logo_bhavin {
                    width: 80px;
                }

                #logo_sarthi {
                    width: 160px;
                }

                .navbar-inverse {
                    margin-bottom: -20px;
                }
            }

            /* xs < 360 */
            @media screen and (max-width: 360px) {
                #logo_bhavin {
                    width: 70px;
                }

                #logo_sarthi {
                    width: 150px;
                }

                .navbar-inverse {
                    margin-bottom: -26px;
                }
            }

            /* xs < 340 */
            @media screen and (max-width: 340px) {
                #logo_bhavin {
                    width: 65px;
                }

                #logo_sarthi {
                    width: 125px;
                }

                .navbar-inverse {
                    margin-bottom: -37px;
                }
            }

            /* xs < 295 */
            @media screen and (max-width: 295px) {
                #logo_bhavin {
                    width: 55px;
                }

                #logo_sarthi {
                    width: 100px;
                }

                .navbar-inverse {
                    margin-bottom: -43px;
                }
            }
        </style>
    </head>
    <body>

        <!--modal PopUp Start-->
        <div class="modal fade" role="dialog" id="login" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header" style="height: 100px">
                        <button type="button" class="close" id="login_closBtn" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h3 class="modal-title" id="modal-login-label"><font color="maroon">Login to our site</font></h3>
                        <p><font color="maroon">Enter your username and password to log on:</font></p>
                        <center><div id="login_result" class="bg-aqua-gradient" style="display: none; border-radius: 10px"></div></center>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                            <input type="text" id="usrnm" name="uname" placeholder="Username..." class="form-username form-control" tabindex="1" id="form-username" onkeydown="if (event.keyCode == 13)
                                        document.getElementById('loginbtn').click()" required />
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" id="paswrd" name="pwd" placeholder="Password..." class="form-password form-control pull-left" tabindex="2" id="form-password" onkeydown="if (event.keyCode == 13)
                                        document.getElementById('loginbtn').click()" required />
                        </div> <br/> <br/> <br/>
                        <button id="loginbtn" onclick="login()" class="btn pull-left" tabindex="3">Login</button> <a href="#forget" data-dismiss="modal" data-toggle="modal"><i data-toggle="tooltip" title="Forget OR Change Password" class="img-circle glyphicon glyphicon-question-sign pull-right" style="background: white; color: #0016b0; font-size: 30px; cursor: pointer"></i></a>
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" role="dialog" id="forget" >
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <b><h4 class="modal-title pull-left" style="color: maroon">Email : </h4></b> <center><span id="forget_result" class="pull-right bg-aqua-gradient" style="border-radius: 10px; width: 70%"></span></center>
                    </div>
                    <div class="modal-body">
                        <!--<form>-->
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email..." onkeydown="if (event.keyCode == 13)
                                    document.getElementById('forgetbtn').click()" required="" />
                        <br/>
                        <input type="submit" id="forgetbtn" onclick="forget()" class="btn pull-left" value="Submit" />
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>


        <!--success alert modals-->
        <div class="modal fade" role="dialog" id="successful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body btn-success">
                        <center><h4><b><p id="result_txt" style="font-size: 25px"> Successful </p></b></h4></center>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" role="dialog" id="unsuccessful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body btn-danger">
                        <center><h4><b><p id="result_txt" style="font-size: 25px"> Unsuccessful </p></b></h4></center>
                    </div>
                </div>
            </div>
        </div>
        <!--modal PopUp End-->

        <!-- Fixed navbar -->
        <div class="fixed navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="index.php">
                                        <!--<img src="assets/images/Bhavin_Logo.png" id="logo_bhavin"> &nbsp;&nbsp;&nbsp;-->
                        <img src="Images/Educare 4 Logos.png" height="85px" width="210px" id="logo_sarthi"></a>
                </div>
                <div class="navbar-collapse collapse" style="padding-top: 25px">
                    <ul class="nav navbar-nav pull-right mainNav">
                        <li><a href="index.php" id="header_lnk" >Home</a></li>
                        <li><a href="about.php" id="header_lnk">About</a></li>
                        <li><a href="courses.php" id="header_lnk">Courses</a></li>
                        <li><a href="photo_gallery.php" id="header_lnk">Gallery</a></li>
                        <!--<li><a href="fees.php?fees" id="header_lnk">Fees</a></li>-->
                        <li><a href="faculty.php" id="header_lnk">Faculties</a></li>
                        <li><a href="worksheet.php" id="header_lnk">Worksheet</a></li>
                        
                        <!--<li><a href="contact.php?contact" id="header_lnk">Contact</a></li>-->
                        <?php
                        if (!isset($_SESSION['s_firstname'])) {
                            echo"<li><a data-toggle='modal' id='header_lnk' data-target='#login' style='cursor: pointer'>Login</a></li>"
                            . "<li><a href='inquiry.php' id='header_lnk'>Inquiry</a></li>";
                        } else {
                            $fname=$_SESSION['s_firstname'];
                            ?>
                        <li><a href="s_notes.php" id="header_lnk">Notes</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" id="header_lnk"><?php echo $fname;?> <b class="caret"></b></a>
                                <ul class="dropdown-menu" >
                                    <!--<li class="dropdown-menu-header text-center" id="header_lnk">-->
                                        <!--<strong style="color: orange">Account</strong>-->
                                    <li class="m_2"><a href="profile.php" id="header_lnk"><i class="fa fa-user"></i> Profile</a></li>
                                    <!--<li class="m_2"><a href="logic.php?pg=logout" id="header_lnk"><i class="fa fa-lock"></i> Logout</a></li>-->	
                                    <!--</li>-->
                                </ul>
                            </li>
                            <!--<li class="m_2"><a href="profile.php" id="header_lnk"> Profile</a></li>-->
                            <li class="m_2"><a href="logic.php?pg=logout" id="header_lnk"><span class="glyphicon glyphicon-off"></span></a></li>	
                        </ul>
<?php } ?>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!--<br/>-->
        <!-- /.navbar -->
        <script src="assets/js/modernizr-latest.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script src="assets/js/jquery.min.js"></script>
	<!--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>-->
        <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
        <!--Start of Tawk.to Script-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        
        <script>
                            $(document).ready(function () {
                                $('[data-toggle="tooltip"]').tooltip();
                            });

                            function login()
                            {
                                var unm = document.getElementById("usrnm").value;
//                alert(unm);
                                var pwd = document.getElementById("paswrd").value;
//                alert(pwd);
                                if (!unm || !pwd)
                                {
                                    document.getElementById("login_result").innerHTML = "! Please Input . . .";
                                    $('#login_result').fadeIn("slow");
                                    $('#login_result').fadeOut(3000);
                                    return;
                                }

                                var xmlhttp;
                                if (window.XMLHttpRequest)
                                {
                                    xmlhttp = new XMLHttpRequest();
                                } else
                                {
                                    xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
                                }

                                xmlhttp.open("POST", "logic.php?pg=login", true);
                                xmlhttp.onreadystatechange = function ()
                                {
                                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                                    {
//                                                alert(xmlhttp.responseText);
                                        var rTxt = xmlhttp.responseText;

                                        if (rTxt == "admin")
                                        {
                                            location.href = "admin_index.php";
                                        } else if (rTxt == "faculty")
                                        {
                                            location.href = "FP_index.php";
                                        } else if (rTxt == "student")
                                        {
                                            location.href = "index.php";
                                        }
//                                                 else if (rTxt == 10)
//                                                 {
//                                                     location.href = "FP_index.php?ca";
//                                                 } else if (rTxt == 1 || rTxt == 2 || rTxt == 3 || rTxt == 4 || rTxt == 5 || rTxt == 6)
//                                                 {
//                                                     location.href = "bcom_home.php";
//                                                 } else if (rTxt == 7)
//                                                 {
//                                                     location.href = "cpt_home.php";
//                                                 } else if (rTxt == 8)
//                                                 {
//                                                     location.href = "ipcc_home.php";
//                                                 } 
                                        else
                                        {
                                            document.getElementById("login_result").innerHTML = rTxt;
                                            $('#login_result').fadeIn("slow");
                                            $('#login_result').fadeOut(3000);
                                        }
                                    }
                                }

                                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xmlhttp.send("uname=" + unm + "&pwd=" + pwd);
                            }

                            function forget()
                            {
                                var email = document.getElementById("email").value;
//                alert(email);
                                if (!email)
                                {
                                    document.getElementById("forget_result").innerHTML = "! Please Input . . .";
                                    $('#forget_result').fadeIn("slow");
                                    $('#forget_result').fadeOut(2800);
                                    return;
                                }

                                var xmlhttp;
                                if (window.XMLHttpRequest)
                                {
                                    xmlhttp = new XMLHttpRequest();
                                } else
                                {
                                    xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
                                }

                                xmlhttp.open("POST", "logic.php?pg=forget", true);
                                xmlhttp.onreadystatechange = function ()
                                {
                                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                                    {
//                        alert(xmlhttp.responseText);
                                        document.getElementById("forget_result").innerHTML = xmlhttp.responseText;
                                        $('#forget_result').fadeIn("slow");
                                        $('#forget_result').fadeOut(2800);
                                    }
                                }

                                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                xmlhttp.send("email=" + email);
                            }
        </script>
    </body>
