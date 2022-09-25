<?php

namespace MVC;

class Router
{
    public array $rutasGet = [];
    public array $rutasPost = [];

    public function get($url, $fn)
    {
        $this->rutasGet[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->rutasPost[$url] = $fn;
    }

    public function comprobarRutas()
    {
  
        $currentUrl = ($_SERVER['REQUEST_URI'] === '') ? '/' :  $_SERVER['REQUEST_URI'] ;
        $method = $_SERVER['REQUEST_METHOD'];

        $splitURL = explode('?', $currentUrl);
        // debuguear($splitURL);
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->rutasGet[$splitURL[0]] ?? null; //$splitURL[0] contiene la URL 
        } else {
            $fn = $this->rutasPost[$splitURL[0]] ?? null;
        }
       

        

        if ( $fn ) {
            // Call user fn va a llamar una función cuando no sabemos cual sera
            call_user_func($fn, $this); // This es para pasar argumentos
        } else {
            echo "Página No Encontrada o Ruta no válida";
          
        }

    }

    public function render($view, $datos = [])
    {
        foreach ($datos as $key => $value) {
            $$key = $value; 
        }

        ob_start(); 

        include_once __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean(); // Limpia el Buffer

        include_once __DIR__ . '/views/layout.php';
    }
}
