<?php
	session_start();

	$nom = $_REQUEST["titre"];
	$type= $_REQUEST["type"];
	$composant = $_REQUEST["Composant"];
	$temps = $_REQUEST["temps"];
	$photo = $_REQUEST["photo"];
	$photo_fichier = $_REQUEST["photo_fichier"];
	$date = $_REQUEST["date"];
	$desc = $_REQUEST["description"];
	$instruction = $_REQUEST["recette"];
	$diff = $_REQUEST["difficulte"];
	$mail = $_REQUEST["adresse"];

	// conversion de l'indicateur de difficulté (1,2,3,4,5) en barre d'étoiles:
    $diff_1 = "&#9733; &#9734; &#9734; &#9734; &#9734;";
    $diff_2 = "&#9733; &#9733; &#9734; &#9734; &#9734;";
	$diff_3 = "&#9733; &#9733; &#9733; &#9734; &#9734;";
    $diff_4 = "&#9733; &#9733; &#9733; &#9733; &#9734;";
    $diff_5 = "&#9733; &#9733; &#9733; &#9733; &#9733;";
    $diff_tab = [$diff_1, $diff_2, $diff_3, $diff_4, $diff_5];

    // stockage des etoiles en fonction du niveau de difficulte
    $diff_et = $diff_tab[$diff -1];


/*
	$nouvelEmplacementFichierUploade = null;
    $nomFichierUploade = null;
    if (! empty($_FILES["photo_fichier"])) {
        $nomFichierUploade = $_FILES["photo_fichier"]["name"];
        $nouvelEmplacementFichierUploade = __DIR__ . "/" . $nomFichierUploade; // __DIR__ représente le dossier dans lequel se trouve ce fichier
        move_uploaded_file($_FILES["photo_fichier"]["tmp_name"], $nouvelEmplacementFichierUploade);
    }
*/
    $emplacement_fichier = "./bdd.json";

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
            "nom" => $nom,
            "composant" => $composant,
            "adresse_auteur" => $adresse,
            "description" => $desc,
            "instructions" => $instruction,
            "difficulte" => $diff_et, // get_diffEt()
			"type" => $type,
			"temps" => $temps,
			"photo" => $photo,            //get_photo();
			"date" => $date,
        ]);

        echo $donnees;

        // On encode le nouveau contenu
        $nouveau_contenu = json_encode($donnees) ."\n";
        file_put_contents($emplacement_fichier, $nouveau_contenu,FILE_APPEND);
        //file_put_contents($emplacement_fichier, "\n");
 
        }


?>