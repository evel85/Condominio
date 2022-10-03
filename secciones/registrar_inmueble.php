<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Inmueble</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css" >
</head>
<body>
    
<?php

include ("../configuracion/conexion.php");

if ($_POST) {

$Apartamento=$_POST['Apartamento'];
$ApellidoPropietario=$_POST['Apellido-Propietario'];
$NombrePropietario=$_POST['Nombre-Propietario'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];


$objConexion= new conexion();
$sql="INSERT INTO `datos_inmueble` (`ID`, `Apartamento`, `Apellido-Propietario`, `Nombre-Propietario`, `Telefono`, `Email`) VALUES (NULL, '$Apartamento', '$ApellidoPropietario', '$NombrePropietario', '$Telefono', '$Email');";
$objConexion->ejecutar($sql);


echo "<h1>Registro Exitoso!!</h1><br/>";

}

?>

</body>
</html>