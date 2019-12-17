window.addEventListener("DOMContentLoaded",function(){

	var recherche = document.getElementById("form_recherche");

	function show_list(resultats){
		console.log(resultats);
		var affichage_res = document.getElementById("js");
		
		

		affichage_res.innerHTML ="";

		for (i in resultats){
			var cocktail = resultats[i];
			console.log(cocktail);
			affichage_res.innerHTML += 
										
										"<div class=\"col-lg-4 col-md-6 mb-4\">"+
										"<div class=\"card h-100\">"+
  										"<a href=\"#\"><img class=\"card-img-top\" src="+ cocktail["photo"] + " alt=\"\"></a>"+
 										"<div class=\"card-body\">"+
    									"<h4 class=\"card-title\">"+
      									//"<a href=\"#\"> "+cocktail["titre"]+"</a>"+
    									"</h4>"+
    									"<h5>"+ cocktail["composant"] + "</h5>"+
    									"<p class=\"card-text\">" + cocktail["description"] + "</p>"+
  										"</div>"+
  										"<div class=\"card-footer\">"+
    									"<small class=\"text-muted\">"+ cocktail["difficulte"]+ "</small>"+
  										"</div>"+
										"</div>"+
										//"<div> <input type=\"button\" value=\"Supprimer\" id=\"suppr\" data-cocktail_id="+cocktail["id_cocktail"]+"> </div> "+
										"<input type=\"button\" value=\"Supprimer\" id=\"suppr\" data-cocktail_id="+cocktail["id_cocktail"]+"> "+
										"</div>";
		};
	};

	recherche.addEventListener('submit',function(event){
		event.preventDefault();

		var requete = new XMLHttpRequest();
		var contenu_recherche = document.getElementById("recherche_texte");
		requete.addEventListener("load",function(event){
			var resultats = JSON.parse(event.target.responseText);
			//console.log(resultats);
			show_list(resultats);
		});
		

		requete.open('GET',"ws_dynamique.php?recherche="+contenu_recherche.value);
		requete.send();

	});
});