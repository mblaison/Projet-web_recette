<?php
session_start();

## fichier avec les logins
include ("login.json");

## Données du login
$login = $_REQUEST["login"];
$mdp = $_REQUEST["mdp"];

## Récupération des logins
$comptes = json_decode(file_get_contents("./login.json"), true);

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