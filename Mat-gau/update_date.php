<?php

$file_array = scandir('./');
$file_date = [];


foreach ($file_array as $file){
	$time=filemtime($file);
	array_push($file_date, $time);
};

$last_file = (max($file_date));
$update_date = date("d.m.y",$last_file);


echo '<p class="m-0 text-center text-white">Mis à jour le '.$update_date.'  </p>';

?>

 