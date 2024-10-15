<?php

require_once 'app/models/velas.model.php';
require_once 'app/views/velas.view.php';

class VelasController{

    private $model;
    private $view;

    public function __construct() {
        $this->model = new VelasModel();
        $this->view = new VelasView();
    }

    function showVelas(){
        // Pedir al modelo todas las equipos
         $velas =  $this->model->getVelas();

        // Pasarle a la vista las equpos
         $this->view->mostrarVelas($velas);
    }


}
?> 