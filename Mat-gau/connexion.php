<?php
session_start();

$adresse = $_REQUEST["adresse_email"];
$mdp = $_REQUEST["mot_de_passe"];

$comptes = json_decode(file_get_contents("./compte.json"), true);

$trouve = false;
foreach ($comptes as $c) {
    if ($c["email"] == $adresse && $c["pwd"] == md5($mdp)) {
        $trouve = true;
    }
}

$_SESSION["connexion"] = $trouve;

header("Location: status.php");


?>