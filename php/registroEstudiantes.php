<?php
	session_start();
	include './conexion.php';

	$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $catedra=$_POST["catedra"];
    $agrupacion=$_POST["agrupacion"];
    $formacion=$_POST["formacion"];
        
	 $sql="INSERT INTO estudiantes (nombre,apellido,cedula,direccion,telefono,catedra,agrupacion,formacion)
	 VALUES ('$nombre','$apellido','$cedula','$direccion','$telefono','$catedra','$agrupacion','$formacion')";
	 $registroEstudiante=$conexion->query($sql);

	 if(isset($_SESSION["admin"])){
	 	 header("Location: ../admin/gestion_de_estudiantes/registroEstudiante.php");
	 }
	 else{
	 	header("Location: ../usuario/gestion_de_estudiantes/registroEstudiante.php");
	 }

?>