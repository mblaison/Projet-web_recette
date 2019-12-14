<?php
	
	include "bdd.php";

	if (! empty( $_REQUEST["recherche"])){
		$research = $_REQUEST["recherche"];
		$res = search_cocktail($research,get_cocktail());
		http_response_code(200);

		echo $res;
	}else{
		http_response_code(400);
	}
?>