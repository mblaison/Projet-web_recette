<?php


function get_recipe(){
    $file = "data.json";
     if (file_exists($file))
     {
         $contenu = file_get_contents($file);
         $data = json_decode($contenu, true);
 
         if ($data == "") {$data = [];}
     }
 
     return $data;
};

?>
