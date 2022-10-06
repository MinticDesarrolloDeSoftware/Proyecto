<?php

    $conexicon = mysqli_connect("localhost", "root", "", "login_register_db");
    
    if($conexion){

        echo 'conextado exitosamente a la base de datos';
    } else {

        echo 'no se ha podido conectar a la base de datos';
    }

?>