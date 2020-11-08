<?php
  session_start();
  include './conexion.php';

  		  $cedula = $_POST['cedula'];
        $sql="SELECT nombre, apellido, direccion, telefono FROM estudiantes where cedula = '$cedula'";
        $resultado=$conexion->query($sql);
        $row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="../../css/index.css">
<head>
  <meta charset="utf-8">
  <title> SIRCAP </title>
</head>

<body>
<?php
if(isset($_SESSION["admin"])){

?>
  <header>
    <h2 class="titulo"> SIRCAP: Sistema Informático para el Registro y Control de Alumnos  y  Personal </h2>
    <img src="../img/conservatorio logo.png" class="logo">
    <a href="./cierreSesion.php"><img src="../../img/cerrar.png" class="cerrar"></a>
  </header>
  
    <div id="menu">
    <ul>
      <li><a href="">Usuarios</a> <img id="usuarios" src="../../img/usuarios.png">
        <ul>
          <li><a href="../admin/gestion_de_usuarios/creacionUsuarios.php">Creacion</a></li>
          <li><a href="../admin/gestion_de_usuarios/gestionUsuarios.php">Gestion</a></li>
        </ul>
      </li>
      <li><a href="">Registro</a> <img id="registro" src="../img/registro.png">
        <ul>
          <li><a href="../admin/gestion_de_estudiantes/registroEstudiante.php">Estudiantes</a></li>
          <li><a href="../admin/gestion_de_personal/registroPersonal.php">Personal</a></li>
        </ul>
      </li>
      <li><a href="">Estudiantes<img id="estudiante" src="../img/estudiante.png"></a>
        <ul> 
          <li><a href="">Agrupaciones</a>
            <ul>
                      <li> <a href="../admin/gestion_de_estudiantes/rockSinfonico.php"> Rock Sinfónico </a> </li>
                      <li> <a href="../admin/gestion_de_estudiantes/camerataYaracuy.php"> Camerata Yaracuy </a> </li>
                <li> <a href="../admin/gestion_de_estudiantes/coroArtistico.php"> Coro Artístico </a> </li>
                <li> <a href="../admin/gestion_de_estudiantes/cumacoDrums.php"> Cumaco Drums </a> </li>
                <li> <a href="../admin/gestion_de_estudiantes/latinoCaribeña.php"> Latino Caribeña </a> </li>
                <li> <a href="../admin/gestion_de_estudiantes/afroLatino.php"> AfroLatino </a> </li>
                <li> <a href="../admin/gestion_de_estudiantes/son8.php"> Son 8 </a> </li>
              </ul>
          </li>
          <li><a href="">Catedra</a>
            <ul>
              <li><a href="../admin/gestion_de_estudiantes/catedraViolin.php">Violin</a></li>
              <li><a href="../admin/gestion_de_estudiantes/catedraViola.php">Viola</a></li>
              <li><a href="../admin/gestion_de_estudiantes/catedraGuitarra.php">Guitarra</a></li>
              <li><a href="../admin/gestion_de_estudiantes/catedraPiano.php">Piano</a></li>
              <li><a href="../admin/gestion_de_estudiantes/catedraCuatro.php">Cuatro</a></li>
              <li><a href="../admin/gestion_de_estudiantes/catedraCanto.php">Canto</a></li>
            </ul>
          </li>
          <li><a href="">Formación</a>
            <ul>
              <li><a href="../admin/gestion_de_estudiantes/formacionPiano.php">Piano</a></li>
              <li><a href="../admin/gestion_de_estudiantes/formacionCuatro.php">Cuatro</a></li>
              <li><a href="../admin/gestion_de_estudiantes/formacionGuitarra.php">Guitarra</a></li>
              <li><a href="../admin/gestion_de_estudiantes/formacionCanto.php">Canto</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="">Personal<img id="personal" src="../img/obrero.png"></a>
        <ul>
          <li><a href="../admin/gestion_de_personal/personalLimpieza.php">Obreros</a></li>
          <li><a href="../admin/gestion_de_personal/personalDocentes.php">Docentes</a></li>
          <li><a href="../admin/gestion_de_personal/personalVigilantes.php">Vigilantes</a></li>
          <li><a href="../admin/gestion_de_personal/personalAdministracion.php">Administrativo</a></li>
        </ul>
      </li>
    </ul>
  </div>
<?php
      }
?>

