<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum PC</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <header>
    <div class="container-fluid">
    <div class="row">
        <div class="bg-image bg-image-fond2 header d-flex ">
            <div class="col-3">
                <a href="http://localhost/Projet4/index.php"><h1>Maximum PC</h1></a>
            </div>
            <div class="col-9 d-flex justify-content-end text-end">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        
                            <ul class="navbar-nav">
                                <li class="nav-item mx-5 cl-effect-14">
                                    <a class="nav-link <?php echo ($pageName == "index.php")? "active":""; ?>" aria-current="page" href="http://localhost/Projet4/index.php">E-commerce</a>
                                </li>
                                <li class="nav-item mx-5 cl-effect-14">
                                    <a class="nav-link <?php echo ($pageName == "tutopage.php")? "active":""; ?>" href="http://localhost/Projet4/html/tutopage.php#">Depannage</a>
                                </li>
                                <li class="nav-item mx-5 cl-effect-14">
                                    <a class="nav-link <?php echo ($pageName == "contact.php")? "active":""; ?>" href="http://localhost/Projet4/html/contact.php#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>	
        </div>
    </div>
</div>