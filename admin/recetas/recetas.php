<?php

if(mysqli_connect("localhost","root","","pasteleria")){

    echo "<h1>Recetas - ABM </h1>";

    $conexion = mysqli_connect('localhost','root','','pasteleria');

    $consulta = "SELECT idReceta, nombreReceta FROM receta";

    if($resultado = mysqli_query($conexion,$consulta)){

        echo "<table border=1>";
		echo "<caption>Receta ABM</caption> ";
			echo "
				<tr>
					<th>Receta</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</tr>";
				

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
					echo "<td><a href=mostrar_receta.php?nombreReceta=$fila[idReceta]&&nombre=$fila[nombreReceta]>$fila[nombreReceta]</td>";
					echo "<td><a href=mod_receta.php?nombreReceta=$fila[idReceta]> Modificar</a></td>";
					echo "<td><a href=bor_receta.php?nombreReceta=$fila[idReceta]> Borrar</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		
		
	}
	
	
	
	
	
}else{
	
	echo "No hay conexion";
	
	
}





?>

