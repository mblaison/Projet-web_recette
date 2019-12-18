document.addEventListener("DOMContentLoaded", function() {

    var formulaire = document.getElementById("identification");
    formulaire.addEventListener("submit", function(event) {
        event.preventDefault();
        var data = new FormData(formulaire);
        var requete = new XMLHttpRequest();

        requete.onreadystatechange  = function() {
            if(requete.readyState == 4 && requete.status == 200){
                window.location.href = "./accueil.php";
            }
        }

        requete.open("POST", "form_connexion.php");
        requete.send(data);
    });
});