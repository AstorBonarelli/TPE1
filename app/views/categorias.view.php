<?php

require_once 'libs/libs/Smarty.class.php';

class CategoriasView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty\Smarty();
    }

    //aca le asigno los datos que me paso el controller en cada template de las pantallas asi pueden usar esos datos para crear las tablas y demas

    public function mostrarCategorias($categorias, $action) {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('action', $action);
        $this->smarty->display('categorias.tpl');
    }

    public function mostrarDetalleCategoria($categoria, $action) {
        $this->smarty->assign('categoria', $categoria);
        $this->smarty->assign('action', $action);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('detalleCategoria.tpl');
    }

    public function mostrarFormularioAgregarCategoria() {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('agregarCategoria.tpl');
    }
}

