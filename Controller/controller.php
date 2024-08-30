<?php

require "Model/model.php";
require "View/view.php";

class Controller{

    public function __construct(){
        $this->model = new Model();]
        $this->view = new View();
    }

    public function index(){
        $modelo = new Model();
        $visao = new View();

        $string = $modelo->get_string();
        $visao->renderizador($string);
    }

    public function form(){
        $modelo = new Model();
        $visao = new View();
        $string = $modelo->get_get_form();
        $visao->renderiza_form_login($string);
    }
}
?>