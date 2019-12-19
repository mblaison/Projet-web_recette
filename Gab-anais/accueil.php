<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Anaïs Louis & Gabrielle Pozo">
    <link rel="icon" href="img/icon.png">
    
    <title>Savory</title>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>



<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Entête -->
    <header class="header-section">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="./accueil.php"><img src="img/savory.png" alt=""></a>
            </div>

            <!-- Menu -->
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
                        if ($co) { echo "<li><a href=\"deconnexion.php\">Déconnexion</a></li>";}
                        else { echo "<li><a href=\"connexion.php\">Identification</a></li>";}
                        ?>

                    </ul>
                </nav>
            </div>

            <div id="mobile-menu-wrap"></div>
        </div>
    </header>



    <!-- Affichage de certaines recettes -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
            
                <!-- Colonne du milieu -->
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/gaufres.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <span>10 décembre 2019</span>
                            <h3>Gauffres en 3 façons</h3>
                        </div>
                    </div>
                </div>

                <!-- Colonne de droite -->
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <!-- Item 1 -->
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/verrine_framboise.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Verrine mascarpone et framboises </h4>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/entree_noel.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Pain d'épice et mousse de foie gras</h4>
                        </div>
                    </div>
                </div>

                <!-- Colonne de gauche-->
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <!-- Item 1 -->
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/friands.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Friands au jambon et fromage</h4>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="img/sushi_burger.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Sushi burger saumon avocat</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Pied de page -->
    <footer class="footer-section">
        <div class="container">
            <p>© Gabrielle Pozo & Anaïs Louis</p>
            <p>Mise à jour le 18/12/19</p>
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