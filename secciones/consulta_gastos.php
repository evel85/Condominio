<?php
include ("../templates/cabecera.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emisión de Recibos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/estilos.css" >
</head>
<body>

<header><h1>Resumen de Gastos</h1></header>

  <?php include ("../configuracion/conexion.php");?>

  <?php
    $objConexion= new conexion();
    $consulta1=$objConexion->consultar("SELECT * FROM `gastos` WHERE `tipo` = 'fijos'");
    $consulta2=$objConexion->consultar("SELECT * FROM `gastos` WHERE `tipo` = 'variables'");

    if ($_GET){

        $id=$_GET['borrar'];
        $objConexion= new conexion();
      
        //Borrado de fila
        $sql="DELETE FROM `gastos` WHERE `gastos`.`id` =".$id;
        $objConexion->ejecutar($sql);
        header("location: consulta_gastos.php");
    }
    
        $totalGastosF=0;
        foreach ($consulta1 as $gastos) {
            $totalGastosF=$gastos['monto']+$totalGastosF;
        }

        $totalGastosV=0;
        foreach ($consulta2 as $gastos) {
            $totalGastosV=$gastos['monto']+$totalGastosV;
        }
  
  ?>
 
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col-md-12">
        <table class="table table-secondary">
        <thead class="table-dark">
        <tr>
            <th>FECHA DEL GASTO</th>
            <th>CATEGORÍA</th>  
            <th>DESCRIPCIÓN</th>
            <th>NRO. DE FACTURA</th>
            <th>MONTO EN USD</th>
            <th>ACCIÓN</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>GASTOS FIJOS</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
            <?php foreach ($consulta1 as $gastos) { ?>
        <tr>
            <td><?php echo $gastos['fecha'];?></td>
            <td><?php echo $gastos['sub-tipo'];?></td>
            <td><?php echo $gastos['motivo'];?></td>
            <td><?php echo $gastos['factura'];?></td>
            <td><?php echo $gastos['monto'];?></td>
            <td><a name="" id="" class="btn btn-dark" href="?borrar=<?php echo $gastos['id'];  ?>" role="button">Eliminar</a></td>
        </tr>
        <?php } ?>
        <tr>
            <td class="table-primary">TOTAL GASTOS FIJOS</td>
            <td class="table-primary"></td>
            <td class="table-primary"></td>
            <td class="table-primary"></td>
            <td class="table-primary"><?php echo $totalGastosF;?></td>
            <td class="table-primary"></td>
        </tr>
        <tr>
            <th>GASTOS VARIABLES</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
            <?php foreach ($consulta2 as $gastos) { ?>
        <tr>
            <td><?php echo $gastos['fecha'];?></td>
            <td><?php echo $gastos['sub-tipo'];?></td>
            <td><?php echo $gastos['motivo'];?></td>
            <td><?php echo $gastos['factura'];?></td>
            <td><?php echo $gastos['monto'];?></td>
            <td><a name="" id="" class="btn btn-dark" href="?borrar=<?php echo $gastos['id'];  ?>" role="button">Eliminar</a></td>
        </tr>
            <?php } ?>
        <tr>
            <td class="table-primary">TOTAL GASTOS VARIABLES</td>
            <td class="table-primary"></td>
            <td class="table-primary"></td>
            <td class="table-primary"></td>
            <td class="table-primary"><?php echo $totalGastosV;?></td>
            <td class="table-primary"></td>
        </tr>
        <tr>
            <th class="table-primary">GASTOS TOTALES DEL MES</th>
            <td class="table-primary"></td>
            <td class="table-primary"></td>
            <td class="table-primary"></td>>
            <td class="table-primary"><?php echo $totalGastosF+$totalGastosV;?></td>
            <td class="table-primary"></td>
        </tr>
        </tbody>
        </table>
        </div>
    </div>
  </div>

</body>
</html>