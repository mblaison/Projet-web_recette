window.addEventListener("DOMContentLoaded", function() {
    var formulaire = document.getElementById("recherche");
    formulaire.addEventListener("submit", function(event) {
        event.preventDefault(); //inhibe l'action par default
        var data = new FormData(formulaire); //récuoère champs formulaire
        var requete = new XMLHttpRequest();
		// on envoie la requête à l'URL du webservice
		requete.open("GET", "form_recherche.php");
        requete.send(data);
    });

});
