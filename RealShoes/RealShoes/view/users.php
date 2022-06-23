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
    <title>Listado de usuarios | Lawyer Enterprises</title>
</head>
<body>
<div class="row">
    <?php include "Titulo.php";?>    
    <?php include "topbar.php"; ?>
        <div class="col shadow">
            <?php
                $consulta = "SELECT * FROM usuario ORDER BY usertipodoc";
                $resultado = mysqli_query($conectar, $consulta);

                echo "<table class='table table-responsive'>
                    <thead class='center'>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>Tipo de usuario</th>
                            <th>Nombre completo</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Creado</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot style='float: center;'>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>Tipo de usuario</th>
                            <th>Nombre completo</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Creado</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>";
                    while($fila = mysqli_fetch_assoc($resultado)){
                        echo "<tbody>
                        <tr>
                            <td>"; if($fila['usertipodoc']==1){
                                    echo "Tarjeta de identidad";
                                }elseif($fila['usertipodoc']==2){
                                    echo "Cédula de ciudadanía";
                                }elseif($fila['usertipodoc']==3){
                                    echo "Cédula de extranjería";
                                }else{
                                    echo "Registro civil de nacimiento";
                                } echo"</td>
                            <td>"; if($fila['usertype']==1){
                                    echo "Natural";
                                }else{
                                    echo "Jurídico";
                                }   echo"</td>                           
                            <td>"; echo $fila['userfullname'];echo"</td>                          
                            <td>"; echo $fila['userphone'];echo"</td>                            
                            <td>"; echo $fila['useremail'];echo"</td>                           
                            <td>"; if($fila['userrolid']==1){
                                echo "Administrador";
                            }elseif($fila['userrolid']==2){
                                echo "Cliente";
                            }elseif($fila['userrolid']==3){
                                echo "Auxiliar administrativo";
                            }else{
                                echo "Abogado";
                            } echo"</td>                    
                            <td>"; echo $fila['usercreatedat'];echo"</td>                     
                            <td>"; if ($fila['userdeletedat']==NULL){
                                    echo "Activo";
                            }else{
                                "Inactivo";
                            }echo"</td>                     
                            <td>"; echo "<a href='useredit.php?id=";echo $fila['userid'];echo"'><i class='text-warning fa-solid fa-user-pen fa-2x'></i></a>"; echo " | "; echo "<a href='../controller/admin/users/userdelete.php?id=";echo $fila['userid'];echo"'><i class='text-danger fa-solid fa-trash fa-2x'></i></a>";echo"</td>";                     
                        echo "</tr>
                    </tbody>";
              
                    }

                echo "</table>"; 
        ?>
        </div>
    </div>
</body>
</html>