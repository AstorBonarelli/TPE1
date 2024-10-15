<?php

require_once 'libs/smarty/libs/Smarty.class.php';

class VelasView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty\Smarty;  
    }

    function mostrarVelas($velas){
        $this->smarty->assign('velas', $velas); 
        $this->smarty->display('velas.tpl');    
    }
}

?>
