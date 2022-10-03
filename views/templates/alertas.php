<?php
foreach($alertas as $key=>$alerta){
    foreach($alerta as $mensaje){

    


?>

<div class="alerta alerta--<?php echo $key?>"><?php echo $mensaje?></div>


<?php
    }  
}
