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
                            if ($co) {echo "<li><a href=\"deconnexion.php\">Déconnexion</a></li>";}
                            else {echo "<li><a href=\"connexion.php\">Identification</a></li>";}
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
    
    
    <!-- Forulaire d'ajout -->
    <div class="formulaire_ajout">
        <form id="ajout_recette" action="./form_recette.php" method="POST">
            <fieldset>
                <legend> Ajouter une recette </legend>
                
                <label for="titre">Titre de la recette : </label>
                <input required type="text" name="titre" placeholder="Tarte aux pommes">

                <label for="type_plat"> Type de la recette : <label>
                <p class="radio">
                    <input type="radio" name="type_plat" value = "Entrée" id="entrée">
                    <label for="entrée">Entrée</label>
                </p>
                
                <p class="radio">
                    <input type="radio" name="type_plat" value = "Plat" id="plat">
                    <label for="plat">Plat</label>
                </p>

                <p class="radio">
                    <input type="radio" name="type_plat" value = "Dessert" id="dessert">
                    <label class="radio" for="dessert">Dessert</label>
                </p>
                
                <label for="type_cuisine"> Type de cuisine : </label>
                <p><select required name = "type_cuisine" id="type_cuisine">
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
                </select></p>

                <label for="temps">Temps de préparation (en minutes) : </label>
                <input required type="number" name="temps" placeholder="15">

                <label for="nb_personne">Nombre de personnes : </label>
                <input required type="number" name="nb_personne" placeholder="4">

                <label for="auteur">Pseudo : </label>
                <input required type="text" name="auteur" placeholder="toto">

                <label for="email">Adresse mail : </label>
                <input required type="email" name="email" placeholder="toto.tata@exemple.com">

                <label for="ingrédients">Ingrédients : </label>
                <textarea required name="ingrédients" rows="10" placeholder="pommes, pâte à tarte, ..."></textarea>

                <label for="instructions">Instructions de préparation : </legend>
                <textarea required name="instructions" rows="10" placeholder="Mettre les pommes dans la pâte ..."></textarea>

                <label for="image">Illustration : </label>
                <input required type="url" name="image">

                <label for="date_ajout">Date : </label>
                <input required type="date" name="date_ajout"> 

                <p><button class = "submit-btn" type="submit"> Valider</button></p>
            </fieldset>
        </form>
    </div>
    

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
