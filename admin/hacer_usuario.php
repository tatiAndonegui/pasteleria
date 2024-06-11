<?php
$id = $_GET['id'];

$conexion = mysqli_connect('localhost','root','','pasteleria');


$consulta = "UPDATE usuario SET nivel='usuario' WHERE idUsuario='$id'";

mysqli_query($conexion, $consulta);
header("Location: usuarios.php");

?>