<?php 
include "../model/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "cdns.php"; ?>
    <title>Actualización de usuario | Lawyer Enterprises</title>
</head>
<body>
<div class="row">
        <?php include "Titulo.php";?>
        <?php include "topbar.php"; ?>
        <div class="col shadow">
            <?php
                $userid = $_GET['id'];
                //var_dump($userid);
                $seleccionar = "SELECT * FROM usuario WHERE userid=$userid";
                $resultado = mysqli_query($conectar, $seleccionar);
                $dato = $resultado->fetch_assoc();
                //var_dump($dato);
            ?>
            <form action="../controller/admin/users/userupdate.php" method="post" class="form-group shadow" style="padding: 10px;">
                    <h3 style="text-align: center; color:aqua;">Formulario de registro</h3>
                    <div class="input-group mb-3">
                        <input class="form-control" type="hidden" name="userid" id="" required value="<?php echo $dato['userid']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tipo de documento</span>
                        <select class="form-control" name="tipodocumento" id="" required>
                            <option value="1">Tarjeta de identidad</option>
                            <option value="2">Cédula de ciudadanía</option>
                            <option value="3">Cédula de extranjería</option>
                            <option value="4">Registro civil de nacimiento</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tipo de usuario</span>
                        <select class="form-control" name="tipousuario" id="" required>
                            <option value="1">Natural</option>
                            <option value="2">Jurídico</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dirección</span>
                        <input class="form-control" type="text" name="direccion" id="" required value="<?php echo $dato['useraddress']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Celular</span>
                        <input class="form-control" type="phone" name="celular" id="" required value="<?php echo $dato['userphone']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Contraseña</span>
                        <input class="form-control" type="text" name="password" id="" value="12345678">                       
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tarjeta profesional (si aplica)</span>
                        <input class="form-control" type="text" name="tarjetaprof" id="" value="<?php echo $dato['userprofescard']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Espacialización (si es abogado)</span>
                        <input class="form-control" type="text" name="especialidad" id="" value="<?php echo $dato['userespecial']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Actividad económica</span>
                        <input class="form-control" type="text" name="actividadecon" id="" value="<?php echo $dato['useractivity']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Fecha de contratación</span>
                        <input class="form-control" type="date" name="fechacontrato" id="" value="<?php echo $dato['userhired']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rol de usuario</span>
                        <select class="form-control" name="rolusuario" id="" required>
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                            <option value="3">Auxiliar administrativo</option>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Actualizar datos" name="registrar" style="float: right;">
                </form>
        </div>
    </div>
</body>
</html>

<label for=""></label>