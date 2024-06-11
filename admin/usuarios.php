<?php
session_start();
?>

<?php
//ver si tiene permisos de administrador
	if( !isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'admin' ){
        die( 'No tienes permiso para ver este contenido' );}

$conexion = mysqli_connect('localhost','root','','pasteleria');

$consulta = "SELECT idUsuario,nivel, IFNULL(nombreUsuario, '----') AS nombreUsuario,
estado, IFNULL(apellidoUsuario, '----') AS apellidoUsuario, email, 
DATE_FORMAT( fechaAlta, '%d/%m/%Y' ) AS fechaAlta FROM usuario ORDER BY fechaAlta DESC";
$respuesta = mysqli_query($conexion, $consulta);
?>

<table>

<tr>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Nivel</th>
		<th>Fecha</th>
		<th>Estado</th>
		<th>Botones</th>
</tr>


<?php
while($acceso = mysqli_fetch_assoc($respuesta)){
	
		echo '<tr>';
		echo '<td>'.$acceso['nombreUsuario'].'</td>';
		echo '<td>'.$acceso['apellidoUsuario'].'</td>';
		echo '<td>'.$acceso['email'].'</td>';
		echo '<td>'.$acceso['nivel'].'</td>';
		echo '<td>'.$acceso['fechaAlta'].'</td>';
		echo '<td>'.$acceso['estado'].'</td>';
		echo '<td>';

	if( $acceso['estado'] == 'activo'){
    echo '<a href="bannear.php?id='.$acceso['idUsuario'].'">Bannear Usuario</a>';
	}else{

    echo '<a href="reactivar_usuario.php?id='.$acceso['idUsuario'].'">Activar Usuario</a>';

	}


	echo ' | ';
		
		if( $acceso['nivel'] == 'usuario' ){
			echo '<a href="hacer_admin.php?id='.$acceso['idUsuario'].'">Hacer Administrador</a>';
		}else{
			echo '<a href="hacer_usuario.php?id='.$acceso['idUsuario'].'">Hacer Usuario</a>';
		}
			
		echo '</td>';
		echo '</tr>';
	
}
	
?>
</table>