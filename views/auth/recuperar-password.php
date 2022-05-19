<h1 class="nombre-pagina">Recuperar pagina</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>

<?php  include_once __DIR__."/../templates/alertas.php"; ?> 


<?php if($error) return;  ?>
<form class="formulario" method="POST">

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu Nuevo Password">
    </div>
    <input type="submit" class="boton" value="Guardar Nueva Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesíon</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta</a>
</div>