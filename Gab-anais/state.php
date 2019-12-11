<?php
session_start();

$co = $_SESSION["connexion"];

if ($co) {
    echo "Vous êtes connecté";
}
else {
    echo "Raté, rééssayer ?";
}

?>