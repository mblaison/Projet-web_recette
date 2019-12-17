<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Savory</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <script src="./form_recherche.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section-other">
        <div class="container-fluid">
            <div class="logo">
                <a href="./accueil.html"><img src="img/savory.png" alt=""></a>
            </div>
            <div class="nav-menu">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="accueil.html">Accueil</a></li>
                            <li><a href="recettes.php">Recettes</a></li>
                            <li><a href="recherche.php">Recherche</a></li>
                            <li><a href="addRecipe.php">Ajout</a></li>
                            <li><a href="connexion.php">S'identifier</a></li>
                        </ul>
                    </nav>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    




    <!-- Barre de recherche -->
    <div class="hero-search set-bg" data-setbg="img/search-bg.jpg">
        <div class="container">
            <div class="filter-table">
                <form class="filter-search" id="recherche" action="./form_recherche.php" method="POST">

                    <input name="r_wanted" type="text" placeholder="Muffin au chocolat">

                    <button type="submit">Chercher</button>
                </form>
            </div>

        </div>
    </div>

    <!-- Affichage de la recette-->
    <div class = "single-page-recipe spad"> </div>




    
    
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