window.addEventListener("DOMContentLoaded",function(){

	var bouton = document.getElementById("suppr");

	bouton.addEventListener("click",function(){
		
		console.log("aa");
		var suppr = new XMLHttpRequest();
		
		if (confirm("Voulez vous vraiment supprimer ce cocktail?")){

			var id = bouton.getAttribute("id_cocktail");
			console.log(id);
			
			suppr.open('POST',"ws_suppression.php");
			suppr.send("id");
		}
	});

});