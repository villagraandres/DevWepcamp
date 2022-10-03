
<?php
  include_once __DIR__ .'/../templates/barra.php';
  ?>
<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__texto">Coloca tu nuevo Password</p>

    
    <?php
    require_once __DIR__. '/../templates/alertas.php';
    ?>

    <?php if($token_valido){?>

    <form class="formulario" method="POST" >
       
        <div class="formulario__campo">
            <label class="formulario__label" for="password">Nuevo Password</label>
            <input type="password" class="formulario__input" id="password" name="password">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password2">Confirmar Password</label>
            <input type="password" class="formulario__input" id="password2" name="password2">
        </div>


        <input type="submit" class="formulario__submit"  value="Guardar Password">
    </form>

    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Incia Sesión</a>
        <a href="/registro" class="acciones__enlace">Aun no tienes una cuenta? Crea una!</a>
    </div>
</main>