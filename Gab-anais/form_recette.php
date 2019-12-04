<?php
## Fichier avec les fonctions
include ('bdd_recipe.php');


## Données de la recette 
$titre = $_REQUEST["titre"];
$type = $_REQUEST["type_plat"];
$cuisine = $_REQUEST["type_cuisine"];
$temps = $_REQUEST["temps"];
$personnes = $_REQUEST["nb_personne"];
$auteur = $_REQUEST["auteur"];
$email = $_REQUEST["email"];
$ingrédients = $_REQUEST["ingrédients"];
$instructions = $_REQUEST["instructions"];
$image = $_REQUEST["image"];
$ajout = $_REQUEST["date_ajout"];

## Stockage des données à récupérer
$recette = [
    "titre" => $titre,
    "type_plat" => $type,
    "type_cuisine" => $cuisine,
    "temps" => $temps,
    "nb_personne" => $personnes,
    "auteur" => $auteur,
    "email" => $email,
    "ingrédients" => $ingrédients,
    "instructions" => $instructions,
    "image" => $image,
    "date_ajout" => $ajout
];

## Appel de la fonction "add_recipe()"
add_recipe($recette);

?>