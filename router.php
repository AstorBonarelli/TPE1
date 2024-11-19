<?php

session_start();  

require_once 'app/controllers/velas.controllers.php';
require_once 'app/controllers/categorias.controllers.php';
require_once 'app/controllers/login.controllers.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  
}

$params = explode('/', $action); 

$velasController = new VelasController();
$categoriasController = new CategoriasController();
$loginController = new LoginController();

switch ($params[0]) {
    case '':
        $categoriaID = isset($_GET['categoria']) ? $_GET['categoria'] : null;
        $velasController->showVelas($categoriaID); 
        break;
    case 'velas':
        $categoriaID = isset($_GET['categoria']) ? $_GET['categoria'] : null;
        $velasController->showVelas($categoriaID); 
        break;

    // Rutas de productos
    case 'detalle':
        if (isset($params[1]) && is_numeric($params[1])) {
            $velasController->showDetalleVela($params[1]);
        } else {
            echo "ID de producto no encontrado o inválido";
        }
        break;
    case 'editar':
        if (isset($params[1]) && is_numeric($params[1])) {
            $velasController->editarProducto($params[1]);
        } else {
            echo "ID de producto no encontrado o inválido";
        }
        break;
    case 'eliminar':
        if (isset($params[1]) && is_numeric($params[1])) {
            $velasController->eliminarProducto($params[1]);
        } else {
            echo "ID de producto no encontrado o inválido";
        }
        break;
    case 'agregar':
        $velasController->agregarProducto();
        break;

    // Rutas de categorías
    case 'categorias':
        $categoriasController->showCategorias();
        break;
    case 'agregar-categoria':
        $categoriasController->agregarCategoria();
        break;
    case 'detalle-categoria':
        if (isset($params[1]) && is_numeric($params[1])) {
            $categoriasController->showDetalleCat($params[1]); 
        } else {
            echo "ID de categoría no encontrado o inválido";
        }
        break;        
    case 'eliminar-categoria':
        if (isset($params[1]) && is_numeric($params[1])) {
            $categoriasController->eliminarCategoria($params[1]);
        } else {
            echo "ID de categoría no encontrado o inválido";
        }
        break;

    case 'login': 
        $loginController->mostrarLogin();
        break;
    case 'verify': 
        $loginController->verify();
        break;
    case 'logout':
        $loginController->logout();
        break;

    default:
        echo "404 - Página no encontrada";
        break;
}
