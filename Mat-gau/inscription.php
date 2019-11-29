<?php

$email = $_REQUEST["email"];
$mdp = $_REQUEST["mdp"];
$mdpchif = md5($mdp);


$emplacement_fichier = "./compte.json";

// Si le fichier JSON existe, on passe à la suite
if (file_exists($emplacement_fichier)) {
    // Lecture du fichier : on obtient une chaîne de caractères
    $contenu_fichier = file_get_contents($emplacement_fichier);
    // Décodage du format de fichier : on obtient un tableau
    $donnees = json_decode($contenu_fichier, true);
    // La première fois, si le fichier était vide, on initialise le
    // contenu avec un nouveau tableau vide
    if ($donnees == "") {
        $donnees = [];
    }

    // On ajoute les informations reçues du formulaire, à la
    // liste des informations conservées
    array_push($donnees, [
        "email" => $email,
        "mdp" => $mdpchif,
    ]);

    $nouveau_contenu = json_encode($donnees);
    // On enregistre ce nouveau contenu dans le fichier (on écrase le contenu précédent)
    file_put_contents($emplacement_fichier, $nouveau_contenu);
} else {
    file_put_contents($emplacement_fichier, '{}');
}

?>