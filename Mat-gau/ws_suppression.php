<?php
	include"./bdd.php";

	$id = $_REQUEST["id"];

	del_cocktail($id);
	http_response_code(201);

?>