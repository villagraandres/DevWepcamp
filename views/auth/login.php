<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebCamp</p>

    <form class="formulario" >
        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input type="email" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input type="password" class="formulario__input"  id="password" name="password">
        </div>

        <input type="submit" class="formulario__submit"  value="Iniciar Sesión">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">Aun no tienes una cuenta? Crea una!</a>
        <a href="/olvide" class="acciones__enlace">Olvidaste tu contraseña?</a>
    </div>
</main>



