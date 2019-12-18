window.addEventListener("DOMContentLoaded",function(){
    var form_inscript = document.getElementById("id_form");
    form_inscript.addEventListener("submit",function(event){
        event.preventDefault();
        console.log("test")
        data_formulaire = new FormData(form_inscript);
        var requete = new XMLHttpRequest();
		requete.open("POST","ws_connexion.php");
		requete.send(data_formulaire);
    });

    requete.addEventListener("load",function(event){
        console.log(requete.responseText);
    });

});