window.addEventListener("DOMContentLoaded",function(){
    var requete = new XMLHttpRequest();
    var form_inscript = document.getElementById("id_form");
    form_inscript.addEventListener("submit",function(event){
        event.preventDefault();
        data_formulaire = new FormData(form_inscript);
		requete.open("POST","ws_connexion.php");
		requete.send(data_formulaire);
    });

    requete.addEventListener("load",function(event){
        console.log(requete.responseText);
        if (requete.status == 400){
            alert("mot de passe erroné ou non inscrit")
        }

    });



});