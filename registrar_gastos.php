<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Gastos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css" >
</head>
<body>
    
<?php

include ("conexion.php");

if ($_POST) {

$tipo=$_POST['tipo'];
$fecha=$_POST['fecha'];
$factura=$_POST['factura'];
$monto=$_POST['monto'];
$subTipo=$_POST['sub-tipo'];
$motivo=$_POST['motivo'];

$objConexion= new conexion();
$sql="INSERT INTO `gastos` (`ID`,`tipo`, `fecha`, `factura`, `monto`, `sub-tipo`, `motivo`) VALUES (NULL, '$tipo', '$fecha', '$factura', '$monto', '$subTipo', '$motivo');";
$objConexion->ejecutar($sql);


echo "<h1>Registro Exitoso!!</h1><br/>";

}

?>

<div class=contenedor-but>
    <form action="consultar_gastos.php", method="post">
    <button class="btn btn-dark" type="submit">Volver</button>
    </form>
</div>

</body>
</html>