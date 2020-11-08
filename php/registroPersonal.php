<?php
	session_start();
	include './conexion.php';

	$nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $cargo=$_POST["cargo"];
        
	 $sql="INSERT INTO personal (nombre,apellido,cedula,direccion,telefono,cargo)
	 VALUES ('$nombre','$apellido','$cedula','$direccion','$telefono','$cargo')";
	 $registroPersonal=$conexion->query($sql);

	 if(isset($_SESSION["admin"])){
	 	 header("Location: ../admin/gestion_de_personal/registroPersonal.php");
	 }
	 else{
	 	header("Location: ../usuario/gestion_de_personal/registroPersonal.php");
	 }

?>