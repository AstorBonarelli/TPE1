<?php

require_once 'app/controllers/velas.controllers.php';
require_once 'app/controllers/categorias.controllers.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  
}

$params = explode('/', $action); 

$velasController = new VelasController();
$categoriasController = new CategoriasController(); // Instanciar el controlador de categorías
    
switch ($params[0]) {
    case 'inicio':
        $velasController->showVelas();
        break;
    case 'velas':
        $velasController->showVelas(); 
        break;
    case 'categorias': 
        $categoriasController->showCategorias();
        break;
    default:
        echo "404";
        break;
}
