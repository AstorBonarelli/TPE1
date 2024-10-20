<?php

require_once 'libs/libs/Smarty.class.php';

class CategoriasView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty\Smarty();
    }

    // Mostrar todas las categorías
    public function mostrarCategorias($categorias, $action) {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('action', $action);
        $this->smarty->display('categorias.tpl');
    }

    // Mostrar detalle de una categoría
    public function mostrarDetalleCategoria($categoria, $action) {
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('action', $action);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('detalleCategoria.tpl');
    }

    // Mostrar formulario de agregar categoría
    public function mostrarFormularioAgregarCategoria() {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('agregarCategoria.tpl');
    }
}

