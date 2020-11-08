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
          <li><a href="creacionUsuarios.php">Creacion</a></li>
          <li><a href="gestionUsuarios.php">Gestion</a></li>
        </ul>
      </li>
      <li><a href="">Registro</a> <img id="registro" src="../../img/registro.png">
        <ul>
          <li><a href="../gestion_de_estudiantes/registroEstudiante.php">Estudiantes</a></li>
          <li><a href="../gestion_de_personal/registroPersonal.php">Personal</a></li>
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
          <li><a href="../gestion_de_personal/personalLimpieza.php">Obreros</a></li>
          <li><a href="../gestion_de_personal/personalDocentes.php">Docentes</a></li>
          <li><a href="../gestion_de_personal/personalVigilantes.php">Vigilantes</a></li>
          <li><a href="../gestion_de_personal/personalAdministracion.php">Administrativo</a></li>
        </ul>
      </li>
    </ul>
  </div>

	 <div>
    <form id="formularioUsuarios" name="registroUsuarios" action="../../php/registroUsuarios.php" method="POST" novalidate>

      <h2 id="tituloRegistro">Registro de usuarios</h2>
      <br>

      <div class="inputRegistro">Usuario <input type='text' id="usuario" name="usuario" placeholder="Ejemplo: usuario1" size="20" maxlength="20" minlength="3" required> </div>
  
            <br>

          <div class="inputRegistro">Contraseña <input type='password' id="contrasena" name="contrasena" placeholder="Ejemplo: 1234" size="20" maxlength="20" minlength="3" required> </div>
  
            <br>

            <div class="selectRegistro">  
                Tipo de usuario <select id="tipoUsuario" name="usuarios">
                    <option value="0"> Seleccione una opcion </option>
                    <option value="1"> Administrador </option>
                    <option value="2"> Usuario </option>
                </select>
            </div>

            <br>

          <div class="inputRegistro">
            <button type="submit" id="botonRegistrar" onclick="validacionUsuario()"> REGISTRAR </button>
          </div>
          
          <p id="warningUsuarios"></p>
          <p id="exitoUsuarios"></p>

    </form>
  </div>
  <script type="text/javascript" src="../../js/validacion.js"></script>
</body>
</html>