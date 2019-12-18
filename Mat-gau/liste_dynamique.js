window.addEventListener("DOMContentLoaded",function(){


	function show_list(resultats){
		console.log(resultats);
		var affichage_res = document.getElementById("js");

		affichage_res.innerHTML ="";

		if (resultats.length === 0){
			affichage_res.innerHTML="<h2 id =\"no_result\"> La recherche n'a donné aucun résultats</h2>";
		}else{
			for (i in resultats){
				var cocktail = resultats[i];
				console.log(cocktail);
			 	
				affichage_res.innerHTML +=	"<div class=\"col-lg-4 col-md-6 mb-4\">"+
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
	    }
  		suppression();
	};

	function suppression(){ //ajouter var resultats en parametres?
		
		var bouton = document.getElementById("suppr");

		bouton.addEventListener("click",function(){
			console.log("aa");
			var suppr = new XMLHttpRequest();
			var id = bouton.getAttribute("data-cocktail_id");
			console.log(id)
		
			if (confirm("Voulez vous vraiment supprimer ce cocktail?")){

				//var id = bouton.getAttribute("id_cocktail");
				console.log(id);
			
				suppr.open('POST',"ws_suppression.php?data-cocktail_id="+id);
				suppr.send();
			}

			suppr.addEventListener("load",function(event){
				/*var json = new XMLHttpRequest();
				json.open("GET","./bdd.json", false);
				json.send(null);
				var refresh = JSON.parse(json.responseText);
				//var refresh = JSON.parse("bdd.json");*/
				//show_list(refresh);
				//ws_recherche();
				get_resultats();
			});
		});
	};

	/*function ws_recherche(){
		var contenu_recherche = document.getElementById("recherche_texte");

		requete.open('GET',"ws_dynamique.php?recherche="+contenu_recherche.value);
		requete.send();
	};*/

	function get_resultats(){
		var contenu_recherche = document.getElementById("recherche_texte");

		requete.open('GET',"ws_dynamique.php?recherche="+contenu_recherche.value);
		requete.send();

		requete.addEventListener("load",function(event){ // faire une fonction avec cette partie?
			
			if(requete.status == 400){
				alert("Veuillez saisir une recherche");
			}else{
				console.log(event.target.responseText);
				var resultats = JSON.parse(event.target.responseText);
				console.log(resultats);
			
				show_list(resultats);	
			}
		});
	};


	var recherche = document.getElementById("form_recherche");

	var requete = new XMLHttpRequest();
	recherche.addEventListener('submit',function(event){
		event.preventDefault();
		//ws_recherche();
		get_resultats();
	});
});