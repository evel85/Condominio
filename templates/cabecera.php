<?php
session_start();

if(!isset($_SESSION['usuario'])){
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<!-- CSS only -->
    <link rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estilos/estilos.css" >
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">

        <a class="navbar-brand fw-bold text-uppercase" href="../index.php"><i class="bi bi-building"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../secciones/dashboard.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../secciones/registro_cond.php">Datos Condominio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../secciones/registro_inmueble.php">Registrar Inmueble</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../secciones/consulta_inmueble.php">Resumen de Inmuebles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../secciones/registro_gastos.php">Ingresar Gastos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../secciones/consulta_gastos.php">Resumen de Gastos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../configuracion/cerrar.php">Salir</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"></a>
            </li>
          </ul>

        </div>
      </div>
    </nav>