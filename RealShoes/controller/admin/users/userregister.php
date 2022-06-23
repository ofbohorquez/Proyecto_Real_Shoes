<?php
    include "../../../model/conexion.php";
    
    if(isset($_POST['registrar'])){
        //Tomar los campos del formulario
        $tipodocumento              =               $_POST['tipodocumento'];
        $tipousuario                =               $_POST['tipousuario'];
        $documento                  =               $_POST['documento'];
        $nombrecompleto             =               $_POST['nombrecompleto'];
        $fechainicio                =               $_POST['fechainicio'];
        $direccion                  =               $_POST['direccion'];
        $celular                    =               $_POST['celular'];
        $email                      =               $_POST['email'];
        $password                   =               $_POST['password'];
        $repassword                 =               $_POST['repassword'];
        $tarjetaprof                =               $_POST['tarjetaprof'];
        $especialidad               =               $_POST['especialidad'];
        $actividadecon              =               $_POST['actividadecon'];
        $fechacontrato              =               $_POST['fechacontrato'];
        $rolusuario                 =               $_POST['rolusuario'];
        $createdat                  =               date('Y-m-d H:m:s');
        $updatedat                  =               date('Y-m-d H:m:s');


        //Validar que los campos no tengan caracteres no occidentales:
        $nombrecompleto =     mysqli_real_escape_string($conectar, $_POST['nombrecompleto']);
        $direccion      =     mysqli_real_escape_string($conectar, $_POST['direccion']);
        $email          =     mysqli_real_escape_string($conectar, $_POST['email']);
        $password       =     mysqli_real_escape_string($conectar, $_POST['password']);
        $tarjetaprof    =     mysqli_real_escape_string($conectar, $_POST['tarjetaprof']);
        $especialidad   =     mysqli_real_escape_string($conectar, $_POST['especialidad']);

        $caracterespassword = strlen($password);
        if($password == $repassword && $caracterespassword>=8){

            $passencriptado=password_hash($password, PASSWORD_DEFAULT);
            
            $insertar = "INSERT INTO usuario(usertipodoc, usertype, userid, userfullname, userbirthday, useraddress, userphone, useremail, userpassword, userprofescard, userespecial, useractivity, userhired, userrolid, usercreatedat, userupdatedat) VALUES('$tipodocumento', '$tipousuario', '$documento', '$nombrecompleto','$fechainicio', '$direccion', '$celular','$email', '$passencriptado','$tarjetaprof', '$especialidad', '$actividadecon', '$fechacontrato', '$rolusuario', '$createdat', '$updatedat')";

            //var_dump($insertar);

            $resultado = mysqli_query($conectar, $insertar);

            if($resultado){
                echo "<script>alert('El usuario ha sido registrado exitosamente')
                window.location.href='../../../index.php'</script>";
            }else{
                echo "Ha habido errores mientras se creaba el usuario ".mysqli_error($conectar);
            }

        }else{
            echo "<script>alert('Error El usuario no ha sido registrado')
            window.location.href='../../../view/register.php'</script>";
        }


    }
?>