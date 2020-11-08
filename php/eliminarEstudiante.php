<?php
  session_start();
  include './conexion.php';

  		$cedula = $_POST['cedula'];

  		$sql="SELECT * FROM estudiantes where cedula = '$cedula'";
        $resultado=$conexion->query($sql);
        $row = mysqli_fetch_array($resultado);
        $catedra2 = $row['catedra'];
        $agrupacion2 = $row['agrupacion'];
        $formacion2 = $row['formacion'];

        $sql="DELETE FROM estudiantes where cedula = '$cedula'";
        $Eliminar=$conexion->query($sql);

        if($catedra2 == 1){
           header("Location: ../admin/gestion_de_estudiantes/catedraViolin.php");
          }
          if($catedra2 == 2){
            header("Location: ../admin/gestion_de_estudiantes/catedraViola.php");
          }
            if($catedra2 == 3){
            header("Location: ../admin/gestion_de_estudiantes/catedraPiano.php");
          }
            if($catedra2 == 4){
            header("Location: ../admin/gestion_de_estudiantes/catedraCuatro.php");
          }
           if($catedra2 == 5){
            header("Location: ../admin/gestion_de_estudiantes/catedraGuitarra.php");
          }
           if($catedra2 == 6){
            header("Location: ../admin/gestion_de_estudiantes/catedraCanto.php");
          }
          if($agrupacion2 == 1){
          header("Location: ../admin/gestion_de_estudiantes/rockSinfonico.php");
          }
          if($agrupacion2 == 2){
          header("Location: ../admin/gestion_de_estudiantes/camerataYaracuy.php");
          }
          if($agrupacion2 == 3){
          header("Location: ../admin/gestion_de_estudiantes/coroArtistico.php");
          }
          if($agrupacion2 == 4){
          header("Location: ../admin/gestion_de_estudiantes/cumacoDrums.php");
          }
          if($agrupacion2 == 5){
          header("Location: ../admin/gestion_de_estudiantes/latinoCaribeña.php");
          }
          if($agrupacion2 == 6){
          header("Location: ../admin/gestion_de_estudiantes/afroLatino.php");
          }
          if($agrupacion2 == 7){
          header("Location: ../admin/gestion_de_estudiantes/son8.php");
          }
          if($formacion2 == 1){
          header("Location: ../admin/gestion_de_estudiantes/formacionPiano.php");
          }
           if($formacion2 == 2){
          header("Location: ../admin/gestion_de_estudiantes/formacionCuatro.php");
          }
           if($formacion2 == 3){
          header("Location: ../admin/gestion_de_estudiantes/formacionGuitarra.php");
          }
           if($formacion2 == 4){
          header("Location: ../admin/gestion_de_estudiantes/formacionCanto.php");
          }
?>