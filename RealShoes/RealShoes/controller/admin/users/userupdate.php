<?php 
    include  "../../../model/conexion.php";

    $userid             =       $_POST["userid"];
    $tipodocumento      =       $_POST["tipodocumento"];
    $tipousuario        =       $_POST["tipousuario"];
    $direccion          =       $_POST["direccion"];
    $celular            =       $_POST["celular"];
    $password           =       $_POST["password"];
    $tarjetaprof        =       $_POST["tarjetaprof"];
    $especialidad       =       $_POST["especialidad"];
    $actividadecon      =       $_POST["actividadecon"];
    $fechacontrato      =       $_POST["fechacontrato"];
    $rolusuario         =       $_POST["rolusuario"];
    $actualizacion      =       date('Y-m-d H:m:s');
    //var_dump($password);
    if($conectar===false){
        die("Ha habido errores mientras se intentaba actualizar los datos del usuario" .mysqli_connect_error());
    }else{

    $actualizar = "UPDATE usuario SET usertipodoc='$tipodocumento', usertype='$tipousuario', useraddress='$direccion', userphone='$celular',userpassword='$password', userprofescard='$tarjetaprof', userespecial='$especialidad', useractivity='$actividadecon', userhired='$fechacontrato', userrolid='$rolusuario', userupdatedat='$actualizacion' WHERE userid=$userid";

    if($conectar->query($actualizar) ===TRUE){
        echo "<script>alert('Los datos del usuario han sido actualizados')
                window.location.href='../../../view/users.php'</script>";
    }else{
        echo "No ha sido posible la actualización, verifique la información. <br>";
        echo $conectar->error;
    }
    }
    $conectar->close();
?>