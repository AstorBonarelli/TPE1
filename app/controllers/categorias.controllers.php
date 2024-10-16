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

    public function showCategorias() {
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias, 'categorias');
    }
}
