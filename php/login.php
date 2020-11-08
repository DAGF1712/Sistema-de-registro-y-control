 <?php
session_start();

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
include './conexion.php';

    $admin="SELECT * FROM administradores WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $procesoAdmin=$conexion->query($admin);

    $usuarioBasico="SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $procesoUsuario=$conexion->query($usuarioBasico);


if($resultadoAdmin = mysqli_fetch_array($procesoAdmin))  
{
    $_SESSION["admin"] = $usuario;

    header("Location: ../admin/index.php");
 
}
 
else if($resultadoBasico = mysqli_fetch_array($procesoUsuario))  
{
    $_SESSION["usuario"] = $usuario;

    header("Location: ../usuario/index.php");
 
}
 
else 
{
  header("Location: ../indexError.html");
}
?>