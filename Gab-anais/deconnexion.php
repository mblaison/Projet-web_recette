<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Savory</title>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <!-- Gestion ajout de recette-->
    <script src="./form_recette.js"></script>

</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Entête -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./accueil.php"><img src="img/savory.png" alt=""></a>
            </div>
            <div class="nav-menu">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="accueil.php">Accueil</a></li>
                            <li><a href="recettes.php">Recettes</a></li>
                            <li><a href="recherche.php">Recherche</a></li>
                            <li><a href="addRecipe.php">Ajouter une recette</a></li>
                            <?php
                            session_start();
                            $co = $_SESSION["connexion"];

                            if ($co) {
                                echo "<li><a href=\"deconnexion.php\">Déconnexion</a></li>";
                            }
                            else {
                                echo "<li><a href=\"connexion.php\">Identification</a></li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="mobile-menu-wrap"></div>

        </div>
    </header>


    <!-- Bandeau haut de page-->
    <div class="hero-search set-bg" data-setbg="img/search-bg.jpg"> </div>
    
  




<?php

session_start();

$_SESSION["connexion"] = false;

header("Location: ./state.php")


?>




<!-- Pied de page -->
    
<footer class="footer-section">
            <div class="container">
                <p>© Gabrielle Pozo & Anaïs Louis</p>
                <p>Mise à jour le 10/12/19</p>
            </div>
    </footer>





    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
