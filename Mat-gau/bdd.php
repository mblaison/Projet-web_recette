<?php

get_formData(){
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
};

get_cocktail($formulaire_data){
    $json_file = "./bdd.json";

    // Si le fichier JSON existe, on passe à la suite
    if (file_exists($json_file)) {
        // Lecture du fichier : on obtient une chaîne de caractères
        $json_data = file_get_contents($json_file);
        // Décodage du format de fichier : on obtient un tableau
        $cocktails_array = json_decode($json_data, true);
        // La première fois, si le fichier était vide, on initialise le
        // contenu avec un nouveau tableau vide
        if ($cocktails_array == "") {
            $cocktails_array = [];
        }

        // On ajoute les informations reçues du formulaire, à la
        // liste des informations conservées
        array_push($cocktails_array, [
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

     return $cocktails_array;
	
};

add_CocktailToJSON($cocktails_array){
    $json_file = "./bdd.json";

    // On encode le nouveau contenu
    $json_contents = json_encode($cocktails_array);
    //$nouveau_contenu = json_encode($donnees) ."\n";
    //file_put_contents($json_file, $json_contents,FILE_APPEND);
    file_put_contents($json_file, $json_contents);
    //file_put_contents($emplacement_fichier, "\n");


};

?>