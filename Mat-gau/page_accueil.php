<?php include 'entete.html';?>
<?php include 'recuperation_recette.php';?>

    
    
    <div class="container">
    <div style="text-align: center">
    <p>
     <h1>Bienvenue sur Cockthèque, la première BU des cocktails  </h1>
</p>
     </div>
    
        <div class="row" >
        
            <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://www.urbankitsupply.com/wp/en/wp-content/uploads/sites/4/2018/12/Glogi-Drink-Main-image-2-900x350.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="https://cocktailseo.com/wp-content/uploads/2018/10/cocktail-seo-900x350.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid" src="https://www.unchainedbride.wedding/wp-content/uploads/2017/08/PROSECCO-COCKTAILS--900x350.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div> <!-- fini row-->
    </div> <!-- fini container -->

    <div>
        <h2>Nos neuf derniers cocktails</h2>
    </div>

    <div class="row"> 
        <?php
        $donnees = get_recipe();

          for ($i=count($donnees)-1;$i>=count($donnees)-9;$i--)
          {
            $recette = $donnees[$i];
          echo '
          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="'. $recette["photo"] .'" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">'. $recette["titre"] .'</a>
              </h4>
              <h5>' . $recette["composant"].'</h5>
              <p class="card-text">'. $recette["description"] . '</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">' . $recette["difficulte"] .'</small>
            </div>
          </div>
          </div>
          ';
          };
        ?>

    </div> <!-- fini row-->
</div>


   

    <?php include 'bas_page.html'?>