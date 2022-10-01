<?php

session_start();

if($_POST){

    $mensaje='Usuario o Contraseña incorrectos';

    $usuario=$_POST['usuario'];
    $contrasenia=$_POST['contrasenia'];

    if($usuario=='admin' && $contrasenia=='admin')
    {
        $_SESSION['usuario']=$usuario;
        header("location: secciones/dashboard.php");
    }  
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css" >
</head>
   
<body>

    <div class="contenedor1">
    <br/>
    <h1>Sistema de Gestión de Condominio</h1>
    <br/>
    <br/>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <img class="portada" src="imagenes/Gestion-en-el-condominio.png" alt="condominio">
        </div>
        <div class="col-md-6">
      
            <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Inicio de sesión  
                </div>
                <div class="card-body">
                    Usuario: <input class="form-control" type="text" name="usuario" id="usuario">
                    <br/>
                    Contraseña: <input class="form-control" type="password" name="contrasenia" id="contrasenia">
                    <br/>
                    <?php 
                        if (isset($mensaje)){ ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo $mensaje;?></strong>
                        </div>  
                       <?php } ?>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-dark" type="submit">Iniciar sesión</button>
                        </div> 
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <br/>
    <br/>

<?php
include ("templates/pie.html");
?>