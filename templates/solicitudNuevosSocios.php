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
 		<center><img src="../images/titulo-solicitud-socio.png" width="90%" height="auto"></center><br>
 		<center><h3 style="width: 80%"> Puede rellenar el formulario via mail o descargar el registro en pdf. En el interior del pdf de registro encontrará las instrucciones pertinentes para hacerse socio de la AEDJT</h3></center><br>
 		<center><a href="descargaForm.php">Descargar solicitud</a></center><br>
 		<center><h2>FORMULARIO SOLICITUD NUEVOS SOCIOS AEDJT</h2></center>
 	<form action="" method="POST">
 		<label>*Nombre</label><br><input type="text" name=""><br>
 		<label>*Appellido</label><br><input type="text" name=""><br>
 		<label>*Dirección</label><br><input type="text" name=""><br>
 		<label>*Ciudad</label><br><input type="text" name=""><br>
		<label>*Provincia:</label><br>
		<select name="">
			<option value="--">--</option>
			<option value="Álava">Álava</option>
			<option value="Albacete">Albacete</option>
			<option value="Alicante">Alicante</option>
			<option value="Almería">Almería</option>
			<option value="Asturias">Asturias</option>
			<option value="Avila">Avila</option>
			<option value="Badajoz">Badajoz</option>
			<option value="Barcelona">Barcelona</option>
			<option value="Burgos">Burgos</option>
			<option value="Cáceres">Cáceres</option>
			<option value="Cádiz">Cádiz</option>
			<option value="Cantabria">Cantabria</option>
			<option value="Castellón">Castellón</option>
			<option value="Ceuta">Ceuta</option>
			<option value="Ciudad Real">Ciudad Real</option>
			<option value="Córdoba">Córdoba</option>
			<option value="Cuenca">Cuenca</option>
			<option value="Gerona">Gerona</option>
			<option value="Granada">Granada</option>
			<option value="Guadalajara">Guadalajara</option>
			<option value="Guipúzcoa">Guipúzcoa</option>
			<option value="Huelva">Huelva</option>
			<option value="Huesca">Huesca</option>
			<option value="Islas Baleares">Islas Baleares</option>
			<option value="Jaén">Jaén</option>
			<option value="La Coruña">La Coruña</option>
			<option value="La Rioja">La Rioja</option>
			<option value="Las Palmas">Las Palmas</option>
			<option value="León">León</option>
			<option value="Lérida">Lérida</option>
			<option value="Lugo">Lugo</option>
			<option value="Madrid">Madrid</option>
			<option value="Málaga">Málaga</option>
			<option value="Melilla">Melilla</option>
			<option value="Murcia">Murcia</option>
			<option value="Navarra">Navarra</option>
			<option value="Orense">Orense</option>
			<option value="Palencia">Palencia</option>
			<option value="Pontevedra">Pontevedra</option>
			<option value="S.C. de Tenerife">S.C. de Tenerife</option>
			<option value="Salamanca">Salamanca</option>
			<option value="Segovia">Segovia</option>
			<option value="Sevilla">Sevilla</option>
			<option value="Soria">Soria</option>
			<option value="Tarragona">Tarragona</option>
			<option value="Teruel">Teruel</option><br>
			<option value="Toledo">Toledo</option>
			<option value="Valencia">Valencia</option>
			<option value="Valladolid">Valladolid</option>
			<option value="Vizcaya">Vizcaya</option>
			<option value="Zamora">Zamora</option>
			<option value="Zaragoza">Zaragoza</option>
			<option value="No existe Provincia">No existe Provincia</option>
		</select><br>
		<label>*Código Postal</label><br><input type="text" name=""><br>
		<label>*Email</label><br><input type="text" name=""><br>
		<label>*Telefóno</label><br><input type="text" name=""><br>
		<label>Móvil</label><br><input type="text" name=""><br>
		<label>Fax</label><br><input type="text" name=""><br>
		<label>Información adicional</label><br>
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
