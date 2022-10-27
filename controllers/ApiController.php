<?php

namespace Controllers;

use Model\Ponente;

class ApiController{


    public static function eliminar(){

      
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            
          $id=$_POST['id'];
          $ponente=Ponente::where('id',$id);
          $ponente->eliminar();
          echo json_encode(['resultado'=>$_POST]);
        }
      }
      
}