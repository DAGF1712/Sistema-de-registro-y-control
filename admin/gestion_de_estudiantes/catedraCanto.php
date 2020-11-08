  <?php
  session_start();
  include '../../php/conexion.php';

  if(isset($_SESSION["admin"])){
  }
  else{
     header("location: ../../index.html");
  }

$sql="SELECT nombre,apellido,cedula,direccion,telefono FROM estudiantes WHERE catedra = 6";
$resultado=$conexion->query($sql);
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
    <h2 class="titulo"> SIRCAP: Sistema Informático para el Registro y Control de Alumnos y Personal </h2>
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
          <li><a href="registroEstudiante.php">Estudiantes</a></li>
          <li><a href="../gestion_de_personal/registroPersonal.php">Personal</a></li>
        </ul>
      </li>
      <li><a href="">Estudiantes<img id="estudiante" src="../../img/estudiante.png"></a>
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
      <form id="busqueda" method="POST" action="../../php/buscarEstudiante.php" name="busqueda" >
          <input id="barraBusqueda" maxlength="8" placeholder="Ingrese la cedula del estudiante..." name="busqueda" size="30" type="text" />
          <button id="botonBusqueda" type="submit" onclick="validacionBusqueda()">Buscar</button>
          <p id="vacio"></p>
      </form>
  </div>

  <div class="tablaRegistro">
<table>
    <thead>
      <caption>Catedra: Canto</caption>
          <tr class="tituloTabla">
          <td>Nombre</td>
              <td>Apellido</td>
              <td>Cedula</td>
              <td>Direccion</td>
              <td>Telefono</td>
              <td class="columnaImagen"><img id="editarRegistro" src="../../img/editar.png"></td>
              <td class="columnaImagen"><img id="borrarRegistro" src="../../img/borrar.png"></td>
          </tr>
    </thead>
    <tbody>
        <?php
        while ($row=$resultado->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['apellido'];?></td>
                <td><?php echo $row['cedula'];?></td>
                <td><?php echo $row['direccion'];?></td>            
                <td><?php echo $row['telefono'];?></td>
                <td>
                    <form method="POST" action="../../php/editarEstudiante.php">
                        <button type="submit"> Editar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="../../php/eliminarEstudiante.php">
                        <button type="submit"> Borrar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
  </div>
  <script type="text/javascript" src="../../js/validacion.js"></script>
</body>
</html>