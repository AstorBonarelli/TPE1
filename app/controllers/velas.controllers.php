<?php

require_once 'app/models/velas.model.php';
require_once 'app/models/categorias.model.php';
require_once 'app/views/velas.view.php';

class VelasController {
    private $velasModel;
    private $categoriasModel;
    private $view;

    public function __construct() {
        $this->velasModel = new VelasModel();
        $this->categoriasModel = new CategoriasModel();  
        $this->view = new VelasView();
    }

    //Muestro todas las velas, si se le pasa una categoria muestra todas las velas de esa categoria
    function showVelas($categoriaID = null) {
        $categorias = $this->categoriasModel->getCategorias();
        if ($categoriaID) {
            $velas = $this->velasModel->getVelasByCategory($categoriaID);
        } else {
            $velas = $this->velasModel->getVelas();
        }
        $this->view->mostrarVelas($velas, $categorias, $categoriaID, 'velas');
    }

    //Muestro detalle de una vela por id
    function showDetalleVela($idProducto) {
        $vela = $this->velasModel->getVelaById($idProducto);  
        $categorias = $this->categoriasModel->getCategorias(); 
        if ($vela) {
            $this->view->mostrarDetalleVela($vela, $categorias, 'detalle'); 
        } else {
            echo "No encontrado";
        }
    }


    //editar producto
    public function editarProducto($idProducto) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre_producto'];
            $precio = $_POST['precio'];
            $categoriaID = $_POST['id_categoria'];
            if ($this->velasModel->editProducto($idProducto, $nombre, $precio, $categoriaID)) {
                header("Location: " . BASE_URL . "velas");
                exit;
            } else {
                echo "No se pudo guardar producto.";
            }
        } else {
            $vela = $this->velasModel->getVelaById($idProducto);
            $categorias = $this->categoriasModel->getCategorias(); 
            $this->view->mostrarDetalleVela($vela, $categorias, 'editar');
        }
    }

    //agregarProducto
    public function agregarProducto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre_producto'];
            $precio = $_POST['precio'];
            $categoriaID = $_POST['id_categoria'];
    
            if ($this->velasModel->crearProducto($nombre, $precio, $categoriaID)) {
                header("Location: " . BASE_URL . "velas");
                exit;
            } else {
                echo "No se pudo guardar el nuevo producto.";
            }
        } else {
            $categorias = $this->categoriasModel->getCategorias(); 
            $this->view->mostrarFormularioAgregar($categorias);
        }
    }

    //eliminar producto
    public function eliminarProducto($idProducto) {
        if ($this->velasModel->deleteProducto($idProducto)) {
            header("Location: " . BASE_URL . "velas");
            exit;
        } else {
            echo "No se pudo eliminar el producto.";
        }
    }
    
    

    
}
