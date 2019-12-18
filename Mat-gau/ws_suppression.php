<?php
	include"./bdd.php";

	$id = $_REQUEST["data-cocktail_id"];

	del_cocktail($id);
	http_response_code(201);

?>