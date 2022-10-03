<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevos Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css" >
</head>
<body>
    
<?php

include ("../configuracion/conexion.php");

if ($_POST) {

$usuario=$_POST['usuario'];
$contrasenia=$_POST['contrasenia'];
$acceso=$_POST['acceso'];

$contra_cif=password_hash($contrasenia, PASSWORD_DEFAULT);

$objConexion= new conexion();
$sql="INSERT INTO `usuarios_app` (`ID`, `usuario`, `contrasenia`, `acceso`) VALUES (NULL, '$usuario', '$contra_cif', '$acceso');";
$objConexion->ejecutar($sql);

//echo "<script>alert('Registro Exitoso')</script>";

echo "<h1>Registro Exitoso!!</h1><br/>";

}
?>

</body>
</html>