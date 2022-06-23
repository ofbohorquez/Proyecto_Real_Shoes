<?php 
    include  "../../../model/conexion.php";

    $userid             =       $_GET["id"];

    if($conectar===false){
        die("Ha habido errores mientras se intentaba actualizar los datos del usuario" .mysqli_connect_error());
    }else{

    $borrar = "DELETE FROM usuario WHERE userid=$userid";

    if($conectar->query($borrar) ===TRUE){
        echo "<script>alert('El usuario ha sido eliminado.')
                window.location.href='../../../view/users.php'</script>";
    }else{
        echo "No ha sido posible la actualización, verifique la información. <br>";
        echo $conectar->error;
    }
    }
    $conectar->close();
?>