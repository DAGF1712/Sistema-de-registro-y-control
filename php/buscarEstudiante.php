<?php
  session_start();
  include './conexion.php';

  		$cedula = $_POST["busqueda"];
        $sql="SELECT * FROM estudiantes where cedula = '$cedula'";
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
          if($row['catedra'] == 1){
            echo "Catedra de Violin";
            ?><a href="../admin/gestion_de_estudiantes/catedraViolin.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 2){
            echo "Catedra de Viola ";
            ?><a href="../admin/gestion_de_estudiantes/catedraViola.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 3){
            echo "Catedra de Piano ";
            ?><a href="../admin/gestion_de_estudiantes/catedraPiano.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 4){
            echo "Catedra de Cuatro ";
            ?><a href="../admin/gestion_de_estudiantes/catedraCuatro.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 5){
            echo "Catedra de Guitarra ";
            ?><a href="../admin/gestion_de_estudiantes/catedraGuitarra.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 6){
            echo "Catedra de Canto ";
            ?><a href="../admin/gestion_de_estudiantes/catedraCanto.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 1){
            echo "Agrupacion Rock Sinfónico ";
            ?><a href="../admin/gestion_de_estudiantes/rockSinfonico.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 2){
            echo "Agrupacion Camerata Yaracuy ";
            ?><a href="../admin/gestion_de_estudiantes/camerataYaracuy.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 3){
            echo "Agrupacion Coro Artístico ";
            ?><a href="../admin/gestion_de_estudiantes/coroArtistico.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 4){
            echo "Agrupacion Cumaco Drums ";
            ?><a href="../admin/gestion_de_estudiantes/cumacoDrums.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 5){
            echo "Agrupacion Latino Caribeña ";
            ?><a href="../admin/gestion_de_estudiantes/latinoCaribeña.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 6){
            echo "Agrupacion Afro Latino ";
            ?><a href="../admin/gestion_de_estudiantes/afroLatino.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 7){
            echo "Agrupacion Son8 ";
            ?><a href="../admin/gestion_de_estudiantes/son8.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 1){
            echo "Formacion de Piano ";
            ?><a href="../admin/gestion_de_estudiantes/formacionPiano.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 2){
            echo "Formacion de Cuatro ";
            ?><a href="../admin/gestion_de_estudiantes/formacionCuatro.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 3){
            echo "Formacion de Guitarra ";
            ?><a href="../admin/gestion_de_estudiantes/formacionGuitarra.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 4){
            echo "Formacion de Canto ";
            ?><a href="../admin/gestion_de_estudiantes/formacionCanto.php"><img src="../../img/atras.png" class="atras"></a>
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
                    <form method="POST" action="editarEstudiante.php">
                        <button type="submit"> Editar <input type="hidden" name="cedula" value="<?php echo $row['cedula']?>"> </button> 
                    </form>
                </td>
                <td>
                    <form method="POST" action="eliminarEstudiante.php">
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
            <a href="../admin/gestion_de_estudiantes/registroEstudiante.php" id="botonRegistro">IR A REGISTRAR ESTUDIANTE</a>
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
          if($row['catedra'] == 1){
            echo "Catedra de Violin";
            ?><a href="../usuario/gestion_de_estudiantes/catedraViolin.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 2){
            echo "Catedra de Viola ";
            ?><a href="../usuario/gestion_de_estudiantes/catedraViola.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 3){
            echo "Catedra de Piano ";
            ?><a href="../usuario/gestion_de_estudiantes/catedraPiano.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 4){
            echo "Catedra de Cuatro ";
            ?><a href="../usuario/gestion_de_estudiantes/catedraCuatro.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 5){
            echo "Catedra de Guitarra ";
            ?><a href="../usuario/gestion_de_estudiantes/catedraGuitarra.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['catedra'] == 6){
            echo "Catedra de Canto ";
            ?><a href="../usuario/gestion_de_estudiantes/catedraCanto.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 1){
            echo "Agrupacion Rock Sinfónico ";
            ?><a href="../usuario/gestion_de_estudiantes/rockSinfonico.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 2){
            echo "Agrupacion Camerata Yaracuy ";
            ?><a href="../usuario/gestion_de_estudiantes/camerataYaracuy.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 3){
            echo "Agrupacion Coro Artístico ";
            ?><a href="../usuario/gestion_de_estudiantes/coroArtistico.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 4){
            echo "Agrupacion Cumaco Drums ";
            ?><a href="../usuario/gestion_de_estudiantes/cumacoDrums.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 5){
            echo "Agrupacion Latino Caribeña ";
            ?><a href="../usuario/gestion_de_estudiantes/latinoCaribeña.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 6){
            echo "Agrupacion Afro Latino ";
            ?><a href="../usuario/gestion_de_estudiantes/afroLatino.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['agrupacion'] == 7){
            echo "Agrupacion Son8 ";
            ?><a href="../usuario/gestion_de_estudiantes/son8.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 1){
            echo "Formacion de Piano ";
            ?><a href="../usuario/gestion_de_estudiantes/formacionPiano.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 2){
            echo "Formacion de Cuatro ";
            ?><a href="../usuario/gestion_de_estudiantes/formacionCuatro.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 3){
            echo "Formacion de Guitarra ";
            ?><a href="../usuario/gestion_de_estudiantes/formacionGuitarra.php"><img src="../../img/atras.png" class="atras"></a>
            <?php
          }
          if($row['formacion'] == 4){
            echo "Formacion de Canto ";
            ?><a href="../usuario/gestion_de_estudiantes/formacionCanto.php"><img src="../../img/atras.png" class="atras"></a>
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
                    <form method="POST" action="editarEstudiante.php">
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
            <a href="../usuario/gestion_de_estudiantes/registroEstudiante.php" id="botonRegistro">IR A REGISTRAR ESTUDIANTE</a>
          </div>
          <?php
        }
      }
?>
  </div>
</body>
</html>