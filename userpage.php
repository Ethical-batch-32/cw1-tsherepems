<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['user_name'];
  
  $sqll = "SELECT * FROM up_image";
  $thiss=mysqli_query($conn, $sqll);
//   $rowdata=mysqli_fetch_assoc($thiss);  
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemba Cloud Photos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
    <!-- Page Loader -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div> -->
    <?php
    @include_once './components/navbar.php'
    ?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
       
    </div>
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
        </div>
        <!-- Start Photo section -->
        <div class="row tm-mb-90 tm-gallery img-fluid">
        <?php
        while ($row = mysqli_fetch_assoc($thiss)) {
        ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                <!-- style="height:200px;width:356px;" -->
                    <img src="./userphotos/<?php echo $row['image_name']?>" alt="Image" style='width:372px;height:230px;object-fit:cover;' >
                    <figcaption class="d-flex align-items-center justify-content-center" style="font-size:10px;">
                        <h2>Uploaded by <?php echo $row['name']?></h2>
                       <a href="./userphotos/<?php echo $row['image_name']?>">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo date('F jS, Y', strtotime($row['created_at']))?></span>
                </div>
        </div> 
        <?php
       }
        ?>
           
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->
            <div class="row" style="text-align:center;">
                <div class="col-lg-12 col-md-7 col-12 px-5 mb-3">
                    Copyright 2022 Pemba. All rights reserved.
                </div>
                
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>
