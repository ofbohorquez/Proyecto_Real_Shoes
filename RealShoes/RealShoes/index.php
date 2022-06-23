<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "view/cdns.php"; ?>
    <title>Bienvenido a nuestra firma Lawyer en Acción</title>
</head>
<body>
    <div class="row">
        <?php include "view/Titulo.php";?>
        <?php include "view/topbar.php"; ?>
        <div class="col-4">

        </div>
        <div class="col-4">
          <form action="controller/login.php" method="post" class="form-group shadow" style="padding: 10px;">
                <h3 style="text-align: center; " class="text-success">Inicio de sesión</h3>
                <label for="email">Ingrese su email</label>
                <input type="email" name="email" id="" class="form-control">
                <label for="password">Escriba su contraseña</label>
                <input type="password" name="password" id="" class="form-control">
                <br>
                <input type="submit" value="Iniciar sesión" name="login" class="btn btn-success">
                <br>
                <label for="texto">¿No está registrado?</label><a href="view/register.php">Registrarse</a>
            </form>
        </div>
        <div class="col-4">

        </div>
    </div>
</body>
</html>