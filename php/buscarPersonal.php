<?php
  session_start();
  include './conexion.php';

  		$cedula = $_POST["busqueda"];
        $sql="SELECT * FROM personal where cedula = '$cedula'";
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
    if(isset($row['nombre'])){
  ?>

  <div class="tablaRegistro">
<table>
    <thead>
      <caption>
        <?php
          if($row['cargo'] == 1){
            echo "Docente ";
            ?><a href="../admin/gestion_de_personal/personalDocentes.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 2){
            echo "Obreros ";
            ?><a href="../admin/gestion_de_personal/personalLimpieza.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 3){
            echo "Vigilante ";
            ?><a href="../admin/gestion_de_personal/personalVigilantes.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 4){
            echo "Administrativo ";
            ?><a href="../admin/gestion_de_personal/personalAdministracion.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          ?>
      </caption>
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
            <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['apellido'];?></td>
                <td><?php echo $row['cedula'];?></td>
                <td><?php echo $row['direccion'];?></td>            
                <td><?php echo $row['telefono'];?></td>
                <td>
                    <form method="POST" action="editarPersonal.php">
                        <button type="submit"> Editar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="eliminarPersonal.php">
                        <button type="submit"> Borrar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
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
            <a href="../admin/gestion_de_personal/registroPersonal.php" id="botonRegistro">IR A REGISTRAR PERSONAL</a>
          </div>
          <?php
        }
      }
?>
  </div>
</body>
</html>

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
    if(isset($row['nombre'])){
  ?>
  <div class="tablaRegistro">
<table>
    <thead>
            <caption>
        <?php
          if($row['cargo'] == 1){
            echo "Docente ";
            ?><a href="../usuario/gestion_de_personal/personalDocentes.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 2){
            echo "Obreros ";
            ?><a href="../usuario/gestion_de_personal/personalLimpieza.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 3){
            echo "Vigilante ";
            ?><a href="../usuario/gestion_de_personal/personalVigilantes.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['cargo'] == 4){
            echo "Administrativo ";
            ?><a href="../usuario/gestion_de_personal/personalAdministracion.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          ?>
      </caption>
          <tr class="tituloTabla">
          <td>Nombre</td>
              <td>Apellido</td>
              <td>Cedula</td>
              <td>Direccion</td>
              <td>Telefono</td>
              <td class="columnaImagen"><img id="editarRegistro" src="../../img/editar.png"></td>
          </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['apellido'];?></td>
                <td><?php echo $row['cedula'];?></td>
                <td><?php echo $row['direccion'];?></td>            
                <td><?php echo $row['telefono'];?></td>
                <td>
                    <form method="POST" action="editarPersonal.php">
                        <button type="submit"> Editar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
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
            <a href="../usuario/gestion_de_personal/registroPersonal.php" id="botonRegistro">IR A REGISTRAR PERSONAL</a>
          </div>
          <?php
        }
      }
?>
  </div>
</body>
</html>
