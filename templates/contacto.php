<!DOCTYPE html>
<html>
<head>
	<title>Solicitud Nuevos Socios</title>
	<link rel="stylesheet" type="text/css" href="../css/solicitud.css">
</head>
<?php 
	include 'head.php';
 ?>
<body>
<section class="container">
 	<div class="col-md-12" id="solicitudNuevos">
	 	<center><img src="../images/titulo-inscripciones.png" width="80%" height="auto"></center><br>	
	 	<form action="" method="POST">
	 		<label>*Nombre</label><br><input type="text" name=""><br>
	 		<label>*Email</label><br><input type="text" name=""><br>
	 		<label>*Teléfono</label><br><input type="text" name=""><br>
			
			<label>*¿Es socio?</label><br>
			<select name="" style="width: 80%">
				<option value="--">Sí</option>
				<option value="" >No</option>
			</select>
			<br>
			<label>Añadir comentarios</label><br>
			<textarea rows="3"></textarea><br>
			<input type="submit" name="" value="Enviar"><br>
		</form>
		<center><p style="margin:1%">*Campos Obligatorios</p></center>
	 	</div>
 </section>
 <?php 
	include 'footer.php';
 ?>
</body>
</html>
