<?php
	session_start();
	include './conexion.php';

	$usuario=$_POST["usuario"];
    $contrasena=$_POST["contrasena"];
    $tipoUsuario=$_POST["usuarios"];
        
    if($tipoUsuario == "1"){
	 $sql="INSERT INTO administradores (usuario,contrasena)
	 VALUES ('$usuario','$contrasena')";
	 
	 $registroAdministrador=$conexion->query($sql);

	 header("Location: ../admin/gestion_de_usuarios/creacionUsuarios.php");
	}
	 else if($tipoUsuario == "2"){
	 $sql="INSERT INTO usuarios (usuario,contrasena)
	 VALUES ('$usuario','$contrasena')";

	 $registroUsuario=$conexion->query($sql);

	 header("Location: ../admin/gestion_de_usuarios/creacionUsuarios.php");
	}

?>