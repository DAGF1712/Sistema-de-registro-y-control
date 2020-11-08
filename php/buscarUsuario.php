<?php
  session_start();
  include './conexion.php';

    if(isset($_SESSION["admin"])){
  }
  else{
     header("location: ../../index.html");
  }

  		$usuario = $_POST["busqueda"];
        $sql="SELECT * FROM usuarios where usuario = '$usuario'";
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
        if(isset($row['usuario'])){
        ?>

  <div class="tablaRegistro">
<table>
    <thead>
      <caption>Usuario
        <a href="../admin/gestion_de_usuarios/gestionUsuarios.php"><img src="../../img/atras.png" class="atras"></a>
      </caption>
          <tr class="tituloTabla">
              <td>Usuario</td>
              <td>Contrasena</td>
              <td class="columnaImagen"><img id="borrarRegistro" src="../../img/borrar.png"></td>
          </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $row['usuario'];?></td>
                <td><?php echo $row['contrasena'];?></td>
                <td>
                    <form method="POST" action="eliminarUsuario.php">
                        <button type="submit"> Borrar <input type="hidden" name="usuario" value="<?php echo $row['usuario']?>"> </button> 
                    </form>
                </td>
            </tr>
      
    </tbody>
</table>
<?php
    }
        else{
          ?> 
          <div class="sinResultado">
            <h1>No hay ningun resultado en la busqueda</h1>
            <br>
            <a href="../admin/gestion_de_usuarios/creacionUsuarios.php" id="botonRegistro">IR A REGISTRAR USUARIO</a>
          </div>
          <?php
        }
?>
  </div>
</body>
</html>
