<?php

session_start();

$adresse = $_REQUEST["adresse_email"];
$mdp = $_REQUEST["mot_de_passe"];

$comptes = json_decode(file_get_contents("./compte.json"), true);

$trouve = false;
foreach ($comptes as $c) {
    if ($c["email"] == $adresse && $c["pwd"] == md5($mdp)) {
        $trouve = true;
        echo $c["email"];
        http_response_code(201);   
    }
    else {
        http_response_code(400);
    }
}

$_SESSION["connexion"] = $trouve;


?>