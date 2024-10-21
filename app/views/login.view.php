<?php
require_once 'libs/libs/Smarty.class.php';

class LoginView {

    private $basehref;
    private $smarty;


    public function __construct(){
        $this->smarty = new Smarty\Smarty();

        $this->basehref = '//'.$_SERVER['SERVER_NAME'] 
            .dirname($_SERVER['PHP_SELF']).'/';     
    }

    public function mostrarFormLogin($error = "", $username = null) {
        $this->smarty->assign("basehref", $this->basehref);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('username', $username);  
        $this->smarty->display('login.tpl');
    }
    
}

