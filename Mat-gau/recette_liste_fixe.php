<?php include 'entete.html';?>
<?php include 'recuperation_recette.php';?>
<div>
<div class="container">
<div style="text-align: center">
<h1> Toute nos recette depuis la creation du site </h1>
<div class="row"> 

<?php
$donnees = get_recipe();
foreach ($donnees as $recettes)
{
echo '
<div class="col-lg-4 col-md-6 mb-4">
<div class="card h-100">
  <a href="#"><img class="card-img-top" src="'. $recettes["photo"] .'" alt=""></a>
  <div class="card-body">
    <h4 class="card-title">
      <a href="#">'. $recettes["titre"] .'</a>
    </h4>
    <h5>' . $recettes["composant"].'</h5>
    <p class="card-text">'. $recettes["description"] . '</p>
  </div>
  <div class="card-footer">
    <small class="text-muted">' . $recettes["difficulte"] .'</small>
  </div>
</div>
</div>
';
};
?>

</div> <!-- fini row-->
</div> <!-- fini center-->
</div> <!-- fini container-->
</div>

<?php include 'bas_page.html'?>