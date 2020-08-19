<?php 

include 'conexion.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">

 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
 </head>
 <body>


 <div class="container">
 	<div class="row">
 		<div class="col s12 l12 m12">
 			<div class="card">
 				<div class="card-title">
 					<h4>CONSULTANDO A LA RENIEC</h4>				 				
 				</div>
 				<div class="card-content">
 					<form action="consulta.php" method="POST">
 						<input type="number" name="dni" value="" placeholder="Ingrese su Dni"> 						
 						
 					</form> 					
 				</div>
 				
 			</div> 			
 		</div> 		
 	</div> 	
 </div>





 <div class="container">
 	<div class="row">
 		<div class="col s6 l6 m6">
 			<div class="card">
 				<div class="card-title">
 					<h4 class="left-align" >REGISTRO DE PRODUCTOS</h4>
 				</div>
 				<div class="card-content">
 					<form action="funcion.php" method="post" accept-charset="utl-8">
 						    <input type="text" name="nombreproducto" value="" placeholder="Ingrese su nombre de producto">
 						    <input type="number" name="precio" value="" placeholder="Ingrese el Precio">

 						    <input type="date" name="fechavencimiento" class="datepicker" value="" placeholder="">

 						    <input type="text" name="descripcion" value="" placeholder="Ingrese la descripcion">

 						    <input type="number" name="stock" value="" placeholder="Ingrese el Stock">

 						    <input type="date" name="fecharegistro" value="" placeholder="">

 						    <input type="submit" class="btn waves-effect waves-light" name="REGISTRE" value="REGISTRE">						
 					    </form>
 			    </div>
 			    <div class="card-action">
 				    <h6>Registro de datos de productos</h6> 				
 			    </div>
 		    </div>
 	    </div>
 	    <div class="col s6 l6 m6">
 		    <div class="card">
 			    <div class="card-title">
 			    	<h4>Tabla de productos</h4>
 			    </div>
 			    <div class="card-content">
 				    <table>
 					    <caption>Listado de productos</caption>
 					    <thead>
 						<tr>
 							<th>#</th>
 							<th>NOMBRE PRODUCTO</th>
 							<th>PRECIO</th>
 						</tr>
 					</thead>
 					<tbody>
<?php 
$sel = $con->query("SELECT * FROM productos");

while ($var = $sel->fetch_assoc()) {
 ?>
 						<tr>
 							<td><?php echo $var['idproductos'] ?></td>
 							<td><?php echo $var['nombreproducto'] ?></td>
 							<td><?php echo $var['precio'] ?></td>
 						</tr>
<?php } ?>

 					</tbody>
 				</table>


 			   </div>	
 			   <div class="card-action">
 			   	<h6>Lista de productos</h6> 			   				
 			   	</div>			
 			</div> 			
 		</div> 		
 	</div>




 	 	
 </body>
 </html>