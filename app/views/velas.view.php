<?php

require_once 'libs/libs/Smarty.class.php';

class VelasView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty\Smarty;  
    }

    function mostrarVelas($velas, $action) {
        $this->smarty->assign('velas', $velas); 
        $this->smarty->assign('action', $action);
        $this->smarty->display('velas.tpl');
    }
}
