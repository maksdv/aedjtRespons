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
	 	<center><img src="../images/inscripcion-trabajo.png" width="80%" height="auto"></center><br>	
	 	<form action="" method="POST">
	 		<label>*Nombre del perro:</label><br><input type="text" name=""><br>
	 		<label>*Afijo:</label><br><input type="text" name=""><br>
	 		<label>*Número de pedigree:</label><br><input type="text" name=""><br>
			<label>Número de microchip:</label><br><input type="text" name=""><br>
			<label>Fecha de nacimiento:</label><br><input type="text" name=""><br>
			<label>Nombre del padre:</label><br><input type="text" name=""><br>
	 		<label>Nombre de la madre:</label><br><input type="text" name=""><br>
	 		<label>*Propietario (Nombre y apellidos):</label><br><input type="text" name=""><br>
			<label>*Email</label><br><input type="text" name=""><br>
			<label>*Conductor (Nombre y apellidos):</label><br><input type="text" name=""><br>
			<label>*¿Es socio?</label><br>
			<select name="" style="width: 80%">
				<option value="--" name="si">Sí</option>
				<option value="" selected="si">No</option>
			</select>
			<br><br>
			<label>*Clase a la que se presenta:</label><br><input type="text" name=""><br>
			<h4 id="claseColor">Clase cachorros: (C.C.):</h4>
			<p>Para perros que tengan mas de 5 meses y menos de 9</p>
			
			<h4 id="claseColor">Clase Jóvenes: (C.J.):</h4>
			<p>Para perros que tengan mas de 9 meses, y menos de 18.</p>
			
			<h4 id="claseColor">Clase intermedia: (C.I.):</h4>
			<p>Para perros mayores de 15 meses.</p>

			<h4 id="claseColor">Clase Abierta: (C.A.):</h4>
			<p>Para perros mayores de 15 meses.</p>

			<h4 id="claseColor">Clase Veteranos: (C.V.):</h4>
			<p>Para aquellos ejemplares que tengan más de 8 años. Los inscritos en esta clase no pueden inscribirse en la clase de campeones, abierta o trabajo.
			</p>

			<h4 id="claseColor">Clase campeones: (C.CH.):</h4>
			<p>Para los ejemplares que tengan el título de campeón de España de la RSCE o de un país extranjero reconocido internacionalmente. Los propietarios deberan aportar, junto con la inscripción, una copia del título de campeón.</p>
			<h4 id="claseColor">Clase trabajo (C.T.):</h4>
			<p>Para perros que hayan superado una prueba de utilidad con la calificación de suficiente como mínimo; y para perros de caza que hayan obtenido la calificación de bueno en una prueba de trabajo para perros de muestra</p>

			<h4 id="claseColor">Clase Parejas: (C.P.):</h4>
			<p>Para macho y hembra de la misma raza y variedad, y del mismo propietario, presentados por una persona. Para poder participar en esta clase, ambos ejemplares deberán estar inscritos individalmente en alguna de las anteriores.</p>

			<h4 id="claseColor">Clase de Cria: (C.Cr.):</h4>
			<p>Para grupos de 3 ejemplares o más, de la misma raza y variedad sin distinción de sexo, de un mismo criador, aunque no sean de su propiedad en el momento de la exposición e inscritos individualmente en algunas de las clases : C.CH., C.A., C.T., C.I., C.J., C.C. </p>

			<h4>Concurso monográfico.</h4>
			<p>P.A.N. (Prueba de actitudes naturales): Madriguera, Liebre, Agua, Temple al tiro, Confirmación morfológica.</p><br><br>
			<p>Concurso monográfico.</p>
			<br><br>
			<label>Escribe el P.A.N.:</label><br><input type="text" name=""><br><br>
			<label>Caza natural:</label><br>
			<select name="" style="width: 80%">
				<option value="--" name="">--</option>
				<option value="--" name="">Jabalí</option>
				<option value="--" >Zorro en madriguera natural</option>
				<option value="--" name="">Ciervo</option>
			</select><br><br>
			<label>Fecha del evento:</label><br><input type="text" name=""><br><br>
			<label>Si tiene que adjuntar el título de campeón, hágalo aquí:</label><br>
			<input type="file" name=""><br>
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
			<label>Añadir comentarios</label><br>
			<textarea rows="3"></textarea><br><br>
			<label>Adjuntar o enviar por fax, copia de PEDIGREE (preferiblemente) o de LOE: (Obligatorio)</label><br>
			<input type="file" name=""><br>
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
