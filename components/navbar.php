<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>Pemba's Cloud Photo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="userpage.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 " aria-current="page" href="my_uploads.php">My Uploads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 " aria-current="page" href="upload_photo.php">Upload Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 " aria-current="page" href="#"><?php echo $_SESSION['user_name']?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="logout.php">Logout</a>
                </li>
            </div>
        </div>
    </nav>