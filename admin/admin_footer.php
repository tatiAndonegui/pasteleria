<footer>
	
	<div class="menu-footer">
	<?php
		$menu = array();
		$menu['Home'] = "../index.php" ; 
		$menu['Quienes Somos'] = "../quienessomos.php"; 
        $menu['Contacto'] = "../contacto.php";
        $menu['Iniciar Sesión'] = "../login/index.php";
		$menu['Instagram'] = "https://www.instagram.com/tati.cocinerita";
		
	
		echo "<ul>";
		foreach ($menu as $botones=>$link){
			
			echo "<li class='lista'><a href=$link>$botones</a></li>";
		}
		echo "</ul>";
		?>
		</div>
		

</footer>


    <!-- Librerias -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>




</html>