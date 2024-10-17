<?php

require_once 'libs/libs/Smarty.class.php';

class VelasView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty\Smarty;  
    }

    function mostrarVelas($velas,$categorias, $categoriaID,$action) {
        $this->smarty->assign('velas', $velas); 
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('categoriaID', $categoriaID);
        $this->smarty->assign('action', $action);
        $this->smarty->display('velas.tpl');
    }
}
