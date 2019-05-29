<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
include 'admin_header.php';
include './dbCon.php';
?>
<html>    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminPanel | Dashboard</title>
        <link rel="stylesheet" href="css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
    </head>
    <body>   
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <!--<i class="fa fa-envelope"></i>-->
                        <h3 align="center"><i class="fa fa-envelope"></i> Add Photos</h3> 
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!--<button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>-->
                        </div><!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form action="logic.php?pg=gallery" method="post" enctype="multipart/form-data">
                        <!--<form action="newEmptyPHPWebPage.php" method="post">-->
                            <!--<h4>Student Details</h4>-->
                               <div class="form-group">
                                    <input type="file" name="material" id="material">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    
                </div>

            </section><!-- /.Left col -->

            <script>
                
            </script>
    </body>
    <script>
        $(document).ready(function () {
            $('select').material_select();
        });
    </script>
</html>
