<?php

function get_formData(){
	$nom = $_REQUEST["titre"];
	$type= $_REQUEST["type"];
	$composant = $_REQUEST["Composant"];
	$temps = $_REQUEST["temps"];
	$photo = $_REQUEST["photo"];
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

    return $form_data=[
    	"nom" => $nom,
        "composant" => $composant,
        "adresse_auteur" => $mail,
        "description" => $desc,
        "instructions" => $instruction,
        "difficulte" => $diff_et, 
		"type" => $type,
		"temps" => $temps,
		"photo" => $photo,            
		"date" => $date,
    	"id_cocktail" => md5(rand())];
}

function get_cocktail(){
    $json_file = "./bdd.json";

    // Si le fichier JSON existe, on passe à la suite
    if (file_exists($json_file)) {
        // Lecture du fichier : on obtient une chaîne de caractères
        $json_data = file_get_contents($json_file);
        // Décodage du format de fichier : on obtient un tableau
        $cocktails_array = json_decode($json_data, true);
        
    return $cocktails_array;
	}
}

function add_CocktailToJSON($form_data){
    $json_file = "./bdd.json";

    $list_cocktails = get_cocktail();

    array_push($list_cocktails, $form_data );


    $json_contents = json_encode($list_cocktails);
    file_put_contents($json_file, $json_contents);
}


function search_cocktail($research,$cocktails_array){

    $resultats = [];
    foreach ($cocktails_array as $cocktail){   
        foreach ($cocktail as $cocktail_item){
            if (stripos($cocktail_item, $research)!== false){
                    array_push($resultats, $cocktail);
                    break;    
            };
        };
    };
    //var_dump($resultats);
    //var_dump(json_encode($resultats));
    return json_encode($resultats);
}

function del_cocktail($id){

    $array =get_cocktail();
    
    for ($i=0; $i<=count($array); $i++) {

        $cocktail =$array[$i];

        if ($cocktail["id_cocktail"] == $id) {
            unset($array[$i]);
        };
    };
    
    $json_contents = json_encode($array);
    file_put_contents("bdd.json", $json_contents);
}

?>