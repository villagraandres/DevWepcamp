<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Personal</legend>
    <div class="formulario__campo">
        <label for="nombre" class="formulario__label">Nombre </label>
        <input type="text" class="formulario__input" id="nombre" name="nombre" placeholder="Nombre del Ponente" value="<?php echo $ponente->nombre ?? ''?>">
    </div>

    <div class="formulario__campo">
        <label for="apellido" class="formulario__label">Apellido </label>
        <input type="text" class="formulario__input" id="apellido" name="apellido" placeholder="Apellido del Ponente" value="<?php echo $ponente->apellido ?? ''?>">
    </div>

    <div class="formulario__campo">
        <label for="ciudad" class="formulario__label">Ciudad </label>
        <input type="text" class="formulario__input" id="ciudad" name="ciudad" placeholder="Ciudad del Ponente" value="<?php echo $ponente->ciudad ?? ''?>">

    </div>

    <div class="formulario__campo">
        <label for="pais" class="formulario__label">Pais </label>
        <input type="text" class="formulario__input" id="pais" name="pais" placeholder="Pais del Ponente" value="<?php echo $ponente->pais ?? ''?>">
    </div>

    <div class="formulario__campo">
        <label for="imagen" class="formulario__label">Imagen </label>
        <input type="file" class="formulario__input formulario__input--file" id="imagen" name="imagen" >
    </div>
</fieldset>

<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra</legend>

    <div class="formulario__campo">
        <label for="tags_input" class="formulario__label">Areas de Experiencia (separadas por coma) </label>
        <input type="text" class="formulario__input" id="tags_input"  placeholder="Ej. Node.js, PHP, JS, Mongo, TypeScript" >


     
       <div id="tags" class="formulario__listado"> </div>
    <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ''; ?>"> 

    </div>

    </fieldset>

    
<fieldset class="formulario__fieldset">
    <legend class="formulario__legend">Información Extra (URL)</legend>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-facebook"></i>
        </div>
         <input type="text" class="formulario__input--sociales" name="redes[facebook]" placeholder="Facebook" value="<?php echo $ponente->facebook ?? ''?>">

     </div>
       
    </div>

    
    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-twitter"></i>
        </div>
         <input type="text" class="formulario__input--sociales" name="redes[twitter]" placeholder="Twitter" value="<?php echo $ponente->twitter ?? ''?>">

     </div>
     </div>
     
    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-youtube"></i>
        </div>
         <input type="text" class="formulario__input--sociales" name="redes[youtube]" placeholder="Youtube" value="<?php echo $ponente->youtube ?? ''?>">

     </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-instagram"></i>
        </div>
         <input type="text" class="formulario__input--sociales" name="redes[instagram]" placeholder="Instagram" value="<?php echo $ponente->instagram ?? ''?>">

     </div>
    </div>

    <div class="formulario__campo">
       <div class="formulario__contenedor-icono">
        <div class="formulario__icono">
            <i class="fa-brands fa-tiktok"></i>
        </div>
         <input type="text" class="formulario__input--sociales" name="redes[tiktok]" placeholder="Tiktok" value="<?php echo $ponente->tiktok ?? ''?>">

     </div>
    </div>


       
    
    </fieldset>  