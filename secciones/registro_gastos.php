<?php
include ("../templates/cabecera.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Gastos</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
        Registro de Gastos del Mes
        </div>
            <div class="card-body">
            <form class="row g-4" action="registrar_gastos.php" method="post">
                <div class="col-md-3">
                Tipo de Gasto: 
                <select class="form-select" aria-label="Default select example" name="tipo">
                <option value="fijos">Fijo</option>
                <option value="variables">Variable</option>
                </select>
                </div>
                <div class="col-md-3">         
                Fecha del Gasto: <input type="date" class="form-control" name="fecha">
                </div>
                <div class="col-md-3">
                Número de Factura: <input type="text" class="form-control" name="factura">
                </div>
                <div class="col-md-3">
                Monto en USD: <input type="text" class="form-control" name="monto">
                </div>
                <div class="col-md-3">
                Sub-tipo de Gasto: 
                <select class="form-select" aria-label="Default select example" name="sub-tipo">
                <option value="Consumibles">Consumibles</option>
                <option value="Servicios">Servicios</option>
                <option value="Salarios">Sueldos y Salarios</option>
                <option value="Eventuales">Eventuales</option>
                <option value="Otros">Otros</option>
                </select>
                </div>
                <div class="col-md-9">
                Motivo del Gasto: <input type="text" class="form-control" name="motivo">
                </div>
                <div class="col-12">
                    <button class="btn btn-dark" type="submit">Registrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>