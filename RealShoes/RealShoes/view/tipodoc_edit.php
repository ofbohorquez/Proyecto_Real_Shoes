<?php 
    include "../../model/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../cdns.php"; ?>
    <title>Actualización Tipo Documento | Lawyer Inc.</title>
</head>
<body>
    <div class="row">
        <?php include "../Titulo.php";?>
        <?php include "../topbar.php"; ?>
    </div>
    <div class="row">
        <div class="col-2">
            <p>Este espacio es para el menú lateral</p>
        </div>
        <div class="col-10">
            <form action="../../controller/admin/tipodoc_register.php" method="post" class="form-group">
                <h3 style="font-family: Verdana;">Crear Tipo Documento del sistema</h3>
                <div class="mb-4 row">
                    <div class="col-sm-8">
                        <input type="text" name="tdocname" id="" class="form-control" placeholder="Nombre del documento">
                    </div>                    
                </div>
                <div class="mb-4 row">
                    <div class="col-sm-8">
                    </div>                    
                </div>
                <input type="submit" class="btn btn-success" value="Crear Tipo Documento" name="newrole">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php 
                $consulta = "SELECT * FROM tipodoc";
                $resultado = $resultado = mysqli_query($conectar, $consulta);
               if (mysqli_num_rows($resultado)>0){
                    echo "<table class='table table-striped'>
                    <thead class='center'>
                        <tr>
                            <th>ID</th>
                            <th>TIPO DOCUMENTO</th>
                            <th>CREACIÓN</th>
                            <th>ACTUALIZACIÓN</th>
                            <th>ESTADO</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot class='center'>
                        <tr>
                            <th>ID</th>
                            <th>TIPO DOCUMENTO</th>
                            <th>CREACIÓN</th>
                            <th>ACTUALIZACIÓN</th>
                            <th>ESTADO</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>";
                    while($datos = mysqli_fetch_assoc($resultado)){
                        echo "
                        <tbody>
                            <tr>
                                <td>"; echo $datos['tipodocid'];echo"</td>
                                <td>"; echo $datos['tipodocname'];echo"</td>
                                <td>"; echo $datos['tipodoccreatedat'];echo"</td>
                                <td>"; echo $datos['tipodocupdatedat'];echo"</td>
                                <td>"; echo $datos['tipodocdeletedat'];echo"</td>
                                <td>"; echo "<a href='../controller/admin/tipodoc_update?id=";echo $datos['tipodocid'];echo"'><i class='text-warning fa-solid fa-user-pen fa-2x'></i></a>"; echo " | "; echo "<a href='../controller/admin/tipodoc_delete.php?id=";echo $datos['tipodocid'];echo"'><i class='text-danger fa-solid fa-trash fa-2x'></i></a>";echo"</td>";                     
                                echo "
                                                                
                            </tr>
                        </tbody>
                    ";
                    }
                }echo "</table>";
            ?>
        </div>
    </div>
</body>
</html>