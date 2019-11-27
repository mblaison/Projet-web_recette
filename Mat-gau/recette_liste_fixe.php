<?php include 'entete.html';?>

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

$donnees = get_recipe();

echo "<ol>";
foreach ($donnees as $recettes)
{
echo "<li> <img src=" . $recettes["photo"] . ">\n" . $recettes["titre"] . "</li>";
}
echo "</ol>";
?>


<?php include 'bas_page.html'?>