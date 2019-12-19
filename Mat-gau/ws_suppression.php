<?php
	session_start();
	
	include"./bdd.php";

	$id = $_REQUEST["data-cocktail_id"];

	//echo $_SESSION;

	if ($_SESSION["connexion"]){
		del_cocktail($id);
		http_response_code(200);
	}else{
		http_response_code(403);
	}
?>