<?php
if(isset($_SESSION["usuario"])){
?>
   <header>
    <h2 class="titulo"> SIRCAP: Sistema Informático para el Registro y Control de Alumnos  y  Personal </h2>
    <img src="../img/conservatorio logo.png" class="logo">
    <a href="./cierreSesion.php"><img src="../img/cerrar.png" class="cerrar"></a>
  </header>
  
    <div id="menu">
    <ul>
      <li><a href="">Registro</a> <img id="registroBasico" src="../img/registro.png">
        <ul>
          <li><a href="../usuario/gestion_de_estudiantes/registroEstudiante.php">Estudiantes</a></li>
          <li><a href="../usuario/gestion_de_personal/registroPersonal.php">Personal</a></li>
        </ul>
      </li>
      <li><a href="">Estudiantes<img id="estudianteBasico" src="../img/estudiante.png"></a>
        <ul> 
          <li><a href="">Agrupaciones</a>
            <ul>
                      <li> <a href="../usuario/gestion_de_estudiantes/rockSinfonico.php"> Rock Sinfónico </a> </li>
                      <li> <a href="../usuario/gestion_de_estudiantes/camerataYaracuy.php"> Camerata Yaracuy </a> </li>
                <li> <a href="../usuario/gestion_de_estudiantes/coroArtistico.php"> Coro Artístico </a> </li>
                <li> <a href="../usuario/gestion_de_estudiantes/cumacoDrums.php"> Cumaco Drums </a> </li>
                <li> <a href="../usuario/gestion_de_estudiantes/latinoCaribeña.php"> Latino Caribeña </a> </li>
                <li> <a href="../usuario/gestion_de_estudiantes/afroLatino.php"> AfroLatino </a> </li>
                <li> <a href="../usuario/gestion_de_estudiantes/son8.php"> Son 8 </a> </li>
              </ul>
          </li>
          <li><a href="">Catedra</a>
            <ul>
              <li><a href="../usuario/gestion_de_estudiantes/catedraViolin.php">Violin</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/catedraViola.php">Viola</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/catedraGuitarra.php">Guitarra</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/catedraPiano.php">Piano</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/catedraCuatro.php">Cuatro</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/catedraCanto.php">Canto</a></li>
            </ul>
          </li>
          <li><a href="">Formación</a>
            <ul>
              <li><a href="../usuario/gestion_de_estudiantes/formacionPiano.php">Piano</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/formacionCuatro.php">Cuatro</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/formacionGuitarra.php">Guitarra</a></li>
              <li><a href="../usuario/gestion_de_estudiantes/formacionCanto.php">Canto</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="">Personal<img id="personalBasico" src="../img/obrero.png"></a>
        <ul>
          <li><a href="../usuario/gestion_de_personal/personalLimpieza.php">Obreros</a></li>
          <li><a href="../usuario/gestion_de_personal/personalDocentes.php">Docentes</a></li>
          <li><a href="../usuario/gestion_de_personal/personalVigilantes.php">Vigilantes</a></li>
          <li><a href="../usuario/gestion_de_personal/personalAdministracion.php">Administrativo</a></li>
        </ul>
      </li>
    </ul>
  </div>
<?php
      }
?>

	<div id="formularioRegistro">

		<form id="formulario" name="registroEstudiante" action="./editarEstudiante2.php" method="POST" novalidate>

			<h2 id="tituloRegistro">Editar datos: Estudiante</h2>
			<br>
			<div class="inputRegistro">Nombre <input type='text' id="nombre" name="nombre" placeholder="Ejemplo: Pedro" size="25" maxlength="20" minlength="3" value="<?php echo $row['nombre'];?>" required> </div>
  
          	<br>

         	<div class="inputRegistro">Apellido <input type='text' id="apellido" name="apellido" placeholder="Ejemplo: Martinez" size="25" maxlength="20" minlength="3" value="<?php echo $row['apellido'];?>" required> </div>
  
          	<br>

          <div class="inputRegistro">Cedula <input type='text' id="cedula" name="cedula" placeholder="Ejemplo: 25927215" size="25" maxlength="10" minlength="6" readonly="readonly" value="<?php echo $_POST['cedula'];?>"> </div>

            <br>

          	<div class="inputRegistro">Direccion <input type="text" id="direccion" name="direccion" placeholder="Ejemplo: Av veroes con calle 13" size="25" maxlength="40" minlength="5" value="<?php echo $row['direccion'];?>"> </div>

          	<br>

          	<div class="inputRegistro">Telefono <input type='text' id="telefono" name="telefono" placeholder="Ejemplo: 04125095831" size="25" maxlength="20" minlength="7" value="<?php echo $row['telefono'];?>"> </div>

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
          	<button type="submit" id="botonRegistrar" onclick="validacionEditarEstudiante()"> EDITAR </button>
          </div>

          <p id="warning"></p>
          <p id="exito"></p>

		</form>

	</div>
	<script type="text/javascript" src="../js/validacion.js"></script>
	</body>
  </html>