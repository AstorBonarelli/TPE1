<?php

require_once 'app/models/categorias.model.php';
require_once 'app/views/categorias.view.php';

class CategoriasController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new CategoriasModel();
        $this->view = new CategoriasView();
    }

    // Mostrar todas las categorías
    public function showCategorias() {
        $categorias = $this->model->getCategorias();
        if ($categorias === null) {
            echo "No se encontraron categorías.";
            return;
        }
        $this->view->mostrarCategorias($categorias, 'categorias');
    }

    // Mostrar detalle de una vela por id
    function showDetalleCat($idCategoria) {
        $cat = $this->model->getCatById($idCategoria);  
        if ($cat) {
            $this->view->mostrarDetalleCategoria($cat, 'detalle-categoria'); 
        } else {
            echo "No encontrado";
        }
    }

    // Editar producto
    public function editarCategoria($idCat) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre_categoria'];
            $imagen = $_POST['imagen-categoria'];
            if ($this->model->editarCategoria($idCat, $nombre, $imagen)) {
                header("Location: " . BASE_URL . "categorias");
                exit;
            } else {
                echo "No se pudo guardar la categoría.";
            }
        } else {
            $cat = $this->model->getCatById($idCat);
            $this->view->mostrarDetalleCategoria($cat, 'editar-categoria');
        }
    }

    // Método para agregar categoría
    public function agregarCategoria() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre_categoria'];
            $imagen = $_POST['imagen-categoria'];

            if ($this->model->crearCategoria($nombre, $imagen)) {
                header("Location: " . BASE_URL . "categorias"); 
                exit;
            } else {
                echo "No se pudo guardar la nueva categoría.";
            }
        } else {
            $this->view->mostrarFormularioAgregarCategoria(); 
        }
    }

    // Eliminar producto
    public function eliminarCategoria($idCat) {
        if ($this->model->deleteCategoria($idCat)) {
            header("Location: " . BASE_URL . "categorias");
            exit;
        } else {
            echo "No se pudo eliminar la categoría.";
        }
    }
}
