<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['pageTitle']?></title>
    <link rel="stylesheet" href="<?=ASSETS?>Theme/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>Theme/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?=ASSETS?>Theme/css/templatemo-style.css">

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-film mr-2"></i>
                <?=WEBSITE_TITLE?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 <?= $data["pageTitle"] == "Home" ? "active": "" ?>" aria-current="page" href="<?=ROOT?>index">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2 <?= $data["pageTitle"] == "Videos" ? "active": "" ?> " href="<?=ROOT?>videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3 <?= $data["pageTitle"] == "About" ? "active": "" ?>" href="<?=ROOT?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4 <?= $data["pageTitle"] == "Contact" ? "active": "" ?>" href="<?=ROOT?>contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 <?= $data["pageTitle"] == "Upload Image" ? "active": "" ?>" href="<?=ROOT?>upload/image">Upload Image</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
