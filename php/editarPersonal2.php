	<?php
        session_start();
        include './conexion.php';

        $cedula=$_POST['cedula'];
        $nombre2=$_POST["nombre"];
        $apellido2=$_POST["apellido"];
        $direccion2=$_POST["direccion"];
        $telefono2=$_POST["telefono"];
        $cargo2=$_POST["cargo"];
        

        $sql="UPDATE personal SET nombre='$nombre2', apellido='$apellido2', direccion='$direccion2', telefono='$telefono2', cargo='$cargo2' WHERE cedula = $cedula";
        $editarPersonal=$conexion->query($sql);

            if(isset($_SESSION["admin"])){
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
     }
     else if(isset($_SESSION["usuario"])){
          if($cargo2 == 1){
           header("Location: ../usuario/gestion_de_personal/personalDocentes.php");
          }
          if($cargo2 == 2){
            header("Location: ../usuario/gestion_de_personal/personalLimpieza.php");
          }
            if($cargo2 == 3){
            header("Location: ../usuario/gestion_de_personal/personalVigilantes.php");
          }
            if($cargo2 == 4){
            header("Location: ../usuario/gestion_de_personal/personalAdministracion.php");
          }
     }
    ?>   