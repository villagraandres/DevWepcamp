<?php
foreach($alertas as $key=>$alerta){
    foreach($alerta as $mensaje){

    


?>

<div class="alerta alerta--error <?php echo $key?>"><?php echo $mensaje?></div>


<?php
    }  
}
