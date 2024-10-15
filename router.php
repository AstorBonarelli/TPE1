<?php

require_once 'app/controllers/velas.controllers.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  

}

$params = explode('/', $action); 

$velasController = new VelasController();
    
switch ($params[0]) {
    case 'inicio':
        $velasController->showVelas();
        break;
    default:
        echo "404";
        break;
}