<?php
include_once "login_header.php";

session_start();
?>
<!-- header -->

<div class="registro-con-exito">

<?php
if( isset($_GET['alta'])){
    echo '<strong style="color: green">Registro con exito! Inicia sesion</strong>';
}
?>
</div>
<div class="contra-incorrecta">
<?php
if( isset($_GET['login'])){
	echo '<strong style="color: red">El correo o contraseña son incorrectos. Vuelve a intentarlo.</strong>';
}
?>
<form class="formulario" method="post" action="login.php" >

<h1>Inicia Sesión</h1>

<div class="mb-3">
<label for="email">Email</label>
<input type="email" placeholder="ingresa tu email" name="email">
</div>

<div class="mb-3">
<label for="clave">Contraseña</label>
    <input type="password" placeholder="ingresa tu clave" name="clave">
</div>

<div>
<a href="alta-usuario.php">¿No tenes cuenta? Registrate</a>
</div>
<div>
<button type="submit">Entrar!</button>
</div>

</form>
<!-- footer -->
<?php
include_once "login_footer.php"
?>