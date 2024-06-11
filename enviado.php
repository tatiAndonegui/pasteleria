<?php
include_once "header.php"
?>
<!-- header -->
<main class="main-formulario">


<section class="mt-3 mb-3">

<h2 class="letra-verde">Tu formulario ha sido enviado</h2>
    <p class="agradecimiento">Gracias por contactarnos!</p>
    <div class="centrado-formulario">
        <ul class="formulario">
            <?php
                if(isset($_POST['nombre'])) {
                $nombre=$_POST['nombre'];
                echo "<li> Nombre: <span class='datos'>$nombre</span> </li>";
                }

                if(isset($_POST['apellido'])) {
                $apellido=$_POST['apellido'];
                echo "<li> Apellido:<span class='datos'> $apellido</span> </li>";
                }
                
                if(isset($_POST['mail'])) {
                $mail=$_POST['mail'];
                echo "<li> Email:<span class='datos'> $mail </span></li>";
                }
                
                if(isset($_POST['consulta'])) {
                    $consulta=$_POST['consulta'];
                    echo "<li> Consulta: <span class='datos'> $consulta </span> </li>";
                }
                
                move_uploaded_file ($_FILES ["foto"] ["tmp_name"], "recetas/" .$_FILES ["foto"]     ["name"]);
                if ($_FILES["foto"]["size"]!=0){
                    echo "<li> Gracias por subir tu receta, esperamos que quede seleccionada! </li>";
                }else{  
                    echo "<li> Lamentamos que no participes con tu receta, no olvides que puedes subirla cuando quieras! </li>";
                }
                
                if (isset($_POST['acepto'])) {
                $acepto=$_POST ['acepto'];
                echo "<li> $acepto </li>";
                }     
            ?>
        </ul>
    </div>

</section>
</main>
<!-- footer -->
<?php
include_once "footer.php"
?>