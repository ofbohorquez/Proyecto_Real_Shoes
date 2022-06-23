<?php   
include  "../model/conexion.php";


$email = $_POST['email'];
$pass = $_POST['password'];


$email          =     mysqli_real_escape_string($conectar, $_POST['email']);
$pass           =     mysqli_real_escape_string($conectar, $_POST['password']);

$login = "SELECT useremail, userpassword, userrolid, userfullname, userdeletedat FROM usuario WHERE useremail='$email'";
$resultado = mysqli_query($conectar, $login);
$datos = mysqli_fetch_array($resultado);


if(isset($_POST['login'])){
    session_start();
    $_SESSION['usuario'] = $datos['userfullname'];
    if(password_verify($pass, $datos['userpassword'])){
        
        if($datos['userrolid']==1){
            echo "<script>alert('Bienvenido Administrador')
                window.location.href='../view/dashboard_admin.php'</script>";
                
        }elseif($datos['userrolid']==2){
            echo "<script>alert('Bienvenido Cliente')
                window.location.href='../view/dashboard_cliente.php'</script>";
    
        }elseif($datos['userrolid']==3){
            echo "<script>alert('Bienvenido Colaborador')
                window.location.href='../view/dashboard_empleado.php'</script>";
        
        }
    }else{
        echo "<script>alert('Error al Iniciar Sesión: Verifique Correo y Contraseña')
                window.location.href='../index.php'</script>" .mysqli_error($conectar);
    }
    $conectar->close();
}


?>
