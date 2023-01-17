<?php
@include 'config.php';
session_start(); {
$user_name = $_SESSION['user_name'];
if(isset($_FILES['imagee'])){
	// echo "<pre>";
	// print_r($_FILES);
	// echo "</pre>";

	$file_name=$_FILES['imagee']['name'];
	$file_size=$_FILES['imagee']['size'];
	$file_tmp=$_FILES['imagee']['tmp_name'];
	$file_type=$_FILES['imagee']['type'];

	if(move_uploaded_file($file_tmp, "userphotos/". $file_name)){
		// echo "Successfull.";

	}else{
		echo"Could not be uploaded.";
	}

}

// To upload the profile image for the user
if(isset($_POST['submit'])){
	$user_image =($_POST['imagee']);
    if(empty($file_name)) {
        // the input field is empty
        $error[] = 'Please enter a value in the input field.';
    }

	$sqlii = "INSERT INTO up_image(name, image_name) VALUES ('$user_name','$file_name')";

	if(mysqli_query($conn, $sqlii)){
		header('location:userpage.php');
        $error[] = 'Profile Picture was Updated successfully';
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
}
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Photo Detail Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
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
            <h2 class="col-12 tm-text-primary">Upload Amazing Photos</h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <form action="" method="post" enctype="multipart/form-data">
                            <label>
                                <img 
                                    class="img-fluid col-6"
                                    src="img/uicon.png"
                                    style="cursor:pointer;">
                                <input required type="file" name="imagee" style="display:none">
                
                                    <!-- </label> -->
                                
                <!-- <img src="img/img-01-big.jpg" alt="Image" class="img-fluid"> -->
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4">
                    Click on the image to Select Photos 
                    </p>
                    <div class="text-center mb-5">
                        <button name="submit" type="submit" value="submit" class="btn btn-primary tm-btn-big">Upload</button>
                        <!-- <button type="submit" name="submit" value="submit" class="btn btn-success pull-right">Post</button> -->
                    </label>
                    </form>                   
                    </div> 
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Format: </span><span class="tm-text-primary">JPG/PNG</span>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>