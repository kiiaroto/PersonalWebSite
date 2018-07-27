<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Perso</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php 
    if(!isset($bodyID)) {
        $bodyID = '';
    }
    if(!isset($currentPage)) {
        $currentPage = 'index';
    }
?>

<body id="<?= $bodyID ?>">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-dark">
        <div class="container-fluid"><a class="navbar-brand font-weight-bold" href="index.php">Dylan OMAN</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link <?= ($currentPage == 'index') ? 'active' : '' ?> font-weight-bold" href="index.php">Accueil</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= ($currentPage == 'projets') ? 'active' : '' ?> font-weight-bold" href="projets.php">Projets</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= ($currentPage == 'CV') ? 'active' : '' ?> font-weight-bold" href="CV.php">CV</a></li>
                </ul>
        </div>
        </div>
    </nav>