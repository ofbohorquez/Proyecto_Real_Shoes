<?php 
session_start(); 

$varsesion =$_SESSION['usuario'];

if($varsesion == null || $varsesion == ''){
    echo "<script>alert('Error Usuario No Autorizado:')
                window.location.href='../index.php'</script>";
}
?>