<?php
session_start( );

$conexion = mysqli_connect('localhost','root','','pasteleria');

$email = $_POST['email'];
$clave = $_POST['clave'];


$consulta = "SELECT idUsuario, nombreUsuario, nivel
FROM usuario WHERE email='$email' AND clave=MD5('$clave') AND estado='activo'  LIMIT 1";

$fila = mysqli_query($conexion, $consulta);
$acceso = mysqli_fetch_assoc($fila);

if( $acceso == NULL ){
	header("Location: index.php?login=error");
}else{

	$_SESSION = $acceso;
	

	header("Location: logueado.php");
}


?>