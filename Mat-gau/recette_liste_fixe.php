<?php include 'entete.html';?>

<?php 
$emplacement_fichier = "./data.json";
$contenu_fichier = file_get_contents($emplacement_fichier);
$donnees = json_decode($contenu_fichier, true);

echo "<ol>";
foreach ($donnees as $rec) {
    echo "<li>" . $rec["titre"] . " (" . $rec["type_cuisine"] . ") - par " . $rec["adresse_auteur"] . " : " . $rec["instructions_recette"] . "</li>";
}
echo "</ol>";

?>

<?php include 'bas_page.html'?>