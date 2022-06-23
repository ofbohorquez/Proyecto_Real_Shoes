<?php 
    define('Servidor', 'localhost:3306');
    define('Usuario', 'usuario1');
    define('Password', '12345678');
    define('Database', 'lawyer');

    $conectar = mysqli_connect(Servidor, Usuario, Password, Database);

    if($conectar===FALSE){
        die("Revise los datos de conexión.<br> Ha habido un error: ".mysqli_connect_error());
    }else{
        //echo "La conexión a la base de datos ha sido exitosa.";
    }
?>