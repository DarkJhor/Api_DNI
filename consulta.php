<?php 
$dni = htmlentities($_POST['dni']);

error_reporting(0);

$url = "https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1heG1jbV92aXBAaG90bWFpbC5jb20ifQ.0xkHI_pPqS2CA3bK0UldWZqzjfp26jJHr7GQuJGahlU";

$jsonpractica=file_get_contents($url);

$datos=json_decode($jsonpractica);

$dni=$datos->{'dni'};
$nombres=$datos->{'nombres'};
if ($nombres) {
	echo "EL DNI QUE CONSULTO LE PERTENECE A : ".$nombres;
}else{
	echo "No existe datos del DNI ingresado.";
}


 ?>