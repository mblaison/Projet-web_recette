<?php

session_start()

function get_recipe ()
{
    #fichier json contenant les recettes
    $file = "./recipes.json"

    # récupérer les données du fichier (càd la recette)
    if (file_exists($file))
    {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        if ($data == "") {$data = [];}
    }

    return $data;
}




function add_recipe ($r)
{
    #fichier json contenant les recettes
    $file = "./recipes.json"

    # récupérer les données du fichier (càd la recette)
    if (file_exists($file))
    {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        if ($data == "") { $data = [];}
    }

    array_push($data, [
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
    ]);

    #ré-encondage
    $nouveau_contenu = json_encode($data);
    file_put_contents($file,$nouveau_contenu);

}


?>