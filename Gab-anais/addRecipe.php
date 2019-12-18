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
                <a href="./accueil.html"><img src="img/savory.png" alt=""></a>
            </div>
            <div class="nav-menu">
                    <nav class="main-menu mobile-menu">
                        <ul>
                            <li><a href="accueil.html">Accueil</a></li>
                            <li><a href="recettes.php">Recettes</a></li>
                            <li><a href="recherche.php">Recherche</a></li>
                            <li><a href="addRecipe.php">Ajouter une recette</a></li>
                            <li><a href="connexion.php">Identification</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="mobile-menu-wrap"></div>

        </div>
    </header>


    <!-- Bandeau haut de page-->
    <div class="hero-search set-bg" data-setbg="img/search-bg.jpg"> </div>
    
    
    <!-- Forulaire d'ajout -->
    <div class="formulaire">
        <form id="ajout_recette" action="./form_recette.php" method="POST">
            
            <p>Titre de la recette : </p>
            <input type="text" name="titre" placeholder="Tarte aux pommes">

            <p> Type de la recette : <br/>
                <input type="radio" name="type_plat" value = "Entrée" id="entrée">
                <label for="entrée">Entrée</label>

                <input type="radio" name="type_plat" value = "Plat" id="plat">
                <label for="plat">Plat</label>

                <input type="radio" name="type_plat" value = "Dessert" id="dessert">
                <label for="dessert">Dessert</label>
            </p>

            <p> Type de cuisine : </p>
            <select name = "type_cuisine" id="type_cuisine">
                <option value=""></option>
                <option value="française">Française</option>
                <option value="espagnole">Espagnole</option>
                <option value="italienne">Italienne</option>
                <option value="asiatique">Asiatique</option>
                <option value="africaine">Africaine</option>
                <option value="maghrébine">Maghrébine</option>
                <option value="méditérannéenne">Méditérannéenne</option>
                <option value="américaine">Américaine</option>
                <option value="anglaise">Anglaise</option>
            </select>

            <p>Temps de préparation : </p>
            <input type="number" name="temps" placeholder="15"> minutes

            <p>Nombre de personnes : </p>
            <input type="number" name="nb_personne" placeholder="4"> personnes

            <p>Pseudo : </p>
            <input type="text" name="auteur" placeholder="toto">

            <p>Adresse mail : </p>
            <input type="email" name="email" placeholder="toto.tata@exemple.com">

            <p>Ingrédients nécessaires : </p>
            <textarea name="ingrédients" rows="10" placeholder="pommes, pâte à tarte, ..."></textarea>

            <p>Instructions de préparation : </p>
            <textarea name="instructions" rows="10" placeholder="Mettre les pommes dans la pâte ..."></textarea>

            <p>Illustration : </p>
            <input type="url" name="image">

            <p>Date : </p>
            <input type="date" name="date_ajout"> 

            <p>
                <input type="submit" value="valider">
            </p>
        </form>
    </div>
    

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
