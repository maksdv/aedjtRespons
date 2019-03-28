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
	 		<label>*Appellido</label><br><input type="text" name=""><br>
	 		<label>*Seminario al que asiste</label><br><input type="text" name=""><br>
			<label>*Email</label><br><input type="text" name=""><br>
			<label>*Precio del seminario</label><br><input type="text" name=""><br>
			<label>*Forma de Pago</label><br>
			<select name="" style="width: 80%">
				<option value="--">--</option>
				<option value="">Transferencia bancaria</option>
				<option value="">Pago en efectico en la cuenta de AEDJT</option>
				<option value="">En efectivo al inicio del curso( previo consentimiento del organizador )</option>
			</select>
			<br>
			<label>*Delegación organizadora </label><br>
			<select name="">
				<option value="--">--</option>
				<option value="">Centro</option>
				<option value="">Noreste</option>
				<option value="">Noroeste</option>
				<option value="">Sureste</option>
				<option value="">Suroeste</option>
				<option value="">Directiva</option>
				<br>
			</select><br><br>
			<label>Adjuntar justificante de pago</label><br>
			<input type="file" name=""><br>
			<label>Añadir comentarios</label><br>
			<textarea rows="3"></textarea><br>
			<input type="submit" name="" value="Enviar Solicitud"><br>
		</form>
		<center><p style="margin:1%">*Campos Obligatorios</p></center>
	 	</div>
 </section>
 <?php 
	include 'footer.php';
 ?>
</body>
</html>
