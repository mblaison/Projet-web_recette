<?php
## Fichier avec les fonctions
include ('bdd_recipe.php');

## Donnée de recherche
$r = $_REQUEST["r_wanted"];


## Appel de la fonction "get_recipe()"
$resultat = get_recipe($r);

## renvoie des données au format json
echo json_encode($resultat);


?>