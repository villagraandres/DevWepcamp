<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function pagina_actual($path){
    return str_contains($_SERVER['REQUEST_URI']  ,$path) ? true : false;
}

function isAuth() : bool{
    session_start();
    return isset($_SESSION['nombre']) && !empty($_SESSION);
}

function isAdmin() :bool{
    session_start();
   
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}
