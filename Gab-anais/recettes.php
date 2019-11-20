<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yummy | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">



    <!-- Liste des recettes -->
    <link href="./bdd_recipe.php">


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
                <a href="./accueil.html"><img src="img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="accueil.html">Accueil</a></li>
                            <li><a href="recettes.php">Recettes</a></li>
                            <li><a href="recherche.html">Recherche</a></li>
                            <li><a href="addRecipe.html">Ajout</a></li>
                            <li><a href="identification.html">S'identifier</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="mobile-menu-wrap"></div>

        </div>
    </header>



    <!-- Liste des recettes -->
    <section class="recipe-section spad">
        <?php
            include ('bdd_recipe.php');

            $donnees = get_recipe();

            echo "<ol>";
            foreach ($donnees as $recettes)
            {
                echo "<li>" . $recettes["image"] . $recettes["titre"] . "</li>";
            }
            echo "</ol>";
        ?>
    </section>
    

    <!-- Pied de page -->
    
    <footer class="footer-section">
            <div class="container">
                <p>Ce site web a été élaboré dans le cadre de l'UE HMIN115M - Technologies du Web.</p>
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