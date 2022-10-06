<?php

include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo= '$correo' 
and contrasena='$contrasena'");

if(mysqli_num_rows($validad_login) > 0){

    header("location: perfil.php");
    exit;

}else{
    echo '
        <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
        </script>
    ';
    exit;
}


?>