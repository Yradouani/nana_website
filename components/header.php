<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refuge animaux</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Copse&family=Fredoka+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include("../utile/formatting.php")
    ?>

    <div class="container p-0 mt-2 rounded perso_shadow">

        <!-- Header du site -->
        <header class="bg-dark text-white rounded-top perso_title">
            <div class="row align-items-center m-0">
                <div class="col-2 p-2 text-center">
                    <a href="./index.php"><img src="../assets/images/Autres/logoNANA2.jpg" class="rounded-circle img-fluid perso_logo" alt="logo du site"></a>
                </div>
                <div class="col-8 m-0 p-0">
                    <nav class="navbar navbar-expand-lg bg-dark">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pink_color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            L'asso
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item pink_color" href="./association.php">Qui sommes-nous ?</a></li>
                                            <li><a class="dropdown-item pink_color" href="./partenaires.php">Partenaires</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle orange_color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pensionnaires
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item orange_color" href="#">Action</a></li>
                                            <li><a class="dropdown-item orange_color" href="#">Another action</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle green_color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actus
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item green_color" href="#">Action</a></li>
                                            <li><a class="dropdown-item green_color" href="#">Another action</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle red_color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Conseils
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item red_color" href="../pages/temperature.php">Température</a></li>
                                            <li><a class="dropdown-item red_color" href="#">Another action</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle blue_color" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Contacts
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item blue_color" href="#">Action</a></li>
                                            <li><a class="dropdown-item blue_color" href="#">Another action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-2 text-right pt-1 pr-4 d-none d-lg-block">
                    N.A.N.A <br> Clermont (09)
                </div>
            </div>
        </header>