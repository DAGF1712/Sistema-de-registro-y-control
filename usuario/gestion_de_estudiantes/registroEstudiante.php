<?php
  session_start();

  if(isset($_SESSION["usuario"])){
  }
  else{
     header("location: ../../index.html");
  }
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../../css/index.css">
<head>
  <meta charset="utf-8">
  <title> SIRCAP </title>
</head>

<body>

  <header>
    <h2 class="titulo"> SIRCAP: Sistema Informático para el Registro y Control de Alumnos  y  Personal </h2>
    <img src="../../img/conservatorio logo.png" class="logo">
    <a href="../../php/cierreSesion.php"><img src="../../img/cerrar.png" class="cerrar"></a>
  </header>
  
  <div id="menu">
    <ul>
      <li><a href="">Registro</a> <img id="registroBasico" src="../../img/registro.png">
        <ul>
          <li><a href="registroEstudiante.php">Estudiantes</a></li>
          <li><a href="../gestion_de_personal/registroPersonal.php">Personal</a></li>
        </ul>
      </li>
      <li><a href="">Estudiantes<img id="estudianteBasico" src="../../img/estudiante.png"></a>
        <ul> 
          <li><a href="">Agrupaciones</a>
            <ul>
                      <li> <a href="rockSinfonico.php"> Rock Sinfónico </a> </li>
                      <li> <a href="camerataYaracuy.php"> Camerata Yaracuy </a> </li>
                <li> <a href="coroArtistico.php"> Coro Artístico </a> </li>
                <li> <a href="cumacoDrums.php"> Cumaco Drums </a> </li>
                <li> <a href="latinoCaribeña.php"> Latino Caribeña </a> </li>
                <li> <a href="afroLatino.php"> AfroLatino </a> </li>
                <li> <a href="son8.php"> Son 8 </a> </li>
              </ul>
          </li>
          <li><a href="">Catedra</a>
            <ul>
              <li><a href="catedraViolin.php">Violin</a></li>
              <li><a href="catedraViola.php">Viola</a></li>
              <li><a href="catedraGuitarra.php">Guitarra</a></li>
              <li><a href="catedraPiano.php">Piano</a></li>
              <li><a href="catedraCuatro.php">Cuatro</a></li>
              <li><a href="catedraCanto.php">Canto</a></li>
            </ul>
          </li>
          <li><a href="">Formación</a>
            <ul>
              <li><a href="formacionPiano.php">Piano</a></li>
              <li><a href="formacionCuatro.php">Cuatro</a></li>
              <li><a href="formacionGuitarra.php">Guitarra</a></li>
              <li><a href="formacionCanto.php">Canto</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="">Personal<img id="personalBasico" src="../../img/obrero.png"></a>
        <ul>
          <li><a href="../gestion_de_personal/personalLimpieza.php">Obreros</a></li>
          <li><a href="../gestion_de_personal/personalDocentes.php">Docentes</a></li>
          <li><a href="../gestion_de_personal/personalVigilantes.php">Vigilantes</a></li>
          <li><a href="../gestion_de_personal/personalAdministracion.php">Administrativo</a></li>
        </ul>
      </li>
    </ul>
  </div>

	<div id="formularioRegistro">
		<form id="formulario" name="registroEstudiante" action="../../php/registroEstudiantes.php" method="POST" novalidate>

			<h2 id="tituloRegistro">Registro de Estudiantes</h2>
			<br>

			<div class="inputRegistro">Nombre <input type='text' id="nombre" name="nombre" placeholder="Ejemplo: Pedro" size="25" maxlength="20" minlength="3" required> </div>
  
          	<br>

         	<div class="inputRegistro">Apellido <input type='text' id="apellido" name="apellido" placeholder="Ejemplo: Martinez" size="25" maxlength="20" minlength="3" required> </div>
  
          	<br>

         	<div class="inputRegistro">Cedula <input type='text' id="cedula" name="cedula" placeholder="Ejemplo: 25927215" size="25" maxlength="10" minlength="6"> </div>

          	<br>

          	<div class="inputRegistro">Direccion <input type="text" id="direccion" name="direccion" placeholder="Ejemplo: Av veroes con calle 13" size="25" maxlength="40" minlength="5" > </div>

          	<br>

          	<div class="inputRegistro">Telefono <input type='text' id="telefono" name="telefono" placeholder="Ejemplo: 04125095831" size="25" maxlength="20" minlength="7"> </div>

          	<br>

          	<div class="selectRegistro">
          			Cátedra <select id="catedra" name="catedra">
          				<option value="0"> No cursa </option>
                		<option value="1"> Cátedra de Violín </option>
                		<option value="2"> Cátedra de Viola </option>
               		 	<option value="3"> Cátedra de Piano </option>
                		<option value="4"> Cátedra de Cuatro </option>
                		<option value="5"> Cátedra de Guitarra </option>
                		<option value="6"> Cátedra de Canto </option>
            		</select>
        	</div>

          	<br>

          	<div class="selectRegistro">	
          			Agrupaciones <select id="agrupaciones" name="agrupacion">
                 		<option value="0"> No cursa </option>
                 		<option value="1"> Rock Sinfónico </option>
                 		<option value="2"> Camerata Yaracuy </option>
                 		<option value="3"> Coro Artístico </option>
                 		<option value="4"> Cumaco Drums </option>
                 		<option value="5"> Latino Caribeña </option>
                 		<option value="6"> AfroLatino </option>
                 		<option value="7"> Son 8 </option>
            		</select>
            </div>

         	<br>

         		<div class="selectRegistro">
          			Formación de adultos <select id="formacion" name="formacion">
            			<option value="0"> No cursa </option>
                		<option value="1"> Piano </option>
                		<option value="2"> Cuatro </option>
                		<option value="3"> Guitarra </option>
            			<option value="4"> Canto </option>
           			</select>
           		</div>
          <br>

          <div class="inputRegistro">
          	<button type="submit" id="botonRegistrar" onclick="validacionEstudiante()"> REGISTRAR </button>
          </div>
          
          <p id="warning"></p>
          <p id="exito"></p>

		</form>
	</div>
	<script type="text/javascript" src="../../js/validacion.js"></script>
</body>
</html>