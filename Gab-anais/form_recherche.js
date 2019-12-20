window.addEventListener("DOMContentLoaded", function() {

  var formulaire = document.getElementById("recherche");
    
  formulaire.addEventListener("submit", function(event) {
    event.preventDefault(); //inhibe l'action par default
    var data = new FormData(formulaire); //récupère champ formulaire
    var requete = new XMLHttpRequest();


    requete.onreadystatechange = function() {
      if(requete.readyState == 4 && requete.status == 200){
        //alert(requete.responseText);
        var recipe = JSON.parse(requete.responseText);
        console.log(recipe);
        
        document.getElementById("res_recherche").innerHTML = "";

        for (var i=0; i < recipe.length; i++ ) {
          document.getElementById("res_recherche").innerHTML +=
          "<section class = \"single-page-recipe spad\">" +
          //classe colonne de gauche
          "<div class=\"container\">" + 
            "<div class=\"row\">" + 
              "<div class=\"col-lg-5\">" + 
                "<div class=\"ingredients-item\">" +
                      
                  // titre + image
                  "<div class=\"intro-item\">" + 
                    "<img src=" + recipe[i].image + ">" + 
                    "<h2>" + recipe[i].titre + "</h2" +
                  "</div>" +
                    //Temps de préparation + types plat et cuisine
                    "<div class=\"recipe-time\">" + 
                      "<p>Temps de préparation : " + recipe[i].temps + " min </p>" +
                      "<p> Type de plat : " + recipe[i].type_plat + "</p>" +
                      "<p> Type de cuisine : " + recipe[i].type_cuisine + "</p>" + 
                    "</div>" + 
                  
            
                  // ingrédients
                  "<div class =\"ingredient-list\">" +
                    //"<div class=\"list-item\">" + 
                      "<h3> Ingrédients </h3>" + 
                      "<p>" + recipe[i].ingrédients + "</p>" + 
                    //"</div>" + 
                  "</div>" +

                "</div>" + 
                
              "</div>" + 
            "</div>" +

            //classe colonne de droite
            "<div class=\"col-lg-7\">" + 
              "<div class=\"recipe-right\">" + 
                "<div class=\"recipe-desc\">" +
                  "<h3> Description </h3>" + 
                  "<p> Auteur : " + recipe[i].auteur + "</br>" + 
                  "Email : " + recipe[i].email + "</br>" + 
                  "Ajouté le " + recipe[i].date_ajout + "</p>" + 
                "</div>" +
                    
                "<div class=\"instruction-list\">" + 
                  "<h3> Instructions </h3>" + 
                  "<p>" + recipe[i].instructions + "</p>" + 
                "</div>" + 
              "</div>" + 
            "</div>" + 
              
          "</div>" + 
        "</section>";

        //FIN FOR
        }
      // FIN IF
      }
    // FIN ONREADYSTATECHANGE
    };
    // on envoie la requête à l'URL du webservice
		requete.open("POST", "form_recherche.php");
    requete.send(data);
  // FIN SUBMIT
  });

//FIN DOMCONTENTLOADED
});