window.addEventListener("DOMContentLoaded", function() {
    var formulaire = document.getElementById("ajout_recette");

    formulaire.addEventListener("submit", function(event) {
        event.preventDefault(); //inhibe l'action par default
        
        var data = new FormData(formulaire); //récupère champs formulaire
        var requete = new XMLHttpRequest();

		// on envoie la requête à l'URL du webservice
		requete.open("POST", "form_recette.php");
        requete.send(data);
    });

});
