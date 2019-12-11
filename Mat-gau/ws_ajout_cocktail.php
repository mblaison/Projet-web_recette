<?php
include"./bdd.php";

add_CocktailToJSON(get_formData());
http_response_code(201);


?>