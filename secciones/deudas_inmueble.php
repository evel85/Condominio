<?php
include ("../templates/cabecera.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/estilos.css" >
</head>
<body>

<header><h1>Listado de Inmuebles Registrados</h1></header>

  <?php include ("../configuracion/conexion.php");?>

  <?php
    $objConexion= new conexion();
    //$consulta=$objConexion->consultar("SELECT * FROM datos_inmueble AS di INNER JOIN inmueble_deudas AS idd ON di.ID=idd.id_inmueble");
    $consulta1=$objConexion->consultar("SELECT * FROM datos_inmueble");
    $consulta2=$objConexion->consultar("SELECT de.razon_deuda, de.monto_deuda FROM deudas AS de INNER JOIN inmueble_deudas AS idd ON de.id=idd.id_deuda");

    if ($_GET){

    $id=$_GET['borrar'];
    $objConexion= new conexion();
  
    //Borrado de fila
    $sql="DELETE FROM `datos_inmueble` WHERE `datos_inmueble`.`ID` =".$id;
    $objConexion->ejecutar($sql);
    header("location: consulta_inmueble.php");
    }

  ?>
 
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col-md-12">
        <table class="table table-secondary">
        <thead class="table-dark">
        <tr>
            <th>Apartamento</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Deudas Pendientes</th>
            <th>Monto Deudas</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($consulta1 as $datos_inmueble) { ?>
        <tr>
            <td><?php echo $datos_inmueble['Apartamento'];?></td>
            <td><?php echo $datos_inmueble['Apellido-Propietario'];?></td>
            <td><?php echo $datos_inmueble['Nombre-Propietario'];?></td>
            <td><?php echo $datos_inmueble['Telefono'];?></td> 
            <td><?php echo $datos_inmueble['Email'];?></td>
            <td><?php foreach ($consulta2 as $deudas) { ?>
            <?php echo $deudas['razon_deuda'];?><br/><?php } ?></td>
            <td><?php echo 'SINF';?><br/></td>
            <td><a name="" id="" class="btn btn-dark" href="?borrar=<?php echo $datos_inmueble['ID'];  ?>" role="button">Eliminar</a></td>
          </tr>
          <?php } ?>
        </tbody>
        </table>
        </div>
    </div>
  </div>

</body>
</html>