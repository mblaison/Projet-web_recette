<?php
## Fichier avec les fonctions
include ('bdd_recipe.php');


## Données du login
$login = $_REQUEST["login"];
$mdp = $_REQUEST["mdp"];


## Récupération des logins
$comptes = get_ids();
console.log($comptes);


## Vérification de la connexion
$find = false;
foreach ($comptes as $p) {
    if ($p["login"] == $login && $p["mdp"] == md5($mdp)) {
        $find = true;
    }
}

## Changement d'état de la session
$_SESSION["connexion"] = $find;

header("Location : state.php");

?>