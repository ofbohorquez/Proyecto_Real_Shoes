<?php 
include "../../../model/conexion.php";

$tdoc           =       $_POST['tdocname'];

$tdoc           =       mysqli_real_escape_string($conectar, $_POST['tdocname']);
$actualizar = DATE('Y-m-d H:m:i');


/** INSERT INTO `tipodoc`(`tipodocid`, `tipodocname`, `tipodoccreatedat`, `tipodocupdatedat`, `tipodocdeletedat`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]') */

$insertar   =   "INSERT INTO tipodoc(tipodocname,tipodoccreatedat,tipodocupdatedat ) values ('$tdoc', '$actualizar','$actualizar')";
$resultado  =   mysqli_query($conectar, $insertar);


if($resultado){
    echo "<h3 class='alert alert-success'>Se ha registrado el tipo documento en el sistema</h3><br>";
}else{
    
    die("Ha habido errores en la creación del tipo documento. Por favor, verifique los datos de la conexión<br>" .mysqli_error($conectar));
}




?>