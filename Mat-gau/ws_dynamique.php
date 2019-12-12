<?php
	
	include "bdd.php";

	$research = $_REQUEST["recherche"];
	search_cocktail($research,get_cocktail());
	http_response_code(200);
?>