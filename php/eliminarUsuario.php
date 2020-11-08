<?php
  session_start();
  include './conexion.php';

  		$usuario = $_POST["usuario"];

        $sql="DELETE FROM usuarios where usuario = '$usuario'";
        $Eliminar=$conexion->query($sql);

         header("Location: ../admin/gestion_de_usuarios/gestionUsuarios.php");
  
?>