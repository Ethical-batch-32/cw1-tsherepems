<?php

@include 'config.php';

session_start();{
  $user_name = $_SESSION['user_name'];
  
  $sqll = "SELECT * FROM up_image WHERE name='$user_name' ORDER BY created_at DESC";
  $thiss=mysqli_query($conn, $sqll);
//   $rowdata=mysqli_fetch_assoc($thiss); 
if (isset($_GET['id'])){
    // Sanitize the provided item id to prevent SQL injection attacks
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM up_image WHERE id= $id";

if (mysqli_query($conn, $sql)) {
    header('location:my_uploads.php');
    
     $error[] = 'Record deleted successfully';
} else {
    $error[] = 'There was a problem deleting the record';
}
} 
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
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4" style="text-align:center;">
            <h2 class="col-12 tm-text-primary">
                My Uploads
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
             
            </div>
        </div>
        <!-- Start Photo section -->
        <div class="row tm-mb-90 tm-gallery">
        <?php
       while ($row = mysqli_fetch_assoc($thiss)) {
        ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="./userphotos/<?php echo $row['image_name'] ?>" alt="Image" class="img-fluid" style='width:372px;height:230px;object-fit:cover;'>
                    <figcaption class="d-flex align-items-center justify-content-center" style="font-size:10px;">
                        <h2>Uploaded by <?php echo $row['name']?></h2>
                        <a href="photo-detail.html">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo date('F jS, Y', strtotime($row['created_at']))?></span>
                </div>
                <div class="dropdown">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                              Action
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="my_uploads.php?id=<?=$row['id']?>">Delete Post</a>
                                              
                                            </div>
                                        </div>
        </div> 
        <?php
       }
        ?>
        </div>
        

    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>