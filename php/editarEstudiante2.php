	<?php
        session_start();
        include './conexion.php';

        $cedula=$_POST['cedula'];
        $nombre2=$_POST["nombre"];
        $apellido2=$_POST["apellido"];
        $direccion2=$_POST["direccion"];
        $telefono2=$_POST["telefono"];
        $catedra2=$_POST["catedra"];
    	$agrupacion2=$_POST["agrupacion"];
    	$formacion2=$_POST["formacion"];
        
        $sql="UPDATE estudiantes SET nombre='$nombre2', apellido='$apellido2', direccion='$direccion2', telefono='$telefono2',catedra='$catedra2', agrupacion='$agrupacion2', formacion='$formacion2' WHERE cedula = $cedula";
        $editarEstudiante=$conexion->query($sql);

    if(isset($_SESSION["admin"])){
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
     }
     else if(isset($_SESSION["usuario"])){
                  if($catedra2 == 1){
           header("Location: ../usuario/gestion_de_estudiantes/catedraViolin.php");
          }
          if($catedra2 == 2){
            header("Location: ../usuario/gestion_de_estudiantes/catedraViola.php");
          }
            if($catedra2 == 3){
            header("Location: ../usuario/gestion_de_estudiantes/catedraPiano.php");
          }
            if($catedra2 == 4){
            header("Location: ../usuario/gestion_de_estudiantes/catedraCuatro.php");
          }
           if($catedra2 == 5){
            header("Location: ../usuario/gestion_de_estudiantes/catedraGuitarra.php");
          }
           if($catedra2 == 6){
            header("Location: ../usuario/gestion_de_estudiantes/catedraCanto.php");
          }
          if($agrupacion2 == 1){
          header("Location: ../usuario/gestion_de_estudiantes/rockSinfonico.php");
          }
          if($agrupacion2 == 2){
          header("Location: ../usuario/gestion_de_estudiantes/camerataYaracuy.php");
          }
          if($agrupacion2 == 3){
          header("Location: ../usuario/gestion_de_estudiantes/coroArtistico.php");
          }
          if($agrupacion2 == 4){
          header("Location: ../usuario/gestion_de_estudiantes/cumacoDrums.php");
          }
          if($agrupacion2 == 5){
          header("Location: ../usuario/gestion_de_estudiantes/latinoCaribeña.php");
          }
          if($agrupacion2 == 6){
          header("Location: ../usuario/gestion_de_estudiantes/afroLatino.php");
          }
          if($agrupacion2 == 7){
          header("Location: ../usuario/gestion_de_estudiantes/son8.php");
          }
          if($formacion2 == 1){
          header("Location: ../usuario/gestion_de_estudiantes/formacionPiano.php");
          }
           if($formacion2 == 2){
          header("Location: ../usuario/gestion_de_estudiantes/formacionCuatro.php");
          }
           if($formacion2 == 3){
          header("Location: ../usuario/gestion_de_estudiantes/formacionGuitarra.php");
          }
           if($formacion2 == 4){
          header("Location: ../usuario/gestion_de_estudiantes/formacionCanto.php");
          }
     }
    ?>   