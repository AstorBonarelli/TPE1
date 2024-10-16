<?php

require_once 'libs/libs/Smarty.class.php';

class CategoriasView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty\Smarty();
    }

    public function mostrarCategorias($categorias, $action) {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('action', $action);
        $this->smarty->display('categorias.tpl');
    }
}
