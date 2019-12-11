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
                            <li><a href="recherche.html">Recherche</a></li>
                            <li><a href="addRecipe.php">Ajout</a></li>
                            <li><a href="identification.html">S'identifier</a></li>
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
                <form class="filter-search" id="recherche" action="./form_recherche.php" method="GET">

                    <input name="r_wanted" type="text" placeholder="Muffin au chocolat">

                    <button type="submit">Chercher</button>
                </form>
            </div>
        </div>
    </div>




    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <img src="img/intro-img.jpg" alt="">
                            <h2>Chipotle Sweet Potato Noodle with Roasted Corn</h2>
                            <div class="recipe-time">
                                <ul>
                                    <li>Prep time: <span>10 min</span></li>
                                    <li>Cook time: <span>10 min</span></li>
                                    <li>Yield: <span>5</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ingredient-list">
                            <div class="recipe-btn">
                                <a href="#">Print Recipe</a>
                                <a href="#" class="black-btn">Pin Recipe</a>
                            </div>
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <div class="salad-list">
                                    <ul>
                                        <li>1 brick of frozen udon</li>
                                        <li>1/2 cup kimchi, plus a bit of kimchi juice</li>
                                        <li>1 tablespoon of butter</li>
                                        <li>1 sac of mentaiko</li>
                                        <li>sliced green onions and nori, to finish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in sodales dui, a
                                blandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh.
                                Nam massa odio, porttitor vitae efficitur non, ultricies volutpat tellus. Cras egestas
                                in lacus a finibus. Suspendisse sed urna at elit condimentum viverra. Suspendisse non
                                lobortis nisi. Maecenas accumsan quam quis porta laoreet. Aliquam felis odio, aliquet
                                fermentum semper at, porttitor ac mi. Duis vel condimentum risus. Phasellus eu dolor vel
                                neque commodo accumsan eget et enim. Pellentesque non elit sed risus tincidunt aliquam
                                eu eget metus.</p>
                            <p>Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus, maximus
                                tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non auctor
                                ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a, ornare ipsum.
                                Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac. Nullam viverra
                                tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis lacus, non rutrum diam
                                volutpat id. </p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul>
                                <li>
                                    <span>01.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>02.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                                <li>
                                    <span>03.</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in
                                    sodales dui, a blandit nunc. Pellentesque id eros venenatis, sollicitudin neque
                                    sodales, vehicula nibh. Nam massa odio, porttitor vitae efficitur non, ultricies
                                    volutpat tellus. Cras egestas in lacus a finibus. Suspendisse sed urna at elit
                                    condimentum viverra. Suspendisse non lobortis nisi. Maecenas accumsan quam quis
                                    porta laoreet. Aliquam felis odio, aliquet fermentum semper at, porttitor ac mi.
                                </li>
                                <li>
                                    <span>04.</span>
                                    Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                                    Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus,
                                    maximus tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non
                                    auctor ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a,
                                    ornare ipsum. Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac.
                                    Nullam viverra tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis
                                    lacus, non rutrum diam volutpat id.
                                </li>
                            </ul>
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