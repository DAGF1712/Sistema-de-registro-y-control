<?php
  session_start();
  include './conexion.php';

  		$cedula = $_POST['cedula'];

  		$sql="SELECT * FROM personal where cedula = '$cedula'";
        $resultado=$conexion->query($sql);
        $row = mysqli_fetch_array($resultado);
        $cargo2 = $row['cargo'];

        $sql="DELETE FROM personal where cedula = '$cedula'";
        $Eliminar=$conexion->query($sql);

        if($cargo2 == 1){
           header("Location: ../admin/gestion_de_personal/personalDocentes.php");
          }
          if($cargo2 == 2){
            header("Location: ../admin/gestion_de_personal/personalLimpieza.php");
          }
            if($cargo2 == 3){
            header("Location: ../admin/gestion_de_personal/personalVigilantes.php");
          }
            if($cargo2 == 4){
            header("Location: ../admin/gestion_de_personal/personalAdministracion.php");
          }
?>