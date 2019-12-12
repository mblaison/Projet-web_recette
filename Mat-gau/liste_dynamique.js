window.addEventListener("DOMContentLoaded",function(){

	var recherche = document.getElementById("form_recherche");
	
	function get_match(){	
		var requete = new XMLHttpRequest();
		requete.addEventListener("load",function(event){
		});

		var a_rechercher = new FormData(recherche);

		var b=requete.open("POST","ws_dynamique.php");
		requete.send(a_rechercher);
		return b;
	};

	function show_list(resultats){
		console.log(resultats);
		var affichage_res = document.getElementById("js");
		
		//affichage_res.innerHTML ="";

		/*for (var cocktail in resultats){
			affichage_res.innerHTML += 
										"<div class=\"row\">"+
										"<div class=\"col-lg-4 col-md-6 mb-4\">"+
										"<div class=\"card h-100\">"+
  										"<a href=\"#\"><img class=\"card-img-top\" src="+ cocktail["photo"] + " alt=\"\"></a>"+
 										"<div class=\"card-body\">"+
    									"<h4 class=\"card-title\">"+
      									"<a href=\"#\"> "+cocktail["titre"]+"</a>"+
    									"</h4>"+
    									"<h5>"+ cocktail["composant"] + "</h5>"+
    									"<p class=\"card-text\">" + cocktail["description"] + "</p>"+
  										"</div>"+
  										"<div class=\"card-footer\">"+
    									"<small class=\"text-muted\">"+ cocktail["difficulte"]+ "</small>"+
  										"</div>"+
										"</div>"+
										"</div>";
		};*/

		for (var cocktail in resultats){
			affichage_res.innerHTML += "<h1>test</h1>";

		};			
	};

	recherche.addEventListener('submit',function(event){
		event.preventDefault();
		//show_list(get_match());
		var a =get_match();
		console.log(a);
		//show_list();
	});
});