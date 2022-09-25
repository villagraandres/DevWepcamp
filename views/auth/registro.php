

<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo?></h2>
    <p class="auth__texto">Inicia Sesión en DevWebcamp</p>

    <form class="formulario" >
        <div class="formulario__campo">
            <label class="formulario__label" for="nombre">Nombre</label>
            <input type="text" class="formulario__input" placeholder="Tu Nombre" id="nombre" name="nombre">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="apellido">Apellido</label>
            <input type="text" class="formulario__input" placeholder="Tu Apellido" id="apellido" name="apellido">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="email">Email</label>
            <input type="email" class="formulario__input" placeholder="ejemplo@ejemplo.com" id="email" name="email">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password">Password</label>
            <input type="password" class="formulario__input"  id="password" name="password">
        </div>

        <div class="formulario__campo">
            <label class="formulario__label" for="password2">Confirmar Password</label>
            <input type="password" class="formulario__input"  id="password2" name="password2">
        </div>

        <input type="submit" class="formulario__submit"  value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Ya tienes cuenta? Incia Sesión</a>
        <a href="/registro" class="acciones__enlace">Olvidaste tu contraseña?</a>
    </div>
</main>