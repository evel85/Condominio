<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Condominio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css" >
</head>
<body>
    
<?php

include ("../configuracion/conexion.php");

if ($_POST) {

$nombre_cond=$_POST['nombre_cond'];
$rif=$_POST['rif'];
$direccion_cond=$_POST['direccion_cond'];
$pais=$_POST['pais'];
$estado=$_POST['estado'];
$municipio=$_POST['municipio'];
$num_usuarios=$_POST['num_usuarios'];



$objConexion= new conexion();
$sql="INSERT INTO `datos_condominio` (`ID`, `nombre_cond`, `rif`, `direccion_cond`, `pais`, `estado`, `municipio`, `num_usuarios`) VALUES (NULL, '$nombre_cond', '$rif', '$direccion_cond', '$pais', '$estado', '$municipio', '$num_usuarios');";
$objConexion->ejecutar($sql);


echo "<h1>Registro Exitoso!!</h1><br/>";
echo "Se registraron los siguientes datos: ";

}
?>
<?php
    $objConexion= new conexion();
    $proyecto=$objConexion->consultar("SELECT * FROM `datos_condominio`");
?>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col-md-12">
        <table class="table table-dark table-striped-columns">
        <thead>
        <tr>
            <th>Nombre del Condominio</th>
            <th>Rif</th>
            <th>Dirección Fiscal</th>
            <th>Pais</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Nro. de Propietarios-Inquilinos</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($proyecto as $datos_condominio) { ?>
        <tr>
            <td><?php echo $datos_condominio['nombre_cond'];?></td>
            <td><?php echo $datos_condominio['rif'];?></td>
            <td><?php echo $datos_condominio['direccion_cond'];?></td>
            <td><?php echo $datos_condominio['pais'];?></td>
            <td><?php echo $datos_condominio['estado'];?></td>
            <td><?php echo $datos_condominio['municipio'];?></td>
            <td><?php echo $datos_condominio['num_usuarios'];?></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>


</body>
</html>