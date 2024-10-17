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

    function showVelas($categoriaID = null) {
        $categorias = $this->categoriasModel->getCategorias();
        if ($categoriaID) {
            $velas = $this->velasModel->getVelasByCategory($categoriaID);
        } else {
            $velas = $this->velasModel->getVelas();
        }
        $this->view->mostrarVelas($velas, $categorias, $categoriaID, 'velas');
    }
}
