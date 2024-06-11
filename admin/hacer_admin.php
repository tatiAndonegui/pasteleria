<?php
$id = $_GET['id'];

$conexion = mysqli_connect('localhost','root','','pasteleria');


$consulta = "UPDATE usuario SET nivel='admin' WHERE idUsuario='$id'";

mysqli_query($conexion, $consulta);
header("Location: usuarios.php");

?>