<?php
$id = $_GET['id'];

$conexion = mysqli_connect('localhost','root','','pasteleria');


$consulta = "UPDATE usuario SET estado='baneado' WHERE idUsuario='$id'";

mysqli_query($conexion, $consulta);
header("Location: usuarios.php");

?>