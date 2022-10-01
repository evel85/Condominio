<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/estilos.css" >
</head>

<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
             Registro de Nuevos Usuarios
            </div>
             <div class="card-body">
                <form action="registrarus.php" method="post">
                    Ingrese un usuario: <input type="text" name="usuario">&nbsp;&nbsp;
                    Ingrese una contraseña: <input type="password" name="contrasenia" id="">&nbsp;&nbsp;
                    Tipo de usuario: 
                    <select name="acceso" id="acceso">
                    <option value="admin">Administartivo</option>
                    <option value="prop">Propietario</option>
                    </select>
                    <br/><br/>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <script>
    alert ("Acción permitida solo para los administradores");
    </script>

</body>
</html>