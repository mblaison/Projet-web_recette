document.addEventListener("DOMContentLoaded", function() {

    var formulaire = document.getElementById("identification");
    formulaire.addEventListener("submit", function(event) {
        event.preventDefault();
        var data = new FormData(formulaire);
        var requete = new XMLHttpRequest();
        requete.open("POST", "form_connexion.php");
        requete.send(data);
    });
});