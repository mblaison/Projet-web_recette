<?php
function get_recipe($r)
{
    #fichier json contenant les recettes
    $file = "./recipes.json";
    
    # récupérer les données du fichier (càd la recette)
    if (file_exists($file)) {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        ## Si la bdd est vide, créer la bdd
        ##if ($data == "") {$data = [];}


        ## Si on veut afficher toutes les recettes
        if ($r == "" ) {
            return $data;
        }
        
        ## on recherche une recette en particulier
        else {
            $result_search = [];

            foreach ($data as $recette) {
                foreach ($recette as $element) {
                    $pos = stripos($element, $r);

                    ## si il trouve une correspondance, ajouter la recette dans le nouvel array
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


function add_recipe($r)
{
    #fichier json contenant les recettes
    $file = "./recipes.json";

    # récupérer les données du fichier (càd la recette)
    if (file_exists($file))
    {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        ##if ($data == "") { $data = [];}
    }

    array_push($data,$r);

    #ré-encondage
    $nouveau_contenu = json_encode($data);
    file_put_contents($file,$nouveau_contenu);
}


function get_ids($login,$mdp)
{
    #fichier json contenant les recettes
    $file = "./login.json";
    
    # récupérer les données du fichier (càd la recette)
    if (file_exists($file)) {
        $contenu = file_get_contents($file);
        $data = json_decode($contenu, true);

        $result_connexion = false;

        foreach ($data as $ids) {
                $pos_login = strpos($ids.login, $login);
                $pos_mdp = strpos($ids.mdp, $mdp);

                ## si il trouve une correspondance, ajouter la recette dans le nouvel array
                if ($pos_login !== false && $pos_mdp !== false) {
                    $result_connexion = true;
                }
            }
        }

        return $result_connexion;
}

?>