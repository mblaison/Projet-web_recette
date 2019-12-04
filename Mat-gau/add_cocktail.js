window.addEventListener("DOMContentLoaded",function(){
	var formulaire = document.getElementById("formulaire");
	function new_cocktail(){
		var requete = new XMLHttpRequest();
		requete.addEventListener("load",function(event){

		});

		
		data_formulaire = new FormData(formulaire);

		requete.open("POST","ws_ajout_cocktail.php");
		requete.send(data_formulaire);

	};
	
	formulaire.addEventListener('submit',function(event){
		event.preventDefault();
		new_cocktail();
	});

});