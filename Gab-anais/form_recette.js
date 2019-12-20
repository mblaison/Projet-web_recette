window.addEventListener("DOMContentLoaded", function() {
    var formulaire = document.getElementById("ajout_recette");

    formulaire.addEventListener("submit", function(event) {
        event.preventDefault(); //inhibe l'action par default
        
        var data = new FormData(formulaire); //récupère champs formulaire
        var requete = new XMLHttpRequest();

        requete.onreadystatechange  = function() {
            if(requete.readyState == 4 && requete.status == 200){
                // Redirection vers la page d'accueil après la connexion
                window.location.href = "./recettes.php";
            }
        }

		// on envoie la requête à l'URL du webservice
		requete.open("POST", "form_recette.php");
        requete.send(data);
    });

});
