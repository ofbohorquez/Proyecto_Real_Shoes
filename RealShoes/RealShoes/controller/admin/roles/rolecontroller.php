<?php 
    include "../../../model/conexion.php";

    if(isset($_POST['newrole'])){
        $nombre = $_REQUEST['rolename'];
        $descripcion = $_REQUEST['roledescription'];

        $nombre = mysqli_real_escape_string($conectar,$_POST['rolename']);
        $descripcion = mysqli_real_escape_string($conectar,$_POST['roledescription']);
        
        $actualizar = DATE('Y-m-d H:m:i');
        //echo $actualizar;

        $consulta = "INSERT INTO roles (rolname, roldesc, rolcreatedat, rolupdatedat) VALUES('$nombre','$descripcion', '$actualizar', '$actualizar')";

        //echo $consulta;

        $resultado = mysqli_query($conectar, $consulta);
 
        if($resultado){
            echo "<h3 class='alert alert-success'>Se ha creado el rol en el sistema</h3><br>";
        }else{
            
            die("Ha habido errores en la creación del rol. Por favor, verifique los datos de la conexión<br>" .mysqli_error($conectar));
        }


    }
?>

