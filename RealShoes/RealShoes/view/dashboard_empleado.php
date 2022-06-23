<?php 
session_start(); 
/** 
 * Agregar este codigo siempre al finalizar la aplicación
 * error_reporting(0); 
 */
$varsesion =$_SESSION['usuario'];

if($varsesion == null || $varsesion == ''){
    echo "<script>alert('Error Usuario No Autorizado:')
                window.location.href='../index.php'</script>";
    die();            
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "cdns.php"; ?>
    <title>Dashboard | Lawyer Inc.</title>
</head>
<body>
    <div class="row">
        <?php include "Titulo.php";?>
        <?php include "topbar.php"; ?>
    </div>
    <div class="row">
        <div class="col-2">
        <p>Aplicaciones del Sistema</p>
        </div>
        <div class="col-10">
            <h1>Bienvenido <?php echo $_SESSION['usuario']?> Colaborador de Lawyer Inc.</h1>
        </div>
    </div>
</body>
</html>