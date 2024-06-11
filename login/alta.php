<?php

$conexion = mysqli_connect('localhost','root','','pasteleria');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];
$apellido = $_POST['apellido'];

$consulta ="INSERT INTO usuario 
SET nombreUsuario='$nombre',
apellidoUsuario='$apellido',
email='$email', 
clave=MD5('$clave'),
nivel='usuario',
fechaAlta=NOW( )";

mysqli_query($conexion, $consulta);
header("Location:index.php?alta=ok");



?>