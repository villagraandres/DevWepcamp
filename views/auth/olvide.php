
<?php
  include_once __DIR__ .'/../templates/header2.php';
  ?>
<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebcamp</p>

    
    <?php
    require_once __DIR__. '/../templates/alertas.php';
    ?>

    <form class="formulario" method="POST" action="/olvide" >
       
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input type="email" class="formulario__input" placeholder="ejemplo@ejemplo.com" id="email" name="email">
        </div>

        <input type="submit" class="formulario__submit"  value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Incia Sesión</a>
        <a href="/registro" class="acciones__enlace">Aun no tienes una cuenta? Crea una!</a>
    </div>
</main>