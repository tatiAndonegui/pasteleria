<?php
include_once "admin_header.php";

session_start();
?>



<?php
//ver si tiene permisos de administrador
	if( !isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'admin' ){
        die( 'No tienes permiso para ver este contenido' );}

$conexion = mysqli_connect('localhost','root','','pasteleria');
?>

<h1>Bienvenido a su pantalla de Administrador!</h1>
<h2>¿Qué desea administrar?</h2>

<?php
		$administrar = array();
		$administrar['Recetas'] = "recetas/recetas.php" ; 
		$administrar['Usuarios'] = "usuarios.php";

        echo "<ul>";
		foreach ($administrar as $botones=>$link){
			
			echo "<li class='formulario'><a href=$link>$botones</a></li>";
		}
		echo "</ul>";
		
?>





<?php
    include_once "admin_footer.php";
?>