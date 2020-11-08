  <?php
  session_start();

  if(isset($_SESSION["admin"])){
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
      <li><a href="">Usuarios</a> <img id="usuarios" src="../../img/usuarios.png">
        <ul>
          <li><a href="../gestion_de_usuarios/creacionUsuarios.php">Creacion</a></li>
          <li><a href="../gestion_de_usuarios/gestionUsuarios.php">Gestion</a></li>
        </ul>
      </li>
      <li><a href="">Registro</a> <img id="registro" src="../../img/registro.png">
        <ul>
          <li><a href="../gestion_de_estudiantes/registroEstudiante.php">Estudiantes</a></li>
          <li><a href="registroPersonal.php">Personal</a></li>
        </ul>
      </li>
      <li><a href="">Estudiantes<img id="estudiante" src="../../img/estudiante.png"></a>
        <ul> 
          <li><a href="">Agrupaciones</a>
            <ul>
                      <li> <a href="../gestion_de_estudiantes/rockSinfonico.php"> Rock Sinfónico </a> </li>
                      <li> <a href="../gestion_de_estudiantes/camerataYaracuy.php"> Camerata Yaracuy </a> </li>
                <li> <a href="../gestion_de_estudiantes/coroArtistico.php"> Coro Artístico </a> </li>
                <li> <a href="../gestion_de_estudiantes/cumacoDrums.php"> Cumaco Drums </a> </li>
                <li> <a href="../gestion_de_estudiantes/latinoCaribeña.php"> Latino Caribeña </a> </li>
                <li> <a href="../gestion_de_estudiantes/afroLatino.php"> AfroLatino </a> </li>
                <li> <a href="../gestion_de_estudiantes/son8.php"> Son 8 </a> </li>
              </ul>
          </li>
          <li><a href="">Catedra</a>
            <ul>
              <li><a href="../gestion_de_estudiantes/catedraViolin.php">Violin</a></li>
              <li><a href="../gestion_de_estudiantes/catedraViola.php">Viola</a></li>
              <li><a href="../gestion_de_estudiantes/catedraGuitarra.php">Guitarra</a></li>
              <li><a href="../gestion_de_estudiantes/catedraPiano.php">Piano</a></li>
              <li><a href="../gestion_de_estudiantes/catedraCuatro.php">Cuatro</a></li>
              <li><a href="../gestion_de_estudiantes/catedraCanto.php">Canto</a></li>
            </ul>
          </li>
          <li><a href="">Formación</a>
            <ul>
              <li><a href="../gestion_de_estudiantes/formacionPiano.php">Piano</a></li>
              <li><a href="../gestion_de_estudiantes/formacionCuatro.php">Cuatro</a></li>
              <li><a href="../gestion_de_estudiantes/formacionGuitarra.php">Guitarra</a></li>
              <li><a href="../gestion_de_estudiantes/formacionCanto.php">Canto</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="">Personal<img id="personal" src="../../img/obrero.png"></a>
        <ul>
          <li><a href="personalLimpieza.php">Obreros</a></li>
          <li><a href="personalDocentes.php">Docentes</a></li>
          <li><a href="personalVigilantes.php">Vigilantes</a></li>
          <li><a href="personalAdministracion.php">Administrativo</a></li>
        </ul>
      </li>
    </ul>
  </div>
  
	<div id="formularioRegistro">
		<form id="formulario" name="registroPersonal" action="../../php/registroPersonal.php" method="POST" novalidate>

			<h2 id="tituloRegistro">Registro de Personal</h2>
			<br>

			<div class="inputRegistro">Nombre <input type='text' id="nombre" name="nombre" placeholder="Ejemplo: Pedro" size="25" maxlength="20" minlength="3" required> </div>
  
          	<br>

         	<div class="inputRegistro">Apellido <input type="text" id="apellido" name="apellido" placeholder="Ejemplo: Martinez" size="25" maxlength="20" minlength="3" required> </div>
  
          	<br>

         	<div class="inputRegistro">Cedula <input type='text' id="cedula" name="cedula" placeholder="Ejemplo: 25927215" size="25" maxlength="10" minlength="6"> </div>

          	<br>

          	<div class="inputRegistro">Direccion <input type='text' id="direccion" name="direccion" placeholder="Ejemplo: Av veroes con calle 13" size="25" maxlength="40" minlength="5" > </div>

          	<br>

          	<div class="inputRegistro">Telefono <input type='text' id="telefono" name="telefono" placeholder="Ejemplo: 04125095831" size="25" maxlength="20" minlength="7"> </div>

          	<br>

          	<div class="selectRegistro">
          			Cargo <select id="cargo" name="cargo">
          				<option value="0"> Seleccione una opcion </option>
                  		<option value="1"> Docente </option>
                  		<option value="2"> Obrero </option>
                  		<option value="3"> Vigilante </option>
                  		<option value="4"> Administrativo </option>
                	</select>
        	</div>

          <br>

          <div class="inputRegistro">
          	<button type="submit" id="botonRegistrar" onclick="validacionPersonal()"> REGISTRAR </button>
          </div>
          
          <p id="warning"></p>
          <p id="exito"></p>

		</form>
	</div>
	<script type="text/javascript" src="../../js/validacion.js"></script>
</body>
</html>