<?php
    require_once('lib/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/override-bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Restaurant Quai Antique</title>
    <link rel="icon" type="image/x-icon" href="./img/icon logo.jpg">
    <meta name="description" content="Venez découvrir la cuisine typiquement savoyarde.">
</head>

<body
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="./img/Logo/logo quai antique.png" alt="Logo Quai Antique" height="150" width="200">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link">Accueil</a></li>
                <li><a href="carte.php" class="nav-link">Carte et Menu</a></li>
                <li><a href="reservations.php" class="nav-link">Réservations</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Connexion</button>
                <button type="button" class="btn btn-primary">S'inscrire</button>
            </div>
        </header>
    </div>

