<?php
require 'FP_header.php';
require 'dbCon.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #option
            {
                width: 45%;
            }

            .form-control
            {
                border: 1px solid #ccc !important; 
                width: 100%;
            }
        </style>

    </head>
    <body>
        <!--modal PopUp Start-->
        <div class="modal fade" role="dialog" id="successful" >
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <!--                    <div class="modal-header">
                                           <abbr><h3 class="modal-title text-center"> Login/SignUp </h3></abbr>
                                        </div>
                    -->                    <div class="modal-body bg-green1">
                        <center><h2><b><p id="result_txt" style="font-size: 25px; color: white"> Successful </p></b></h2></center>
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
                    -->                    <div class="modal-body btn-danger">
                        <center><h2><b><p id="result_txt" style="font-size: 25px; color: white"> Unsuccessful </p></b></h2></center>
                    </div>                      
                </div> 
            </div>
        </div>
        <!--modal PopUp End-->

        <div id="page-wrapper">

            <div class="col-md-12 graphs">
                <div class="xs">
                    <h3>Records</h3>
                    <div class="well1 white">

                        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" enctype="multipart/form-data" action="logic.php?pg=portfolio" method="post">
                            <fieldset>                
                                <!--                <div class="form-group">
                                                  <label class="control-label">Experiment Name :</label>
                                                  <input type="text" name="ename" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                                                </div>-->
                                <div class="form-group">

                                    <label>Standard :</label>
                                    <select name="std" class="form-control">
                                        <option value="" selected disabled>Select Standard</option>
                                        <option>10th Std</option>
                                        <option>12th(Science)</option>
                                        <option>12th(Commerce)</option>
                                        <option>JEE</option>
                                        <option>NEET</option>
                                    </select>
                                    <!--<label>Select Standard <span class="red-text">*</span></label>-->

                                </div>


                                <div class="form-group">
                                    <label>Board :</label>
                                    <select name="brd" class="form-control">
                                        <option value="" selected disabled>Select Board</option>
                                        <option>GSEB</option>
                                        <option>CBSE</option>
                                        <option>ICSE</option>
                                    </select>
                                    <!--<label>Select Standard <span class="red-text">*</span></label>-->

                                </div>

                                <div class="form-group">
                                    <label class="control-label">Name :</label>
                                    <input type="text" name="fname" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                                    <!--<textarea name="rsub" class="form-control1 control2" required></textarea>-->                
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Percentage :</label>
                                    <input type="text" name="marks" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                                    <!--<textarea name="rsub" class="form-control1 control2" required></textarea>-->                
                                </div>  
                                
                                <div class="form-group">
                                    <input type="file" name="portfolio" id="portfolio">
                                </div>

                                <div class="form-group">
                                    <button type="submit"  class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </fieldset>
                        </form>


                    </div>
                </div>
            </div> 
        </div>

        <!-- js Script -->
        <!----Calender -------->            
        <script src="assets/js/clndr-FacultyPanel.js" type="text/javascript"></script>
        <script src= "assets/js/moment-2.2.1-FacultyPanel.js" type="text/javascript"></script>            
        <script src="assets/js/site-FacultyPanel.js" type="text/javascript"></script>
        <script src="assets/js/underscore-min-FacultyPanel.js" type="text/javascript"></script>
        <!----End Calender -------->
        <script>
            <?php
            // put your code here
            ?>
                                        </body>
                                                </html>
