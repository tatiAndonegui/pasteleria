<?php
include_once "header.php"
?>
<!-- header -->
<main>


<section class="mt-3 mb-3">

<h2 class="mb-5">Contactanos y participa de nuestro concurso mensual!!</h2>

<div class="row">
    
    <div class="col-6 alinear-imagen">
        <img src="img/muffins.jpg" class="img-fluid" height="553" width="340"
            alt="muffins de glaseado rosa emplatados">
    </div>

<div class="col-6">
        <form action="enviado.php" method="post" class="ml-2" enctype= "multipart/form-data">

            <div class="row">
                <label class="col-12" for="nombre">Nombre</label>
                <input class="mb-3 col-6" type="text" id="nombre" name="nombre" title="nombre"
                placeholder="ingrese su nombre aqui" required>
            </div>
            
            
            <div class="row">
                <label class="col-12" for="apellido">Apellido</label>
                <input class="mb-3 col-6" type="text" id="apellido" name="apellido" title="apellido"
                placeholder="ingrese su apellido aqui" required>
            </div>

            <div class="row">
                <label class="col-12" for="mail">Email</label>
                <input class="mb-3 col-6" type="email" id="mail" name="mail" placeholder="ingrese su email aqui" required>
            </div>
            
            <div class="row">
                <label class="col-12" for="consulta">Consulta</label>
                <textarea class="mb-3 col-6" name="consulta" id="consulta" cols="30" rows="5" maxlength="150"
                placeholder="Escribe aqui tu consulta"required></textarea>
            </div>

            <div class="row">
                <label class="col-12" for="foto">Subi la foto de tu ultima receta y participa!</label>
                <input class="mb-3 col-6" accept="image/.jpg" type="file" id="foto" name="foto">
            </div>

            <div class="row">
                <label class="col-12" for="acepto"> 
                <input type="checkbox" id="acepto" name="acepto" value="Si acepto los terminos y condiciones"> Acepto Terminos y Condiciones </label>
            </div>

            <div class="row contedor-boton-enviar">
                <input class="col-6 btn btn-outline boton-enviar" type="submit" id="subir" value="Enviar" disabled= "disabled"/>
            </div>

            <script type="text/javascript">

                var acepto = document.getElementById('acepto');

                var subir = document.getElementById('subir'); 

                acepto.onclick =function () {
                    if (acepto.checked){
                        subir.disabled = false;
                    }else {
                        subir.disabled  = true;
                    }
                }
            </script> 
            
        </form>
</div>
</div>

</section>
</main>
<!-- footer -->
<?php
include_once "footer.php"
?>