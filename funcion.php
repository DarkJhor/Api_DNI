<?php 
include 'conexion.php';

//RECEPCIONANDO LOS DATOS
$nombreproducto = $con ->real_escape_string(htmlentities($_POST['nombreproducto']));
$precio = $con -> real_escape_string(htmlentities($_POST['precio']));
$fechavencimiento = $con -> real_escape_string(htmlentities($_POST['fechavencimiento']));
$descripcion = $con -> real_escape_string(htmlentities($_POST['descripcion']));
$stock = $con -> real_escape_string(htmlentities($_POST['stock']));
$fecharegistro = $con -> real_escape_string(htmlentities($_POST['fecharegistro']));

//GUARDAMOS LOS DATOS EN LA BASE DE DATOS.
$inserta_data = $con ->query("INSERT INTO productos VALUES ('','$nombreproducto','$precio','$fechavencimiento','$descripcion','$stock','$fecharegistro')");



echo "DATOS REGISTRADOS COMPLETO....... FELICITACIONES";

 ?>