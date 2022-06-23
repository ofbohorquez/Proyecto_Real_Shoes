<?php
include  "../../../model/conexion.php";

$tdocname =$_post['tdocname'];

/**UPDATE `tipodoc` SET `tipodocid`='[value-1]',`tipodocname`='[value-2]',`tipodoccreatedat`='[value-3]',`tipodocupdatedat`='[value-4]',`tipodocdeletedat`='[value-5]' WHERE 1 */

$Actualizar= "UPDATE TIPODOC SET ";

$resultado = mysqli_query($conectar, $Actualizar);

Echo "Página en construcción";


?>