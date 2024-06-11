<?php
include_once "login_header.php";

session_start( );
?>
<div class="formulario">
<form method="post" action="alta.php">

<h1>Registrate</h1>

<div class="mb-3">
<label for="nombre">Nombre</label>
    <input type="nombre" placeholder="ingresa tu nombre" name="nombre">
</div>

<div class="mb-3">
<label for="apellido">Apellido</label>
    <input type="apellido" placeholder="ingresa tu apellido" name="apellido">
</div>

<div class="mb-3">
<label for="email">Email</label>
<input type="email" placeholder="ingresa tu email" name="email">
</div>

<div class="mb-3">
<label for="clave">Contraseña</label>
    <input type="password" placeholder="ingresa tu clave" name="clave">
</div>

<div>
<a href="index.php">¿Ya tienes cuenta? Inicia Sesión</a>
</div>
<div>
<button type="submit">Entrar!</button>
</div>

</form>

<?php
    include_once "login_footer.php";
    ?>

