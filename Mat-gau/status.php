<?php include 'entete.html';

session_start();

$ok = $_SESSION["connexion"];
echo $_ok;

if ($ok) {
    echo '<div style="text-align: center">';
    echo 'Vous êtes connecté !<br><a href="deconnexion.php">se déconnecter</a>';
    
} else {
    echo 'Vous n\'êtes pas connecté.<br><a href="formulaire_identification.php">essayer à nouveau</a>';
}


include 'bas_page.php';?>