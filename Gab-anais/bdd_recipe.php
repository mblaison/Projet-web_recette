<?php
## Fonction récupérant les recettes dans la bdd
function get_recipe($r) {
    ## Fichier json contenant les recettes
    $file = "./recipes.json";
    
    ## Récupérer les données du fichier (càd la recette)
    if (file_exists($file)) {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        ## Si on veut afficher toutes les recettes
        if ($r == "" ) {
            return $data;
        }
        
        ## On recherche une recette en particulier
        else {
            $result_search = [];

            foreach ($data as $recette) {
                foreach ($recette as $element) {
                    $pos = stripos($element, $r);

                    ## Si il trouve une correspondance, ajouter la recette dans le nouvel array
                    if ($pos !== false) {
                        array_push($result_search,$recette);
                        break;
                    }
                }
            }

            return $result_search;
        }
    }
}

## Fonction d'ajout de recette
function add_recipe($r) {
    ## Fichier json contenant les recettes
    $file = "./recipes.json";

    ## Récupérer les données du fichier (càd la recette)
    if (file_exists($file)) {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);
    }

    ## Ajout de la recette dans l'array
    array_push($data,$r);

    ## Ré-encondage
    $nouveau_contenu = json_encode($data);
    file_put_contents($file,$nouveau_contenu);
}

?>