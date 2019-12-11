<?php
## Fichier avec les fonctions
include ('bdd_recipe.php');

## Donnée de recherche
$r = $_REQUEST["r_wanted"];


## Appel de la fonction "add_recipe()"
$resultat = get_recipe($r);

echo json_encode($resultat);


?>