<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
    include 'admin_header.php';
    ?>
<html>    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPanel | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  </head>
  <body>
   
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- quick email widget -->
              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Add New Faculty</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
                </div>
                <div class="box-body">
                  <form action="logic.php?pg=newfac" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="facname" placeholder="Faculty Name" oninput="chk(this)" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="facpwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required="">
                    </div>
                  
                </div>
                <div class="box-footer clearfix">
                    <div id="result" class="callout callout-danger pull-left" style="display: none; width: 257px"></div> <button type="submit" class="pull-right btn btn-default" id="submit">Send <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
              </div>

            </section><!-- /.Left col -->
            
            
  </body>
</html>
