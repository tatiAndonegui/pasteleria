<?php
include_once "login_header.php";

session_start( );
?>

<h1>Bienvenido</h1>

<?php

if( !isset( $_SESSION['idUsuario'] ) ){
	header("Location: index.php?forbidden=1");
}


?>


<a href="logout.php">Desloguearse</a>