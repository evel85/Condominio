<?php
include ("../templates/cabecera.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Inmuebles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css" >
</head>

<body>

    <div class="container">
    <div class="card">
        <div class="card-header">
        Registro de Inmuebles-Residentes
        </div>
            <div class="card-body">
            <form class="row g-4" action="registrar_inmueble.php" method="post">
                <div class="col-md-6">         
                Nombres: <input type="text" class="form-control" name="Nombre-Propietario">
                </div>
                <div class="col-md-6">
                Apellidos: <input type="text" class="form-control" name="Apellido-Propietario">
                </div>
                <div class="col-md-3">
                Apartamento: <input type="text" class="form-control" name="Apartamento">
                </div>
                <div class="col-md-3">
                Número Telefónico: <input type="tel" class="form-control" name="Telefono">
                </div>
                <div class="col-md-6"> 
                Correo Electrónico: <input type="email" class="form-control" name="Email">
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