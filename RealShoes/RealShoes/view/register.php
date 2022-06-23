<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "cdns.php"; ?>
    <title>Formulario de registro de usuario | Lawyer Enterprises</title>
</head>
<body>
<div class="row">
        <?php include "Titulo.php";?>
        <?php include "topbar.php"; ?>
        <div class="col-2">

        </div>
        <div class="col-8 shadow">
            <form action="../controller/admin/users/userregister.php" method="post" class="form-group shadow" style="padding: 10px;">
                <h3 style="text-align: center; color:aqua;">Formulario de registro</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text">Elija el tipo de documento</span>
                    <select class="form-control" name="tipodocumento" id="" required>
                        <option value="1">Tarjeta de identidad</option>
                        <option value="2">Cédula de ciudadanía</option>
                        <option value="3">Cédula de extranjería</option>
                        <option value="4">Registro civil de nacimiento</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Elija el tipo de usuario</span>
                    <select class="form-control" name="tipousuario" id="" required>
                        <option value="1">Natural</option>
                        <option value="2">Jurídico</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Ingrese documento de identidad o NIT</span>
                    <input class="form-control" type="number" name="documento" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Escriba su nombre completo o razón social</span>
                    <input class="form-control" type="text" name="nombrecompleto" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de nacimiento o de creación de la empresa</span>
                    <input class="form-control" type="date" name="fechainicio" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Dirección</span>
                    <input class="form-control" type="text" name="direccion" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Celular</span>
                    <input class="form-control" type="phone" name="celular" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Correo electrónico</span>
                    <input class="form-control" type="email" name="email" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Contraseña</span>
                    <input class="form-control" type="password" name="password" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Repita su contraseña</span>
                    <input class="form-control" type="password" name="repassword" id="" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Tarjeta profesional (si aplica)</span>
                    <input class="form-control" type="text" name="tarjetaprof" id="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Espacialización (si es abogado)</span>
                    <input class="form-control" type="text" name="especialidad" id="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Actividad económica</span>
                    <input class="form-control" type="text" name="actividadecon" id="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Fecha de contratación</span>
                    <input class="form-control" type="date" name="fechacontrato" id="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rol de usuario</span>
                    <select class="form-control" name="rolusuario" id="" required>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                        <option value="3">Auxiliar administrativo</option>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" value="Registro" name="registrar" style="float: right;">
            </form>
        </div>
        <div class="col-2">

        </div>
    </div>
</body>
</html>