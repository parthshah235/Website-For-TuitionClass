<?php
include './FP_header.php';
include './dbCon.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>

    </head>
    <body>
        <div id="page-wrapper">
        <h2 align="center">View Portfolio</h2>
            <table id="table" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Standard</th>
                        <th>Board</th>
                        <th>Percentage</th>
                        <th>Photo</th>
                      </tr>
                    </thead>
        <?php
            $qry4 = mysqli_query($con, "select * from portfolio");

            if (mysqli_affected_rows($con) > 0) {
                while ($row = mysqli_fetch_array($qry4)) {
                    echo '          
                    <tbody id="tabRes">
                        <tr><td>'.$row['name'].'</td>'
                            .'<td>'.$row['std'].'</td>'
                            .'<td>'.$row['board'].'</td>'
                            .'<td>'.$row['percentage'].'%</td>'
                            . '<td><img id="myImg" src="uploads/student/'.$row['photo'].'" height="50px" width="50px"></td>'
                            
                                
                        .'</tr>                        
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
        <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">Xanthus</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
        <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

    </body>
</html>
