<?php
include './navbar.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
//            include './header.php';
        $res = mysqli_query($con, "select * from faculty_details where f_id!=1");
        ?>
        <div class="col">
            <hr style="width: 100%;; color: black; height: 1px; background-color:gold;" >
					<h1><b><center><font face="OpenSans">Our Faculties</font></center></b></h1>
                                        <hr style="width: 100%; color: black; height: 1px; background-color:black;" >
				
            
        <?php
        while ($row = mysqli_fetch_array($res)) {
                echo "<div class='col-md-2 col-sm-4 col-xs-6'>
                    <img src='uploads/".$row['f_photo']."' class='img-circle' width='304' height='236'  /> 
                        <h3 align='center'>".$row['f_name']."</h3> 
                    <div><h4 align='center'>Qualification:" .$row['f_qualification']."</h4>  <h4 align='center'>Experience: ".$row['f_experience']."</h4></div></div>";
                ?>
        </div>
                
<!--                <div class='col s12 m6 l3' style='/*width:247px;*/'>
                    <div class='card sticky-action small hoverable' style='/*width:230px; height:300px;*/'>
                        <div class='card-image waves-effect waves-light'>
                            <img height='205px'  class='activator' src='./uploads/<?php echo $row["f_photo"] ?>'>
                            <span class='card-title red-text'></span>
                        </div>
                        
                        
                        <div class='card-content' height='320px'>
                            <b style="font-size: 17px"><?php echo $row["f_name"].' '. $row["f_lastname"];?></b>
                        </div>
                        <div class='card-action row' style='height:60px;'>
                            <div class="col s2 m2 l2 red-text" style="margin-left: -18px;width: 60px;margin-top: 9px;">
                                <b style="font-size: 17px"><?php echo $row["f_name"].' '. $row["f_lastname"]; ?></b>
                            </div>
                            <div class="col s2 m2 l2 red-text" style="margin-left: -18px;width: 60px;margin-top: 9px;">
                                Qualification:<?php echo $row["f_qualification"]; ?>
                            </div>
                            <div class="col s2 m2 l2 red-text" style="margin-left: -18px;width: 60px;margin-top: 9px;">
                                Experience:<?php echo $row["f_experience"];?>
                            </div>
                            
                            <div class="col s2 m2 l2 red-text" style="width:30px;margin-top: 9px;">
                                /kg
                            </div>
                            <div class="col s2 m2 l2" style="margin-left: -7px;">
                                <a class="waves-effect waves-teal btn-floating waves-light" onclick="qtyupdp(<?php echo $row["prd_id"]; ?>)"><i class="material-icons">add</i></a>
                            </div>
                            <div class="col s2 m2 l2" style="margin-left: -2px;">
                                <button value='<?php echo $row["prd_name"] ?>' id='<?php echo $row["prd_id"] ?>' onclick="add_wl(this)" class='btn-floating btn-small waves-light red' type='submit'><i class='tiny material-icons' style="margin-right: -11px;margin-top: 2px">favorite border</i></button>
                            </div>
                            <div class="col s2 m2 l2" style="margin-left: -2px;">
                                <button value='<?php echo $row["prd_name"] ?>' id='<?php echo $row["prd_id"] ?>' onclick="add_cart(this)" class='btn-floating btn-small waves-light red' type='submit'><i class='tiny material-icons'>shopping_cart</i></button>
                            </div>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?php echo $row["f_name"].' '.$row['f_lastname'] ?><i class="material-icons right">close</i></span>
                            <hr/>
                            <label style="font-size: 20px;color: #00733e;" >Qualification :</label><p style="font-size: 15px"><?php echo $row["f_qualification"] ?></p>
                            <label style="font-size: 20px;color: #00733e;">Experience : </label><p style="font-size: 15px"><?php echo $row["f_experience"] ?></p>
                        </div>
                    </div>
                </div>-->
                <?php
            }
            ?>

    </body>
</html>
